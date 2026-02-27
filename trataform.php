<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form atado</title>
</head>
<body>
    <?php
    
    $nome = htmlspecialchars($_POST["nome"]) ;
    $idade = (int) $_POST["idade"];
    echo "<p>Nome : $nome</p>";
    echo "<p>Idade : $idade </p>";
    if ($idade>=16) {
        echo "<p>Você já pode votar </p>";
    }
    else {
        echo "<p>Faltam ". (16-$idade) ." anos para você poder votar</p>";
    }
    ?>
</body>
</html>