<!-- resources/views/layouts/layout.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chollo Ofertas - @yield('title')</title>
</head>
<body>
    <header>
        <div>
            <img src="ruta/a/tu/logo.png" alt="Logo del sitio">
            <h1>Chollo Ofertas</h1>
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Inicio</a></li>
                <li><a href="{{ route('nuevos') }}">Nuevos</a></li>
                <li><a href="{{ route('destacados') }}">Destacados</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; CholloOfertas {{ date('Y') }}</p>
    </footer>
</body>
</html>
