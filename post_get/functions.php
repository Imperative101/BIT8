<?php

init();

function init()
{
    session_start();
    if( !isset( $_SESSION['cars'])  ){
        $_SESSION['cars'] = [];
        $_SESSION['id'] = 1;
    }
}

function edit(){
    foreach ($_SESSION['cars'] as $machine) {
        if($machine['id'] == $_GET['id']){
           return $machine;
        }
     }
}

function store(){
    $machine['id'] = $_SESSION['id'];
    $machine['manufacturer'] = $_POST['manufacturer'];
    $machine['model'] = $_POST['model'];
    $machine['year'] = $_POST['year'];
    $machine['color'] = $_POST['color'];
    $machine['distance'] = $_POST['distance'];
    $machine['fuel'] = $_POST['fuel'];

    $_SESSION['id']++;
    
    $_SESSION['cars'][] = $machine;
}

function destroy(){
    foreach ($_SESSION['cars'] as $key => $machine) {
        if($machine['id'] == $_POST['id']){
         unset($_SESSION['cars'][$key]);
         return;
        }
    }
}

function update(){
    foreach ($_SESSION['cars'] as &$machine) {
        if($machine['id'] == $_POST['id']){
            $machine['manufacturer'] = $_POST['manufacturer'];
            $machine['model'] = $_POST['model'];
            $machine['year'] = $_POST['year'];
            $machine['color'] = $_POST['color'];
            $machine['distance'] = $_POST['distance'];
            $machine['fuel'] = $_POST['fuel'];
            return;
        }  
    }
}

?>