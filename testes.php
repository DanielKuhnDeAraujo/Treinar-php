<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes</title>
</head>

<body>
    <h1>Testes de PHP</h1>
    <?php
    /*
    echo $_SERVER['HTTP_USER_AGENT'];
        if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
            echo 'Você está usando o Firefox.';
    }*/
    if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false) {
        ?> 
        <p>str_contains() retornou não falso</p>
        <p>Você está usando Firefox</p>
        <?php
    } 
    else {
        ?>
        <p>str_contains() retornou false</p>
        <p>Você não está usando Firefox</p>
        <?php
    }
    
    
    ?>
</body>

</html>