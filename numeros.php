<?php
    $numeroa = $_GET["A"];
    $numerob = $_GET["N"];

    $resultado = $numeroa + $numerob;

    return json_encode($resultado);