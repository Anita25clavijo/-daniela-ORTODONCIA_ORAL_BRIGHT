<?php 
$conexion=mysqli_connect("localhost","root","","mydb");
mysqli_set_charset ($conexion,"utf8");

if(!empty($_POST)){
    $documento=$_POST['documento'];
	$nombre=$_POST['Nb'];
	$apellido=$_POST['Ap'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	$tarjeta=$_POST['Tp'];
	$especialidad=$_POST['Es'];
	$estado=$_POST['Em'];
	$tipo_u=2;
	$query_busqueda=mysqli_query($conexion,"SELECT Correo_Medico FROM medico where Correo_Medico='$correo'");
	$resultado=mysqli_num_rows($query_busqueda);
	if($resultado==0){
		$query_registro_U=mysqli_query($conexion,"INSERT INTO usuario(Nombre_Usuario,Contraseña,id_tipo_usuario) values('$correo','$documento','$tipo_u')");
		if($query_registro_U=true){
			$query_busqueda_U=mysqli_query($conexion,"SELECT Id_Usuario FROM usuario WHERE Nombre_Usuario='$correo' and Contraseña='$documento'");
			while($data=mysqli_fetch_array($query_busqueda_U)){


			$id_U=$data['Id_Usuario'];
           }
			$query_registro=mysqli_query ($conexion,"INSERT INTO medico(Id_Medico,Nombre_Medico,Apellido_Medico,Telefono_Medico,Correo_Medico,Tarjeta_Profesional,Especialidad_Medico,Estado_Medico,Id_Usuario) VALUES ('$documento','$nombre','$apellido','$telefono','$correo','$tarjeta','$especialidad','$estado','$id_U')");
 if($query_registro=true){
 	echo'<script language="javascript">alert("Se registro con exito");</script>';
 	require("RegistrarU.php");
 }
 else{
 	echo'<script language="javascript">alert("No se registro con exito");</script>';
 }
	
		}else{
			echo'<script language="javascript">alert("No se pudo resgistrar el usuario");</script>';
		require("RegistrarU.php");
		}
		
		
	}else{
		echo'<script language="javascript">alert("Este correo ya esta registrado");</script>';
		require("RegistrarU.php");
	}
    
}
else{
echo'<script language="javascript">alert("Se esperaban todos los datos");</script>';

}
?>