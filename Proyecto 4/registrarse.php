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
      <h2 class="event-list-title">Formulario de Registro del Estudiante:</h2>
    </div>
    <section id="formulario" class="formulario">
      <div class="container">
        <center>
        <form method="POST">
            <label for="CI">Cédula de Identidad: </label>
            <input type="text" placeholder="Cédula de Identidad" id="CI" name="CI"> <br>
            <label for="Name">Nombre del Estudiante: </label>
            <input type="text" placeholder="Nombre" id="Name" name="Name"> <br>
            <label for="Last">Apellidos del Estudiante: </label>
            <input type="text" placeholder="Apellidos" id="Last" name="Last"> <br>
            <label for="Direccion">Dirección: </label>
            <input type="text" placeholder="Direccion" id="Direccion" name="Direccion"> <br>
            <label for="Edad">Edad: </label>
            <input type="text" placeholder="Edad" id="Edad" name="Edad"> <br>
            <label for="nac">Fecha de nacimiento: </label>
            <input type="" placeholder="Fecha de nacimiento" id="nac" name="nac"> <br>
            <label for="cel">Celular: </label>
            <input type="text" placeholder="Celular" id="cel" name="cel"> <br>
            <label for="correo">Correo electrónico: </label>
            <input type="email" placeholder="Correo electrónico" id="correo" name="correo"> <br>
            <label for="ins">Fecha de inscripción: </label>
            <input type="text" placeholder="Fecha de Inscripción" id="ins" name="ins"> <br>
            <label for="conclu">Fecha de conclusión de estudios en el colegio: </label>
            <input type="text" placeholder="Fecha de conclusión" id="conclu" name="conclu"> <br>
            <label for="colegio">Nombre del Colegio: </label>
            <input type="text" placeholder="Colegio" id="colegio" name="colegio"> <br>
            <label for="carrera">Carrera: </label>
            <input type="text" placeholder="Carrera" id="carrera" name="carrera"> <br>
            <input id="btnEnviar" name="register" type="submit" value="Enviar"/>
        </form>
        <?php
            include("registro.php");
        ?>
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



