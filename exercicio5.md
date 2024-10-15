Esse exercicio eu já percebi que aumentou um pouco mais o nível de complexidade. Demorei para achar as funções necessárias para utilizar nesse código, afim de fazer o que se pede. Utilizei funções que não tive contato antes, elas foram : 

STRTOLOWER - Ela realiza a conversão da string para letras minúsculas, que é um dos passos necessários para realizar o exercicio

PREG_REPLACE - Usada para procurar e substituir partes de uma string com base em um padrão de expressão regular, no caso a remoção  - [^A-Za-z0-9] - substuindo por uma string vazia ' ' e deixando apenas as letras minusculas == $texto_limpo = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $texto));

STRREV - inverte a ordem dos caracteres de uma string, retornando a string de trás para frente.

                if ($texto_limpo === strre($texto_limpo)

E mediante a essa condição de comparar o texto escrito pelo usuário, com o método de inverter a string e condicionar ela a caso seja igual ao texto digitado, colocar a mensagem que é um parindromo

Tive dificuldade em deixar colorido na hora da saída, o resultado aparece corretamente, mas a cor não é alterada. 


