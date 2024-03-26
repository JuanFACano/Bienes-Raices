<?php
require 'app.php';

function incluriTemplate(string $nombre, bool $inicio = false)
{
  include TEMPLATES_URL . "/{$nombre}.php";
}
