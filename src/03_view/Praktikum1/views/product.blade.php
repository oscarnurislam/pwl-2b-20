<html>

<head>
    <title> Product @yield('title')</title>
</head>

<body>
    @section('sidebar')
    Ini adalah Halaman product.
    @show
    <div class="container">
        @yield('content')
        <h1 style="background: blue; color: yellow; text-align:center">Hello, namaku {{ $nama }}</h1>
    <p style="background: blue; color: yellow; text-align:center">Status saya {{$status}}</p>
    </div>
    
</body>

</html>