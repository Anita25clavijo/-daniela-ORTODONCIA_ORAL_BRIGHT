<?php 
$conexion=mysqli_connect("localhost","root","","mydb");
mysqli_set_charset ($conexion,"utf8");

if(!empty($_POST)){
      $id=$_POST['id']; 
      $nombre=$_POST['nombre'];
      $apellido=$_POST['apellido'];
      $direccion=$_POST['direccion'];
      $telefono=$_POST['telefono'];
      $correo=$_POST['correo'];
      $estado=$_POST['estado'];
      $Fecha=$_POST['Fecha'];

$actualizar = "UPDATE paciente p inner join usuario u SET p.Nombre_Paciente='$nombre',p.Apellido_Paciente='$apellido',p.Direccion_Paciente='$direccion',p.Telefono_Paciente='$telefono',p.Correo_Paciente='$correo',p.Fecha_Nacimiento='$Fecha',p.Estado_Paciente='$estado',u.Nombre_Usuario='$correo' WHERE p.Id_Paciente='$id' and u.Contraseña='$id'";

$resultado=mysqli_query($conexion,$actualizar);

if($resultado){
    echo "<script>alert('Se han actualizado los cambios correctamente'); window.location='http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIAR_SESION_SECRETARIA/Inicio_secretaria/modificarp.php';</script>";
} else {
    echo"<script>alert('No se pudieron modificar los datos'); window.history.go(-1); </script>";
    
}
}
?>

