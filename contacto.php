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

    <!-- Este es mi barra de navegación principal así como en la tarea del semestre pasado. -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow">

        <div class="container">

            <a class="navbar-brand" href="index.php">
                Mi Perfil
            </a>

            <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="contacto.php">
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

    <main class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-lg-5 col-md-7">

                <div class="card shadow-sm p-4 formulario-card">

                    <h2 class="text-center mb-4">
                        Formulario de Contacto
                    </h2>

                    <form action="validar_contacto.php" method="POST">

                        <div class="mb-3">

                            <label for="nombre" class="form-label">
                                Nombre
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="nombre"
                                name="nombre"
                                required
                                maxlength="100"
                                placeholder="Ingrese su nombre">

                        </div>

                        <div class="mb-3">

                            <label for="correo" class="form-label">
                                Correo electrónico
                            </label>

                            <input
                                type="email"
                                class="form-control"
                                id="correo"
                                name="correo"
                                required
                                maxlength="100"
                                placeholder="ejemplo@correo.com">

                        </div>

                        <div class="mb-3">

                            <label for="mensaje" class="form-label">
                                Mensaje
                            </label>

                            <textarea
                                class="form-control"
                                id="mensaje"
                                name="mensaje"
                                rows="3"
                                required
                                maxlength="500"
                                placeholder="Escriba un mensaje"></textarea>

                        </div>

                        <div class="text-center">

                            <button
                                type="submit"
                                class="btn btn-primary px-4">

                                Enviar mensaje

                            </button>

                        </div>

                    </form>

                </div>

            </div>

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