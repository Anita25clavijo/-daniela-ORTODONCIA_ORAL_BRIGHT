<?php  
 session_start();
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
	<link rel="stylesheet" type="text/css" href="FormularioM.css">
	
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
               <li><a href="GestionA.php" style=" padding-left:40px; padding-right:40px;">Gestion de Citas</a>              
                <li><a href="#" style="padding-left:40px;padding-right:40px;">Gestionar Historia Clinica</a>
                      <ul class="submenu" style="padding-left:25px;">
                <li><a href="GestionHistoria.php">Registrar Historia Clinica</a></li>
                <li><a href="ConsultarM.php">Consultar y Modificar Historia Clinica</a></li>
                    </ul></li>
             <li><a href="cerrar_sesion.php" style="padding-left:580px;padding-right:15px;"><li><a href="InicioD.php">DOCTOR INICIO</a></li>
            </ul> 
        </nav>
    </header>
<div id="contenedor">
        <form class="formulario" action="" method="POST">

        <h1>Registro Historia</h1>
             
           
            <label for="Descripcion">Odontograma:</label>
            <input type="text" name="odontograma" id="decripcion" placeholder="Escriba aqui el Odontograma" required>
            <label for="Descripcion">Antecedentes:</label>
            <input type="text" name="antecedentes" id="decripcion" placeholder="Escriba aqui los Antecedentes " required>
            <label for="Descripcion">Plan tratamiento:</label>
            <input type="text" name="tratamiento" id="decripcion" placeholder="Su tratamiento" required>
            <label for="Descripcion">Interpretacion Radiografica:</label>
            <input type="text" name="rediofrafia" id="decripcion" placeholder="Escriba aqui la intepretacion " required>
            <label for="Descripcion">Pronostico:</label>
            <input type="text" name="pronostico" id="decripcion" placeholder="Escriba aqui su Pronostico " required>
            <label for="Descripcion">Evolucion:</label>
            <input type="text" name="evolucion" id="decripcion" placeholder="Escriba aqui la Evolucion " required>
            <label for="Descripcion">Examen Estomatologico:</label>
            <input type="text" name="Examen" id="decripcion" placeholder="Escriba aqui el Exmane" required>
            <label for="Abono">Abono:</label>
            <input type="number" name="abono" id="presupuesto" placeholder="$000.000.000 " required>
            <input type="submit" value="Agregar" name="Asignar Consulta" class="button">
        </div>

           </form> 
<footer style="margin-top:1000px;"> 
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