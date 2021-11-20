<?php 
 session_start();
  $conexion=mysqli_connect("localhost","root","","mydb");
mysqli_set_charset ($conexion,"utf8");
$varsesion = $_SESSION['Usuario'];                                                                                                                             if($varsesion == null || $varversion ='') {
header ("Location:http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIO_SESION/INICIAR_SESION_AFILIADO/Iniciar%20sesionA.php");
die ();
}
//modificar datos
if(empty($_GET['Id'])){
    header('Location:gestionarC.php');
}
else{
    $id=$_GET['Id'];
    $query=mysqli_query($conexion,"SELECT a.*, p.* ,m.* , h.* FROM agenda a inner join paciente p inner join medico m inner join historia_clinica h WHERE a.Id_Agenda='$id'and a.Id_Paciente=p.Id_Paciente and a.Id_Medico=m.Id_Medico and a.id_historia_clinica=h.Id_Historia");
    $resultado=mysqli_num_rows($query);
    if($resultado!=0){
        while($data=mysqli_fetch_array($query)){
            $id_a=$data['Id_Agenda'];
            $fecha=$data['Fecha_Agenda'];
            $hora=$data['Hora_Agenda'];
            $consultorio=$data['Consultorio'];
            $estado=$data['Estado_Agenda'];
            $paciente=$data['Id_Paciente'];
            $medico=$data['Id_Medico'];
            $HC=$data['id_historia_clinica'];
            $n_paciente=$data['Nombre_Paciente'];
            $a_paciente=$data['Apellido_Paciente'];
            $n_medico=$data['Nombre_Medico'];
            $a_medico=$data['Apellido_Medico'];
            $option_p='<option value="'.$paciente.'"select>'.$n_paciente.' '.$a_paciente.'</option>'; 
            $option_m='<option value="'.$medico.'"select>'.$n_medico.' '.$a_medico.'</option>';

        }
    }
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

<form class="formulario" action="modificar_A.php" method="POST">

	    <h1>Modificar</h1> 
	    <div class="contenedor">
            <input type="hidden" name="id" value="<?php echo$id_a ?>">
			<label for="F">Fecha</label>
			<input type="date" name="FechaA" required min="2021-01-01" max="2023-12-31" value="<?php echo$fecha?>">
            <label for="H">Hora</label>
            <input type="time" name="Hora" id="Hora" required min="00-00-00" max="24-00-00" value="<?php echo$hora?>">
            <label for="C">Consultorio</label>
            <input type="text" name="Consultorio" id="Consultorio" required value="<?php echo$consultorio?>">
            <label for="E">Estado Agenda</label>
            <input type="text" name="EstadoA" id="EstadoA" required value="<?php echo$estado?>">
            <label for="P">Paciente</label>
            <?php
            $query_paciente=mysqli_query($conexion,"SELECT*FROM paciente WHERE Estado_Paciente!='INACTIVO'");
            $resultado=mysqli_num_rows($query_paciente);
            ?>
            <select name="paciente" required="" id="paciente">
            <?php 
            echo $option_p;
            if ($resultado>0) {
            	while($paciente=mysqli_fetch_array($query_paciente)){
            ?>
            <option value="<?php echo $paciente['Id_Paciente'] ?>"><?php echo $paciente ['Nombre_Paciente']?> <?php echo $paciente ['Apellido_Paciente']?></option>
        <?php }}?>
    </select>

        <label for="M">Medico</label>
            <?php
            $query_medico=mysqli_query($conexion,"SELECT*FROM medico");
            $resultado=mysqli_num_rows($query_medico);
            ?>
            <select name="medico" required="" id="medico">
            <?php 
            echo $option_m;
            if ($resultado>0) {
            	while($medico=mysqli_fetch_array($query_medico)){
            ?>
            <option value="<?php echo $medico['Id_Medico'] ?>"><?php echo $medico ['Nombre_Medico']?> <?php echo $medico ['Apellido_Medico']?></option>
        <?php }}?>
    </select>
    <input type="hidden" name="HC" value="<?php echo$HC?>">
          
            <input type="submit"  value="Guardar" name="submit" class="button">
            
            <a href="gestionarC.php" >
            	<input type="button" value="Volver" class="button">
            </a>

		</div>

	</form>
<footer style="margin-top:1050px;"> 
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