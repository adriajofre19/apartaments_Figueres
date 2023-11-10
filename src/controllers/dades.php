<?php

session_start();

function ctrlDades($request, $response, $container) {

    $taskModel = $container->users();
    
    $user = $request->get("SESSION", "user");

    
    $tasks = $taskModel->getUserData($user["ID"]);
    
    $response->set("tasks", $tasks);
    
    $response->setTemplate("dades.php");
    

    return $response;
}


