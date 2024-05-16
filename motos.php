<?php
// Lee el contenido del archivo JSON
$motos = json_decode(file_get_contents('motos.json'), true);

// Itera sobre cada usuario y genera el HTML de las tarjetas
foreach ($motos as $moto) {
    echo '<div class="card">';
    echo '<div class="contenido">';
    echo '<h3 class="model">' . $moto['modelo'] . '</h3>';
    echo '<p class="descript">' . $moto['descripcion'] . '</p>';
    echo '<h2 class="precio">El precio es ' . $moto['precio'] . '</h2>';
    echo '</div>';
    echo '<div class="imagen">';
    echo '<img class="moto" src="' . $moto['url_img'] . '" alt="Motos">';
    echo '</div>';
    echo '</div>';
}
?>