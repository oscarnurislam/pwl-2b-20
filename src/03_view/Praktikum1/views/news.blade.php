<html>

<head>
    <title> News @yield('title')</title>
</head>

<body>
    @section('sidebar')
    Ini adalah Halaman News.
    @show
    <div class="container">
        @yield('content')
        <h1 style="background: blue; color: yellow; text-align:center">Hello, This is news</h1>
        <p style="background: blue; padding: 5px; color: yellow; text-align:center">Page news</p>
    </div>
    
</body>

</html>