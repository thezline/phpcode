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
        <?php 
	        foreach ($datos as $dato):
	            echo"<div class='card' style='width: 18rem;'>";
                echo    "<div class='card-body'>";
                echo        "<h5 class='card-title'>" . $dato["name"] . "</h5>";
                echo        "<p class='card-text'>". $dato["description"] ."</p>";
                echo        "<a href='#' class='myButton'>Comprar</a>";
                echo    "</div>";
                echo"</div>";
                echo"<br />";
	        endforeach;
	    ?>
    </div>
</body>

</html>