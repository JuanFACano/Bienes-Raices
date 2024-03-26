<?php
require 'includes/funciones.php';;
incluriTemplate('header');
?>

<main class="contenedor seccion contenido-centrado contenido-anuncio">
  <h1>Casa en venta frente al bosque</h1>
  <picture>
    <source srcser="build/img/destacada.webp" type="img/webp" />
    <source srcser="build/img/destacada.jpg" type="img/jpeg" />
    <img loading="lazy" src="build/img/destacada.jpg" alt="iamgen de la propiedad" />
  </picture>
  <div class="resumen-propiedad">
    <p class="precio">$300,000,000</p>
    <ul class="icono-caracteristicas">
      <li>
        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="wc" />
        <p>3</p>
      </li>
      <li>
        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt=estacionamiento" />
        <p>3</p>
      </li>
      <li>
        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="dormitorios" />
        <p>3</p>
      </li>
    </ul>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur
      accusantium voluptatem nemo obcaecati odit optio dignissimos magni
      accusamus sed temporibus beatae odio sunt dolores quod libero,
      repellat nesciunt sit quam, ab dolore nulla expedita deleniti iure.
      Repellendus asperiores facilis minima fugit temporibus mollitia
      maiores delectus error, impedit ratione quos rem sit. Repellat ut
      adipisci id iste amet voluptate laboriosam sapiente ea fugiat error
      sit debitis molestias, voluptas iure laborum est eligendi, porro
      quibusdam veritatis sunt dolorum quo! Beatae, explicabo laudantium
      exercitationem accusamus quas repudiandae deleniti delectus dicta
      officiis doloribus maiores illo commodi perspiciatis inventore quo
      atque repellat cum illum autem ab blanditiis aut porro. Dolore ducimus
      dolores reiciendis illum nobis natus possimus laboriosam vitae, rerum
      ab error enim inventore nam doloremque, exercitationem quo ipsa
      aperiam! Eligendi aliquam repellat excepturi ratione, corrupti veniam
      facilis quas error porro. Nesciunt in neque nobis, minus nisi officiis
      voluptate sed illum consequuntur fugit pariatur maxime, beatae ut
      repellendus similique vero molestiae eligendi nihil vitae numquam
      doloribus. Repellat obcaecati molestiae, est odit neque animi illum
      amet consectetur vero iste eos aspernatur. Minus laborum pariatur,
      temporibus nostrum ut vitae similique distinctio dolores voluptatem.
      Deleniti eos temporibus esse modi veritatis ipsa iusto, rerum officiis
      eius exercitationem quos quisquam?
    </p>
  </div>
</main>

<?php incluriTemplate('footer') ?>