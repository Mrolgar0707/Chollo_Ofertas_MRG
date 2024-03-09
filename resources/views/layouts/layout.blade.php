<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chollo Ofertas - @yield('title')</title>
    <!-- Agregar enlaces a los estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-light">
        <div class="container py-3 d-flex justify-content-between align-items-center">
            <img src="{{ asset('img/logo.jpg') }}" alt="CholloOfertas" class="logo">
            <h1 class="m-0">Chollo Ofertas</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="{{ route('nuevos') }}" class="nav-link">Nuevos</a></li>
                    <li class="nav-item"><a href="{{ route('destacados') }}" class="nav-link">Destacados</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container py-4">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p class="m-0">&copy; CholloOfertas {{ date('Y') }}</p>
    </footer>

    <!-- Agregar script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
