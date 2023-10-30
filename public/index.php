<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

include "../src/config.php";
include "../src/controllers/index.php";
include "../src/controllers/login.php";
include "../src/controllers/register.php";
include "../src/controllers/doLogin.php";
include "../src/controllers/doRegister.php";
include "../src/controllers/dades.php";
include "../src/controllers/doUpdate.php";
include "../src/middleware/isLogged.php";
include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";
include "../src/controllers/check_reserve.php";
include "../src/controllers/rooms.php";

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
 } elseif($r == "index") {
  $response = isLogged($request, $response, $container, "CtrlIndex");
  } elseif($r == "dologin") {
  $response = ctrlDoLogin($request, $response, $container);
} elseif($r == "register") {
  $response = ctrlRegister($request, $response, $container);
} elseif($r == "doregister") {
  $response = ctrlDoRegister($request, $response, $container);
} elseif($r == "dades") {
  $response = isLogged($request, $response, $container, "CtrlDades");
} elseif($r == "doupdate") {
  $response = ctrlDoUpdate($request, $response, $container);
}
elseif($r == "check_reserve") {
  $response = isLogged($request, $response, $container,"CtrlCheck_reserve");
}
elseif($r == "rooms") {
  $response = isLogged($request, $response, $container,"CtrlRooms");
} else {
     $response = ctrlLogin($request, $response, $container);
 }

  $response->response();
