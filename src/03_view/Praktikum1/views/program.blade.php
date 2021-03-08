<html>

<head>
    <title> Product @yield('title')</title>
</head>

<body>
    @section('sidebar')
    Ini adalah Halaman Program.
    @show
    <div class="container">
        @yield('content')
        <h1 style="background: red; color: green; text-align:center">Hello, Disini kita ada banyak artikel</h1>
        <p style="background: red; color: green; text-align:center">Dan ini merupakan artikel {{$project}}</p>
    </div>
    
</body>

</html>