<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php 
            $arq = $_FILES["arq"]["name"];
            echo "".$arq."";
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["arq"]["name"]);
            move_uploaded_file($_FILES["arq"]["tmp_name"], $target_file);
        ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $target_file?>" class="card-img-top imgperfil justify-content-center" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
