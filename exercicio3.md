O exercício 3 levou um pouco mais do meu tempo. A dificuldade foi ter o pensamento de que, para cada caractere ser contado individualmente, era necessário separá-lo como inteiro. Assim, a soma aconteceria juntando cada número, e não o valor total digitado no array. Para isso, usei o str_split e coloquei a variável $numeros, onde o usuário vai digitar, e cada dígito será quebrado separadamente, fazendo a soma total no final do exercício.

Coloquei também a variável $soma com valor 0, tanto para boas práticas quanto para evitar erros referentes a um possível valor já armazenado nesse código.

Funções usadas:

str_split = Converte uma string em um array.
intval = Converte qualquer valor para número inteiro.