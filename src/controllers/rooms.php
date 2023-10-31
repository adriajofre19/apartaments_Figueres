

<?php

session_start();

function CtrlRooms($request, $response, $container) {

    $taskModel = $container->users();
    $apps = $taskModel->getRooms();

    $response->set("apps", $apps);

    $response->setTemplate("rooms.php");
    
    return $response;
}
