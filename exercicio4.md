O exercício 4 foi um pouco mais complicado, especialmente a parte de gerar o array com os valores colocados. Da primeira vez, os números estavam sendo contados quase infinitamente, preenchendo toda a página. Apaguei o código e comecei novamente, com o auxílio de documentações e vídeos. O looping de $numeros_lista — divisível por 3/5 — também deu trabalho, mas foi resolvido. Usei o implode no final para converter o array em uma única string.

Função nova:

implode(string $separator, array $array): string

Ela junta os elementos de um array em uma única string.

Exemplo:

echo "A listagem é: " . implode(", ", $numeros_lista);
