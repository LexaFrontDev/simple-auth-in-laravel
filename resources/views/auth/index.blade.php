<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>home</title>
</head>
<body class="bg-success">


<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card bg-dark">
            <div class="card-header bg-dark text-light d-flex">
                <h1>home</h1>
                <form action="{{ route('logout') }}" method="post" class="ms-auto">
                    @csrf
                    <button class="btn btn-danger mt-1">Logout</button>
                </form>
            </div>

            <div class="card-body bg-secondary">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-success">
                        You are logged in!
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>


</body>
</html>
