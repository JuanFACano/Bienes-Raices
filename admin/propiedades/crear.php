<?php
require '../../includes/funciones.php';;
incluriTemplate('header');
?>
<main class="contenedor seccion">
  <h1>Crear</h1>
  <a href="/admin" class="boton-verde">Volver</a>
  <!-- Formulario -->
  <form class="formulario">
    <fieldset>
      <legend>Informacion General</legend>
      <label for="titulo">Titulo:</label>
      <input type="text" name="titulo" id="titulo" placeholder="Titulo propiedad">

      <label for="precio">Precio:</label>
      <input type="number" name="precio" id="precio" placeholder="precio propiedad">

      <label for="imagen">imagen:</label>
      <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png">

      <label for="descripcion">Descripcion:</label>
      <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
    </fieldset>

    <fieldset>
      <legend>Informacion Propiedad</legend>

      <label for="habitaciones">Habitaciones:</label>
      <input type="number" name="habitaciones" id="habitaciones" placeholder="Ejm. 3" min="1" max="9">

      <label for="wc">baños:</label>
      <input type="number" name="wc" id="wc" placeholder="Ejm. 3">

      <label for="estacionamiento">Estacionamiento:</label>
      <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ejm. 3">
    </fieldset>
    <fieldset>
      <legend>Vendedor</legend>
      <select name="vendedor" id="vendedor">
        <option selected>-- Seleccione --</option>
        <option value="1">Juan</option>
        <option value="2">Karen</option>
      </select>
    </fieldset>
    <input class="boton-verde" type="submit" value="Crear Propiedad">
  </form>
</main>

<?php incluriTemplate('footer') ?>