<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importing the custom styles -->
    <?php include_once("layout/links.php"); ?>

    <title>Iniciar Sesión</title>
</head>

<body>
    <!-- Importing the nav bar -->
    <?php include_once("layout/nav.php"); ?>

    <div class="container">
        <form method="post" action="#">
            <div class="mb-3">
                <label for="name" class="form-label">Correo</label>
                <input class="form-control" type="email" placeholder="example@example.com" id="email" name="email" required />
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Contraseña</label>
                <input class="form-control" type="password" placeholder="*********" id="password" name="password" required />
            </div>

            <div class="mb-2">
                <a class="links alert-link" href="registro.php">¿No tiene una cuenta? Cree una</a>
            </div>

            <div class="mb-3">
                <input class="myButton" type="submit" value="Iniciar Sesión" />
            </div>
        </form>
    </div>
</body>

</html>