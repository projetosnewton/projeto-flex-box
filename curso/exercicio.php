<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicios</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="./css/exercicio.css">

</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>CURSO DE PHP</h1>
        <H2>VISUALIZAÇAO DO EXERCICIO</H2>
    </header>
    <nav class="navegacao">
        <a href="teste/teste.php" class="verde">teste</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="conteudo">
        <div class="principal">
            <?php
                //include ($_GET['dir'] . "-" . $_GET['file'] . ".php");
                //include ("{$_GET['dir']}/{$_GET['file']}.php");
                //include("teste/teste.php");
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")

            ?>
        </div>
    </main>
    <footer class="rodape">
        cod3r & alunos <?= date('d' ."/". 'm'. "/" . 'y' . " " . 'h' . ":" . 'i');?>
    </footer>
</body>
</html>