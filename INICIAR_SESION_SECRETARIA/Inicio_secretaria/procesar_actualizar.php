<?php
$conexion=mysqli_connect("localhost","root","","mydb");
mysqli_set_charset ($conexion,"utf8");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$password = $_POST['contraseña'];

//ACTUALIZAR CODIGO
$actualizar = "UPDATE usuario SET Nombre_Usuario='$nombre', Contraseña='$password' WHERE Id_Usuario='$id'";

$resultado=mysqli_query($conexion,$actualizar);

if($resultado){
    echo "<script>alert('Se han actualizado los cambios correctamente, actualice la pagina para ver los cambios'); window.location='http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIAR_SESION_SECRETARIA/Inicio_secretaria/ActualizarU.php';</script>";
} else {
    echo"<script>alert('No se pudieron insertar los datos'); window.history.go(-1); </script>";
    
}