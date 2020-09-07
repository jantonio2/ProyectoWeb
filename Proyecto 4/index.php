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
      <h2 class="event-list-title">Sobre la Universidad:</h2>
    </div>
    <section id="eventos" class="event-list">
      <div class="container">
        <article class="event">
          <figure class="event-imageContainer">
            <img class="event-image" src="images/campus.jpg" width="500" />
          </figure>
          <div class="event-detail">
            <h3 class="event-title">Nuestra Universidad</h3>
            <p class="event-description">La U.C.B. desarrolla su campo de acción en cinco ámbitos: formación, investigación, interacción social, pastoral y gestión institucional.</p>
            <a class="event-url" href="" target="_blank">Conoce la UCB</a>
          </div>
        </article>
        <article class="event">
          <figure class="event-imageContainer">
            <img class="event-image" src="images/oferta.jpg" width="500" />
          </figure>
          <div class="event-detail">
            <h3 class="event-title">Oferta académica</h3>
            <p class="event-description">Conoce la oferta académica en pregrados de la U.C.B. Encontrarás información general sobre las particularidades de cada uno de los programas.</p>
            <a class="event-url" href="" target="_blank">Nuestros programas</a>
          </div>
        </article>
        <article class="event">
          <figure class="event-imageContainer">
            <img class="event-image" src="images/internacionalizacion.jpg" width="500" />
          </figure>
          <div class="event-detail">
            <h3 class="event-title">Internacionalización</h3>
            <p class="event-description">La U.C.B. ofrece programas de intercambio en más de 160 países en 4 continentes además de otras experiencias académicas que permiten una experiencia intercultural.</p>
            <a class="event-url" href="" target="_blank">Conoce más</a>
          </div>
        </article>
        <article class="event">
          <figure class="event-imageContainer">
            <img class="event-image" src="images/ucbx.jpeg" width="500" />
          </figure>
          <div class="event-detail">
            <h3 class="event-title">UCBx Educación Virtual</h3>
            <p class="event-description">Los programas de educación virtual permite la formación a distancia con el uso de la tecnología en nuestra plataforma virtual.</p>
            <a class="event-url" href="" target="_blank">Explorar UCBx</a>
          </div>
        </article>
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