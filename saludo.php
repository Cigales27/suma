<?php
function redirectTohttp() {
if($_SERVER[‘HTTP’]!=”on”) {
$redirect= 'http://primerappangular.herokuapp.com/saludo.php//'.$_SERVER[‘HTTP_HOST’].$_SERVER[‘REQUEST_URI’];
header(“Location:$redirect”);
}}
    echo json_encode (["resultado"=>"Hola mundo"]);