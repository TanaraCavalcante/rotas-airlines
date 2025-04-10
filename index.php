<?php
$url = isset($_GET['url']) ? strtoupper($_GET['url']) : '';

if($url == "REGISTER"){
    require_once __DIR__ . "/View/register.php";
}else{
    echo "Pagina nao encontrada: $url";
}
