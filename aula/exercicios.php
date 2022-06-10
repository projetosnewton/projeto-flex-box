<?php
/* Construir um algoritmo que leia 2 números e
efetue a adição. Caso o valor somado seja
maior que 20, este deverá ser apresentando
somando-se a ele mais 8; caso o valor
somado seja menor ou igual a 20, este deverá
ser apresentado subtraindo-se 5

$numero1 =5;
$numero2 =25;

$soma = $numero1 + $numero2;
if ($soma > 20) {
    echo $soma + 8 . "<br>";
} elseif ($soma <= 20) {
    echo $soma - 5 . "<br>";
}*/

/*Entrar com um número e informar se ele é
divisível por 10, por 5, por 2 ou se não é
divisível por nenhum destes*/

$numero = 11;

if (($numero % 2) == 0 ) {
    echo 'e divisivel por 2<br>';
}elseif (($numero % 5) == 1 && $numero  ) {
    echo 'e divisivel por 5<br>';
}elseif (($numero % 10) != 0) {
    echo 'e divisivel por 10<br>';
}else {
    echo 'nao e divisivel<br>';
}

/*
     Entrar com nome, sexo e idade de uma
     pessoa. Se a pessoa for do sexo feminino e
     tiver menos que 25 anos, imprimir nome e a
     a mensagem: ACEITA. Caso contrário,
     imprimir nome e a mensagem: NÃO ACEITA.


$pessoa = [
    'nome' => 'newton',
    'sexo' => 'f',
    'idade' => 12
];

if ($pessoa['sexo'] == 'f' && $pessoa['idade' < 25]) {
    echo 'aceita <br>';
} else {
    echo 'nao aceita <br>';
}*/

/*
 Entrar com 3 números e imprimi-los em
    ordem decrescente (suponha números
    diferentes)


$numeros = [7, 2, 9];
$maior = 0;

if (($numeros[1] < $numeros[0]) && ($numeros[0] < $numeros[2])) {
    echo $numeros[1], $numeros[0], $numeros[2];

}else {
echo 'bug';
}
*/


    
?>





