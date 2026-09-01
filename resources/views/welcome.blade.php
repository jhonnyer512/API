<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mi Aplicación</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header class="navbar">

        <div class="logo">
            MiApp
        </div>

        <nav class="nav-buttons">
            <a href="/register" class="btn btn-register">
                Register
            </a>

            <a href="/login" class="btn btn-login">
                Login
            </a>
        </nav>

    </header>


    <main class="hero">

        <div class="hero-content">

            <p class="welcome-text">
                BIENVENIDO
            </p>

            <h1>
                Una nueva forma de
                <span>hacer las cosas.</span>
            </h1>

            <p class="description">
                Bienvenido a nuestra plataforma. 
                Crea tu cuenta o inicia sesión para comenzar
                a disfrutar de todas las funcionalidades.
            </p>

            <div class="hero-buttons">

                <a href="/register" class="main-button">
                    Comenzar
                </a>

                <a href="/login" class="secondary-button">
                    Ya tengo una cuenta
                </a>

            </div>

        </div>

        <div class="hero-decoration">

            <div class="circle circle-one"></div>
            <div class="circle circle-two"></div>

            <div class="card">
                <div class="card-icon">
                    ✦
                </div>

                <h3>
                    Bienvenido
                </h3>

                <p>
                    Tu plataforma está lista.
                </p>
            </div>

        </div>

    </main>


    <footer>
        <p>
            © 2026 MiApp. Todos los derechos reservados.
        </p>
    </footer>


    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>