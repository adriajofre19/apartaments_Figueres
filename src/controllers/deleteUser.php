<?php
function ctrlDeleteUser($request, $response, $container){
    $taskModel = $container->users();
    $id = $request->get(INPUT_GET, "id"); // Llegir la ID de l'apartament de la URL

    if (!empty($id)) {
        $taskModel->deleteUser($id); // Cridar la funció de supressió amb la ID proporcionada
    }
    
    $response->redirect("location: index.php?r=adminpanel");
    
    return $response;
}