<?php
    if(isset($_POST['enviar'])){
        $texto = $_POST['texto'];
             $texto_limpo = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $texto));

                if ($texto_limpo === strrev($texto_limpo)){
                 echo "<p class='palindromo' > A palavra/frase '{$texto}' é um palíndromo. </p>";
        }else{
                echo "<p class='nao-palindromo'> A palavra/frase '{$texto}' não é um palíndromo. </p>";
            }
          }
?>

