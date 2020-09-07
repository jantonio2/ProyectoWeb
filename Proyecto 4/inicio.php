<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Universidad Católica Boliviana</title>
    <link rel="icon" type="image/jpg" href="images/logo.jpg"/>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <header class="header">
      <div class="container">
        <figure class="logo">
          <img src="images/logo.jpg" height="70" alt="Logo de universidad católica boliviana" />
        </figure>
        <nav class="menu">
          <ol>
            <li>
              <a class="link" href="index.php">Página Principal</a>
            </li>
            <li>
              <a class="link" href="inicio.php">Registrarse</a>
            </li>
          </ol>
        </nav>
      </div>    
    </header>
    <section class="hero">
      <div class="container">
        <h1>
          Universidad Católica Boliviana <br>
          San Pablo
        </h1>
        <img class="hero-image" src="images/hero.jpg" width="550" height="300" alt="imagen principal del sitio"> 
      </div>
    </section>
        <div class="container">
      <h2 class="event-list-title">Inicio de Sesión:</h2>
    </div>
    <section id="formulario" class="formulario">
      <div class="container">
      <center>
		<div class="iniciosesion">
			<form method="POST">
				<h1>Iniciar Sesión</h1>
				<input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario"><br>
				<input type="password" name="password" id="password" placeholder="Contraseña"><br>
				<input id="btnEnviar" name="btnEnviar" type="submit" value="Enviar"/>
			</form>		
		</div>		
	</center>
      </div>
    </section>
    <section id="contacto" class="contact">
      <div class="container">
        <form action="/suscripcion/" class="form-email">
          <h3>¿Quieres preguntar?</h3>
          <input type="text" placeholder="Escribe tus dudas" id="email">
          <button>Enviar</button>
        </form>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div>
          <p>Universidad Católica Boliviana</p>
        </div>
        <div>
          <p>
            Diseñado por Antonio Rocha
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>

<?php
	if(isset($_POST['btnEnviar'])) {

		$usuario = $_POST['usuario'];
        $password = $_POST['password'];	
        
        $us = 'ucb';
        $ps = '123';

		$usuario_registrado = false;
		$password_correcta = false;

        if($usuario == $us){
            $usuario_registrado = true;
            if($password == $ps){
                $password_correcta = true;
            } else {
                $password_correcta = false;
            }
        }


		if($password_correcta){
			header('Location: registrarse.php');
		}

		if($usuario_registrado && !$password_correcta){
			?>
			<script>
				alert("Contraseña incorrecta");
			</script>
			<?php
		}

		if(!$usuario_registrado && !$password_correcta){ 
			?>
			<script>
				alert("Usuario no registrado");
			</script>
			<?php
		}
	}
?>