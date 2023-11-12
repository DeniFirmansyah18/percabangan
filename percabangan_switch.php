<?php

$posisi = 3;

switch($posisi){
    case 1:
        echo "Posisi anda adalah Admin";
        break;
    case 2:
        echo "Posisi anda adalah Moderator";
        break;
    case 3:
        echo "Posisi anda adalah Member";
        break;
    default;
        echo "Anda tidak memiliki posisi";
}

?>