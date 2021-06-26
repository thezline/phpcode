<!-- Nav design -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHPCOURSE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="?m=registerView">Registro</a>
                </li>
                <?php
                session_start();

                if (!empty($_SESSION["name"])) {
                    echo "";
                } else {
                    echo
                        "<li class='nav-item'>
                            <a class='nav-link' href='?m=loginView'>Inicar Sesión</a>
                        </li>";
                }
                
                if (!empty($_SESSION["name"])) {
                    echo
                        "<li class='nav-item'>
                            <a class='nav-link' href='?m=close'>Cerrar Sesión</a>
                        </li>";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<br />