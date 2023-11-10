<?php
function ctrlDeleteRoom($request, $response, $container){
    $taskModel = $container->users();
    $id = $request->get(INPUT_GET, "id"); // Llegir la ID de l'apartament de la URL

    if (!empty($id)) {
        $taskModel->deleteRoom($id); // Cridar la funció de supressió amb la ID proporcionada
    }
    if ($adminUser = true ){
        $response->redirect("location: index.php?r=adminpanel");
    } else {
        $response->redirect("location: index.php?r=rooms");
    }
    
    return $response;
}
