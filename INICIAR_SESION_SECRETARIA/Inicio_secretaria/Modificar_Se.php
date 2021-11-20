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

$actualizar = "UPDATE secretaria s inner join usuario u SET s.Nombre_Secretaria='$nombre',s.Apellido_Secretaria='$apellido',s.Direccion_Secretaria='$direccion',s.Telefono_Secretaria='$telefono',s.Correo_Secretaria='$correo',s.Estado_Secretaria='$estado',u.Nombre_Usuario='$correo' WHERE s.Id_Secretaria='$id' and u.Contraseña='$id'";

$resultado=mysqli_query($conexion,$actualizar);

if($resultado){
    echo "<script>alert('Se han actualizado los cambios correctamente'); window.location='http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIAR_SESION_SECRETARIA/Inicio_secretaria/modificars.php';</script>";
} else {
    echo"<script>alert('No se pudieron modificar los datos'); window.history.go(-1); </script>";
    
}
}
?>