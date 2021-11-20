<?php  
 session_start();
 $conexion=mysqli_connect("localhost","root","","mydb");
mysqli_set_charset ($conexion,"utf8");
$varsesion = $_SESSION['Usuario'];                       
if($varsesion == null || $varversion ='') {
header ("Location:http://localhost/(daniela)ORTODONCIA_ORAL_BRIGHT/INICIO_SESION/INICIAR_SESION_AFILIADO/Iniciar%20sesionA.php");
die ();
}
 
?>
<!DOCTYPE html>
<html style="height:400px;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1,maximum-scale=1">
    <title>tabla secretarias</title>    
    <link rel="stylesheet" type="text/css" href="tabla_usuarios.css">
    
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
#busqueda{
    margin: 0% 0% 0% 12.5%;
    border-left: none;
    width: 13%;
    border-radius: 10px 0px 0px 10px;
    height:30.3px;
    padding: 5px;    
    border: 1px solid black;
    outline: none;
    background: #eee;
    font-size: 16px;
    border-right: none;
}
#lupa{
    position:absolute;
    margin: none;
    right:73%; 
    border-radius:0px 10px 10px 0px;
    background: #eee;
    background-repeat: no-repeat;
    width:3%;
    height:30.3px;
    border:1px solid black ;
    border-left: none;
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
<body style="height:30px">
    <header>
            <nav class="navegacion">
            <ul class="menu">
                <li><a href="#" style=" padding-left:40px; padding-right:40px;">Gestion usuarios</a>
                    <ul class="submenu" style="padding-left:25px;">
                <li><a href="RegistrarU.php">Registrar Usuario</a></li>
                <li><a href="ActualizarU.php">Consultar usuario</a></li>
                    </ul></li>
               <li><a href="gestionarC.php" style=" padding-left:40px; padding-right:40px;">Gestion de Citas</a>              
                <li><a href="gestionarC.php" style="padding-left:40px;padding-right:40px;">Gestion de Historia Clinica</a>
                     <ul class="submenu" style="padding-left:30px;">
                <li><a href="ConsultaH.php">Consulta de Historia Clinica</a></li>
                    </ul></li>

              <li><a href="reportes/reporte.php">Reportes</a></li>
             <li> <a href="MenuSecretaria.php" style="padding-left:310px;padding-right:15px;">SECRETARI@ INICIO</a></li> 
            </ul> 

    </header>


</body>
</html>
    </header>
    <br>
    <br>
    <br>
    <div>
    <form action="buscar_S.php" method="GET" class="form_search">
    <input type="text" name="busqueda" id="busqueda" placeholder="Buscar" autocomplete="off">
    <input type="submit" id="lupa" class="btn_search" value=" ">
    </div>
    </form>
    <table>
    <tr>
         <th name="Id">Id Secretaria</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Estado</th>
        <th>Acciones</th>

        <?php 
    //paginador
    $sql_register=mysqli_query($conexion,"SELECT COUNT(*) as total_registro from secretaria where Estado_Secretaria!='INACTIVO' ");
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

         $resultado = mysqli_query($conexion,"SELECT * FROM secretaria WHERE Estado_Secretaria!='INACTIVO' order by Id_Secretaria LIMIT $desde,$x_pag");
         while($data=mysqli_fetch_assoc($resultado)) { ?>
        
    <tr>
        
    <th><?php echo $data ["Id_Secretaria"];?></th>    
    <th><?php echo $data ["Nombre_Secretaria"];?></th>
    <th><?php echo $data ["Apellido_Secretaria"];?></th>
    <th><?php echo $data ["Direccion_Secretaria"];?></th>  
    <th><?php echo $data ["Telefono_Secretaria"];?></th>
    <th><?php echo $data ["Correo_Secretaria"];?></th>    
    <th><?php echo $data ["Estado_Secretaria"];?></th>


    <th><a href="Modificar_S.php?id=<?php echo $data ["Id_Secretaria"];?>" class="button green" name="Modificar" >Modificar</a> 
        <a href="eliminars.php?id=<?php echo $data ["Id_Secretaria"];?>" class="button red" name="Eliminar" >Eliminar</a>
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
<footer style="margin-top:255px;"> 
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






