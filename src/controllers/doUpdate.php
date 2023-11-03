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
    $rol = $request->get(INPUT_POST, "rol");
    

    $taskModel->editUser($nom,$cognoms,$telefon,$email,$card,$user,$pass,$rol);


    $response->redirect("location: index.php?r=index");
    return $response;
}