<?php

session_start();

function ctrlDoAdd($request, $response, $container){

    $taskModel = $container->users();
    
    $Titol = $request->get(INPUT_POST, "Titol");
    $Preu_Alta = $request->get(INPUT_POST, "Preu_Alta");
    $Preu_Baixa= $request->get(INPUT_POST, "Preu_Baixa");
    $Temporades = $request->get(INPUT_POST, "Temporades");
    $Longitud = $request->get(INPUT_POST, "Longitud");
    $Latitud = $request->get(INPUT_POST, "Latitud");
    $N_Habitacions = $request->get(INPUT_POST, "N_Habitacions");
    $Metres_Quadrats = $request->get(INPUT_POST, "Metres_Quadrats");
    $Descripcio = $request->get(INPUT_POST, "Descripcio");
    $Adreca_Postal = $request->get(INPUT_POST, "Adreca_Postal");
    $Serveis = $request->get(INPUT_POST, "Serveis");
    
    $taskModel->AddApps($Titol,$Preu_Alta,$Preu_Baixa,$Temporades,$Longitud,$Latitud,$N_Habitacions,$Metres_Quadrats,$Descripcio,$Adreca_Postal, $Serveis);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $habitacio = $_POST["habitacio"];
    $titol = $_POST["titol"];

    if ($_FILES["foto"]["error"] === UPLOAD_ERR_OK) {
        $nombreFoto = $habitacio . $titol . ".jpg";
        $rutaDestino = "images/" . $nombreFoto;

        move_uploaded_file($_FILES["foto"]["tmp_name"], $rutaDestino);
            
    } 
    } 
    $response->redirect("location: index.php?r=rooms");
    return $response;
    

}
    
    