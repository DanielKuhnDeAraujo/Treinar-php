<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula</title>
</head>

<body>
    <h2>Variáveis e constantes PHP</h2>
    <?php
        echo "<p>Hello World!</p>";
        // Comentário
        /* Comentário
        de muitas 
        linhas*/
        $a = 2;//int
        $b = 0.0;//float
        $c = "xablau";//string
        $d = 'xablau 2';//string
        $e = null;//nulo
        $teste = false; // bool
        //Constante
        define('MINHA_CONST', "teste");
        const TESTE = "valor";    
        // Escrevendo na tela 
        echo "<p>O valor de a é " . $a . "</p>";
        echo "<p>O valor de b é $b</p>";
        print "\t<p>O valor de a + b é " . ($a+$b) ." </p>";
        ?>
</body>

</html>