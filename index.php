<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "utesa";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo "Error de conexion";
    exit;
}

if (isset($_POST['btnGuardar'])) {

    $nombreUser = $_POST['nombre'];
    $correoUser = $_POST['correo'];
    $edadUser = $_POST['edad'];

    $insertar = "INSERT INTO usuarios (nombre, correo, edad) 
                 VALUES ('$nombreUser', '$correoUser', '$edadUser')";

    $guardar = mysqli_query($conn, $insertar);

    if ($guardar) {
        echo "<p style='text-align:center; color:green;'>Datos guardados</p>";
    } else {
        echo "<p style='text-align:center; color:red;'>No se pudo guardar</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(135deg, #667eea, #764ba2);">

    <div class="d-flex justify-content-center align-items-center" style="height:100vh;">

        <div
            style="background:white; padding:30px; border-radius:12px; width:350px; box-shadow:0px 0px 15px rgba(0,0,0,0.2);">

            <h4 style="text-align:center; margin-bottom:20px;">Nuevo Usuario</h4>

            <form method="POST">

                <input type="text" name="nombre" class="form-control mb-3" placeholder="Nombre completo" required>

                <input type="email" name="correo" class="form-control mb-3" placeholder="Correo electrónico" required>

                <input type="number" name="edad" class="form-control mb-3" placeholder="Edad" required>

                <button type="submit" name="btnGuardar" class="btn w-100" style="background:#764ba2; color:white;">
                    Guardar información
                </button>

            </form>

        </div>

    </div>

</body>

</html>