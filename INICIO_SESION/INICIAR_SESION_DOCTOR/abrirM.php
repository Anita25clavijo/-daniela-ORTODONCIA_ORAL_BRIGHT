<?php   
 session_start();
  $conexion=mysqli_connect("localhost","root","","mydb");
mysqli_set_charset ($conexion,"utf8");
$varsesion = $_SESSION['Usuario'];                                                                                                                              if($varsesion == null || $varversion ='') {
header ("Location:http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIO_SESION/INICIAR_SESION_AFILIADO/Iniciar%20sesionA.php");
die ();
}
    $id=$_GET['id'];
    $query=mysqli_query($conexion,"SELECT*FROM historia_clinica WHERE Id_Historia='$id'");
    $resultado=mysqli_num_rows($query);
    if($resultado!=0){
        while($data=mysqli_fetch_array($query)){
            $id_h=$data['Id_Historia'];
            $o=$data['Odontograma'];
            $a=$data['Antecedentes'];
            $p=$data['Plan_Tratamiento'];
            $i=$data['Interpretacion_Radiografica'];
            $pr=$data['Presupuesto'];
            $pro=$data['Pronostico'];
            $e=$data['EVOLUCION'];
            $ex=$data['EXAMEN_ESTOMATOLOGICO'];
            $id_p=$data['Paciente_Id_Paciente'];

    }
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
               <li><a href="GestionA.php" style=" padding-left:40px; padding-right:40px;">Gestion de Citas</a>              
                <li><a href="#" style="padding-left:40px;padding-right:40px;">Gestionar Historia Clinica</a>
                      <ul class="submenu" style="padding-left:25px;">
                <li><a href="ConsultarM.php">Consultar y Modificar Historia Clinica</a></li>
                    </ul></li>
             <li><a href="cerrar_sesion.php" style="padding-left:580px;padding-right:15px;"><li><a href="InicioD.php">DOCTOR INICIO</a></li>
            </ul> 
        </nav>
    </header>
<form class="formulario" action="Modificar_Me.php" method="POST">
 
        <h1>Modificar</h1>
<div class="contenedor"> 
             
            <input type="hidden" name="id" value="<?php echo$id_h ?>">
            <label for="Descripcion">Odontograma:</label>
            <input type="text" name="odontograma" id="decripcion" required value="<?php echo$o?>">
            <label for="Descripcion">Antecedentes:</label>
            <input type="text" name="antecedentes" id="decripcion" required value="<?php echo$a?>">
            <label for="Descripcion">Plan tratamiento:</label>
            <input type="text" name="tratamiento" id="decripcion" required value="<?php echo$p?>">
            <label for="Descripcion">Interpretacion Radiografica:</label>
            <input type="text" name="radiografia" id="decripcion" required value="<?php echo$i?>">
            <label for="Descripcion">Pronostico:</label>
            <input type="text" name="pronostico" id="decripcion" required value="<?php echo$pro?>">
            <label for="Descripcion">Evolucion:</label>
            <input type="text" name="evolucion" id="decripcion" required value="<?php echo$e?>">
            <label for="Descripcion">Examen Estomatologico:</label>
            <input type="text" name="examen" id="decripcion"required value="<?php echo$ex?>">
            <label for="Abono">Presupuesto:</label>
            <input type="number" name="presupuesto" id="presupuesto" required value="<?php echo$pr?>">
            <input type="hidden" name="id_p" value="<?php echo$id_p?>">
            
            <input type="submit"  value="Guardar" name="submit" class="button">
            
            <a href="ConsultarM.php" >
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