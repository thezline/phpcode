<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importing the nav bar -->
    <?php include_once("layout/links.php"); ?>

    <title>Registro</title>
</head>

<body>
    <!-- Importing the nav bar -->
    <?php include_once("layout/nav.php"); ?>

    <div class="container">
        <form method="post" action="#">
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label for="name" class="form-label">Primer nombre</label>
                        <input type="text" class="form-control" placeholder="Ej. John" aria-label="First name">
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Primer apellido</label>
                        <input type="text" class="form-control" placeholder="Ej. Smith" aria-label="Last name">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Correo</label>
                <input class="form-control" type="email" placeholder="example@example.com" id="email" name="email"
                    required />
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Contraseña</label>
                <input class="form-control" type="password" placeholder="*********" id="password" name="password"
                    required />
            </div>
            <div class="mb-3">
                <input class="myButton" type="submit" value="Registrarse" />
            </div>
        </form>
    </div>
</body>

</html>