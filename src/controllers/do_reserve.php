<?php

function ctrlDo_reserve($request, $response, $container) {
    $response->setTemplate("do_reserve.php");
    return $response;
}