<?php 
 session_start();
 $conexion=mysqli_connect("localhost","root","","mydb");
mysqli_set_charset ($conexion,"utf8");
$id= $_GET['id'];
$varsesion = $_SESSION['Usuario'];   

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
    <link rel="stylesheet" type="text/css" href="tabla_usuarios.css">
</head>
<body style="height:auto;">
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
              <li><a href="reportes/reporte.php">Reportes</a></li>
             <li> <a href="MenuSecretaria.php" style="padding-left:310px;padding-right:15px;">SECRETARI@ INICIO</a></li> 
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
        
         $resultado = mysqli_query($conexion,"SELECT h.*, p.* FROM historia_clinica h inner join paciente p where p.Id_Paciente=h.Paciente_Id_Paciente AND h.Id_Historia='$id'");
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
</body>
</html>


</body>
</html>



