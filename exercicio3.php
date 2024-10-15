<?php
    if(isset($_POST['enviar'])){
        // Recebe os números digitados
        $numeros = $_POST['numero'];

        // Divide o número em dígitos individuais
        $array_numeros = str_split($numeros);
        
        $soma = 0;

        foreach($array_numeros as $digito){
            $soma += intval($digito); 
        }
        echo "A soma dos dígitos é: {$soma}";
    }
?>



