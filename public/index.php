<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
<<<<<<< HEAD
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
elseif ($r === "rooms") {
    $response = ctrlRooms($request, $response, $container);
}
else {
    $response = ctrlIndex($request, $response, $container);
}
$response->response();
=======

include "../src/config.php";
include "../src/controllers/index.php";
include "../src/controllers/login.php";
include "../src/controllers/register.php";
include "../src/controllers/doLogin.php";
include "../src/controllers/doRegister.php";


include "../src/middleware/isLogged.php";

include "../src/Emeset/Container.php";
 include "../src/Emeset/Request.php";
 include "../src/Emeset/Response.php";

 $request = new \Emeset\Request();
 $response = new \Emeset\Response();
 $container = new \Emeset\Container($config);

$r = '';
 if(isset($_REQUEST["r"])){
    $r = $_REQUEST["r"];
 }

if($r == "") {
    $response = isLogged($request, $response, $container, "CtrlIndex");
 } elseif($r == "login") {
  $response = ctrlLogin($request, $response, $container);
} elseif($r == "dologin") {
  $response = ctrlDoLogin($request, $response, $container);
} elseif($r == "register") {
  $response = ctrlRegister($request, $response, $container);
} elseif($r == "doregister") {
  $response = ctrlDoRegister($request, $response, $container);
} else {
     $response = ctrlLogin($request, $response, $container);
 }

  $response->response();
>>>>>>> d9a2fd5 (segon commit)
