<?php

namespace App\Http\Controllers;
use Google\Client;
use App\Http\Controllers\Exception;
use Google\Service\Sheets;
use Google\Service\Sheets\ValueRange;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\InfoModel;
use Illuminate\Support\Arr;

class GooglesheetController extends Controller
{

public function getClient()
{
    $client = new Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes('https://www.googleapis.com/auth/spreadsheets');
    $client->setAuthConfig('light-cycle-345106-f4723b1d198b.json');
    $client->setAccessType('online');
    $client->setRedirectUri('http://127.0.0.1:8000/read');

    $client->setPrompt('select_account consent');


    return $client;
}

    public function readsheet()
    {
        // dd('hi');

        // Get the API client and construct the service object.
       $client =$this->getClient();
        $service =new Sheets($client);

    $spreadsheetId = '1uRBLCicSBiLRqAcAZdhwpiNahSEXvwbYQ4wddqU5rYU';
    $range = 'Sheet2!A:Z';
    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $values = $response->getValues();

    $datadelet=InfoModel::where('id','!=','null')->delete();

        // dd($value);
            foreach ($values as $row) {
            // dd($row);
            $data=[
            'first_name'=>$row[0] ,
            'last_name'=>$row[1],
            'email'=>$row[2],
            'education'=>$row[3],
            'pass_out'=>$row[4]
            ];
            // dd($data);
            $info=InfoModel::insert($data);
            //   dd($info);
        }
        $data=InfoModel::paginate(10);
        // dd($data);
         return view('show')->with(['info' => $data]);
    }

    public function viewsheetData(){
        $data=InfoModel::paginate(10);
        // dd($data);
         return view('show')->with(['info' => $data]);
    }
    public function addData(){
         return view('add');
    }
    public function addsheetData(Request $req){

        // dd($req->all());
        // Get the API client and construct the service object.
        $client =$this->getClient();
        $service =new Sheets($client);
        //  dd($service);
        $spreadsheetId = '1uRBLCicSBiLRqAcAZdhwpiNahSEXvwbYQ4wddqU5rYU';
        $range = 'Sheet2!A:Z';
       
        $values = [
           [  $req->first_name,
               $req->last_name,
               $req->email,
               $req->education,
               $req->pass_out,
           ],
        ];
        // dd($values);
        $body = new ValueRange([
            'values' => $values
        ]);
        // dd($body);
        $params = [
            'valueInputOption' => 'USER_ENTERED'
        ];

        $result = $service->spreadsheets_values->append($spreadsheetId, $range, $body,$params);
        //   dd($result->updates->updatedRows);
        // $data=$result->getUpdates()->getUpdatedCells();
        //  dd($data);
        if(isset($result->updates->updatedRows)){
        foreach ($values as $row) {
            // dd($row);
            $data=[
            'first_name'=>$row[0] ,
            'last_name'=>$row[1],
            'email'=>$row[2],
            'education'=>$row[3],
            'pass_out'=>$row[4]
            ];
            // dd($data);
            $info=InfoModel::insert($data);
            //   dd($info);
        }
    }
        $data=InfoModel::paginate(10);
        // dd($data);
         return view('show')->with(['info' => $data]);
    }
}
