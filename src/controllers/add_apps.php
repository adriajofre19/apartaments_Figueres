<?php

function ctrlAddApps($request, $response, $container) {
    $response->setTemplate("add_apps.php");
    return $response;
}