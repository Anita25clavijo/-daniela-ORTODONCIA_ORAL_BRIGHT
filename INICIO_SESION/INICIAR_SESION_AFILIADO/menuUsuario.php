 
<?php
 session_start();
 $id=$_GET["id"];
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
	<link rel="stylesheet" type="text/css" href="inicio_p.css">
	
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
               <li><a href="CitasM.php" style=" padding-left:40px; padding-right:40px;">Gestion de Citas</a>              
                <li><a href="ConsultaHistoria.php?id=<?php echo $id ?>" style="padding-left:40px;padding-right:40px;">Consulta tu Historia Clinica</a>

             <li><a href="cerrar_sesion.php" style="padding-left:420px;padding-right:15px;">PACIENTE <?php echo $_SESSION['Usuario'] ?>  :    Login out  </a>
            </ul> 
        </nav>

    </header>

<img src="../../IMAGENES/ortodoncia-con-brackets.jpg" width="300px" height="200px" alt="" class="item-img" style="
    width: 380px;
    height: 380px;
    margin-left: 500px;
    margin-top: 70px;
">
<footer style="margin-top:110px;"> 
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