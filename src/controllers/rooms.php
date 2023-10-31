

<?php

session_start();

function CtrlRooms($request, $response, $container) {

    $taskModel = $container->users();
    $tasks = $taskModel->getRooms();

    $response->set("tasks", $tasks);

    $response->setTemplate("rooms.php");
    
    return $response;
}
