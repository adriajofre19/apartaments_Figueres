<?php

function ctrlIndex($request, $response, $container) {
    $taskModel = $container->users();
    $user = $request->get("SESSION", "user");
    $tasks = [];

    // Comprovar si l'usuari ha iniciat sessió
    if ($user) {
        // L'usuari ha iniciat sessió, obtenir les tasques
        $tasks = $taskModel->getAll($user["id"]);
    } else {
        // L'usuari no ha iniciat sessió, mostrar el botó d'iniciar sessió
        $response->set("showLoginButton", true);
    }

    $response->set("tasks", $tasks);
    $response->setTemplate("index.php");

    return $response;
}