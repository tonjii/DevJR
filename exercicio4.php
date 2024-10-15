<?php
    if(isset($_POST['enviar'])){
        $numero = $_POST['numero'];

        // Verifica se o número é um inteiro maior que zero
        if (filter_var($numero, FILTER_VALIDATE_INT) !== false && $numero > 0) {
            // Inicializa um array para armazenar os números
            $numeros_lista = [];

            // Gera a lista de números de 1 até o número informado
            for ($i = 1; $i <= $numero; $i++) {
               if($i % 3 == 0 && $i % 5 == 0 ){
                $numeros_lista[] = "HELLO WORLD"; //DIVISIVEL POR 3 OU 5
               }elseif($i % 3 == 0 ){
                $numeros_lista[] = "HELLO"; // Divisivel por 3
               }elseif ($i % 5 == 0){
                $numeros_lista[] = "WORLD"; // Divisivel por 5
               } else {
                        $numeros_lista[] = $i; // NÃO divisível por 3 ou 5
               }
            }

            // Converte o array em uma string para exibição
            echo "Os números foram: " . implode(", ", $numeros_lista);
        } else {
            echo "Por favor, digite um número inteiro maior que zero.";
        }
    }
?>



