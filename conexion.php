<?php
    
    $host = 'localhost';
    $user = 'airsoftb_naxsan';
    $password = '71811452Ale*';
    $db = 'airsoftb_naxsan';

    $conexion = @mysqli_connect($host,$user,$password,$db);

    

    if (!$conexion) {
        echo "Error en la conexion";
    } 

?>