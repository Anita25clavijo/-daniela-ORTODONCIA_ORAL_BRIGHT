<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"> 
	<title>Registro</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="Registro.css">
</head>
<body>
	<form class="formulario">
   <header>
		<nav class="navegacion">
			<ul class="menu">
			
               <li class="frist-item">
                    <a href="Index.php">
                      <img src="../IMAGENES/myhouse.png" alt="" class="imagen">
                      <span class="text-item">inicio</span>
                      <span class="down-item"></span>
                    </a>
                </li>
			  <li><a href="NOSOTROS/Nosotros.php" alt="">
			         <img src="../IMAGENES/Nosotros.png" alt="" class="imagen">
			         <span class="text-item">nosotros</span>
			         <span class="down-item"></span>
			     </a>
			 </li>
			      <li> <a href="../CONTACTANOS/Contactanos.php">
			      <img src="../IMAGENES/descarga.png"  alt="" class="imagen">
			      <span class="text-item">contactanos</span>
			      <span class="down-item"></span>			    
			           </a>
			      </li>
			    <li> <a href="../INICIO_SESION/INICIAR_SESION_AFILIADO/Iniciar%20sesionA.php">
			         <img src=../"IMAGENES/Paciente.png" alt="" class="imagen">
			         <span class="text-item">Iniciar Seion</span>
			         <span  class="down-item"></span>
			         </a>
			   </li>
            </ul>
       </nav>
</header>

	    <h1>Regístrate</h1>
		<div class="contenedor">
			<label for="Tipodocumento">Tipo de documento:</label>
		    <div class="select-box">
		    	<select>
		    		<option value="" disabled selected>Selecciona</option>
		    		<option value="D">Cédula de ciudadanía</option>
		    		<option value="P">Tarjeta de identidad</option>	
		    		<option value="P">Cédula de Extranjería</option>	
		    		<option value="P">Registro Civil</option>		    		
		    	</select>
		    </div>		
            <label for="Númerodocumento">Número de documento:</label>
            <input tye="number" name="Númerodocumento" id="Númerodocumento">
            <label for="Fn">Fecha de nacimiento DD/MM/AAA:</label>
            <input tye="text" name="Fn" id="Fn">
            <label for="Nb">Nombre:</label>
            <input tye="text" name="Nb" id="Nb">
            <label for="Ap">Apellidos:</label>
            <input tye="text" name="Ap" id="Ap">
            <label for="contraseña">Contraseña:</label><p>Usa ocho caracteres con minimo dos numeros</p>
            <input type="password">
            <label for="Cc">Confirmar contraseña:</label>
            <input type="password">
            <label for="Correo">Correo electrónico:</label>
            <p>Recuerda registrar una cuenta de correo personal</p>
            <input type="email" name="Correo" id="Correo">
            <label for="Confirmacorreo">Confirma tu correo electrónico:</label>
            <input type="email" name="Confirmacorreo" id="Confirmacorreo">
            <label for=Teléfono>Teléfono celular:</label>
            <input type="text" name="Teléfono" id="Teléfono">
            <input type="checkbox" name="terminos" id="terminos">Acepto términos y condiciones
            <input type="submit" name="Registrarse" class="button">
		</div>

	</form>
</body>
</html>