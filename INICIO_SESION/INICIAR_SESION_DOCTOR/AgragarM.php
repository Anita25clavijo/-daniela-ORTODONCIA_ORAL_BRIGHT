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
    <title>Principal Oral Bright</title>
    <link rel="stylesheet" type="text/css" href="FormularioM.css">
 
    
</head>
<body>
 <header>
                <nav class="navegacion">
            <ul class="menu"> 
               <li><a href="GestionA.php" style=" padding-left:30px; padding-right:30px;">Gestion de Citas</a>              
                <li><a href="#" style="padding-left:40px;padding-right:40px;">Gestionar Historia Clinica</a>
                      <ul class="submenu" style="padding-left:25px;">
                <li><a href="ConsultarM.php">Consultar  y Modificar Historia Clinica</a></li>
                    </ul></li>
             <li><a href="cerrar_sesion.php" style="padding-left:580px;padding-right:15px;"><li><a href="InicioD.php">DOCTOR INICIO</a></li>
            </ul> 
        </nav>

    </header> 

<form class="formulario" action="RegistrarM.php" method="POST">

        <h1>Agregar Paciente</h1>
        <div class="contenedor">

            <label for="F">Fecha</label>
            <input type="date" name="FechaA" required min="2021-01-01" max="2023-12-31">
            <label for="H">Hora</label>
            <input type="time" name="Hora" id="Hora" required min="00-00-00" max="24-00-00">
            <label for="C">Consultorio</label>
            <input tye="text" name="Consultorio" id="Consultorio" required>
            <label for="E">Estado Agenda</label>
            <input tye="text" name="EstadoA" id="EstadoA" required>
            <label for="P">Paciente</label>
            <?php
            $query_paciente=mysqli_query($conexion,"SELECT*FROM paciente WHERE Estado_Paciente!='INACTIVO'");
            $resultado=mysqli_num_rows($query_paciente);
            ?>
            <select name="paciente" required="" id="paciente">
            <?php 
            if ($resultado>0) {
                while($paciente=mysqli_fetch_array($query_paciente)){
            ?>
            <option value="<?php echo $paciente['Id_Paciente'] ?>"><?php echo $paciente ['Nombre_Paciente']?> <?php echo $paciente ['Apellido_Paciente']?></option>
        <?php }}?>
    </select>

        <label for="M">Medico</label>
            <?php
            $query_medico=mysqli_query($conexion,"SELECT*FROM medico WHERE Id_Medico=$documento");
            $resultado=mysqli_num_rows($query_medico);
            ?>
            <select name="medico" required="" id="medico">
            <?php 
            if ($resultado>0) {
                while($medico=mysqli_fetch_array($query_medico)){
            ?>
            <option value="<?php echo $medico['Id_Medico'] ?>"><?php echo $medico ['Nombre_Medico']?> <?php echo $medico ['Apellido_Medico']?></option>
        <?php }}?>
    </select>
    <label for="HCe">Plan Tratamiento</label>
            <?php
            $query_HC=mysqli_query($conexion,"SELECT*FROM historia_clinica");
            $resultado=mysqli_num_rows($query_HC);
            ?>
            <select name="HC" required="" id="HC">
            <?php 
            if ($resultado>0) {
                while($HC=mysqli_fetch_array($query_HC)){
            ?>
            <option value="<?php echo $HC['Id_Historia'] ?>"><?php echo $HC['Plan_Tratamiento']?></option>
        <?php }}?>
    </select>
          
            <input type="submit"  value="Guardar" name="submit" class="button">
            
            <a href="GestionA.php" >
                <input type="button" value="Volver" class="button">
            </a>

        </div>

    </form>

</body>
</html>