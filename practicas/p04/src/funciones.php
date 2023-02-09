<?php

function sabermultiplo($numero){
    $residuo = fmod($numero, 5);

    if($residuo == 0){
        $numero = 'Si es multiplo';
    }
    else{
        $residuo = fmod($numero, 7);

    if($residuo == 0){
        $numero = 'Si es multiplo';
    }
    else{
        $numero = 'No es multiplo';
    }
    }

    return 'respuesta: '.$numero;
}
?>