<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </head>
    <body class="bg-info">
        <div class="d-flex justify-content-center m-5  gap-3"  >

            <div class="card" style="width: 18rem;" >
                <div class="card-body ">
                <h5 class="card-title">Google sheets</h5>
                <h6 class="card-subtitle mb-2 text-muted">sheets Read</h6>
                <p class="card-text"></p>
                <a  href="{{route('read')}}" class="btn btn-primary">Read</a>

                </div>
            </div>
            <div class="card " style="width: 18rem;" >
                <div class="card-body ">
                <h5 class="card-title">Google sheets</h5>
                <h6 class="card-subtitle mb-2 text-muted">sheets Details</h6>
                <p class="card-text"></p>
                <a  href="{{route('show')}}" class="btn btn-primary">Show</a>

                </div>
            </div>
            <div class="card " style="width: 18rem;" >
                <div class="card-body ">
                <h5 class="card-title">Google sheets</h5>
                <h6 class="card-subtitle mb-2 text-muted">sheets Add</h6>
                <p class="card-text"></p>
                <a  href="{{route('add')}}" class="btn btn-primary">Add</a>
                </div>
            </div>

        </div>
   </body>


</html>
