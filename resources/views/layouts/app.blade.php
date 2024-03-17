<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi aplicación')</title>
    <!-- Agrega tus estilos CSS aquí -->
</head>
<body>
    <nav>
        <!-- Aquí puedes definir tu barra de navegación -->
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="{{ route('superheroes.index') }}">Superhéroes</a></li>
            <!-- Puedes agregar más enlaces de navegación aquí -->
        </ul>
    </nav>

    <div>
        @yield('content')
    </div>

    <!-- Agrega tus scripts JS aquí -->
</body>
</html>
