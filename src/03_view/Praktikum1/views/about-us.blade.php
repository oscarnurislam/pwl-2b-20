<html>

<head>
    <title>About-Us @yield('title')</title>
</head>
<body>
@section('sidebar')
    Ini adalah Halaman About-us.
    @show
    <div class="container">
        @yield('content')
        <h1 style="background: red; color: green; text-align:center">Hallo Namaku Oscar Nur Islam</h1>
        <p style="background: red; color: green; text-align:center">Aku kuliah di Polinema malang</p>
        <p style="background: red; color: green; text-align:center">Dan sekarang sudah semester 4</p>
    </div>
</body>

</html>