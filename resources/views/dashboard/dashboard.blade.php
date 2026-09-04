<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MiApp | Dashboard</title>

    <link rel="stylesheet" href="{{ asset('css/styleDashboard.css') }}">

    <!-- Iconos -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    >
</head>

<body>

    <!-- =========================
         SIDEBAR
    ========================== -->

    <aside class="sidebar" id="sidebar">

        <div>

            <!-- LOGO -->
            <div class="logo">
                MiApp
            </div>


            <!-- MENU -->
            <nav class="menu">

                <a href="#" class="menu-item active">
                    <i class="fa-solid fa-house"></i>
                    <span>Dashboard</span>
                </a>


                <a href="/perfil" class="menu-item">
                    <i class="fa-solid fa-user"></i>
                    <span>Mi perfil</span>
                </a>


                <a href="#" class="menu-item">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Mensajes</span>
                </a>


                <a href="#" class="menu-item">
                    <i class="fa-solid fa-list-check"></i>
                    <span>Tareas</span>
                </a>


                <a href="#" class="menu-item">
                    <i class="fa-solid fa-calendar"></i>
                    <span>Calendario</span>
                </a>


                <a href="#" class="menu-item">
                    <i class="fa-solid fa-chart-column"></i>
                    <span>Reportes</span>
                </a>


                <a href="#" class="menu-item">
                    <i class="fa-solid fa-gear"></i>
                    <span>Configuración</span>
                </a>

            </nav>

        </div>


        <!-- PERFIL RAPIDO -->
        <div class="sidebar-bottom">

            <a href="/perfil" class="profile-card">

                <div class="profile-icon">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div>
                    <strong>Mi perfil</strong>

                    <p>
                        Administra tu información personal.
                    </p>
                </div>

            </a>


            <!-- CERRAR SESIÓN -->
            <form method="POST" action="{{ route('logout') }}" class="logout-form">

                @csrf

                <button type="submit" class="logout-btn">

                    <i class="fa-solid fa-right-from-bracket"></i>

                    <span>
                        Cerrar sesión
                    </span>

                </button>

            </form>

        </div>

    </aside>


    <!-- =========================
         CONTENIDO PRINCIPAL
    ========================== -->

    <main class="main-content">


        <!-- =========================
             HEADER
        ========================== -->

        <header class="topbar">

            <button class="menu-toggle" id="menuToggle">
                <i class="fa-solid fa-bars"></i>
            </button>


            <div class="topbar-right">

                <!-- NOTIFICACIONES -->
                <button class="notification-btn">

                    <i class="fa-regular fa-bell"></i>

                    <span class="notification-count">
                        3
                    </span>

                </button>


                <!-- USUARIO -->
                <div class="user-menu">

                    <div class="avatar">
                        U
                    </div>

                    <div class="user-info">

                        <strong>
                            Usuario
                        </strong>

                        <span>
                            usuario@email.com
                        </span>

                    </div>

                    <i class="fa-solid fa-chevron-down"></i>

                </div>

            </div>

        </header>


        <!-- =========================
             DASHBOARD
        ========================== -->

        <section class="dashboard-container">


            <!-- BIENVENIDA -->

            <div class="welcome-section">

                <div>

                    <span class="eyebrow">
                        BIENVENIDO DE NUEVO 👋
                    </span>

                    <h1>
                        Hola,
                        <span>Usuario</span>
                    </h1>

                    <p>
                        Aquí tienes un resumen de lo que ocurre
                        en tu cuenta hoy.
                    </p>

                </div>


                <div class="date-box">

                    <i class="fa-regular fa-calendar"></i>

                    <span id="currentDate">
                        Cargando fecha...
                    </span>

                </div>

            </div>


            <!-- =========================
                 ESTADISTICAS
            ========================== -->

            <section class="stats-grid">


                <div class="stat-card">

                    <div class="stat-icon blue">
                        <i class="fa-solid fa-users"></i>
                    </div>

                    <div>

                        <h3>
                            Usuarios
                        </h3>

                        <div class="stat-number">
                            1,248
                        </div>

                        <p>
                            <span class="positive">
                                ↑ 12%
                            </span>

                            vs. último mes
                        </p>

                    </div>

                </div>



                <div class="stat-card">

                    <div class="stat-icon green">
                        <i class="fa-solid fa-list-check"></i>
                    </div>

                    <div>

                        <h3>
                            Tareas
                        </h3>

                        <div class="stat-number">
                            32
                        </div>

                        <p>
                            <span class="positive">
                                ↑ 8%
                            </span>

                            vs. último mes
                        </p>

                    </div>

                </div>



                <div class="stat-card">

                    <div class="stat-icon purple">
                        <i class="fa-solid fa-message"></i>
                    </div>

                    <div>

                        <h3>
                            Mensajes
                        </h3>

                        <div class="stat-number">
                            18
                        </div>

                        <p>
                            <span class="positive">
                                ↑ 5%
                            </span>

                            vs. último mes
                        </p>

                    </div>

                </div>



                <div class="stat-card">

                    <div class="stat-icon orange">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>

                    <div>

                        <h3>
                            Reportes
                        </h3>

                        <div class="stat-number">
                            7
                        </div>

                        <p>
                            <span class="positive">
                                ↑ 15%
                            </span>

                            vs. último mes
                        </p>

                    </div>

                </div>


            </section>


            <!-- =========================
                 GRID PRINCIPAL
            ========================== -->

            <section class="content-grid">


                <!-- ACTIVIDAD -->
                <div class="card activity-card">

                    <div class="card-header">

                        <h2>
                            Actividad reciente
                        </h2>

                        <button class="text-button">
                            Ver todo
                        </button>

                    </div>


                    <div class="activity-list">


                        <div class="activity-item">

                            <div class="activity-icon blue">
                                <i class="fa-solid fa-user-plus"></i>
                            </div>


                            <div class="activity-content">

                                <strong>
                                    Nuevo usuario registrado
                                </strong>

                                <p>
                                    Un nuevo usuario se ha unido
                                    a la plataforma.
                                </p>

                            </div>


                            <span class="activity-time">
                                Hace 2h
                            </span>

                        </div>



                        <div class="activity-item">

                            <div class="activity-icon green">
                                <i class="fa-solid fa-check"></i>
                            </div>


                            <div class="activity-content">

                                <strong>
                                    Tarea completada
                                </strong>

                                <p>
                                    Se completó correctamente
                                    una tarea.
                                </p>

                            </div>


                            <span class="activity-time">
                                Hace 5h
                            </span>

                        </div>



                        <div class="activity-item">

                            <div class="activity-icon purple">
                                <i class="fa-solid fa-message"></i>
                            </div>


                            <div class="activity-content">

                                <strong>
                                    Nuevo mensaje
                                </strong>

                                <p>
                                    Tienes un nuevo mensaje.
                                </p>

                            </div>


                            <span class="activity-time">
                                Hace 1d
                            </span>

                        </div>


                    </div>

                </div>



                <!-- RESUMEN -->
                <div class="card chart-card">

                    <div class="card-header">

                        <h2>
                            Resumen de actividad
                        </h2>

                        <select id="chartPeriod">

                            <option>
                                Esta semana
                            </option>

                            <option>
                                Este mes
                            </option>

                        </select>

                    </div>


                    <!-- GRAFICO SIMPLE -->

                    <div class="chart">

                        <div class="chart-bars">

                            <div class="bar-container">

                                <div class="bar" style="height: 35%;"></div>

                                <span>Lun</span>

                            </div>


                            <div class="bar-container">

                                <div class="bar" style="height: 50%;"></div>

                                <span>Mar</span>

                            </div>


                            <div class="bar-container">

                                <div class="bar" style="height: 70%;"></div>

                                <span>Mié</span>

                            </div>


                            <div class="bar-container">

                                <div class="bar" style="height: 90%;"></div>

                                <span>Jue</span>

                            </div>


                            <div class="bar-container">

                                <div class="bar" style="height: 65%;"></div>

                                <span>Vie</span>

                            </div>


                            <div class="bar-container">

                                <div class="bar" style="height: 45%;"></div>

                                <span>Sáb</span>

                            </div>


                            <div class="bar-container">

                                <div class="bar" style="height: 30%;"></div>

                                <span>Dom</span>

                            </div>

                        </div>

                    </div>

                </div>


            </section>


            <!-- =========================
                 ACCESOS RAPIDOS
            ========================== -->

            <section class="card quick-access">

                <div class="card-header">

                    <h2>
                        Accesos rápidos
                    </h2>

                </div>


                <div class="quick-grid">


                    <button class="quick-button">

                        <i class="fa-solid fa-plus"></i>

                        <span>
                            Nueva tarea
                        </span>

                    </button>



                    <button class="quick-button">

                        <i class="fa-solid fa-message"></i>

                        <span>
                            Enviar mensaje
                        </span>

                    </button>



                    <button class="quick-button">

                        <i class="fa-solid fa-calendar"></i>

                        <span>
                            Ver calendario
                        </span>

                    </button>



                    <button class="quick-button">

                        <i class="fa-solid fa-file-lines"></i>

                        <span>
                            Generar reporte
                        </span>

                    </button>


                </div>

            </section>


        </section>

    </main>


    <script src="{{ asset('js/Dashboard.js') }}"></script>

</body>

</html>