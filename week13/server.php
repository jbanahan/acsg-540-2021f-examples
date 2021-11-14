<?php
    $carMakes = [
        "Focus" => "Ford",
        "F150" => "Ford",
        "Civic" => "Honda",
        "Odyssy" => "Honda",
        "Dart" => "Dodge",
        "Durango" => "Dodge"
    ];

    $userVehicle = $_GET["model"];
    if (array_key_exists($userVehicle, $carMakes))
        print $carMakes[$userVehicle];
    else
        print "";

?>
