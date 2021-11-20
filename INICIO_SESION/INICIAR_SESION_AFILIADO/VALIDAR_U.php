<?php
session_start();
$usuario=$_POST['Usuario'];
$clave=$_POST['contraseña'];
$_SESSION['Usuario']=$usuario;

//conectar base de datos
$conexion=mysqli_connect("localhost","root","","mydb");
$consulta="SELECT*FROM usuario  WHERE Nombre_Usuario='$usuario' and Contraseña='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);
if ($filas['id_tipo_usuario']==1){  //Secretaria
    header("location:http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIAR_SESION_SECRETARIA/Inicio_secretaria/MenuSecretaria.php");
}
else 
if($filas['id_tipo_usuario']==2){  //Medico
    header("location:http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIO_SESION/INICIAR_SESION_DOCTOR/InicioD.php");
}
else 
if($filas['id_tipo_usuario']==3){  //Paciente
    header("location:http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIO_SESION/INICIAR_SESION_AFILIADO/menuUsuario.php?id=$clave");
    
}
else{
    echo "<script>alert('Error en la autentificacion al iniciar sesion'); window.location='http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIO_SESION/INICIAR_SESION_AFILIADO/Iniciar%20sesionA.php';</script>";
}
    
mysqli_free_result($resultado);
mysqli_close($conexion);














?>