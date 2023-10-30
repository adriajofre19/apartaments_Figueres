<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" href="index.php?r=index">
                        <img src="images/logo.png" alt="Bootstrap" width="30" height="24">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fer una reserva</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Consultar reserves</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?r=rooms">Apartaments</a>
                </li>
            </ul>
        </div>

        <?php if (isset($_SESSION['user']['user'])) { 
            ?>
            <div class="dropdown dropstart">
                <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Benvingut, <?php echo $_SESSION['user']['user']; ?>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="index.php?r=dades">Les meves dades</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="index.php?r=dologout">Tancar sessió</a></li>
                    
                </ul>
            </div>
        <?php } else { ?>
            <div class="dropdown dropstart">
                <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Usuari
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="index.php?r=login">Iniciar sessió</a></li>
                    <li><a class="dropdown-item" href="index.php?r=register">Registrar</a></li>
                </ul>
            </div>
        <?php } ?>
    </div>
</nav>




