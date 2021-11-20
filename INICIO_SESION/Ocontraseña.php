<!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width,initial-scale=1,maximum-scale=1">
	<title>Olvide mi contraseña</title>
<link rel="shortcut icon" href="../IMAGENES/LOGO_INICIO.png">
<link rel="stylesheet" type="text/css" href="Ocontraseña.css">
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
			
               <li class="frist-item">
                    <a href="../Index.php">
                      <img src="../IMAGENES/myhouse.png" alt="" class="imagen">
                      <span class="text-item">Inicio</span>
                      <span class="down-item"></span>
                    </a>
                </li>
			  <li> <a href="../NOSOTROS/Nosotros.php">
			         <img src="../IMAGENES/Nosotros.png" alt="" class="imagen">
			         <span class="text-item">Nosotros</span>
			         <span class="down-item"></span>
			     </a>
			 </li>
			      <li> <a href="../CONTACTANOS/Contactanos.php">
			      <img src="../IMAGENES/descarga.png"  alt="" class="imagen">
			      <span class="text-item">Contactanos</span>
			      <span class="down-item"></span>			    
			           </a>
			      </li>
			     <li> <a href="../INICIO_SESION/INICIAR_SESION_AFILIADO/Iniciar%20sesionA.php">
			         <img src="../IMAGENES/Paciente.png" alt="" class="imagen">
			         <span class="text-item">Iniciar Sesion</span>
			         <span  class="down-item"></span>
			         </a>
			   </li>
			</ul> 
        </nav>
</header>
<!--- .........................Formulario.....................................-->
	<form style="margin-left:445px;"class="formulario">

	    <h1>Olvidé mi Contraseña</h1>
	    <div class="contenedor">
	    	<p style="font-size: 17px;">Para restablecer la contraseña, registra la siguiente información:</p>
			<label for="Correo">Correo electrónico:</label>
		    <input type="email" name="Correo" id="Correo">		
            <label for="Nb">Nombre:</label>
            <input tye="text" name="Nb" id="Nb">
            <input type="submit" value="Restablecer" class="button">
			<a href="../Index.php"> Regresar </a></li> 


		</div>

	</form>
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