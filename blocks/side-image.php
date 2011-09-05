<?php

function showInfo($var) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

if (arg(0) == 'node' && is_numeric(arg(1))) {
  $node = node_load(arg(1));
  foreach($node->field_zijlijn_plaatje as $plaatje) {
    // showInfo($plaatje);
    $image = $plaatje[0];
    $url = file_create_url($image['uri']);
    echo "<image class='zijlijnPlaatje' src='$url'>";
  }
}
?>

