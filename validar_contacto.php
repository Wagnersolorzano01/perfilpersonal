<?php
require_once "conexion.php";

// Verificar que se envíe por método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitizar datos
    $nombre = trim($_POST["nombre"]);
    $correo = trim($_POST["correo"]);
    $mensaje = trim($_POST["mensaje"]);

    // Validar campos vacíos
    if (empty($nombre) || empty($correo) || empty($mensaje)) {
        die("Todos los campos son obligatorios.");
    }

    // Validar correo
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        die("El correo electrónico no es válido.");
    }

    try {

        // Consulta segura (prepared statement)
        $sql = "INSERT INTO contacto (nombre, correo, mensaje)
                VALUES (:nombre, :correo, :mensaje)";

        $stmt = $conexion->prepare($sql);

        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":correo", $correo);
        $stmt->bindParam(":mensaje", $mensaje);

        $stmt->execute();

        $mensajeConfirmacion = "Su mensaje fue enviado correctamente.";

    } catch (PDOException $e) {

        $mensajeConfirmacion = "Ocurrió un error al guardar el mensaje.";
    }

} else {

    header("Location: contacto.php");
    exit();
}
?>

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
<body class="d-flex flex-column min-vh-100">
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
    
    <main class="container mt-5 flex-grow-1">
         <div class="row justify-content-center">

            <div class="col-md-6 col-lg-5">

                <div class="card shadow p-5 text-center">

                    <h1 class="mb-4">
                        Confirmación
                    </h1>

                    <div class="alert alert-info">

                        <?php echo htmlspecialchars($mensajeConfirmacion); ?>

                    </div>

                    <!-- Botones -->
                    <div class="d-grid gap-2">

                        <a href="index.php"
                            class="btn btn-primary">

                            Volver al inicio

                        </a>

                        <a href="contacto.php"
                            class="btn btn-secondary">

                            Enviar otro mensaje

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </main>
    <!-- Pie de página-->

    <footer class="text-white text-center mt-5 p-3">
        <p class="mb-0">
        Perfil Personal - Tecnologías Web
    </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    
</body>