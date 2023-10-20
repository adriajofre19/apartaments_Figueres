<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../src/config.php";

include "../src/controllers/login.php";
include "../src/controllers/index.php";
include "../src/controllers/register.php";
include "../src/controllers/rooms.php";

$r = $_REQUEST["r"] ?? "";

/* Creem els diferents models */
$container = new Emeset\Container($config);
$response = new Emeset\Response();
$request = new Emeset\Request();

if ($r === "login") {
    $response = ctrlLogin($request, $response, $container);
}
elseif ($r === "index") {
    $response = ctrlIndex($request, $response, $container);
}
elseif ($r === "register") {
    $response = ctrlRegister($request, $response, $container);
}
else {
    $response = ctrlIndex($request, $response, $container);
}
$response->response();