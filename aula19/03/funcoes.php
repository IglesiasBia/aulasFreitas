<?php

    function soma($x,$y){
        return $x + $y;
    }

    function subtracao($x, $y){
        return $x - $y;
    }

    function multiplicacao($x, $y){
        return $x * $y;
    }

    function divisao($x, $y){
        return $x / $y;
    }

    function resto($x, $y){
        if($x % $y == 0){
            echo "O número é par <br>";
        }else{
            echo "O número é ímpar <br>";
        }
    }

     function verificarprimo($a){
         $divisores = 0;
         for ($i=1; $i <= $a; $i++){
             if($a % $i == 0){
                 $divisores++;
             }
         }
         if($divisores == 2){
             return true;
         }else{
             return false;
         }
     }

    /*
    function primo(){
        $nums = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        
        $contador = 0;
        while($contador < 10){
            $cont= 2;
            while($cont < 2){

                
            }
            if($nums[$contador] % 1 == 0 && $nums[$contador] % $nums[$contador] == 0){
                echo "O número é primo " . $nums[$contador] . "<br>";
            }else {
                echo "O número não primo <br>";
            }
            
            $contador++;
            }
        
    }
    */
?>