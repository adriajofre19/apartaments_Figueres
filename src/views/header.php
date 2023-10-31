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
                            <a class="nav-link" href="index.php?r=rooms">Fer una reserva</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?r=check_reserve">Consultar reserves</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?r=add_apps">Afegir apartaments</a>
                        </li>
                    </ul>
                </div>

                    </form>
                    <div class="dropdown dropstart">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  <?=$user['user'];?>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="index.php?r=dades">Les meves Dades</a></li>
    <li><a class="dropdown-item" href="index.php?r=doLogout">Tancar Sessió(<?=$user['user'];?>)</a></li>
  </ul>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

