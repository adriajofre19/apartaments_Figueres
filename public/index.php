<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../src/config.php";

include "../src/controllers/login.php";
include "../src/controllers/index.php";
include "../src/controllers/register.php";

$r = $_REQUEST["r"] ?? "";

/* Creem els diferents models */
$session = new Daw\Session();

if ($r === "login") {
    ctrlLogin($_GET, $session);
} elseif ($r == "index") {
    ctrlIndex($_GET, $_COOKIE, $session);
} elseif ($r == "register") {
    ctrlRegister($_GET, $session);
} else {
    echo "error";
}