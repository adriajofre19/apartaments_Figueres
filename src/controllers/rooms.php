<?php

function ctrlRooms($request, $response, $container) {
    $response->setTemplate("rooms.php");
    return $response;
}