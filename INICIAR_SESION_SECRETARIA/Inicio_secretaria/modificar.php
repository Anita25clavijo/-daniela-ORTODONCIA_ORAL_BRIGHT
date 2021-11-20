<?php 
$conexion=mysqli_connect("localhost","root","","mydb");
mysqli_set_charset ($conexion,"utf8");
$id = $_GET["id"];
$usuario= "SELECT*FROM usuario WHERE Id_Usuario = '$id'"; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width,initial-scale=1,maximum-scale=1">
	<title>Principal Oral Bright</title>
	<link rel="stylesheet" type="text/css" href="Formulariop.css">
    <link rel="stylesheet" href="FormularioP.css">
	
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
<body style="height:600px;">
	<header>
		<nav class="navegacion">
			<ul class="menu">
                <li><h2>ACTUALIZACION DE DATOS</h2>
			    <li><a href="ActualizarU.php">VOLVER</a></li>
			</ul> 
		</nav>
    </header>
     <form class="formulario" action="procesar_actualizar.php" method="post" style="margin-top:100px;">
     <h1>TABLA USUARIO</h1>  
    
    <div style="text-align:center;"></div>  
<table>
    <tr> 
        
        <th> Nombre Usuario</th>
        <th>Contraseña</th>
        
        <?php
        
         $resultado = mysqli_query($conexion,$usuario);
         while($row=mysqli_fetch_assoc($resultado)) { ?>
        
    <tr>
        
        <input type="hidden" value="<?php echo $row ["Id_Usuario"];?>" name="id">
        <th><input type="text" class="table_input" value="<?php echo $row ["Nombre_Usuario"];?>" name="nombre"></th> 
        <th><input type="text" class="table_input" value="<?php echo $row ["Contraseña"];?>" name="contraseña"></th>
    </tr>
    <?php } mysqli_free_result($resultado);?> </table>

        <input type="submit" value="Actualizar" name="ACTUALIZAR" class="button actualizar">
	</form>
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