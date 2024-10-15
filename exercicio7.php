<?php
    if (isset($_POST['enviar'])){
        $num1 = intval($_POST['num1']);
        $num2 = intval($_POST['num2']);

        // caso os numeros forem iguais 
        if ($num1 == $num2){
            echo "<p>Os dois números são iguais. Retornando o valor: $num1</p>";
        }
        
        // Caso o segundo número seja menor que o primeiro 
            else if ($num2 < $num1) {
                echo "<p> O segundo número é menor que o primeiro. Retornando 0.</p>";
            }
        // Caso Geral, somando os números entre $num1 e $num2
        
        else {
            $soma =  0;
                for ($i = $num1; $i <= $num2; $i++){
                    $soma += $i;
                }
                echo "<p>A soma de todos os números entre $num1 e $num2 (incluindo-os) é: $soma</p>";
        }



    }







?>