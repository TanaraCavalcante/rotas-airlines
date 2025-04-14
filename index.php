<?php
$url = isset($_GET['url']) ? strtoupper($_GET['url']) : '';


switch($url){
    case 'HOME':
        require_once __DIR__ . "/View/home.php";
        break;

    case 'REGISTER':
        require_once __DIR__ . "/View/register.php";
        break;
    
    case 'CADASTRA':
        require_once __DIR__ . "/Controller/userController.php";
        $controller = new UserController();
        $controller->process("C");
        break;
    
    default:
        echo "Pagina nao encontrada: $url";
        break;
}