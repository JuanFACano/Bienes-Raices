<?php
require 'includes/funciones.php';;
incluriTemplate('header');
?>
<main class="contenedor seccion">
  <h1>Contacto</h1>
  <picture>
    <source srcset="build/img/destacada3.webp" type="img/webp" />
    <source srcset="build/img/destacada3.jpg" type="img/jpeg" />
    <img src="build/img/destacada3.jpg" alt="Imagen contacto" loading="lazy" />
  </picture>
  <h2>Llene el formulario de Contacto</h2>
  <form class="formulario">
    <fieldset>
      <legend>Información Personal</legend>
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" placeholder="Tu Nombre" />
      <label for="email">E-mail</label>
      <input type="email" id="email" placeholder="Tu Email" />
      <label for="phone">Teledono</label>
      <input type="tel" id="phone" placeholder="Tu Telefono" />
      <label for="mensaje">Telefono</label>
      <textarea id="mensaje"></textarea>
    </fieldset>
    <fieldset>
      <legend>Información Sobre la Propiedad</legend>
      <label for="opciones">Vende o Compra</label>
      <select id="opciones">
        <option value="" disabled selected>-- seleccione --</option>
        <option value="Compra">Compra</option>
        <option value="Vende">Vende</option>
      </select>
      <label for="presupuesto">Precio o Presupuesto</label>
      <input type="number" id="presupuesto" />
    </fieldset>
    <fieldset>
      <legend>Información sobre la Propiedad</legend>
      <p>Como desea ser contactado</p>
      <div class="forma-contacto">
        <label for="contactar-telefono">Telefono</label>
        <input name="contacto" type="radio" value="telefono" id="contactar-telefono" />
        <label for="contactar-email">E-mail</label>
        <input name="contacto" type="radio" value="email" id="contactar-email" />
      </div>
      <p>
        Si eligio telefono, elija la fecha y la hora para ser contactado
      </p>
      <label for="fecha">Fecha</label>
      <input type="date" id="fecha" />

      <label for="hora">Hora</label>
      <input type="time" id="hora" min="09:00" max="18:00" />
    </fieldset>
    <input type="submit" value="Enviar" class="boton-verde" />
  </form>
</main>

<?php incluriTemplate('footer') ?>