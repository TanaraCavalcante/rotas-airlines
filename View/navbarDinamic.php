<!-- MENU SUPERIOR -->
 
<nav class="navbar navbar-expand-sm navbar-dark estilo-background-nav">
    <a class="navbar-brand" href="home" id="tituloNav">ROTA<br>Airlines</a>
    <ul class="navbar-nav">
        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle custom-nav-text nav-text-Custom" href="#" id="navbardrop"
                data-bs-toggle="dropdown">
                Miei Viaggi
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#myModal">Checkin</a>
            </div>
        </li>
    </ul>

    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle custom-nav-text nav-text-Custom" href="#" id="navbardrop"
                data-bs-toggle="dropdown">
                Benvenuto
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="dashboard">Mia Dashboard</a>
                <a class="dropdown-item" href="DESLOGAR">Uscita</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login"><span class="glyphicon glyphicon-log-in"></span>Login</a>
        </li>
    </ul>
</nav>
<!-- CHECKIN -->
<div class="modal" id="myModal" tabindex="-1">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalLabel">Sei pronto per effettuare il check-in?</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form type="submit" method="post" action="VALIDACHECKIN">
                    <div class="form-group mb-3">
                        <label for="email">Cerca prenotazione a:</label>
                        <input type="text" value="Codice di prenotazione" class="form-control" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="pwd">Codice di prenotazione</label>
                        <input type="text" class="form-control" id="pwd" placeholder="Inserisci il codice di prenotazione" name="cdReserva">
                    </div>
                    <button type="submit" class="btn btn-primary btn-custom" style="width: 100%;">Inizia Chek-in</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>