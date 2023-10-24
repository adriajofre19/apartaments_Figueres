<?php

function ctrlDoLogout($request, $response, $container){

    $response->setSession("user", []);
    $response->setSession("logged", false);
    $response->redirect("location: index.php");

    echo("jofre");
    
    return $response;
}