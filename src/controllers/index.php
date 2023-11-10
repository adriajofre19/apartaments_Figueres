<?php

function ctrlIndex($request, $response, $container) {

    $taskModel = $container->users();
    
    $user = $request->get("SESSION", "user");

    $tasks = $taskModel->getAll($user["id"]);

    $apps = $taskModel->getRooms();

    print_r($apps);

    $response->set("apps", $apps);

    $response->set("tasks", $tasks);

    $response->setTemplate("index.php");
    

    return $response;
    
}   
