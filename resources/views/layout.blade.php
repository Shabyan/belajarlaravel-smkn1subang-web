<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE SMKN 1 SUBANG</title>
</head>
<body>
    <h1>WEBSITE SMKN 1 SUBANG | @yield('title')</h1>
     <nav>
    <ul>
        <li><a href="{{ url('home') }}">Home</a></li>
        <li><a href="{{ url('dataguru') }}">dataguru</a></li>
        <li><a href="{{ url('datakelas') }}">datakelas</a></li>
        <li><a href="{{ url('produksmk') }}">produksmk</a></li>
        <li><a href="{{ url('programcerenschool') }}">programcerenschool</a></li>
    </ul>    
     </nav>
<hr />
    <div>
        @yield('content')
    </div>
</body>
</html>