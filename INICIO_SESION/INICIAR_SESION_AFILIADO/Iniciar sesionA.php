<!DOCTYPE html> 
<html lang="es">
<head>
	<meta charset="UTF-8"> 
	<title>Iniciar Sesion Afiliado</title>
<link rel="shortcut icon" href="../IMAGENES/LOGO_INICIO.png">
	<link rel="stylesheet" href="Iniciar SesionA.css">
</head>
<style type="text/css">
footer{
    
     
    left: 0;
    right: 0;
    bottom: 0;
     background: #98D8D6;
     height: auto;
     width: 100%;
     font-family:'Posterama';
     padding-top:5px;
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
                    <a href="../../Index.php">
                      <img src="../../IMAGENES/myhouse.png" alt="" class="imagen">
                      <span class="text-item">Inicio</span>
                      <span class="down-item"></span>
                    </a>
                </li>
			  <li><a href="../../NOSOTROS/Nosotros.php" alt="">
			         <img src="../../IMAGENES/Nosotros.png" alt="" class="imagen">
			         <span class="text-item">Nosotros</span>
			         <span class="down-item"></span>
			     </a>
			 </li>
			      <li> <a href="../../CONTACTANOS/Contactanos.php">
			      <img src="../../IMAGENES/descarga.png"  alt="" class="imagen">
			      <span class="text-item">Contactanos</span>
			      <span class="down-item"></span>			    
			           </a>
			      </li>
			    <li> <a href="Iniciar%20sesionA.php">
			         <img src="../../IMAGENES/Paciente.png" alt="" class="imagen">
			         <span class="text-item">Iniciar Sesion</span>
			         <span  class="down-item"></span>
			         </a>
			   </li>

			</ul> 
        </nav>
</header>
<div id="contenedor">
	<form action="VALIDAR_U.php" method="post" class="formulario" style=" margin-top:85px;">
        

	    <h1>Iniciar Sesion</h1>
	 	
            <label for="nombre">Nombre Usuario</label>
            <input type="text" name="Usuario" required  placeholder="usuario en mayuscula" />
            <label for="contraseña" >Contraseña:</label>
            <input type="password" name="contraseña" required placeholder="contraseña"/>
            
            <input type="submit" value="Iniciar sesión" class="button"></a><br>
			<a href="../Ocontrase%C3%B1a.php">Olvide mi contraseña</a></li> 
		
    </form> </div>
<footer style=" margin-top:520px;"> 
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