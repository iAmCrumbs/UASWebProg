<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<header class="d-flex bg-success justify-content-between align-items-center text-center">
    <h1 class=" col-md-3 p-4">Amazing E-Grocery</h1>
    <div class="col-md-3">
        <a href="/LogOut" class="btn btn-warning">Log Out</a>
    </div>
</header>
<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardropdown" aria-controls="navbardropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbardropdown">
            <ul class="navbar-nav">
               @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/Cart">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/Profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/language/ID">ID</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/language/EN">EN</a>
                </li>

                @endif
                @if (Auth::check())

                @if (Auth::User()->roles_id == 2)

                <li class="nav-item">
                    <a class="nav-link text-dark" href="/EditAccount">Account Management</a>
                </li>

                @endif
                @endif




    </div>

</nav>
<body>

    @yield('content')
</body>
<footer class="container-fluid bg-success justify-content text-center fixed-bottom">
    <p class="m-0 p-3">© Amazing E-Grocery 2023</p>
</footer>
</html>
