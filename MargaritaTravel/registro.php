<?php
include("conexion.php");
$Consulta1=Mysqli_query($enlace,"SELECT * From clientes ");
$datos=mysqli_fetch_array($Consulta1);
echo $datos['nombre'];

 
?>



<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Registro - Margarita Travel</title>
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/icon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">

          <div class="col-md-6">
            <img src="imagenes/logo.png" alt="margaritatravel" width="200">
          </div>

          <div class="col-md-6">
            <ul class="social-header list-inline text-xs-right">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/cesarrequena18"></a>
                  <span class="fb-stack fa-3x">
                    <i class="fab fa-facebook-square"></i>
                  </span>
                <a href="https://twitter.com/Jirafaax"></a>
                  <span class="twitter-stack fa-3x">
                    <i class="fab fa-twitter"></i>
                  </span>
                <a href="https://www.instagram.com/@requenacesar/?hl=es"></a>
                  <span class="instagram-stack fa-3x">
                    <i class="fab fa-instagram"></i>
                  </span>
                
              </li>
            </ul>
          </div>
          
        </div>
      </div>

      <div class="menu-bar text-xs-right">
        <nav class="container" role="menu">
          <ul class="menu-list list-inline">
            <li class="list-inline-item">
              <a href="http://localhost/margaritatravel/inicio.html">Inicio</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Tours</a>
            </li> 
            <li class="list-inline-item">
              <a href="#">Transporte</a>
            </li> 
            <li class="list-inline-item">
              <a href="#">Nosotros</a>
            </li>   
            <li style="float:right" class="list-inline-item">
              <a href="http://localhost/margaritatravel/registro.html">Registrarse</a>
            </li> 
            <li style="float:right" class="list-inline-item">
              <a href="http://localhost/margaritatravel/login.html">Login</a>
            </li> 
          </ul>
        </nav>
      </div>
    </header>

  <div id="form-registro">
    <div class="container">
    	<div align="center" class="formulario">
			<form action="" method="POST" name="culito">
				<p>Nombre</p>
				<input type="text" name="nombre" placeholder="Nombre" >
				<br>
				<p>Apellido</p>
				<input type="text" name="apellido" placeholder="Apellido" >
				<br>
				<p>Email</p>
				<input type="email" name="email" placeholder="xyz@algo.com" >
				<br>
				<p>Contraseña</p>
				<input type="password" name="contraseña" placeholder="contraseña" >
				<br>
				<br>
				<input type="submit" name="Enviar" value="Enviar">
			</form>
      <?php 
      if (isset($_POST['Enviar'])) {
        $Nombre=$_POST['nombre'];
        $Contrasena=$_POST['contraseña'];
        $Apellido=$_POST['apellido'];
        $Email=$_POST['email'];

        if (empty($Nombre) or empty($Contrasena)or empty($Apellido)or empty($Email)) {
          echo "<script> alert('Error, dejaste un campo vacio.'); </script>";

        }else{
          $ConsultaExisteCe= mysqli_query($enlace,"SELECT * from clientes where email='$Email'");
          if (mysqli_num_rows($ConsultaExisteCe)>=1) {
            echo "<script> alert('Error, Email ya registrado.'); </script>";
          }else
          {
            mysqli_query($enlace,"INSERT INTO clientes(nombre,apellido,email,contraseña) Values('$Nombre','$Apellido','$Email','$Contrasena')");
               echo "<script>
                      alert('Registrado con exito.');
                      window.location= 'inicio.html'
                  </script>";
            }
          }
        }
       ?>
			</div>
	<div class="row margin-top-60 siddebars-zone">
          <div class="col-sm-6">
            <h4>Contactenos</h4>

            <p> fghjklñlkj hgfdfvghjkol hgfcdcfghjk hgfhjk</p>

            <p> fghjklñlkj hgfdfvghjkol hgfcdcfghjk hgfhjk fghjkjhgfghjk ghjkjhgf</p>

            <p> fghjklñlkj hgfdfvghjkol hgfcdcfghjk hgfhjk fghj</p>
          </div>
          <div class="col-sm-6">
            <h4>Siguenos en las redes sociales</h4>
              <ul class="list-unstyled">
                <li>
                  <a href="https://www.facebook.com/cesarrequena18">Facebook</a>
                </li>
                <li>
                  <a href="https://twitter.com/Jirafaax">Twitter</a>
                </li>
                <li>
                  <a href="https://www.instagram.com/@requenacesar/?hl=es">Instagram</a>
                </li>
              </ul>
          </div>
        </div>
     </div>

    </div>

  <footer>
    <div class="container">
          <strong>Margarita Travel</strong> &copy;2018 - Todos los derechos reservados. Sitio diseñado por cesar Requena.
    </div>
  </footer>      

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>	