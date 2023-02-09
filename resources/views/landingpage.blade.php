<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Landing Page</title>
</head>
<body>
    <header class="d-flex bg-success justify-content-between align-items-center text-center">
        <h1 class="col-md-3 p-4">Amazing E-Grocery</h1>
        <div class="col-md-3">
            <a href="/Register" class="btn btn-warning">Register</a>
            <a href="/Login" class="btn btn-warning">Login</a>
        </div>
    </header>
        <div class="d-flex align-items-center justify-content-center" style="height: 500px; width: 500px; border-radius: 50%; background-color:white; border: solid 10px #ff0; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <div class="text-center">
                {{__('localization.title')}}
            </div>
        </div>
</body>

<footer class="container-fluid bg-success justify-content text-center fixed-bottom">
    <p class="m-0 p-3">© Amazing E-Grocery 2023</p>

</footer>
</html>
