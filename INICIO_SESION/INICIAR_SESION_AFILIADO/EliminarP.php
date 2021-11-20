<?php
 session_start(); 
 ?>
 <?php
 $conexion=mysqli_connect("localhost","root","","mydb");
mysqli_set_charset ($conexion,"utf8");
if (!empty ($_POST)){
	$Id=$_POST['Id'];
	$query_delete=mysqli_query ($conexion,"DELETE FROM agenda WHERE Id_Agenda=$Id");
  if($query_delete){
  	header("location:CitasM.php");
  }
 else{
 	echo"se genero un fallo";
 }
}
if(empty ($_REQUEST['Id'])){
 header('gestionarC.php');
}else{
	$Id=$_REQUEST['Id'];
	$query=mysqli_query ($conexion,"SELECT Id_Agenda FROM agenda WHERE Id_Agenda=$Id");
	$resultado=mysqli_num_rows($query);
	if($resultado>0){
		while($data=mysqli_fetch_array($query)){
			$codigo=$data['Id_Agenda'];
		}
	}
	else{
		header('location:CitasM.php');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="..\..\INICIO_SESION\INICIAR_SESION_AFILIADO\Iniciar SesionA.css">
	<title>Eliminar_Agenda</title>
</head>
<body>
 
 <form method="POST" class="formulario">
 	<h2>¿Esta segura la cita<?php echo $codigo; ?> ? </h2>
 	<input type="hidden" name="Id" value="<?php echo $codigo;?>">
 	<input type="submit"  value="aceptar" class="button" href="CitasM.php">
 	<a href="CitasM.php"><input type="button" value="Cancelar" class="button"></a>
 </form>
</body>
</html>