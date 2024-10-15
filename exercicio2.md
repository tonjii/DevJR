O segundo exercício complica um pouquinho mais, mas ainda não em um nível que não dê para ser feito. Ele adiciona uma condição e também a função strlen, que é como se fosse uma pesquisa dentre as strings mediante à sua necessidade. A lógica usada foi dividir uma frase em pedaços e ver, dentre os pedaços, qual é o maior, utilizando $maior_palavra e $palavra. Fazendo um if/se — se a palavra for maior que $maior_palavra, então $maior_palavra é igual à $palavra, ocasionando na maior palavra que vai sair no input/echo.

Utilizei uma nova função:

$palavras = explode(' ', $frase);

Ela separa a string como um todo em várias partes.

Já a strlen:

strlen($palavra)

Retorna a quantidade de caracteres de uma string.


