<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Personal</title>

    <!-- Para los estilos y el diseño responsivo que me ofrece el framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Esto ya ni es de comentarlo, pero es este link hace referencia a los estilos css que tengo -->
    <link rel="stylesheet" href="estilos/estilos.css">
</head>

<body>

<!-- Este es mi barra de navegación principal -->
<nav class="navbar navbar-expand-lg navbar-dark shadow">

    <div class="container">

        <!-- Nombre del sitio -->
        <a class="navbar-brand" href="index.php">
            Mi Perfil
        </a>

        <!-- Botón hamburguesa, para el tema responsivo para los tipos de tamaño de pantalla  -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Menú -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="index.php">
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">
                        Contacto
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="registro.php">
                        Registros
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>

<!-- Contenedor principal -->
<div class="container my-5">

    <!-- Presentación -->
    <div class="text-center mb-5">

        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
             alt="Perfil"
             class="img-fluid rounded-circle mb-3"
             width="150">

        <h2>Mi Perfil Personal</h2>

        <p class="mx-auto" style="max-width: 700px;">
            Soy Técnico en Mantenimiento y Reparación de Equipos Informáticos
            y actualmente curso el quinto semestre de la carrera de Tecnologías
            de la Información (TI).
        </p>

    </div>

    <!-- Sobre mí -->
    <div class="row justify-content-center mb-5">

        <div class="col-lg-8">

            <div class="card shadow-sm p-4">

                <h3 class="text-center mb-3">
                    Sobre mí
                </h3>

                <p class="text-center mb-0">
                    Me interesa el área de soporte técnico,
                    administración de sistemas y virtualización.
                    De manera autodidacta realizo prácticas creando
                    máquinas virtuales y entornos de laboratorio
                    con Windows Server y Windows 10, con el objetivo
                    de fortalecer mis conocimientos en administración
                    de sistemas, configuración de redes
                    y mantenimiento informático.
                </p>

            </div>

        </div>

    </div>

    <!-- Hobbies -->
    <section class="mt-4">
                <h2>Mis hobbies e intereses</h2>

                <div class="row text-center mt-3">

                    <div class="col-md-4 mb-3">
                        <div class="card p-3 shadow-sm h-100">
                            <h4>🎮 Videojuegos</h4>
                            <p>
                                Disfruto jugar videojuegos
                                en mi tiempo libre.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card p-3 shadow-sm h-100">
                            <h4>🖥️ Laboratorios Virtuales</h4>
                            <p>
                                Realizo prácticas con
                                Windows Server y Windows 10.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card p-3 shadow-sm h-100">
                            <h4>🔧 Mantenimiento de Equipos</h4>
                            <p>
                                Me gusta realizar mantenimiento
                                preventivo y correctivo.
                            </p>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </main>

<!-- Pie de página -->
<footer class="text-white text-center py-3 mt-5">

    <div class="container">

        <p class="mb-0">
            Perfil Personal - Tecnologías Web
        </p>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
