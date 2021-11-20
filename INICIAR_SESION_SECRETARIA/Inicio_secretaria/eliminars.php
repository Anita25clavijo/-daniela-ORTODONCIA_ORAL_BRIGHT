<?php
 session_start();
 ?>
<?php
$conexion=mysqli_connect("localhost","root","","mydb");
mysqli_set_charset ($conexion,"utf8");


if(!empty($_POST)){
    
    $idusuario=$_POST['Id'];
    
   
        $query_delete=mysqli_query($conexion,"DELETE FROM usuario WHERE Contraseña=$idusuario;");
    

    if($query_delete=true){
     echo "<script>alert('Se han Eliminado correctamente, actualice para ver los cambios'); window.location='http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIAR_SESION_SECRETARIA/Inicio_secretaria/modificars.php';</script>";
} else {
    echo"<script>alert('No se pudieron eliminar los datos'); window.history.go(-1); </script>";
    
}
}


if(empty($_REQUEST['id']))
{
    header("location:modificars.php");
    
}else{
    $conexion=mysqli_connect("localhost","root","","mydb");
    mysqli_set_charset ($conexion,"utf8");
    $idusuario = $_REQUEST['id'];
    $query= mysqli_query($conexion,"SELECT s.Id_Secretaria ,s.Nombre_Secretaria, s.Apellido_Secretaria, s.Direccion_Secretaria, s.Telefono_Secretaria, s.Correo_Secretaria, s.Estado_Secretaria FROM secretaria as s INNER JOIN usuario as u ON s.Id_Secretaria=u.Contraseña WHERE s.Id_Secretaria=$idusuario; ");



    $resultado=mysqli_num_rows($query);
    if($resultado > 0){
        while($data= mysqli_fetch_array($query)){

            $ids= $data['Id_Secretaria'];
            $nombres= $data['Nombre_Secretaria'];
            $apellido= $data['Apellido_Secretaria'];
        }
    }else{
        header("locatiob: modificars.php");
    }
}


?>
<!DOCTYPE html>
<html style="height:600px;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1,maximum-scale=1">
    <title>Eliminar Resgistro</title>
    <link rel="stylesheet" type="text/css" href="Formulariop.css">
    <link rel="stylesheet" href="Formulariop.css">
    
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
                <li><a href="modificarm.php">VOLVER</a></li>
            </ul> 
        </nav>
    </header>
    <section>
     <form class="formulario" method="POST" style="margin-top:100px;"> 
     <h1>TABLA SECRETARIA</h1>  
    
    <div class="data_delete">
 <h2>¿Esta seguro de eliminar el siguiente usuario?</h2>
                <p>Id: <span><?php echo $ids; ?></span> </p>
                <p>Nombre: <span><?php echo $nombres; ?></span> </p>
                <p>Apellido: <span><?php echo $apellido; ?></span> </p>
                
         <input type="hidden" name="Id" value="<?php echo $idusuario;?>">
        <input  type="submit"  class="button green" value="Aceptar">
        <a href="modificars.php" type="submit"  class="button red">Cancelar</a>
        
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