<?php

function ctrlDo_reserve($request, $response, $container) {

    $taskModel = $container->users();

    $user = $request->get("SESSION", "user");

    $tasks = $taskModel->getAll($user["id"]);

    $response->set("tasks", $tasks);
    $response->setTemplate("do_reserve.php");


    return $response;

}