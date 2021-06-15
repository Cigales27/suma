<?php
    $numeroa = $_POST["A"];
    $numerob = $_POST["N"];

    $resultado = $numeroa + $numerob;


    echo json_encode(["resultado"=>$resultado]);
