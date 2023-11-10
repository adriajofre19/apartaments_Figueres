<?php

session_start();

function ctrlAddReserve($request, $response, $container){

    $taskModel = $container->users();
    $ID_Usuari = $request->get(INPUT_POST, "ID_Usuari");
    $ID_Apartament = $request->get(INPUT_POST, "ID_Apartament");
    $Data_Entrada = $request->get(INPUT_POST, "Data_Entrada");
    $Data_Sortida = $request->get(INPUT_POST, "Data_Sortida");
    $Preu_Per_Dia = $request->get(INPUT_POST, "Preu_Per_Dia");
    $n_persones = $request->get(INPUT_POST, "n_persones");
    
    
    $taskModel->addReserva($ID_Usuari, $ID_Apartament, $Data_Entrada, $Data_Sortida, $Preu_Per_Dia, $n_persones);

    if ($adminUser = true){
        $response->redirect("location: index.php?r=adminpanel");
    } else {
        $response->redirect("location: index.php?r=do_reserve");

    }
    
    return $response;
}