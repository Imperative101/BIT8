<?php


$arr = ["key"=>"value", "name" => "peters"];
print_r($arr);
echo"<br>";
echo json_encode($arr)."<br>";

file_put_contents("./data.txt", json_Encode($arr));

echo file_get_contents("./data.txt");
echo "<br>";

$data = json_decode( file_get_contents("./data.txt"),1);
print_R($data);
/////////////
//id manufacturer 
//model year color distance fuel

$data =json_decode(file_get_contents("./data.txt"),1);
print_r($data);




include('./functions.php');

if( !isset( $_SESSION['cars'])  ){
    $_SESSION['cars'] = [];
    $_SESSION['id'] = 1;
}

if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])){  
    foreach ($_SESSION['cars'] as $entry) {
       if($entry['id'] == $_GET['id']){
            $machine = $entry;
            break;
       }
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['id'])){

    store();
    header("location:./"); 
    die;
}

if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['year'])){
    foreach ($_SESSION['cars'] as $key => $machine) {
        if($machine['id'] == $_POST['id']){
         unset($_SESSION['cars'][$key]);
         header("location:./");
         die;
        }  
    }

    header("location:./");
    die;
    }

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])  ){
   foreach ($_SESSION['cars'] as &$machine) {
       if($machine['id'] == $_POST['id']){
        $machine['id'] = $_SESSION['id'];
        $machine['manufacturer'] = $_POST['manufacturer'];
        $machine['model'] = $_POST['model'];
        $machine['year'] = $_POST['year'];
        $machine['color'] = $_POST['color'];
        $machine['distance'] = $_POST['distance'];
        $machine['fuel'] = $_POST['fuel'];
        header("location:./");
        die;
       }  
   }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <form class="form" action="" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Machine Manufacturer</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="name" value="<?= (isset($machine))? $machine['manufacturer'] : "" ?>">
            </div>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Machine model</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="surname" value="<?= (isset($machine))? $machine['model'] : "" ?>">
            </div>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Machine year</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="sport" value="<?= (isset($machine))? $machine['year'] : "" ?>">
            </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Machine color</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="country" value="<?= (isset($machine))? $machine['color'] : "" ?>">
            </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Machine distance</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="gender" value="<?= (isset($machine))? $machine['distance'] : "" ?>">
            </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Machine fuel</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="victories" value="<?= (isset($machine))? $machine['fuel'] : "" ?>">
            </div>    

            
         </div>
    <?php if(!isset($machine)){
            echo '<button class="btn btn-primary" type="submit">Add machine</button>';
    }else{
            echo '
            <input type="hidden" name="id" value="'. $machine['id'].' ">
            <button class="btn btn-info" type="submit">Disconnect machine</button>';
    } ?>
    </form>



    <table class="table">
        <tr>
        <th>name</th> 
        <th>surname</th> 
        <th>sport</th> 
        <th>country</th> 
        <th>gender</th>
        <th>victories</th>
        <th>delete</th> 
        </tr>


        <?php $count = 0; foreach ($_SESSION['cars'] as $machine) {  ?>
            <tr>
            <td> <?= ++$count."/".$machine['id']  ?> </td>
                <td> <?= $machine['manufacturer']  ?> </td>
                <td> <?= $machine['model']  ?> </td>
                <td> <?= $machine['year']  ?> </td>
                <td> <?= $machine['color']  ?> </td>
                <td> <?= $machine['distance']  ?> </td>
                <td> <?= $machine['fuel']  ?> </td>


                <td><a class="btn btn-success" href="?id=<?= $machine['id']  ?>">edit</a></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$machine['id']?>"  >
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>