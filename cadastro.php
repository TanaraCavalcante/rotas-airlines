<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotas Airlines</title>
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>

<body>
    <!-- menu superior -->
    <nav class="navbar navbar-expand-sm navbar-dark estilo-background-nav">
        <a class="navbar-brand" href="home" id="tituloNav">ROTA<br>Airlines</a>

        <ul class="navbar-nav ms-auto">
             <!-- Dropdown -->
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle custom-nav-text nav-text-Custom" href="#" id="navbardrop"
                    data-bs-toggle="dropdown">
                    My trips
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-target="#myModal">Checkin</a>
                </div>
            </li>
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
</body>

</html>