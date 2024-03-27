<?php

// ? Base de Datos
require '../../includes/config/database.php';
$db = conectarDB();

// ? Consulta para traer Vendedor
$consulta = 'SELECT * FROM vendedores';
$resultado = mysqli_query($db, $consulta);

// ? Arreglo con errores

$errores = [];

$wc = '';
$titulo = '';
$precio = '';
$vendedorId = '';
$descripcion = '';
$habitaciones = '';
$estacionamiento = '';

// ? Ejecutar còdigo despues de que el usuario ejecute el formlario 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // ? Agregar Acciones
  $wc = mysqli_real_escape_string($db, $_POST['wc']);
  $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
  $precio = mysqli_real_escape_string($db, $_POST['precio']);
  $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
  $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
  $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
  $creado = date('Y/m/d');

  // ? Validacion de formulario

  if (!$titulo) {
    $errores[] = 'Debes añadir un titulo';
  }

  if (!$precio) {
    $errores[] = 'Debes añadir un Precio';
  }

  if (strlen($descripcion) < 10) {
    $errores[] = 'La descripción es obligatoria y debe tener al menos 50 caracteres';
  }

  if (!$habitaciones) {
    $errores[] = 'El número de habitaciones es obligatorio';
  }

  if (!$estacionamiento) {
    $errores[] = 'El número de lugares de estacionamiento es obligatorio';
  }

  if (!$wc) {
    $errores[] = 'El número de baños es obligatorio';
  }

  if (!$vendedorId) {
    $errores[] = 'Elije un vendedor';
  }


  // ? Valida que el arreglo de errores este vacio
  if (empty($errores)) {
    // ? Insertar en la BD
    $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitacion, wc, estacionamiento, creado, vendedor_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";

    $resultado = mysqli_query($db, $query);


    // ? Redireccionar usuario
    if ($resultado) {
      header('Location: /admin');
    }
  }
}

require '../../includes/funciones.php';
incluriTemplate('header');
?>
<main class="contenedor seccion">
  <h1>Crear</h1>
  <a href="/admin" class="boton-verde">Volver</a>

  <!-- Mostrar si hay errores -->
  <?php foreach ($errores as $error) : ?>
    <div class="alerta error">
      <?php echo $error ?>
    </div>
  <?php endforeach ?>



  <!-- Formulario -->
  <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
    <fieldset>
      <legend>Informacion General</legend>
      <label for="titulo">Titulo:</label>
      <input value="<?php echo $titulo; ?>" type="text" name="titulo" id="titulo" placeholder="Titulo propiedad">

      <label for="precio">Precio:</label>
      <input value="<?php echo $precio; ?>" type="number" name="precio" id="precio" placeholder="precio propiedad">

      <label for="imagen">imagen:</label>
      <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png">

      <label for="descripcion">Descripcion:</label>
      <textarea name="descripcion" id="descripcion" cols="30" rows="10"><?php echo $descripcion; ?></textarea>
    </fieldset>

    <fieldset>
      <legend>Informacion Propiedad</legend>

      <label for="habitaciones">Habitaciones:</label>
      <input value="<?php echo $habitaciones; ?>" type="number" name="habitaciones" id="habitaciones" placeholder="Ejm. 3" min="1" max="9">

      <label for="wc">baños:</label>
      <input value="<?php echo $wc; ?>" type="number" name="wc" id="wc" placeholder="Ejm. 3">

      <label for="estacionamiento">Estacionamiento:</label>
      <input value="<?php echo $estacionamiento; ?>" type="number" name="estacionamiento" id="estacionamiento" placeholder="Ejm. 3">
    </fieldset>
    <fieldset>
      <legend>Vendedor</legend>
      <select name="vendedor" id="vendedor">
        <option value="" selected>-- Seleccione --</option>
        <?php while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
          <option <?php echo $vendedorId == $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre'] . " ", $vendedor['apellido']; ?></option>
        <?php endwhile ?>
      </select>
    </fieldset>
    <input class="boton-verde" type="submit" value="Crear Propiedad">
  </form>
</main>

<?php incluriTemplate('footer') ?>