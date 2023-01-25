<?php

$edad = $_POST["edad"];

switch ($edad) {
    case 1:
        echo "Eres menol";
        break;
    case 18:
        echo "Ya puedes ir a la cárcel porque tienes ".$edad;
        break;
    default:
        echo "juan";
        break;
}

?>