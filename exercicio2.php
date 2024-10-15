
<?php
        if(isset($_POST['enviar'])){
            $frase = $_POST['frase'];
            
            // Dividindo a frase em palavras

            $palavras = explode(' ', $frase);

            // inicializando a variável para armazenar a MAIOR PALAVRA // maiores

            $maior_palavra = '';

            // looping para encontrar a palavra com mais caracteres 

            foreach($palavras as $palavra) {
                if(strlen($palavra) > strlen($maior_palavra)){
                    $maior_palavra = $palavra;
                }
            }
            echo "A palavra com o maior número de caracteres é: $maior_palavra";
        }
?>


