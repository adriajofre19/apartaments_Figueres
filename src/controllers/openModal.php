

<?php


function CtrlOpenModal($request, $response, $container) {

    $userModel = $container->users();
    
    $apartamentId = $request->get(INPUT_POST, "apartament_id");
    
    $userModel = $userModel->GetRoomById($apartamentId);
    
    echo json_encode($userModel);
}


