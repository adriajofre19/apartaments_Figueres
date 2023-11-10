<?php

function CtrlRooms($request, $response, $container) {

    $response->setTemplate("rooms.php");

    $taskModel = $container->users();

    $Data_Entrada = $_POST['Data_Entrada'] ?? "2000-01-01";
    $Data_Sortida = $_POST['Data_Sortida'] ?? "2000-01-01";
    $n_persones = $_POST['n_persones'] ?? 0;


    $apps = $taskModel->buscarHotels($Data_Entrada, $Data_Sortida, $n_persones);


    $response->set("apps", $apps);

    
    return $response;
}
