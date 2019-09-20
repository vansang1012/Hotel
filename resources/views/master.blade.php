<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Laravel</title>

</head>
<body>
<div class="container-fluid"></div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="{{route('home')}}">Home</a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('employee.index')}}">Employee</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Group</a>
        </li>
    </ul>
    <div class="nav-item ml-auto">
        <form class="form-inline" action="{{route('employee.search')}}" method="get">
            @csrf
            <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
    </div>
</nav>
@yield('content')
</body>
</html>
