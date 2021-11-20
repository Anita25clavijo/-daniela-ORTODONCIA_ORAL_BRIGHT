<?php
 session_start();
 $conexion=mysqli_connect("localhost","root","","mydb");
mysqli_set_charset ($conexion,"utf8");
$varsesion = $_SESSION['Usuario'];                       
if($varsesion == null || $varversion ='') {
header ("Location:http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIO_SESION/INICIAR_SESION_AFILIADO/Iniciar%20sesionA.php");
die ();
}
 
?>
<!DOCTYPE html>
<html style="height:400px;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1,maximum-scale=1">
    <title>Principal Oral Bright</title>    
    <link rel="stylesheet" type="text/css" href="tabla_usuarios.css">
    
</head>
<body style="height:30px">
    <header>
        <html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1,maximum-scale=1">
    <title>Principal Oral Bright</title>
    <link rel="stylesheet" type="text/css" href="Inicio.css">
    <link rel="stylesheet" href="Inicio.css">
    
</head>
<body>
    <header>
            <nav class="navegacion">
            <ul class="menu">
                <li><a href="#" style=" padding-left:40px; padding-right:40px;">Gestion usuarios</a>
                    <ul class="submenu" style="padding-left:25px;">
                <li><a href="RegistrarU.php">Registrar Usuario</a></li>
                <li><a href="ActualizarU.php">Consultar usuario</a></li>
                    </ul></li>
               <li><a href="gestionarC.php" style=" padding-left:40px; padding-right:40px;">Gestion de Citas</a>              
                <li><a href="#" style="padding-left:40px;padding-right:40px;">Gestion de Historia Clinica</a>
                     <ul class="submenu" style="padding-left:30px;">
                <li><a href="ConsultaH.php">Consulta de Historia Clinica</a></li>
                    </ul></li>

             <li> <a href="MenuSecretaria.php" style="padding-left:400px;padding-right:15px;">SECRETARI@ INICIO</a></li> 
            </ul> 
        </nav>

    </header>


</body>
</html>