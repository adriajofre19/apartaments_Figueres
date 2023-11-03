<?php

session_start();

function ctrlAdminPanel($request, $response, $container) {

    $taskModel = $container->users();

    $apps = $taskModel->getUsers();
    $rooms = $taskModel->getRooms();

    $response->set("apps", $apps);
    $response->set("rooms", $rooms);


    $response->setTemplate("adminpanel.php");
    
    return $response;
}
