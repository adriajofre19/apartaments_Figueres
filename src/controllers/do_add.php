<?php

session_start();

function ctrlDoAdd($request, $response, $container){

    $taskModel = $container->users();
    
    $titol = $request->get(INPUT_POST, "Titol");
    $preu_alta = $request->get(INPUT_POST, "Preu_Alta");
    $preu_baixa= $request->get(INPUT_POST, "Preu_Baixa");
    $temporades = $request->get(INPUT_POST, "Temporades");
    $longitud = $request->get(INPUT_POST, "Longitud");
    $latitud = $request->get(INPUT_POST, "Latitud");
    $n_habitacions = $request->get(INPUT_POST, "N_Habitacions");
    $metres_quadrats = $request->get(INPUT_POST, "Metres_Quadrats");
    $descripcio = $request->get(INPUT_POST, "Descripcio");
    $adreca_postal = $request->get(INPUT_POST, "Adreca_Postal");
    $serveis = $request->get(INPUT_POST, "Serveis");
    
    $taskModel->AddApps($titol,$preu_alta,$preu_baixa,$temporades,$longitud,$latitud,$n_habitacions,$metres_quadrats,$descripcio,$adreca_postal,$serveis);

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
    
    