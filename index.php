<?php
$url = isset($_GET['url']) ? strtolower($_GET['url']) : '';

if($url == "register"){
    require_once __DIR__ . "/View/register.php";
}else{
    echo "Pagina nao encontrada: $url";
}
