<?php

function ctrlDoRegister($request, $response, $container){

    $taskModel = $container->users();
    $nom = $request->get(INPUT_POST, "nom");
    $cognoms = $request->get(INPUT_POST, "cognoms");
    $email = $request->get(INPUT_POST, "email");
    $telefon = $request->get(INPUT_POST, "telefon");
    $targeta_credit = $request->get(INPUT_POST, "targeta_credit");
    $user = $request->get(INPUT_POST, "user");
    $pass = $request->get(INPUT_POST, "pass");
    

    $taskModel->addUser($nom,$cognoms,$email,$telefon,$targeta_credit,$user,$pass);


    $response->redirect("location: index.php");
    return $response;
}