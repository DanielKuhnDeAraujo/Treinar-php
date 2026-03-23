<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula</title>
        <meta name="description" content="">
        <meta name="keywords" conTent = "">
        <link rel="stylesheet" href="css/bootstrap.min.css">
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
            include "Fruta.php";
            // include_once"";
            // require_once"";
            // require "";
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
            <h2>While</h2>
            <?php
                $i =0;
                while ($i<=10) {
                    echo "\t<p>O valor de \$i é $i</p>";
                    $i++;
                };
            ?>
            <h2>For</h2>
            <?php
                $i =0;
                for ($i=0; $i <=10 ; $i++) { 
                    echo "\t<p>O valor de \$i é $i</p>";
                }
            ?>
            <h2>Foreach</h2>
            <?php
                $vet = ["Zeca","Pedreiro","15997233477"]; 
                $vet2 = array ("Zeca","Pedreiro","15997233477",123);
                $vet2[] = "itu";
                array_push($vet2, ["SP",11111111]);
                foreach ($vet as $value) {
                    echo "\t<p>O valor atual é $value</p>\n";
                }
            ?>
            <h2>For com vetor inedexado</h2>
            <?php
                for ($i=0; $i < count($vet2) ; $i++) { 
                    echo "\t<p>O valor de ". $i+1 ." é {$vet2[$i]}</p>\n";
                }
            ?>
            <h2>Foreach com vetor associativo</h2>
            <?php
            $vet_assoc = ["id"=>"id","nome" => "Tião","telefone" => "15997233488"];
                foreach($vet_assoc as $key=> $value) { 
                    echo "\t<p>O valor de $key do vetor \$vet_assoc é $value</p>\n";
                }
                 echo "\t<p>Valor avulso do vetor \$vet_assoc é {$vet_assoc['nome']}</p>\n";
            ?>
            <h2>For com vetor bidimensional</h2>
            <?php
                // $cars = array (
                //        array("Volvo", 22, 18),
                //         array("BMW", 15, 13),
                //         array("Saab", 5, 2),
                //         array("Land Rover", 17, 15)
                //         );   

                $cars = [
                       array("Volvo", 22, 18),
                        array("BMW", 15, 13),
                        array("Saab", 5, 2),
                        array("Land Rover", 17, 15),
                        123
                        ];    
                echo "\t<p>Valor avulso do vetor \$vet_assoc é {$cars[1][1]}</p>\n";
                for ($i=0; $i < count($cars) ; $i++) { 
                    if (is_array( $cars[$i] ) ) {
                        for ($j=0; $j < count($cars[$i]); $j++) { 
                            echo"\t<p> O valor de $i na posição $j do vetor \$cars é {$cars[$i][$j]}";
                        }
                    }
                    else {
                        echo"\t<p> O valor da posição $i do vetor \$cars é {$cars[$i]}";
                    }
                }
            
            ?>
            <h2>Foreach com vetor associativo</h2>
            <?php
            $fruta1 = new Fruit();
            $fruta2 = new Fruit();
            $fruta1->setNome("Mamão");
            $fruta1->setCor("Laranja");
            $fruta2->setNome("Limão");
            $fruta2->setCor("Verde");
            $vet_frutas = [$fruta1, $fruta2];
            foreach($vet_frutas as $obj) { 
                echo "\t<p>{$obj->__toString()}</p>\n";
            }
            echo "\t<p>Nome avulso da posição 0 do vetor \$vet_frutas é {$vet_frutas[0]->getNome()}</p>\n";
            echo "\t<p>Nome avulso da \$fruta2 é {$fruta2->getNome()}</p>\n";
            ?>
            <!-- sort() - sorts an indexed array in ascending order
                rsort() - sorts an indexed array in descending order
                asort() - sorts an associative array in ascending order, according to the value
                ksort() - sorts an associative array in ascending order, according to the key
                arsort() - sorts an associative array in descending order, according to the value
                krsort() - sorts an associative array in descending order, according to the key -->
            <!-- Aqui começa a azedar o pé do frango -->
             <!-- $GLOBALS - An array that contains references to all global variables of the script
                    $_SERVER - Holds information about the web server including headers, paths, and script locations
                    $_REQUEST - An array containing data from $_GET, $_POST, and $_COOKIE superglobals
                    $_POST - An array of variables received via the HTTP POST method
                    $_GET - An array of variables received via the HTTP GET method
                    $_FILES - An array of items uploaded to the current script via the HTTP POST method (filename, type, size)
                    $_ENV - Holds environment variables passed to the current script
                    $_COOKIE - An array of variables passed to the current script via HTTP Cookies
                    $_SESSION - An array of session variables -->
        <h2>Global $_SERVER</h2>
        <?php
        echo "<p>{$_SERVER['PHP_SELF']}</p>\n";
        echo "<p>{$_SERVER['SERVER_NAME']}</p>\n";
        echo "<p>{$_SERVER['HTTP_HOST']}</p>\n";
        echo "<p>{$_SERVER['HTTP_REFERER']}</p>\n";
        echo "<p>{$_SERVER['HTTP_USER_AGENT']}</p>\n";
        echo "<p>{$_SERVER['SCRIPT_NAME']}</p>\n";
        ?>
        <h2>Global $_SERVER</h2>
        <a href="dados.php?var1=lalala&var2=761331">Exemplo requisição GET</a>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>