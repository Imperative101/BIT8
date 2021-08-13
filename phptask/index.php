<?php


/// уменьшить кол во if и сессий. разобраться с olympics. перепечатывать заново чтобы оно работало. найти в инете справочник по этому


include('./functions.php');
include('./index.php');

session_start();
if( !isset( $_SESSION['zoo'])  ){
    $_SESSION['zoo'] = [];
    $_SESSION['id'] = 1;
}

if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])){  
    foreach ($_SESSION['zoo'] as $entry) {
       if($entry['id'] == $_GET['id']){
            $animal = $entry;
            break;
       }
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['id'])){
    $animal = [];
    $animal['name'] = $_SESSION['name'];
    $animal['surname'] = $_POST['surname'];
    $animal['sport'] = $_POST['sport'];
    $animal['country'] = $_POST['country'];
    $animal['gender'] = $_POST['gender'];
    $animal[' victories'] = $_POST[' victories'];

    $_SESSION['id']++;
    
    $_SESSION['zoo'][] = $animal;
    header("location:./"); 
    die;
}

if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['species'])){
    foreach ($_SESSION['zoo'] as $key => $animal) {
        if($animal['id'] == $_POST['id']){
         unset($_SESSION['zoo'][$key]);
         header("location:./");
         die;
        }  
    }

    header("location:./");
    die;
    }

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])  ){
   foreach ($_SESSION['zoo'] as &$animal) {
       if($animal['id'] == $_POST['id']){
        $animal['name'] = $_SESSION['name'];
        $animal['surname'] = $_POST['surname'];
        $animal['sport'] = $_POST['sport'];
        $animal['country'] = $_POST['country'];
        $animal['gender'] = $_POST['gender'];
        $animal[' victories'] = $_POST[' victories'];
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
            <label class="col-sm-2 col-form-label" >Animal name</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="name" value="<?= (isset($animal))? $animal['name'] : "" ?>">
            </div>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Animal surname</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="surname" value="<?= (isset($animal))? $animal['surname'] : "" ?>">
            </div>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Animal sport</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="sport" value="<?= (isset($animal))? $animal['sport'] : "" ?>">
            </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >animal country</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="country" value="<?= (isset($animal))? $animal['country'] : "" ?>">
            </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >animal gender</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="gender" value="<?= (isset($animal))? $animal['gender'] : "" ?>">
            </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >animal victories</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="victories" value="<?= (isset($animal))? $animal['victories'] : "" ?>">
            </div>    

            
         </div>
    <?php if(!isset($animal)){
            echo '<button class="btn btn-primary" type="submit">Add animal</button>';
    }else{
            echo '
            <input type="hidden" name="id" value="'. $animal['id'].' ">
            <button class="btn btn-info" type="submit">Disconnect animal</button>';
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


        <?php $count = 0; foreach ($_SESSION['zoo'] as $animal) {  ?>
            <tr>
            <td> <?= ++$count."/".$animal['id']  ?> </td>
                <td> <?= $animal['name']  ?> </td>
                <td> <?= $animal['surname']  ?> </td>
                <td> <?= $animal['sport']  ?> </td>
                <td> <?= $animal['country']  ?> </td>
                <td> <?= $animal['gender']  ?> </td>
                <td> <?= $animal['victories']  ?> </td>


                <td><a class="btn btn-success" href="?id=<?= $animal['id']  ?>">edit</a></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$animal['id']?>"  >
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>