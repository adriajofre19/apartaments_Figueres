<?php

function ctrlAdd_apps($request, $response, $container) {
    $response->setTemplate("add_apps.php");
    return $response;
}