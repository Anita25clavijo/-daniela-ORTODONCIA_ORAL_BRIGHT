<?php 
$conexion=mysqli_connect("localhost","root","","mydb");
mysqli_set_charset ($conexion,"utf8");

if(!empty($_POST)){
      $id=$_POST['id']; 
      $nombre=$_POST['nombre'];
      $apellido=$_POST['apellido'];
      $telefono=$_POST['telefono'];
      $correo=$_POST['correo'];
      $tarjeta=$_POST['tarjeta'];  
      $estado=$_POST['estado'];
      $especialidad=$_POST['especialidad'];

$actualizar = "UPDATE medico m inner join usuario u SET m.Nombre_Medico='$nombre',m.Apellido_Medico='$apellido',m.Telefono_Medico='$telefono',m.Correo_Medico='$correo',m.Tarjeta_Profesional='$tarjeta',m.Especialidad_Medico='$especialidad',m.Estado_Medico='$estado',u.Nombre_Usuario='$correo' WHERE m.Id_Medico='$id' and u.Contraseña='$id'";

$resultado=mysqli_query($conexion,$actualizar);

if($resultado){
    echo "<script>alert('Se han actualizado los cambios correctamente'); window.location='http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIAR_SESION_SECRETARIA/Inicio_secretaria/modificarm.php';</script>";
} else {
    echo"<script>alert('No se pudieron modificar los datos'); window.history.go(-1); </script>";
    
}
}
?>