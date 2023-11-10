<?php

session_start();

function ctrlDoAdd($request, $response, $container){

    $taskModel = $container->users();
    
    $titol = $request->get(INPUT_POST, "titol");
    $preu_alta = $request->get(INPUT_POST, "preu_alta");
    $preu_baixa= $request->get(INPUT_POST, "preu_baixa");
    $temporades = $request->get(INPUT_POST, "temporades");
    $longitud = $request->get(INPUT_POST, "longitud");
    $latitud = $request->get(INPUT_POST, "latitud");
    $n_habitacions = $request->get(INPUT_POST, "n_habitacions");
    $metres_quadrats = $request->get(INPUT_POST, "metres_quadrats");
    $descripcio = $request->get(INPUT_POST, "descripcio");
    $adreca_postal = $request->get(INPUT_POST, "adreca_postal");
    $serveis = $request->get(INPUT_POST, "serveis");
    
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
    
    