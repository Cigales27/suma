<?php
    $numeroa = $_GET["A"];
    $numerob = $_GET["N"];

    $resultado = $numeroa + $numerob;

    echo json_encode($resultado);