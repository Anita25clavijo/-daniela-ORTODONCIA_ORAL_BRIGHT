 
<?php 
$conexion=mysqli_connect("localhost","root","","mydb");
mysqli_set_charset ($conexion,"utf8");

if(!empty($_POST)){
	$documento=$_POST['documento'];
	$nombre=$_POST['Nb'];
	$apellido=$_POST['Ap'];
	$direccion=$_POST['Dc'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	$fecha=$_POST['Fn'];
	$estado=$_POST['Ep'];
	$tipo_u=3;
	$query_busqueda=mysqli_query($conexion,"SELECT Correo_Paciente FROM paciente where Correo_Paciente='$correo'");
	$resultado=mysqli_num_rows($query_busqueda);
	if($resultado==0){
		$query_registro_U=mysqli_query($conexion,"INSERT INTO usuario(Nombre_Usuario,Contraseña,id_tipo_usuario) values('$correo','$documento','$tipo_u')");
		if($query_registro_U=true){
			$query_busqueda_U=mysqli_query($conexion,"SELECT Id_Usuario FROM usuario WHERE Nombre_Usuario='$correo' and Contraseña='$documento'");
			while($data=mysqli_fetch_array($query_busqueda_U)){


			$id_U=$data['Id_Usuario'];
           }
			$query_registro=mysqli_query ($conexion,"INSERT INTO paciente(Id_Paciente,Nombre_Paciente,Apellido_Paciente,Direccion_Paciente,Telefono_Paciente,Correo_Paciente,Fecha_Nacimiento,Estado_Paciente,Id_Usuario) VALUES ('$documento','$nombre','$apellido','$direccion','$telefono','$correo','$fecha','$estado','$id_U')");
 if($query_registro=true){
 	$query_registro_HC=mysqli_query($conexion,"INSERT INTO historia_clinica(Odontograma, Antecedentes, Plan_Tratamiento, Interpretacion_Radiografica, Presupuesto, Pronostico, EVOLUCION, EXAMEN_ESTOMATOLOGICO, Paciente_Id_Paciente) VALUES ('N.A','N.A','N.A','N.A','0','N.A','N.A','N.A','$documento')");
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
