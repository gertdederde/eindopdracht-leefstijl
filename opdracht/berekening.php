<?php

    $lengte = $_POST["lengte"];
    $gewicht = $_POST["gewicht"];
    $geslacht = $_POST["geslacht"];
    
    $totaal = $gewicht / ($lengte * $lengte);
    echo "BMI: " . $totaal;
?>