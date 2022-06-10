<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIMPEZA</title>
</head>
<body>
    <?php
    //funçao (filter_input - filter_var)
    //sanitizaçao
    //FILTER_SANITIZE_NUMBER_INT
    //FILTER_SANITIZE_EMAIL
    //FILTER_SANITIZE_SPECIAL_CHARS
    //FILTER_SANITIZE_URL

    //isset se existe alguma coisa
    if(isset($_POST['enviar'])):
        //array de erros
        $erros = [];

        //filtros de limpeza
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        

        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        if(!filter_var($idade, FILTER_VALIDATE_INT)):
            $erros[] = 'a idade presisa ser um inteiro';
        endif;

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        

        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
        


        //exibir erros
        //empty verifica se a variavel esta vazia
        if(!empty($erros)):
            foreach($erros as $erro):
                echo "<li> $erro </li>";
            endforeach;
        else:
            echo'parabens tudo certo';
        endif;
    endif;
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?> "method="POST">
        idade: <input type="text" name="idade">
        <br>
        NOME: <input type="text" name="nome">
        <br>
        EMAIL: <input type="Email" name="email">
        <br>
        URL: <input type="text" name="url">
        <br>

        <button type="submit" name="enviar">enviar</button>
    </form>
    
</body>
</html>
