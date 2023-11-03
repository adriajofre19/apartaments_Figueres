<?php

function ctrlreserve_Add($request, $response, $container) {
    $response->setTemplate("reserve_add.php");
    return $response;
}