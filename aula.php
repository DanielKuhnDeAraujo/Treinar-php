<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula</title>
        <meta name="description" content="">
        <meta name="keywords" conTent = "">
        <link rel="stylesheet" href="css/exemplo.css">
        <style>
            h2 {
                color: #f00;
            }
        </style>
    </head>

    <body>
        <h1>Variáveis e constantes PHP</h1>
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
            echo "\t<p>O valor de b é $b</p>\n";
            echo '\t<p>O valor de b é $b</p>\n';//tratado omo arrayc
            print "\t<p>O valor de a + b é " . ($a+$b) ." </p>";
            
            echo "O valor de " .  TESTE;
            
            //Objeto DateTime
            $d = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));

            echo "\t<p>a data e hora atual é {$d->format(" d/m/Y - H:i:s")}</p>\n"
            // Y ano com quatro digitos
            // y últimos dois dígitos
            // H hora vai de 0 a 23. se fosse h seria de 0 a 12


            ?>
            
            <h1>Estruturas de decisão</h1>
            <h2>IF</h2>
            <?php
                if ($a > $b) {
                    echo "\t<p>Deu verdadeiro</p>";
                }
                else if ($a == $c || $b < $c) {
                    echo "\t<p>A é igual a C</p>";
                }
                // aceita and, &&, ou e ||
            ?>
            <h3>SWITCH</h3>
            <?php
                $a = 6;
                switch ($a) {
                    case 1 :
                        echo "\t<p> O valor é 1!</p>";
                        break;
                    case 2 :
                        echo "\t<p> O valor é 2!</p>";
                        break;
                    case 3 :
                        echo "\t<p> O valor é 3!</p>";
                        break;
                    case 4 :
                        echo "\t<p> O valor é 4!</p>";
                        break;
                    case 5 :
                    case 6 :
                    case 7 :
                    case 8 :
                        echo "\t<p> O valor está entre 5 e 8! </p>";
                        break;
                    
                    default:
                        echo "\t<p> O valor é 4!";
                        break;
                }
            ?>
            <h1>Estruturas de repetição</h1>
            <h2>Do..While</h2>
            <?php
                $i =0;
                do {
                    echo "\t<p>O valor de \$i é $i</p>";
                    $i++;
                } while ($i <= 10);
            ?>
    </body>

</html>