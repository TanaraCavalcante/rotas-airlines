<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotas Airlines</title>
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>

<body>
    <!-- MENU SUPERIOR -->
    <nav class="navbar navbar-expand-sm navbar-dark estilo-background-nav">
        <a class="navbar-brand" href="home" id="tituloNav">ROTA<br>Airlines</a>
        <ul class="navbar-nav">
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle custom-nav-text nav-text-Custom" href="#" id="navbardrop"
                    data-bs-toggle="dropdown">
                    My trips
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
                    Welcome
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="dashboard">My Dashboard</a>
                    <a class="dropdown-item" href="DESLOGAR">Exit</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login"><span class="glyphicon glyphicon-log-in"></span>Login</a>
            </li>
        </ul>
    </nav>
    <!-- CHECKIN -->
    <div class="modal" id="myModal" tabindex="-1" >
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalLabel">Are you ready to check-in?</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
                </div>
                <div class="modal-body">
                    <form type="submit" method="post" action="VALIDACHECKIN">
                        <div class="form-group mb-3">
                            <label for="email">Search reservation to:</label>
                            <input type="text" value="Codigo da Reserva" class="form-control" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="pwd">Reservation Code</label>
                            <input type="text" class="form-control" id="pwd" placeholder="Enter the reservation code" name="cdReserva">
                        </div>
                        <button type="submit" class="btn btn-primary btn-custom" style="width: 100%;">Start Chek-in</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>