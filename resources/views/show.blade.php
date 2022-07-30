<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </head>
    <body class="bg-info">
        <div class="mt-3 p-2 mx-5">
            <div class=" absolute d-flex justify-content-between mt-1 p-2 ">
                <div class=""><h4>Sheets Details</h4></div>
                {{ $info->links('pagination::bootstrap-4') }}
            </div>
        </div>
        <div class="d-flex justify-content-center w-75">
            <table class="card-body table table-hover text-center mx-5 px-5">
                <thead class="">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">email</th>
                        <th scope="col">pass_out</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($info as $value)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$value->first_name}}</td>
                            <td>{{$value->last_name}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->pass_out}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <div  class="d-flex justify-content-center text-danger">
                                    No data
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </body>


</html>
