<?php

session_start();

function ctrlDoRegister($request, $response, $container){

    $taskModel = $container->users();
    $nom = $request->get(INPUT_POST, "nom");
    $cognoms = $request->get(INPUT_POST, "cognoms");
    $email = $request->get(INPUT_POST, "email");
    $telefon = $request->get(INPUT_POST, "telefon");
    $card = $request->get(INPUT_POST, "card");
    $user = $request->get(INPUT_POST, "user");
    $pass = $request->get(INPUT_POST, "pass");
    

    $taskModel->addUser($nom,$cognoms,$email,$telefon,$card,$user,$pass);


    $response->redirect("location: index.php?r=login");
    return $response;
}