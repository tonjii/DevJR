<?php
    function e_palindromo($str) {
        return $str === strrev($str);
    }

    if (isset($_POST['frase'])) {
        // Recebe a frase/palavra inserida pelo usuário
        $frase = $_POST['frase'];
                $frase_limpa = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $frase));

        // Verifica se já é um palíndromo
        if (e_palindromo($frase_limpa)) {
            echo "<p>A frase/palavra '{$frase}' já é um palíndromo!</p>";
        } else {
            $pode_ser_palindromo = false;

            // Loop para tentar remover uma letra por vez
            for ($i = 0; $i < strlen($frase_limpa); $i++) {
                // Remove a letra na posição $i
                $frase_modificada = substr($frase_limpa, 0, $i) . substr($frase_limpa, $i + 1);
                
                // Verifica se a string resultante é um palíndromo
                if (e_palindromo($frase_modificada)) {
                    $pode_ser_palindromo = true;
                    break;
                }
            }

            // Exibir o resultado
            if ($pode_ser_palindromo) {
                echo "<p>A frase/palavra '{$frase}' pode se tornar um palíndromo removendo uma letra!</p>";
            } else {
                echo "<p>A frase/palavra '{$frase}' não pode se tornar um palíndromo, mesmo removendo uma letra.</p>";
            }
        }
    } else {
        echo "<p>Nenhuma frase/palavra foi inserida.</p>";
    }
?>

