<?php

function sabermultiplo($numero){
    $residuo = fmod($numero, 5);

    if($residuo == 0){
        $residuo = fmod($numero, 7);

    if($residuo == 0){
        $numero = 'Si es multiplo';
    }
    else{
        $numero = 'No es multiplo';
    }
    }
    else{
        $numero = 'No es multiplo';
    }

    return 'respuesta: '.$numero;
}


function Inciso2(){

    $flag1=0;
    $matriz = [[],[],[]];
    $contador = 0;

    do{
        $n1 = rand(1,10);
        $n2 = rand(1,10);
        $n3 = rand(1,10);
       // echo $n1.' '.$n2.' '.$n3.'<br>';
        if ($n1%2 != 0 & $n2%2 == 0 & $n3%2 != 0){
            $flag1=1;    
        }
        $contador ++;
        $matriz[0][] = $n1;
        $matriz[1][] = $n2;
        $matriz[2][] = $n3;
    }while($flag1==0);

    for($i=0; $i<$contador; $i++){
        foreach($matriz as $lista )
        {
            echo "$lista[$i] ";
        }
        echo '<br>';
        }
        echo '<br>';
        $num = $contador*3;
        echo "$num numeros obtenidos de $contador iteraciones";
}


?>