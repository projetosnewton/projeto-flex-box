<?php

$nome = $_POST['nome'];
$email = $_POST['email'];


//nome
if ($nome != null) {
    echo "$nome <br>";
}else {
    echo "nao e valido <br>";
}

//email
if ($email != null) {
    echo "$email <br>";
}else {
    echo "nao e valido <br>";
}
