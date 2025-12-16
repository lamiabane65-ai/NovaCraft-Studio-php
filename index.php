<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if($uri === "/" || $uri==="/home"){
    require_once __DIR__ . "/controllers/home.php";
}
else if ($uri === "/about"){
    require_once __DIR__ . "/controllers/about.php";
}
else if ($uri === "/services"){
    require_once __DIR__ . "/controllers/services.php";
}
else if ($uri === "/contact"){
    require_once __DIR__ . "/controllers/contact.php";
}
else{
    require_once __DIR__ . "/controllers/404.php";
}
?>