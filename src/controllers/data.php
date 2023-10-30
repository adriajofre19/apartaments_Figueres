<?php

function ctrlData($request, $response, $container) {
    $response->setTemplate("data.php");
    return $response;
}