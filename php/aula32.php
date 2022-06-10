<?php
//super globais

/**
 * $GLOBALS[''] //super global
 * $_SERVER[''] //retorna varios indices so procurar no manual v
*/

$a = 2;
$b = 5;

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'];
}

echo $_SERVER['PHP_SELF'];