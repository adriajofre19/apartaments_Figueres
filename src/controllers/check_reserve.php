<?php

function ctrlCheck_reserve($request, $response, $container) {
    $response->setTemplate("check_reserve.php");
    return $response;
}