<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotas Airlines</title>
    <!-- CSS -->
    <link rel="stylesheet" href="View/CSS/style.css">
    <!-- Bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Header Dinamico -->
    <?php include_once __DIR__ . "/navbarDinamic.php"; ?>

    <!-- Banner -->
    <section class="container-fluid" id="container-Inicio">
        <div class="container">
            <div class="row" style="margin-left: 10%;">
                <div class="col-sm-4">
                    <h2 style="margin-top:70px;">Voo + Hotel com até 30% off</h2>
                    <h5>Aproveite ofertas!</h5>
                    <p>Compre Agora Conosco</p>
                    <hr class="d-sm-none">
                </div>
                <div class="col-sm-8">
                    <img src="view/src/aviaoLogo.jpg" style="width: 100%; border-radius: 20px;">
                    <br>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Footer Dinamico -->
    <?php include_once __DIR__ . "/footerDinamic.php"; ?>
</body>

</html>