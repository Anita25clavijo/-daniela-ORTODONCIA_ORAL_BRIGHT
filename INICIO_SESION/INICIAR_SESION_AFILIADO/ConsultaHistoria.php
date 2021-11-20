<?php
 session_start();
 $conexion=mysqli_connect("localhost","root","","mydb");
mysqli_set_charset ($conexion,"utf8"); 
$varsesion = $_SESSION['Usuario'];
$mysqli_buscar=mysqli_query($conexion,"SELECT Contraseña FROM usuario WHERE Nombre_Usuario='$varsesion'");
while($usuario=mysqli_fetch_array($mysqli_buscar)){
    $documento=$usuario['Contraseña'];
}                      
if($varsesion == null || $varversion ='') {
header ("Location:http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIO_SESION/INICIAR_SESION_AFILIADO/Iniciar%20sesionA.php");
die ();
}
?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1,maximum-scale=1">
    <title>ACTUALIZAR</title>
    <link rel="stylesheet" type="text/css" href="../../INICIAR_SESION_SECRETARIA/Inicio_secretaria/tabla_usuarios.css">
    <link rel="stylesheet" href="tabla_usuarios.css">
    
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
<body style="height:auto;">
   <header>
				<nav class="navegacion">
            <ul class="menu">
               <li><a href="CitasM.php" style=" padding-left:40px; padding-right:40px;">Gestion de Citas</a>              
                <li><a href="ConsultaHistoria.php?id=<?php echo $id ?>" style="padding-left:40px;padding-right:40px;">Consulta tu Historia Clinica</a>

             
             <li> <a href="menuUsuario.php?id=<?php echo $documento ?>" style="padding-left:400px;padding-right:15px;">PACIENT@ INICIO</a></li> 
            </ul> 
        </nav>
<h1 style="padding-top: 70px;">Historia Clinica</h1>
    
    <div style="text-align:center;"></div>  
<table style="padding-top: 30px;">
    <tr>
        <th name="Id">Numero Historia Clinica</th>
        <th>Odontograma</th>
        <th>Antecedentes</th>
        <th>Plan Tratamiento</th>
        <th>Interpretacion Radiografica</th>
        <th>Presupuesto</th>
        <th>Pronostico</th>
        <th>Evolucion</th>
        <th>Examen Estomatologico</th>
        
    </tr>    


        <?php
        
         $resultado = mysqli_query($conexion,"SELECT h.*, p.* FROM historia_clinica h inner join paciente p where p.Id_Paciente=h.Paciente_Id_Paciente AND h.Paciente_Id_Paciente=$documento");

         while($data=mysqli_fetch_assoc($resultado)) { ?>

    <tr>
        
    <th><?php echo $data ["Id_Historia"];?></th>    
    <th><?php echo $data ["Odontograma"];?></th>
    <th><?php echo $data ["Antecedentes"];?></th>
    <th><?php echo $data ["Plan_Tratamiento"];?></th>    
    <th><?php echo $data ["Interpretacion_Radiografica"];?></th>
    <th><?php echo $data ["Presupuesto"];?></th>
    <th><?php echo $data ["Pronostico"];?></th>    
    <th><?php echo $data ["EVOLUCION"];?></th>
    <th><?php echo $data ["EXAMEN_ESTOMATOLOGICO"];?></th>
    
    
    </tr>    
        <?php };?>
</table>
<footer style="margin-top:230px;"> 
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