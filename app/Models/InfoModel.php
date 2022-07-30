<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoModel extends Model
{
    use HasFactory;

    protected $table='information';

      protected $filleab=[
        'id',
        'first_name',
        'last_name',
        'email',
        'education',
        'pass_out'
      ];

}
