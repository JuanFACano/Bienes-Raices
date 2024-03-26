<?php
require 'includes/funciones.php';;
incluriTemplate('header');
?>
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
      <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy" />
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

<?php incluriTemplate('footer') ?>