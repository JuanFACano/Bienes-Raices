<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="build/css/app.css" />
    <title>Bienes Raices</title>
  </head>

  <body>
    <header class="header">
      <div class="contenedor contenido-header">
        <div class="barra">
          <a href="/index.html">
            <img
              class="logo-header"
              src="build/img/logo.svg"
              alt="Logotipo de Bienes Raices"
            />
          </a>
          <div class="mobile-menu">
            <img src="build/img/barras.svg" alt="icono menu responsive" />
          </div>
          <div class="derecha">
            <img
              class="dark-mode-boton"
              src="build/img/dark-mode.svg"
              alt="modo oscuro"
            />
            <nav class="navegacion">
              <a href="nosotros.html">Nosotros</a>
              <a href="anuncios.html">Anuncios</a>
              <a href="blog.html">Blog</a>
              <a href="contacto.html">Contacto</a>
            </nav>
          </div>
        </div>
        <!--.barra-->
      </div>
    </header>

    <main class="contenedor seccion">
      <h1>Conoce sobre Nosotros</h1>
      <div class="contenido-nosotros">
        <picture>
          <source srcset="buid/img/nosotros.webp" type="img/webp" />
          <source srcset="buid/img/nosotros.jpg" type="img/jpeg" />
          <img src="build/img/nosotros.jpg" alt="imagen nosotros" />
        </picture>
        <div class="texto-nosotros">
          <h4>25 Años de experiencia</h4>
          <p>
            Proin consequat viverra sapien, malesuada tempor tortor feugiat
            vitae. In dictum felis et nunc aliquet molestie. Proin tristique
            commodo felis, sed auctor elit auctor pulvinar. Nunc porta, nibh
            quis convallis sollicitudin, arcu nisl semper mi, vitae sagittis
            lorem dolor non risus. Vivamus accumsan maximus est, eu mollis mi.
            Proin id nisl vel odio semper hendrerit. Nunc porta in justo finibus
            tempor. Suspendisse lobortis dolor quis elit suscipit molestie. Sed
            condimentum, erat at tempor finibus, urna nisi fermentum est, a
            dignissim nisi libero vel est. Donec et imperdiet augue. Curabitur
            malesuada sodales congue. Suspendisse potenti. Ut sit amet convallis
            nisi.
            <br />
            <br />

            Aliquam lectus magna, luctus vel gravida nec, iaculis ut augue.
            Praesent ac enim lorem. Quisque ac dignissim sem, non condimentum
            orci. Morbi a iaculis neque, ac euismod felis. Fusce augue quam,
            fermentum sed turpis nec, hendrerit dapibus ante. Cras mattis
            laoreet nibh, quis tincidunt odio fermentum vel. Nulla facilisi.
          </p>
        </div>
      </div>
    </main>
    <section class="contenedor seccion">
      <h1>Más sobre Nosotros</h1>
      <div class="iconos-nosotros">
        <div class="icono">
          <img
            src="build/img/icono1.svg"
            alt="icono seguridad"
            loading="lazy"
          />
          <h3>Seguridad</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, a
            veritatis! Provident, aspernatur id incidunt laboriosam quam
            corporis harum sunt deleniti in omnis placeat debitis, voluptates
            doloremque repellendus alias non.
          </p>
        </div>
        <div class="icono">
          <img src="build/img/icono2.svg" alt="icono precio" loading="lazy" />
          <h3>Precio</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, a
            veritatis! Provident, aspernatur id incidunt laboriosam quam
            corporis harum sunt deleniti in omnis placeat debitis, voluptates
            doloremque repellendus alias non.
          </p>
        </div>
        <div class="icono">
          <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy" />
          <h3>A Tiempo</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, a
            veritatis! Provident, aspernatur id incidunt laboriosam quam
            corporis harum sunt deleniti in omnis placeat debitis, voluptates
            doloremque repellendus alias non.
          </p>
        </div>
      </div>
    </section>

    <footer class="footer seccion">
      <div class="contenedor contenedor-footer">
        <nav class="navegacion">
          <a href="nosotros.html">Nosotros</a
          ><a href="anuncios.html">Anuncios</a><a href="blog.html">Blog</a
          ><a href="contacto.html">Contacto</a>
        </nav>
      </div>
      <p class="copyrigth">
        Todos los derechos Reservados Bienes Raices 2023 &copy;
      </p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
  </body>
</html>
