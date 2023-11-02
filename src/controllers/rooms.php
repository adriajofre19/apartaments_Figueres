

<?php

session_start();

function CtrlRooms($request, $response, $container) {

    $taskModel = $container->users();
    $rooms = $taskModel->getRooms();

    $response->set("rooms", $rooms);

    $response->setTemplate("rooms.php");
    
    return $response;
}
