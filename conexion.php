<?php
    
    $host = 'localhost:3316';
    $user = 'airsoftb_aleigles';
    $password = '71811452Ale*';
    $db = 'airsoftb_naxsan';

    $conexion = @mysqli_connect($host,$user,$password,$db);

    

    if (!$conexion) {
        echo "Error en la conexion";
    } 

?>