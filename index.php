<?php

$conexion = mysqli_connect("localhost", "root", "", "utesa");

if (!$conexion) {
    echo "Error al conectar con la base de datos";
    exit;
}

if (isset($_POST['guardar'])) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $matricula = $_POST['matricula'];

    $sql = "INSERT INTO estudiante (nombre, apellido, correo, telefono, matricula) 
            VALUES ('$nombre', '$apellido', '$correo', '$telefono', '$matricula')";

    if (mysqli_query($conexion, $sql)) {
        $mensaje = "Datos guardados correctamente";
    } else {
        $mensaje = "Error al guardar";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Estudiantes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(to right, #8360c3, #2ebf91);">

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">

    <div class="bg-white p-4 rounded shadow" style="width:400px;">

        <h3 class="text-center mb-4">Registro de Estudiantes</h3>

        <?php
        if (isset($mensaje)) {
            echo "<div class='alert alert-info text-center'>$mensaje</div>";
        }
        ?>

        <form method="POST">

            <input type="text" name="nombre" class="form-control mb-3" placeholder="Nombre" required>

            <input type="text" name="apellido" class="form-control mb-3" placeholder="Apellido" required>

            <input type="email" name="correo" class="form-control mb-3" placeholder="Correo electrónico" required>

            <input type="text" name="telefono" class="form-control mb-3" placeholder="Teléfono" required>

            <input type="text" name="matricula" class="form-control mb-3" placeholder="Matrícula" required>

            <button type="submit" name="guardar" class="btn btn-dark w-100">
                Guardar
            </button>

        </form>

    </div>

</div>

</body>
</html>
