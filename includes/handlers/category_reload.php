
<option value="">Select a category</option>
<?php
    include_once "../classes/config/Crud.php";
    $crud = new Crud();
    $result = $crud->getAllData("category");
    foreach($result as $cat_list ){
        if(isset($_POST['category']) && $_POST['category'] == $cat_list['id'] && !isset($_POST['success'])){

        
?>
<option value="<?= $cat_list['id'] ?>" selected="selected" ><?=$cat_list['name']?></option>   
<?php 
        }else{
?>
<option value="<?= $cat_list['id'] ?>"><?=$cat_list['name']?></option>
<?php
        }
    }
?>
