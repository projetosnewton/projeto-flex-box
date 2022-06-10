<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario2</title>
</head>
<body>
    <?php
    //funçao (filter_input - filter_var)
    //validaçoes
    //FILTER_VALIDATE_INT
    //FILTER_VALIDATE_EMAIL
    //FILTER_VALIDATE_FLOAT
    //FILTER_VALIDATE_IP
    //FILTER_VALIDATE_URL

    //isset se existe alguma coisa
    if(isset($_POST['enviar'])):
        //array de erros
        $erros = [];

        //validaçoes
        if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
            $erros[] = "idade precisa ser um inteiro";
        endif;

        if(!$altura = filter_input(INPUT_POST, 'altura', FILTER_VALIDATE_FLOAT)):
            $erros[] = "digite sua idade utulizando ponto '.' ";
        endif;

        if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
            $erros[] = "verifique seu email e digite corretamente";
        endif;

        if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
            $erros[] = "verifique o numero de ip e digite corretamente";
        endif;

        if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
            $erros[] = "url incorreta";
        endif;

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
        altura: <input type="text" name="altura">
        <br>
        EMAIL: <input type="Email" name="email">
        <br>
        ip: <input type="text" name="ip">
        <br>
        URL: <input type="text" name="url">
        <br>

        <button type="submit" name="enviar">enviar</button>
    </form>
    
</body>
</html>
