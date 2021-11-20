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
  	header("location:GestionA.php");
  }
 else{
 	echo"se genero un fallo";
 }
}
if(empty ($_REQUEST['Id'])){
 header('GestionA.php');
}else{
	$Id=$_REQUEST['Id'];
	$query=mysqli_query ($conexion,"SELECT a.*,p.*,h.* FROM agenda a inner join paciente p inner join historia_clinica h WHERE Id_Agenda=$Id");
	$resultado=mysqli_num_rows($query);
	if($resultado>0){
		while($data=mysqli_fetch_array($query)){
			$codigo=$data['Id_Agenda'];
			$nombre=$data['Nombre_Paciente'];
			$Plan=$data['Plan_Tratamiento'];
			$Fecha=$data['Fecha_Agenda'];
			$Hora=$data['Hora_Agenda'];
		}
	}
	else{
		header('location:GestionA.php');
	}
}
?>
<!DOCTYPE html>
<html style="height:600px;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1,maximum-scale=1">
    <title>Eliminar Resgistro</title>
    <link rel="stylesheet" type="text/css" href="Formulario_Ma.css">
    <link rel="stylesheet" href="Formulario_Ma.css">
    
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
                <li><h2>ELIMINACION DE DATOS</h2>
                <li><a href="ModificarM.php">VOLVER</a></li>
            </ul> 
        </nav>
    </header>
    <section>
     <form class="formulario" method="POST" style="margin-top:100px;"> 
     <h1>TABLA MEDICO</h1>  
    
    <div class="data_delete">
     <h2>¿Esta segura de eliminar la cita?</h2>
     <p>Id: <span><?php echo $codigo; ?></span> </p>
     <p>Nombre: <span><?php echo $nombre; ?></span> </p>
     <p>Plan Tratamiento: <span><?php echo $Plan; ?></span> </p>
     <p>Fecha: <span><?php echo $Fecha; ?></span> </p>
     <p>Hora: <span><?php echo $Hora; ?></span> </p>  
                
         <input type="hidden" name="Id" value="<?php echo $Id;?>">
        <input  type="submit"  class="button green" value="Aceptar">
        <a href="ModificarM.php" type="submit"  class="button red">Cancelar</a>
        
         </div>

      
        </tr>
        
    </table>
    </form>
</section>
<footer style="margin-top:115px;"> 
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





