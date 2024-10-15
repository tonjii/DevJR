O primeiro exercício não teve quase nenhuma dificuldade, é simples a lógica. Um input simples, onde na saída do valor, você manipula uma string ao seu favor, no caso, a necessidade da demanda. É solicitado que retorne um valor, e esse valor precisa ser manipulado (tirar as vogais) e, para isso, com 5 minutos de pesquisa, você percebe que para manipular essa string/valor, é necessário usar str_replace, uma função que realiza a substituição de caracteres ou sequências de caracteres em uma string.

function str_replace(
    array|string $search,
    array|string $replace,
    array|string $subject,
)

Seguindo a documentação da função, percebi que teria que substituir cada parâmetro em relação ao que eu precisava — retirar as vogais.

Feito isso:

$palavra_sem_vogais = str_replace(
    ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'], 
    '', 
    $palavra
);
