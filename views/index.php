<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Importando los links desde php -->
    <?php include_once("layout/links.php"); ?>

    <title>Inicio</title>
</head>

<body>
    <!-- Importando el nav desde php -->
    <?php include_once("layout/nav.php"); ?>

    <div class="center">
        <?php foreach ($datos as $dato): ?>
	            <div class="card myContent" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $dato["name"] ?></h5>
                       <p class="card-text"><?php echo $dato["description"] ?></p>
                       <p class="card-text">$<?php echo $dato["price"] ?></p>
                       <a href="#" class="myButton">Comprar</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>