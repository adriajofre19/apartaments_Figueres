<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

include "../src/config.php";
include "../src/controllers/index.php";
include "../src/controllers/login.php";
include "../src/controllers/register.php";
include "../src/controllers/doLogin.php";
include "../src/controllers/doRegister.php";
include "../src/controllers/dades.php";
include "../src/controllers/doUpdateUser.php";
include "../src/controllers/doLogout.php";
include "../src/middleware/isLogged.php";
include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";
include "../src/controllers/check_reserve.php";
include "../src/controllers/rooms.php";
include "../src/controllers/add_apps.php";
include "../src/controllers/do_add.php";
include "../src/controllers/deleteRoom.php";
include "../src/controllers/adminpanel.php";
include "../src/controllers/deleteUser.php";
include "../src/controllers/doUpdateRoom.php";
include "../src/controllers/addReserve.php";
include "../src/controllers/openModal.php";
include "../src/controllers/deleteReserve.php";
include "../src/controllers/gestorpanel.php";
include "../src/controllers/tancaments.php";
include "../src/controllers/doUpdateUser2.php";

 $request = new \Emeset\Request();
 $response = new \Emeset\Response();
 $container = new \Emeset\Container($config);

$r = '';
 if(isset($_REQUEST["r"])){
    $r = $_REQUEST["r"];
 }

if($r == "") {
    $response = ctrlIndex($request, $response, $container);
  $response->response();

  } elseif($r == "login") {
  $response = ctrlLogin($request, $response, $container);
  $response->response();

} elseif($r == "index") {
  $response = ctrlIndex($request, $response, $container);
  $response->response();

} elseif($r == "dologin") {
  $response = ctrlDoLogin($request, $response, $container);
  $response->response();

} elseif($r == "register") {
  $response = ctrlRegister($request, $response, $container);
  $response->response();

} elseif($r == "doregister") {
  $response = ctrlDoRegister($request, $response, $container);
  $response->response();

} elseif($r == "dades") {
  $response = CtrlDades($request, $response, $container);
  $response->response();

} elseif($r == "doupdateuser") {
  $response = ctrlDoUpdateUser($request, $response, $container);
  $response->response();

} elseif ($r == "dologout"){
  $response = CtrlDoLogout($reques, $response, $container);
  $response->response();

}
elseif($r == "do_reserve") {
  $response = isLogged($request, $response, $container,"CtrlDo_reserve");
  $response->response();

}
elseif($r == "check_reserve") {
  $response = isLogged($request, $response, $container,"CtrlCheck_reserve");
  $response->response();

}
elseif($r == "rooms") {
  $response = isLogged($request, $response, $container,"CtrlRooms");
  $response->response();

} elseif($r == "add_apps") {
  $response = isGestor($request, $response, $container,"CtrlAddApps");
  $response->response();

}elseif($r == "do_add") {
  $response = ctrlDoAdd($request, $response, $container);
  $response->response();

} elseif($r == "deleteroom") {
  $response = CtrlDeleteRoom($request, $response, $container);
    $response->response();

} elseif($r == "adminpanel") {
  $response = isAdmin($request, $response, $container, "ctrlAdminPanel");
    $response->response();

} elseif($r == "deleteuser") {
  $response = CtrlDeleteUser($request, $response, $container);
    $response->response();

} elseif($r == "doupdateroom") {
  $response = ctrlDoUpdateRoom($request, $response, $container);
    $response->response();

} elseif($r == "addreserve") {
  $response = ctrlAddReserve($request, $response, $container);
    $response->response();

} elseif($r == "openModal") {
  $response = ctrlOpenModal($request, $response, $container);
} elseif($r == "generate_pdf") {
  $response = ctrlOpenModal($request, $response, $container);
}
 elseif($r == "deletereserve") {
  $response = ctrlDeleteReserve($request, $response, $container);
  $response->response();
}
 elseif($r == "deletereserve") {
  $response = ctrlDeleteReserve($request, $response, $container);
  $response->response();

} elseif($r == "tancaments") {
  $response = ctrlTancaments($request, $response, $container);
  $response->response();
}
elseif($r == "gestorpanel") {
  $response = isGestor($request, $response, $container, "ctrlGestorPanel");
    $response->response();
}elseif($r == "doupdateuser2") {
      $response = ctrlDoUpdateUser2($request, $response, $container);
      $response->response();
    
    }
 else {
     $response = ctrlLogin($request, $response, $container);
       $response->response();

 } 

