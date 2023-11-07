<?php

function ctrlCheck_reserve($request, $response, $container) {

    $taskModel = $container->users();

    $user = $request->get("SESSION", "user");

    $ID_Usuari = $user['ID'];

    $reserves = $taskModel->getReserveById($ID_Usuari);

    print_r($reserves);

    $response->set("reserves", $reserves);

    $response->setTemplate("check_reserve.php");

    return $response;
}