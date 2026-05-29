<?php
require_once "conexion.php";

try {

    $sql = "SELECT * FROM contacto
            ORDER BY fecha_registro DESC";

    $stmt = $conexion->prepare($sql);
    $stmt->execute();

    $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {

    die("Error al cargar registros.");
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
<body>

    <!-- Este es mi barra de navegación principal así como en la tarea del semestre pasado.  --> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container">

            <a class="navbar-brand"
               href="index.php">

                Mi Perfil
            </a>

            <div class="ms-auto">

                <a href="index.php"
                   class="btn btn-outline-light me-2">

                    Inicio
                </a>

                <a href="contacto.php"
                   class="btn btn-outline-light">

                    Contacto
                </a>

            </div>

        </div>

    </nav>

    <main class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-lg-10 col-md-11">

                <div class="card shadow p-4">

                    <h1 class="text-center mb-4">
                        Historial de mensajes
                    </h1>

                    <?php if (count($registros) > 0): ?>

                        <div class="table-responsive">

                            <table class="table table-bordered table-hover">

                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Mensaje</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>

                                <tbody>

                                <?php foreach ($registros as $fila): ?>

                                    <tr>
                                        <td>
                                            <?php echo htmlspecialchars($fila['id']); ?>
                                        </td>

                                        <td>
                                            <?php echo htmlspecialchars($fila['nombre']); ?>
                                        </td>

                                        <td>
                                            <?php echo htmlspecialchars($fila['correo']); ?>
                                        </td>

                                        <td>
                                            <?php echo htmlspecialchars($fila['mensaje']); ?>
                                        </td>

                                        <td>
                                            <?php echo htmlspecialchars($fila['fecha_registro']); ?>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                                </tbody>

                            </table>

                        </div>

                    <?php else: ?>

                        <div class="alert alert-warning text-center">
                            No existen registros todavía.
                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </main>

    <!-- Pie de oágina -->
    <footer class="text-white text-center mt-5 p-3">
        <p class="mb-0">
            Perfil Personal - Tecnologías Web
        </p>
    </footer>

</body>
</html>
