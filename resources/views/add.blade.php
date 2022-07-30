<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </head>
    <body class="bg-info">

            <form action="{{route('addSave')}}"  method="post" class="row g-3 w-50 p-3 m-5 bg-light">
                @csrf
                    <h4 class="mx-4">Add Details</h4>

                    <div class="col-6 ">
                        <input type="text" class="form-control" name="first_name"required placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" name="last_name"  placeholder="Last name" aria-label="Last name">
                    </div>
                    <div class="col-6">
                        <input type="email" class="form-control" name="email" placeholder="email" aria-label="Email">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" name="education" placeholder="education" aria-label="Education">
                    </div>
                    <div class="col-6">
                        <input type="date" class="form-control" name="pass_out" placeholder="pass out Year" aria-label="pass out Year">
                    </div>
                    <div class="col-12 d-flex justify-content-center mb-3">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
            </form>


    </body>


</html>
