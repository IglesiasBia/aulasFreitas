<?php
    include "funcoes.php";

    $x = 10;
    $y = 10;
    
    echo soma($x, $y) . "<br>";
    echo subtracao($x, $y). "<br>";
    echo multiplicacao($x, $y) . "<br>";
    echo divisao($x, $y) . "<br>";
    echo resto($x, $y);
    echo primo();
    
    $vetor = array();
    $a = 1;
    while (count($vetor) < 10) {

        if(verificarprimo($a) == true){
            array_push($GLOBALS["vetor"],$a);
        }
        $a++;

    }
    echo "<table border='1'><tr>";
    for ($i=0; $i < 10; $i++){
        echo "<td>".$vetor[$i]."</td>";
    }
    echo "</tr></table>";
?>