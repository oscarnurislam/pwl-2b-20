<html>

<head>
    <title> contact-us @yield('title')</title>
</head>

<body>
    @section('sidebar')
    Ini adalah Halaman contact-us.
    @show
    <div class="container">
        @yield('content')
    <p style="background: blue; padding: 5px; color: yellow; text-align:center">more information : {{$name}}</p>
   
    </div>
    
    
</body>

</html>