<?php
//
function connect(){
    return new mysqli("localhost","root","","medelynas");
   
}

function find($id){
    $conn = connect();
    $sql = 'SELECT * from `plants` where id ='.$id;
    $result = $conn->query($sql);
    $conn->close($result->fetch_assoc());
    die;
    return $result->fetch_assoc();
}
function allOld(){
    $conn = new mysql($servername, $username, $password, $dbname);

    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);
    $arr = [];
    while($row = $result->fetch_assoc()){
        $plant = [];
        $plant['id'] = $row['id'];
        $plant['is_yearling'] = $row['is_yearling'];
        $plant['quantity'] = $row['quantity'];
        $plant['name'] = $row['name'];
        $arr[]= $plant;
     //   echo "<br> id: ". $row["id"]." - Name: ".$row["firstname"]. "". $row["lastname"] ."<br>";
    }
    $conn->close();
    return $arr;
}

function all($id){
    $conn = connect();
    $sql = "SELECT * from `plants` ";
    $result = $conn->query($sql);
    $conn->query($sql);
    $conn->close();
}

function store(){
    $conn = connect();
    $sql = 'INSERT INTO `plants`(`id`,`name`,`is_yearling`,`quantity`) VALUES (NULL,"'.$_POST['name'].' ","'.$_POST['is_yearling'].'","'.$_POST['quantity'].'")';
    $conn->query($sql);
    $conn->close();
}

$data = getData();
$plant['id'] = newId();
$plant['name'] = $_POST['name'];
$plant['is_yearling'] = $_POST['is_yearling'];
$plant['quantity'] = $_POST['quantity'];
$data[] = $plants;
setData($data);

function update(){
    $conn = connect();
    $sql = 'UPDATE `plants`(`id`,`name`,`is_yearling`,`quantity`) VALUES (NULL,"'.$_POST['name'].' ","'.$_POST['is_yearling'].'","'.$_POST['quantity'].'" WHERE id = '.$_POST['id'];
    $conn->query($sql);
    $conn->close();
}

function destroy($id){
    $conn = connect();
    $sql = "DELETE FROM `plants` WHERE is=".$id;
    $conn->query($sql);
    $conn->close();
}


?>