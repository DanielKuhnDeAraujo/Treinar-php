<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <meta name="description" content="">
    <meta name="keywords" conTent="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <h1 id ="teste">Dados de requisição GET</h1>
        <?php
        if (isset($_GET["var1"]) && isset($_GET["var2"])) {
            $var1 = $_GET['var1'];
            $var2 = $_GET['var2'];
            echo "<p>O valor informado : {$_GET["var1"]} </p>";
            echo "<p>O valor informado : $var2 </p>";
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $var = $_GET["var"];
            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $datanasc = $_POST["datanasc"];
            //ARQUIVO
            $arq = $_FILES["arq"]["name"];
            echo "<h2>Dados do form:</h2>\n";
            echo "\t<p>Nome: $nome </p>\n";
            echo "\t<p>Endereço: {$_POST["endereco"]} </p>\n";
            echo "\t<p>Data Nasc: $datanasc </p>\n";

            echo "\t<p>Var: $var </p>\n";
            echo "\t<p>Nome do Arquivo: $arq </p>\n";
        }
        ?>
</body>

</html>