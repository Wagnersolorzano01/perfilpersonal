<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Personal</title>

    <!-- Para los estilos y el diseño responsivo que me ofrece el framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Esto ya ni es de comentarlo, pero es este link hace referencia a los estilos css que tengo. -->
    <link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>

    <!-- Este es mi barra de navegación principal así como en la tarea del semestre pasado.  --> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Mi Perfil</a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Este es mi contenedor principal  -->
    <main class="container mt-5">

        <div class="card shadow p-4">

            <div class="text-center">

                <!-- Esta es el ícono o avatar para mi perfil -->
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                    alt="Avatar"
                    class="img-fluid rounded-circle mb-3"
                    width="180">

                <h1>Mi Perfil Personal</h1>

                <p class="lead">
                    Soy Técnico en Mantenimiento y Reparación de 
                    Equipos Informáticos y actualmente curso 
                    el quinto semestre de la carrera de Tecnologías de la Información (TI).
                </p>
            </div>

            <hr>

            <section>
                <h2>Sobre mí</h2>

                <p>
                    Me interesa el área de soporte técnico, 
                    administración de sistemas y virtualización. 
                    De manera autodidacta realizo prácticas creando
                    máquinas virtuales y entornos de laboratorio con
                    Windows Server y Windows 10, con el objetivo de
                    fortalecer mis conocimientos en administración de sistemas, 
                    configuración de redes y mantenimiento informático.<br><br>

                    Me considero una persona responsable, 
                    con interés constante en aprender nuevas 
                    tecnologías y mejorar mis habilidades 
                    técnicas mediante la práctica y la experimentación en entornos virtualizados.</p>
            </section>

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

    <!-- Pie de página-->
    <footer class="text-white text-center mt-5 p-3">
        <p class="mb-0">
            Perfil Personal - Tecnologías Web
        </p>
    </footer>

    <!-- En esta ocasión ya puedo utilizar bootstrap desde el cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>