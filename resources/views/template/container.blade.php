<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Email</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Laravel Mail</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Send Mail</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mail-data">Send Mail with Data</a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
<script src="{{asset('script/jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('script/bootstrap.min.js')}}"></script>
</body>
</html>