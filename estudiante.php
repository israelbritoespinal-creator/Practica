<?php
$conexion = mysqli_connect("localhost", "root", "", "utesa") or die("Error en la conexion");
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$matricula = $_POST["matricula"];

mysqli_query($conexion,"INSERT INTO Estudiante (nombre, apellido, correo, telefono, matricula) values ('$nombre', '$apellido', '$correo', '$telefono', '$matricula')")
 or die("Eror". mysqli_error($conexion));