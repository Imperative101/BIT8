<?php

init();

function init()
{
    if(!file_exists("./data.txt")){
        file_put_contents("./data.txt","[]");
        file_put_contents("./id.txt", 0);
    }
}

function edit(){
    foreach (getData() as $cars) {
        if($cars['id'] == $_GET['id']){
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
    
    $data[] = $machine;
    setData($data);
}

function getData(){
    $arr = json_decode( file_get_contents('./data.txt'), 1);
    foreach ($arr as &$entry) {
        $entry = (array) $entry;
    }
    return $arr;
}
function setData($arr){
    file_put_contents('./data.txt',json_encode($arr));
}

function newId(){
    $id = file_get_contents('./id.txt') ;//4
    $id++;//5
    file_put_contents('./id.txt',$id);//5
    return $id;//5
}

function destroy(){
    $data = getData();
    foreach ($data as $key => $machine) {
        if($machine['id'] == $_POST['id']){
         unset($data[$key]);
         setData($data);
         return;
        }
    }
}

function update(){
    $data = getData();
    foreach ($data as &$animal) {
        if($$machine['id'] == $_POST['id']){
            $machine['manufacturer'] = $_POST['manufacturer'];
            $machine['model'] = $_POST['model'];
            $machine['year'] = $_POST['year'];
            $machine['color'] = $_POST['color'];
            $machine['distance'] = $_POST['distance'];
            $machine['fuel'] = $_POST['fuel'];
            setData($data);
            return;
        }  
    }
}

?>