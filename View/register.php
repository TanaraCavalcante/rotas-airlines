<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotas Airlines</title>
    <link rel="stylesheet" href="View/CSS/style.css">
    <!-- Bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once __DIR__ . "/navbarDinamic.php"; ?>

    <section class="container">
        <!-- CREATE ACCOUNT -->
        <div class="card-header text-white p-1" style="background-color: #026773; text-align: center; border-bottom-right-radius: 20px; border-bottom-left-radius: 20px;">Create account</div>
        <br>
        <div class="card-header text-white p-1 mb-2" style="background-color: #026773; border-radius: 5px;">Personal data</div>
        <div class="card-header">

            <!--Cadastro Sucesso-->
            <form type="submit" method="post" action="">
                <div class="form-group mb-1">

                    <!-- PAIS -->
                    <label for="selectPais">Country:</label>
                    <select class="form-control" id="selectPais" name="paisUsuario">
                        <option value="Brasil">Brazil</option>
                        <option value="EUA">EUA</option>
                        <option value="Japão">Italy</option>
                        <option value="Outros">Others</option>
                    </select>
                </div>

                <!-- NOME COMPLETO -->
                <div class="form-group mb-1">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="nome" name="nomeUsuario">
                </div>

                <!-- Data Nascimento -->
                <div class="form-group mb-1">
                    <label for="dataNasc">Date of Birth</label>
                    <input type="date" class="form-control" id="dataNasc" name="dataNasc">
                </div>

                <!-- CPF -->
                <div class="form-group mb-1">
                    <label for="inputCPF">Fiscal Code:</label>
                    <input type="text" name="cpf" class="form-control" id="inputCPF" maxlength="11"
                        pattern="\d{11}" required>
                    <small id="cpfHelp" class="form-text text-muted">Write only the fiscal code numbers</small>
                </div>

                <!-- Numero Celular -->
                <div class="form-group mb-1">
                    <label for="numeroCelular">Phone Number:</label>
                    <div class="input-group">
                        <input type="tel" class="form-control" id="numeroCelular" name="numeroCelular"
                            placeholder="Write your phone number">
                    </div>
                </div>

                <div class="form-group mb-3">
                    <!-- Sexo -->
                    <label for="sexo">Sex:</label>
                    <select class="form-control" id="sexo" name="sexo">
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                        <option value="O">Others</option>
                    </select>
                </div>
        </div>
        <!-- CADASTRO-->
        <div class="card-header text-white p-1 mb-2" style="background-color: #026773; border-radius: 5px;">Login details for your account</div>
        <div class="card-header">

            <!-- email -->
            <div class="form-group mb-1">
                <label for="email">E-mail:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Write your e-mail address">
            </div>

            <!-- confirma email -->
            <div class="form-group mb-1">
                <label for="confirmaEmail">Confirm your e-mail address:</label>
                <input type="email" class="form-control" id="confirmaEmail"
                    placeholder="Write your e-mail address again">
            </div>

            <!-- senha -->
            <div class="form-group mb-1">
                <label for="senha">Password:</label>
                <input name="senha" type="password" class="form-control" id="senha" placeholder="Write your password">
            </div>


            <!-- confirma senha -->
            <div class="form-group mb-3">
                <label for="confirmaSenha">Confirm you password:</label>
                <input type="password" class="form-control" id="confirmaSenha" placeholder="Write your password again">
            </div>

            <!-- cadastre-se -->
            <div style="text-align: center;">
                <button type="submit" class="btn btn-success active btn-custom mb-1">Register</button>
            </div>
        </div>


        <div class="card-footer" style="border-bottom-right-radius: 20px; border-bottom-left-radius: 20px;">
            <div class="text-center">
                Have an account? <a href="LOGIN" style="color: #026773;">login</a>
            </div>
        </div>
        </form>

    </section>

    <!-- Footer Dinamico -->
    <?php include_once __DIR__ . "/footerDinamic.php"; ?>
</body>

</html>