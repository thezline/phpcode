<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Importing the custom styles -->
    <?php include_once("layout/links.php"); ?>

    <title>Inicio</title>
</head>

<body>
    <!-- Importing the nav bar -->
    <?php include_once("layout/nav.php"); ?>

    <div class="center">
        <h1>
            <?php 
                if(!empty($_SESSION["name"])) {
                    echo "Es hora de comprar " . $_SESSION["name"];
                } else {
                    echo "Juegos";
                }
            ?>
        </h1>
        <?php foreach ($datos as $dato): ?>
	            <div class="card myContent" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $dato["name"] ?></h5>
                       <p class="card-text"><?php echo $dato["description"] ?></p>
                       <h5>$<?php echo $dato["price"] ?></h5>
                       <a href="#" class="myButton">Comprar</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>