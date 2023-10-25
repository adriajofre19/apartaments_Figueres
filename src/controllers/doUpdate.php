<?php

session_start();

function ctrlDoUpdate($request, $response, $container){

    $taskModel = $container->users();
    $nom = $request->get(INPUT_POST, "nom");
    $cognoms = $request->get(INPUT_POST, "cognoms");
    $telefon = $request->get(INPUT_POST, "telefon");
    $email = $request->get(INPUT_POST, "email");
    $card = $request->get(INPUT_POST, "card");
    $user = $request->get(INPUT_POST, "user");
    $pass = $request->get(INPUT_POST, "pass");
    

    $taskModel->editUser($nom,$cognoms,$telefon,$email,$card,$user,$pass);


    $response->redirect("location: index.php?r=index");
    return $response;
}