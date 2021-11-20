 
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
	<link rel="stylesheet" type="text/css" href="tabla.css">
	
</head>
<style type="text/css">
    .paginador ul{
    list-style: none;
    background:transparent;
    margin: 15px 80px;
    display: flex;
    float: right; 
}
.paginador a , .pageselected {
    background: #eee;
    color: black;
    border: 1px solid black;
    padding: 5px;
    display: inline-block;
    font-size: 14px;
    text-align: center;
    width: 35px;
    border-radius: 30px;
}
.paginador a:hover{
    background:#58ACFA;
}
.pageselected{
    color: black;
    background: slategray;
    border: 1px solid black;
}
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
               <li><a href="CitasM.php" style=" padding-left:40px; padding-right:40px;">Gestion de Citas</a>              
                <li><a href="ConsultaHistoria.php" style="padding-left:40px;padding-right:40px;">Consulta tu Historia Clinica</a>

               <li> <a href="menuUsuario.php?id=<?php echo $documento ?>" style="padding-left:400px;padding-right:15px;">PACIENT@ INICIO</a></li> 
            </ul> 
        </nav>

    </header>
    <br>
    <br>
    <br>
    <table>
    <tr>
        <th name="Id">Id_Agenda</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Consultorio</th>
        <th>Paciente</th>
        <th>Medico</th>
        <th>Plan Tratamiento</th>
        <th>Acciones</th>

        <?php 
    //paginador
    $sql_register=mysqli_query($conexion,"SELECT COUNT(*) as total_registro from agenda where Estado_Agenda!='INACTIVO' AND Id_Paciente=$documento");
    $result_register=mysqli_fetch_array($sql_register);
    $total_registro=$result_register['total_registro'];
    $x_pag=7;
    
if (empty($_GET['pagina'])){
    $pagina= 1;
}else{
    $pagina=$_GET['pagina'];
}

$desde = ($pagina-1)* $x_pag;
$total_paginas= ceil($total_registro / $x_pag);

         $resultado = mysqli_query($conexion,"SELECT a.*, p.* ,m.* , h.* FROM agenda a inner join paciente p inner join medico m inner join historia_clinica h where a.Id_Paciente=p.Id_Paciente and a.Id_Medico=m.Id_Medico and a.id_historia_clinica=h.Id_Historia and a.Estado_Agenda!='INACTIVO' AND a.Id_Paciente=$documento order by Id_Agenda LIMIT $desde,$x_pag");
         while($data=mysqli_fetch_assoc($resultado)) { ?>
        
    <tr>
        
    <th><?php echo $data ["Id_Agenda"];?></th>    
    <th><?php echo $data ["Fecha_Agenda"];?></th>
    <th><?php echo $data ["Hora_Agenda"];?></th>
    <th><?php echo $data ["Consultorio"];?></th>    
    <th><?php echo $data ["Nombre_Paciente"];?> <?php echo $data ["Apellido_Paciente"];?></th>
    <th><?php echo $data ["Nombre_Medico"];?> <?php echo $data ["Apellido_Medico"];?></th>
    <th><?php echo $data ["Plan_Tratamiento"];?></th>
    <th> 
        <a href="EliminarP.php?Id= <?php echo $data ["Id_Agenda"]?>" class="button red" >Eliminar</a>
    </th>
    
    </tr>
             
        <?php };?>
</table>

<div class="paginador">
       <ul>
           <?php 
           if($pagina != 1){
               
           
           ?>
        <li><a href="?pagina=<?php echo 1;?>"> |< </a></li>
        <li><a href="?pagina=<?php echo $pagina - 1; ?>"> <<  </a></li>            
    <?php 
           }
           for($i=1; $i<=$total_paginas ; $i++) {
              if($i==$pagina){
                  echo '<li class="pageselected">'.$i.'</li>';
              }else{
                 echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>'; 
              } 
          } 
           if($pagina!= $total_paginas){
               
           ?>       
        <li><a href="?pagina=<?php echo $pagina + 1 ;?>"> >> </a></li>
        <li><a href="?pagina=<?php echo $total_paginas;?>"> >|  </a></li>
           <?php
           }
           ?>
        </ul>
         </div>
<footer style="margin-top:310px;"> 
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
