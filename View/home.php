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
    <!-- javascript -->
     <script defer src="JS/script.js"></script>
</head>

<body>
    <!-- Header Dinamico -->
    <?php include_once __DIR__ . "/navbarDinamic.php"; ?>

    <!-- Banner -->
    <section class="container-fluid" id="container-Inicio">
        <div class="container">
            <div class="row" style="margin-left: 10%;">
                <div class="col-sm-4">
                    <h2 style="margin-top:70px;">Volo + Hotel con sconti fino al 30%</h2>
                    <h5>Approfitta delle offerte!</h5>
                    <p>Acquista ora con noi</p>
                    <hr class="d-sm-none">
                </div>
                <div class="col-sm-8">
                    <img src="view/src/aviaoLogo.jpg" style="width: 100%; border-radius: 20px;">
                    <br>
                </div>
            </div>
        </div>
    </section>

    <!-- Pesquisa de voo -->
    <section id="container-meio">
        <div class="container" id="container-pesquisa-voo">
            <div class="row" style="margin-left: 7%;">
                <div class="col-sm-11" style="margin-top: 30px ;">
                    <form action="SEARCHAEREO" method="POST" type="submit" name="formDestino" id="formDestino">
                        <select class="form-select" id="tipoViagem" name="tipoViagem">
                            <option selected value="1">Andata e ritorno</option>
                            <option value="2">Andata</option>
                        </select>
                        <select class="form-select" id="tipoClasse" name="tipoClasse">
                            <option selected value="1">Economico</option>
                        </select>
                        <select class="form-select" id="quantidadePassageiros" name="quantidadePassageiros" disabled>
                            <option selected value="1">1 passeggero</option>
                            <option value="2">2 passeggeri</option>
                            <option value="3">3 passeggeri</option>
                            <option value="4">4 passeggeri</option>
                        </select>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col">
                                <input type="text" class="form-control" id="origemVoo" oninput="pesquisar()"
                                    placeholder="origine" name="OrigemVoo" required autocomplete="off">
                                <ul id="resultado-pesquisa" class="resultado-pesquisa"></ul>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Digite o Destino" oninput="pesquisarDestino()" name="DestinoVoo" id="DestinoVoo" required autocomplete="off">
                                <ul id="resultado-pesquisaDestino" class="resultado-pesquisa"></ul>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col">
                                <label for="dataIda" class="form-label">Data Partenza</label>
                                <input type="date" class="form-control" name="dataIda" required>
                            </div>
                            <div class="col">
                                <label for="dataVolta" class="form-label">Data Ritorno</label>
                                <input type="date" class="form-control" name="dataVolta" id="dataVolta">
                            </div>
                            <div class="col" style="margin-top: 31px;">
                                <button type="submit" class="btn btn-primary active btn-custom">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Ofertas de voos -->

    <br><br><br><br><br>

    <!-- Banner adicionais -->

    <div class="container" style="margin-top: 100px;">
        <div class="row" style="margin-bottom: 5vh;">
            <div class="col-md-6">
                <a href="#">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="view/src/turistaImag.gif" alt="Card image" style="width:100%">
                </a>
                <div class="card-body">
                    <h3 class="card-title">Aproveite ofertas em voos pelo Brasil e o mundo!</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <a href="#">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="view/src/turista2imag.gif" alt="Card image" style="width:100%">
            </a>
            <div class="card-body">
                <h4 class="card-title">Compre Passagens e Ganhe pontos em compras utilizando nosso app</h4>
            </div>
        </div>
    </div>
    </div>
    </div><br><br>


    <!-- Footer Dinamico -->
    <?php include_once __DIR__ . "/footerDinamic.php"; ?>
</body>

<script>
  const listaResultadosOrigem = [
    <?php
      foreach ($voo->getListaDadosVoo() as $item) {
        echo '"' . $item->getOrigemVoo() . '",';
      }
    ?>
  ];

  const listaResultadosDestinoData = [
    <?php
      foreach ($voo->getListaDadosVoo() as $item) {
        echo '"' . $item->getDestinoVoo() . '",';
      }
    ?>
  ];
</script>

</html>

