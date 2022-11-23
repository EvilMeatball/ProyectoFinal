<?php

$conexion = new mysqli("", "id17365294_admin", "G\qlw|0-zpb7sKeK", "id17365294_escuela");
    if($conexion){
        echo "la gestion fue exitosa";
    }
    
    else{
        echo "Fallo la gestion";
    }
    
?>