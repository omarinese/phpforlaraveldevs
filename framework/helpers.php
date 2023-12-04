<?php

function greet() {
    $name = htmlspecialchars($_GET['name']);
    $surname = $_GET['surname'];


    return "Taula $name $surname!";
}

//function dd($xivato) {
//
//    var_dump($xivato);
//    die();
//}


