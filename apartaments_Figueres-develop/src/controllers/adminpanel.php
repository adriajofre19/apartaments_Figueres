<?php

session_start();

function ctrlAdminPanel($request, $response, $container) {

    $taskModel = $container->users();

    $apps = $taskModel->getUsers();
    $rooms = $taskModel->getRooms();
    $reserves = $taskModel->getReserve();

    $response->set("apps", $apps);
    $response->set("rooms", $rooms);
    $response->set("reserves", $reserves);


    $response->setTemplate("adminpanel.php");
    
    return $response;
}
