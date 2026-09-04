<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MiApp - Register</title>

    <link rel="stylesheet" href="{{ asset('css/StyleRegister.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >
</head>

<body>

    <!-- NAVBAR -->
    <header class="navbar">

        <div class="logo">
            MiApp
        </div>

        <div class="nav-buttons">

            <button
                class="btn btn-login"
                onclick="goToLogin()"
            >
                Login
            </button>

        </div>

    </header>


    <!-- CONTENIDO PRINCIPAL -->
    <main class="register-container">


        <!-- INFORMACIÓN -->
        <section class="register-info">

            <span class="welcome-label">
                COMIENZA AHORA
            </span>

            <h1>
                Crea tu cuenta<br>
                en <span>MiApp.</span>
            </h1>

            <p>
                Regístrate en nuestra plataforma y comienza
                a disfrutar de todas las funcionalidades
                que tenemos preparadas para ti.
            </p>

            <div class="features">

                <div class="feature">
                    <div class="feature-icon">✓</div>

                    <div>
                        <strong>Registro sencillo</strong>

                        <p>
                            Crea tu cuenta en pocos pasos.
                        </p>
                    </div>
                </div>


                <div class="feature">
                    <div class="feature-icon">✓</div>

                    <div>
                        <strong>Acceso seguro</strong>

                        <p>
                            Protegemos la información de tu cuenta.
                        </p>
                    </div>
                </div>


                <div class="feature">
                    <div class="feature-icon">✓</div>

                    <div>
                        <strong>Todo en un solo lugar</strong>

                        <p>
                            Accede fácilmente a tus funcionalidades.
                        </p>
                    </div>
                </div>

            </div>

        </section>


        <!-- TARJETA REGISTRO -->
        <section class="register-card-section">

            <!-- DECORACIÓN -->
            <div class="circle circle-one"></div>

            <div class="circle circle-two"></div>


            <div class="register-card">

                <div class="icon">
                    ✦
                </div>

                <h2>
                    Crear cuenta
                </h2>

                <p>
                    Completa los datos para registrarte.
                </p>


                <!-- FORMULARIO -->
                <form
                    id="registerForm"
                    method="POST"
                    action="{{ route('register.store') }}"
                >

                    @csrf


                    <!-- NOMBRE -->
                    <div class="input-group">

                        <label for="name">
                            Nombre completo
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Tu nombre completo"
                            required
                        >

                        @error('name')
                            <p class="error-message">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- EMAIL -->
                    <div class="input-group">

                        <label for="email">
                            Correo electrónico
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="ejemplo@correo.com"
                            required
                        >

                        @error('email')
                            <p class="error-message">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- PASSWORD -->
                    <div class="input-group">

                        <label for="password">
                            Contraseña
                        </label>

                        <div class="password-container">

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="••••••••"
                                required
                            >

                            <button
                                type="button"
                                class="show-password"
                                onclick="togglePassword('password', this)"
                            >
                                👁
                            </button>

                            @error('password')
                                <p class="error-message">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                    </div>


                    <!-- CONFIRMAR PASSWORD -->
                    <div class="input-group">

                        <label for="confirmPassword">
                            Confirmar contraseña
                        </label>

                        <div class="password-container">

                            <input
                                type="password"
                                id="confirmPassword"
                                name="password_confirmation"
                                placeholder="••••••••"
                                required
                            >

                            <button
                                type="button"
                                class="show-password"
                                onclick="togglePassword('confirmPassword', this)"
                            >
                                👁
                            </button>

                        </div>

                    </div>


                    <!-- TERMINOS -->
                    <label class="terms">

                        <input
                            type="checkbox"
                            id="terms"
                            required
                        >

                        <span>
                            Acepto los términos y condiciones
                        </span>

                    </label>


                    <!-- BOTÓN -->
                    <button
                        type="submit"
                        class="submit-button"
                    >
                        Crear cuenta
                    </button>


                    <!-- MENSAJE -->
                    <div id="message"></div>

                </form>


                <!-- LOGIN -->
                <div class="login-text">

                    ¿Ya tienes una cuenta?

                    <a
                        href="#"
                        onclick="goToLogin()"
                    >
                        Inicia sesión
                    </a>

                </div>

            </div>

        </section>

    </main>


    <script src="{{ asset('js/scriptRegister.js') }}"></script>

</body>
</html>