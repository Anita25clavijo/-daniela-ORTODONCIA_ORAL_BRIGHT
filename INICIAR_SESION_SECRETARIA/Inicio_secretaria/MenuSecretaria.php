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
<style type="text/css">

</style>
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
                <li><a href="gestionarC.php" style="padding-left:40px;padding-right:40px;">Gestion de Historia Clinica</a>
                     <ul class="submenu" style="padding-left:10px;">
                <li><a href="ConsultaH.php">Consulta de Historia Clinica</a></li>
                    </ul></li>
                    <li><a href="reportes/reporte.php">Reportes</a></li>
             <li><a href="cerrar_sesion.php" style="padding-left:190px;padding-right:15px;">SECRETARI@ <?php echo $_SESSION['Usuario'] ?>  :    Login out  </a>
          
            </ul> 
        </nav>

    </header>
<div id="contenedor">
<img src="../../IMAGENES/secretary.jpg" width="400px" height="400px" class="item-img" > </div>

<footer style="margin-top:100px;"> 
           <div class="footer-content">
           
            <br>
            
            <p>
                <h3>TELEFONO:</h3>
                <H5>310 852 9372</H5>
                <br>
                <H3>DIRECCION:</H3>
                <H5>Cra.29 No. 1D-15 . Santa Isabel</H5>
                <br>                
                <h3>DOCTORA</h3>
                <h5>Dra.Rocio Alavarez Reyes
                 <br>
                  -Especialista en Estatica Oral
                  <br>
                  -Universal  Colegio Odontologia C.</h5>
        
                </p>
                <div class="foooter-bottom">
                    <p>Diseñado por:</p><br>
                    <p>Ana Maria Clavijo y Daniela Pinzon &copy;</p>
                </div>
            </div>
</footer> 
</body>
</html>