<?php

session_start();

function ctrlApartaments($request, $response, $container) {

    $taskModel = $container->users();
    $tasks = $taskModel->getApartament();

    $response->set("tasks", $tasks);

    $response->setTemplate("apartaments.php");
    
    return $response;
}
