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
                            <a class="nav-link" href="index.php?r=dades">Les meves dades</a>
                        </li>
                    </ul>
                </div>

                    </form>
                    <a type="button" href="index.php?r=dologout" class="btn btn-primary">Tancar sessió (<?=$user['user'];?>)</a>
            </div>
        </nav>


