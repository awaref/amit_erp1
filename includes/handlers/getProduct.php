<?php 
    include_once '../classes/config/Crud.php';
    $name = $_GET['name'];
    $crud = new Crud();
    $query = "SELECT * FROM `products` WHERE `name` = '$name'";
    $result = $crud->checkData($query);
    if ($result == false){
        echo "false";
    }else{
        echo "true";
    }



?>