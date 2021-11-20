
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1,maximum-scale=1">
    <title>Principal Oral Bright</title>
    <link rel="stylesheet" href="RegistrarU.css">
</head>
<style type="text/css">
footer{
    position: absolute;
     margin-bottom: 0;
    left: 0;
    right: 0;
    bottom: 0;
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
                <li><a href="#" style=" padding-left:40px; padding-right:40px;">Gestion usuarios</a>
                    <ul class="submenu" style="padding-left:25px;">
                <li><a href="RegistrarU.php">Registrar Usuario</a></li>
                <li><a href="ActualizarU.php">Consultar usuario</a></li>
                    </ul></li>
               <li><a href="gestionarC.php" style=" padding-left:40px; padding-right:40px;">Gestion de Citas</a>              
                <li><a href="#" style="padding-left:40px;padding-right:40px;">Gestion de Historia Clinica</a>
                     <ul class="submenu" style="padding-left:30px;">
                <li><a href="ConsultaH.php">Consulta de Historia Clinica</a></li>
                    </ul></li>

              <li><a href="reportes/reporte.php">Reportes</a></li>
             <li> <a href="MenuSecretaria.php" style="padding-left:310px;padding-right:15px;">SECRETARI@ INICIO</a></li> 
            </ul> 
        </nav>

    </header>
    
<!-------botones de medico y paciente------>
    
<div class="container" style="
    margin-top: 120px;
">
  <div class="item">
  
  <a href="modificarp.php">
  <img src="../../IMAGENES/ortodoncia-con-brackets.jpg" width="300px" height="200px" alt="" class="item-img">
  <div class="item-text">
      <h3>PACIENTE</h3>
      </div></a></div>
      
   <div class="item">
  <a href="modificarm.php">
  <img src="../../IMAGENES/medico-dibujos-animados-vacuna.jpg" width="300px" height="200px" alt="" class="item-img">
  <div class="item-text">
      <h3>MEDICO</h3>
      </div>
       </a></div>
      <div class="item">
  
  <a href="modificars.php">
  <img src="../../IMAGENES/secretary.jpg" width="300px" height="200px" alt="" class="item-img">
  <div class="item-text">
      <h3>SECRETARIA</h3>
      </div></a></div>
    </div>
<footer style="margin-top:100px;"> 
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