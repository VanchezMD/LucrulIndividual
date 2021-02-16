<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Navbar</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    <div class="row">
        <div class="col-md-4">
            <div class="menu">
                <img src="{{asset('image/sistem/icon_menu.png')}}" alt="">
            </div>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
</div>
    <div class="container">
        @yield('content')
    </div>
    <!-- Scripturi -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
