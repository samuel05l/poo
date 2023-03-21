<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="style.css">
</head>  
<body>
    <form action="./db/functions.php" method="post" class="formulario">
    <h1>Login Form</h1>
     <div class="contenedor">

         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="email" name="usr" id="exampleInputEmail" placeholder="Correo Electronico">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name="pss"  id="exampleInputPassword" placeholder="Contraseña">
         
         </div>
         <p class="texto">Forgot password?</p>
         <input type="submit" value="submit" name="submit" class="button" >
         <p>Or login with</p>
         <button class="facebo">Faceboock</button>
         <button class="insta">Instagram</button>
         <p>Don't have account? <a class="link" href="home1.php">Signup Now </a></p>
     </div>

</body>
</html>