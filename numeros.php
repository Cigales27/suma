<?php
    $numeroa = $_GET["A"];
    $numerob = $_GET["N"];

    $resultado = $numeroa + $numerob;

    return  echo json_encode($resultado);