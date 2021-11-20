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
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width,initial-scale=1,maximum-scale=1">
	<title>Principal Oral Bright</title>	
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
    height:34px;
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
    height:34px;
    border:1px solid black ;
    border-left: none;
}
</style>
<body>
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
                <li><a href="AperturaH.php">Apertura Historia Clinica</a></li>
                <li><a href="ConsultaH.php">Consulta de Historia Clinica</a></li>
                    </ul></li>

              <li><a href="reportes/reporte.php">Reportes</a></li>
             <li> <a href="MenuSecretaria.php" style="padding-left:310px;padding-right:15px;">SECRETARI@ INICIO</a></li> 
            </ul> 
        </nav>

    </header>
    <br>
    <br>
    <br>
    <?php
    $busqueda=strtolower($_REQUEST['busqueda']);
    if(empty($busqueda)){
      header('Location:modificarm.php');
    } 
    ?>
    <form action="buscar_M.php" method="GET" class="form_search">
    <input type="text" name="busqueda" id="busqueda" placeholder="Buscar" autocomplete="off" value="<?php echo$busqueda ?>">
    <input type="submit" id="lupa" class="btn_search" value=" ">   
    </form>
    <table>
    <tr>
        <th>Id Medico</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Tarjeta Profesional</th>
        <th>Especialidad</th>
        <th>Estado del medico</th>
        <th>Acciones</th>

        <?php 
    //paginador
    $sql_register=mysqli_query($conexion,"SELECT COUNT(*) as total_registro from medico where(Id_Medico like'%$busqueda%' or Nombre_Medico like '%$busqueda%' or Apellido_Medico like '%$busqueda%' or Telefono_Medico like'%$busqueda%' or Correo_Medico like '%$busqueda%' or Tarjeta_Profesional like '%$busqueda%' or Especialidad_Medico like '%$busqueda%' or Estado_Medico like '%$busqueda%')and Estado_Medico!='INACTIVO' ");
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

         $resultado = mysqli_query($conexion,"SELECT * FROM medico where(Id_Medico like'%$busqueda%' or Nombre_Medico like '%$busqueda%' or Apellido_Medico like '%$busqueda%' or Telefono_Medico like'%$busqueda%' or Correo_Medico like '%$busqueda%' or Tarjeta_Profesional like '%$busqueda%' or Especialidad_Medico like '%$busqueda%' or Estado_Medico like '%$busqueda%')and Estado_Medico!='INACTIVO' order by Id_Medico LIMIT $desde,$x_pag");
         while($data=mysqli_fetch_assoc($resultado)) { ?>
        
    <tr>
        
    <th><?php echo $data ["Id_Medico"];?></th>    
    <th><?php echo $data ["Nombre_Medico"];?></th>
    <th><?php echo $data ["Apellido_Medico"];?></th>
    <th><?php echo $data ["Telefono_Medico"];?></th>    
    <th><?php echo $data ["Correo_Medico"];?></th>
    <th><?php echo $data ["Tarjeta_Profesional"];?></th>
    <th><?php echo $data ["Especialidad_Medico"];?></th>    
    <th><?php echo $data ["Estado_Medico"];?></th>
    <th>
        <a href="Modificar_M.php?Id= <?php echo $data["Id_Medico"];?>" class="button green" >Modificar</a> 
        <a href="eliminarm.php?Id= <?php echo $data ["Id_Medico"]?>" class="button red" >Eliminar</a>
    </th>
    
    </tr>
             
        <?php };?>
</table>
<div class="paginador">
       <ul>
           <?php 
           if($pagina != 1){
               
           
           ?>
        <li><a href="?pagina=<?php echo 1;?>&busqueda=<?php echo$busqueda; ?>"> |< </a></li>
        <li><a href="?pagina=<?php echo $pagina - 1; ?>&busqueda=<?php echo$busqueda; ?>"> <<  </a></li>            
    <?php 
           }
           for($i=1; $i<=$total_paginas ; $i++) {
              if($i==$pagina){
                  echo '<li class="pageselected">'.$i.'</li>';
              }else{
                 echo '<li><a href="?pagina='.$i.'&busqueda='.$busqueda.'">'.$i.'</a></li>'; 
              } 
          } 
           if($pagina!= $total_paginas){
               
           ?>       
        <li><a href="?pagina=<?php echo $pagina + 1 ;?>&busqueda=<?php echo$busqueda; ?>"> >> </a></li>
        <li><a href="?pagina=<?php echo $total_paginas;?>&busqueda=<?php echo$busqueda; ?>"> >|  </a></li>
           <?php
           }
           ?>
        </ul>
         </div>



</body>
</html>
