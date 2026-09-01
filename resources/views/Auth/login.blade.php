<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiApp - Login</title>

    <link rel="stylesheet" href="{{ asset('css/StyleLogin.css') }}">

    <!-- Fuente -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="logo">MiApp</div>

        <div class="nav-buttons">
            <button class="btn btn-register" onclick="goToRegister()">
                Register
            </button>

            <button class="btn btn-login">
                Login
            </button>
        </div>
    </header>


    <!-- CONTENIDO -->
    <main class="login-container">

        <!-- LADO IZQUIERDO -->
        <section class="login-info">

            <span class="welcome-label">BIENVENIDO</span>

            <h1>
                Inicia sesión<br>
                en <span>MiApp.</span>
            </h1>

            <p>
                Accede a tu cuenta para comenzar a disfrutar
                de todas las funcionalidades de nuestra plataforma.
            </p>

            <div class="info-buttons">
                <button class="btn btn-primary" onclick="login()">
                    Iniciar sesión
                </button>

                <button class="btn btn-secondary" onclick="goToRegister()">
                    Crear una cuenta
                </button>
            </div>

        </section>


        <!-- LADO DERECHO -->
        <section class="login-card-section">

            <div class="circle circle-one"></div>
            <div class="circle circle-two"></div>

            <div class="login-card">

                <div class="icon">
                    ✦
                </div>

                <h2>Bienvenido</h2>

                <p>
                    Ingresa tus datos para continuar.
                </p>


                <form id="loginForm">

                    <!-- EMAIL -->
                    <div class="input-group">
                        <label for="email">Correo electrónico</label>

                        <input
                            type="email"
                            id="email"
                            placeholder="ejemplo@correo.com"
                            required
                        >
                    </div>


                    <!-- PASSWORD -->
                    <div class="input-group">
                        <label for="password">Contraseña</label>

                        <div class="password-container">

                            <input
                                type="password"
                                id="password"
                                placeholder="••••••••"
                                required
                            >

                            <button
                                type="button"
                                class="show-password"
                                onclick="togglePassword()"
                            >
                                👁
                            </button>

                        </div>
                    </div>


                    <!-- OPCIONES -->
                    <div class="login-options">

                        <label class="remember">
                            <input type="checkbox" id="remember">
                            <span>Recordarme</span>
                        </label>

                        <a href="#" onclick="forgotPassword()">
                            ¿Olvidaste tu contraseña?
                        </a>

                    </div>


                    <!-- BOTÓN -->
                    <button
                        type="submit"
                        class="submit-button"
                    >
                        Iniciar sesión
                    </button>

                    <div id="message"></div>

                </form>


                <!-- REGISTRO -->
                <div class="register-text">
                    ¿No tienes una cuenta?

                    <a href="#" onclick="goToRegister()">
                        Regístrate
                    </a>
                </div>

            </div>

        </section>

    </main>


    <script src="{{ asset('js/scriptRegister.js') }}"></script>

</body>
</html>