<?php
 session_start();
  $conexion=mysqli_connect("localhost","root","","mydb");
mysqli_set_charset ($conexion,"utf8");
$varsesion = $_SESSION['Usuario'];                                                                                                                             if($varsesion == null || $varversion ='') {
header ("Location:http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIO_SESION/INICIAR_SESION_AFILIADO/Iniciar%20sesionA.php");
die ();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width,initial-scale=1,maximum-scale=1">
	<title>Principal Oral Bright</title>
	<link rel="stylesheet" type="text/css" href="FomularioP.css">
</head>
<style type="text/css">
footer{
     background: #98D8D6;
     width: 100%;
     font-family:'Posterama';
     color:#095351;   
}
.footer-content{
    display: flex;
    align-items:baseline;
    justify-content: center;  
    text-align: center;
}
.footer-content h3{
    width: 130px;
    font-size: 1.1rem; 
    text-transform:capitalize;
    line-height: 3rem;
}
.footer-content p{
    
    margin: 2px 10px;
    line-size:14px;    
} 
.footer-bottom{
    background: black ;
    width: 100vw;
    padding: 20px 0;
    text-align: center;
    
}
.footer-bottom p{
    font-size: 12px;
    
}
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
                     <ul class="submenu" style="padding-left:30px;">
                <li><a href="AperturaH.php">Apertura Historia Clinica</a></li>
                <li><a href="ConsultaH.php">Consulta de Historia Clinica</a></li>
                    </ul></li>

              <li><a href="reportes/reporte.php">Reportes</a></li>
             <li> <a href="MenuSecretaria.php" style="padding-left:310px;padding-right:15px;">SECRETARI@ INICIO</a></li> 
            </ul> 
        </nav>
    </header>
    

    <form class="formulario" action="agregar_p.php" method="POST">

	    <h1>Registro</h1>
	    <div class="contenedor">		
            <label for="Númerodocumento">Número de documento:</label>
            <input type="number" name="documento" id="Númerodocumento" required>
            <label for="Fn">Fecha de nacimiento DD/MM/AAA:</label>
            <input type="date" name="Fn" id="Fn" required>
            <label for="Nb">Nombre:</label>
            <input type="text" name="Nb" id="Nb" required>
            <label for="Ap">Apellidos:</label>
            <input type="text" name="Ap" id="Ap" required>
            <label for="Dc">Direccion:</label>
            <input type="text" name="Dc" id="Dc" required>
            <label for=Teléfono>Teléfono o celular:</label>
            <input type="number" name="telefono" id="Teléfono" required>
            <label for="Correo">Correo electrónico:</label>
            <p>Recuerda registrar una cuenta de correo personal</p>
            <input type="email" name="correo" id="Correo" required>
            <label for="Ep">Estado Paciente:</label>
            <input type="text" name="Ep" id="Ep" required>
            <input type="checkbox" name="terminos" id="terminos" required>Acepto términos y condiciones
            <input type="submit" name="Registrarse" class="button">
		</div>

	</form>
<footer style="margin-top:1150px;"> 
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