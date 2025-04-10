<?php
$url = isset($_GET['url']) ? strtoupper($_GET['url']) : '';

if($url == "REGISTER"){
    require_once __DIR__ . "/View/register.php";
    
}else if($url == "CADASTRA"){
    require_once __DIR__ . "/Controller/userController.php";
    $controller = new UserController();
    $controller->process("C");

}else{
    echo "Pagina nao encontrada: $url";
}
