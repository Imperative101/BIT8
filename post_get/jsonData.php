<?php

init();
function init() {
  //  session_start();
  //  if( !isset( $_SESSION['cars'])  ){
  //      $_SESSION['cars'] = [];
  //      $_SESSION['id'] = 1;
  //  }
if(!file_exists("./data.txt")) {
    file_put_contents("./data.txt","[]");
    file_put_contents("./data.txt",0);
}    

}

function edit(){
    foreach($_SESSION['cars'] as $cars) {
        if($cars['id'] == $_GET['id']) {
            return $cars;
        }
    }
}

function store(){
        $data = getData();
        $machine['id'] = newId();
        $machine['manufacturer'] = $_POST['manufacturer'];
        $machine['model'] = $_POST['model'];
        $machine['year'] = $_POST['year'];
        $machine['color'] = $_POST['color'];
        $machine['distance'] = $_POST['distance'];
        $machine['fuel'] = $_POST['fuel'];
        
      //  $_SESSION['id']++;
        $data[] = $machine;
        setData($data);
}

function getData(){
    return json_decode( file_get_contents('./data.txt',1));
  }

function setData($arr){
    file_put_contents('./data.txt', json_encode($arr));
  //return json_decode( file_get_contents('./data.txt',1));
}

function newId(){
    $id = file_get_contents('./id.txt');
    $id++;
    file_put_contents('./id.txt, $id');
    return $id;

}

function destroy(){
foreach ($_SESSION['cars'] as $machine) {
    if($machine['id'] == $_POST['id']) {
        unset($_SESSION['zoo'][$key]);
        return;
    }
}

//function store(){
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
}

?>

