<?php

function ctrlDo_reserve($request, $response, $container) {

    $taskModel = $container->users();

    $reserves = $taskModel->getReserves();
    $response->set("reserves", $reserves);
    $response->setTemplate("do_reserve.php");

    return $response;

}