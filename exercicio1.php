<?php
    if (isset($_POST['enviar'])) {
        // Recebe a palavra enviada pelo formulário
        $palavra = $_POST['palavra'];
        
        // Remove as vogais da palavra
        $palavra_sem_vogais = str_replace(
            ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'], 
            '', 
            $palavra
        );
        
        // Exibe o resultado
        echo "<h1>Resultado:</h1>";
        echo "<p>Sua palavra sem as vogais ficará: <strong>$palavra_sem_vogais</strong></p>";
    } else {
        echo "Nenhuma palavra foi enviada.";
    }
?>
