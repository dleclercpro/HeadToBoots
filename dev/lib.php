<?php

function module($module) {

    // Store name
    $name = $module["name"];

    // If args passed
    if (isset($module["args"])) {

        // Store them
        $args = $module["args"];
    }

    // Compute path to module
    $path = __DIR__ . "/modules/" . $name . "/" . $name;

    // Import module
    require $path . ".php";
}

?>