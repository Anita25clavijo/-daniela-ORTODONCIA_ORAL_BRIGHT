<?php  
$conexion=mysqli_connect("localhost","root","","mydb"); 
mysqli_set_charset ($conexion,"utf8");

if(!empty($_POST)){
	$id=$_POST['id'];
	$fecha=$_POST['FechaA'];
	$hora=$_POST['Hora'];
	$consultorio=$_POST['Consultorio'];
	$estado=$_POST['EstadoA'];
	$paciente=$_POST['paciente'];
	$medico=$_POST['medico'];
	$HC=$_POST['HC'];
	$query_busqueda=mysqli_query($conexion,"SELECT Fecha_Agenda,Hora_Agenda FROM agenda where Fecha_Agenda='$fecha' and Hora_Agenda='$hora' and Consultorio='$consultorio' and Id_Agenda!='$id'");
	$resultado=mysqli_num_rows($query_busqueda);
	if($resultado==0){
		$query_registro=mysqli_query($conexion,"UPDATE agenda SET Fecha_Agenda='$fecha',Hora_Agenda='$hora',Consultorio='$consultorio',Estado_Agenda='$estado',Id_Paciente='$paciente',Id_Medico='$medico',id_historia_clinica='$HC' WHERE Id_Agenda='$id'");
 if($query_registro=true){
 	echo "<script>alert('Se han actualizado los cambios correctamente, actualice la pagina para ver los cambios'); window.location='http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIAR_SESION_SECRETARIA/Inicio_secretaria/gestionarC.php';</script>";
 }
 else{
 	echo"<script>alert('No se registro con exito'); window.history.go(-1); </script>";
    
 }
		
	}else{
		echo "<script>alert('Ya esta ocupado este turno'); window.location='http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIAR_SESION_SECRETARIA/Inicio_secretaria/gestionarC.php';</script>";
	}
    
}
else{
     echo"<script>alert('Se esperaban todos los datos'); window.history.go(-1); </script>";

}
?> 