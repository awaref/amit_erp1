<?php 
 function check_str($str){
        global $_POST;
        echo (isset($_POST[$str])&&!isset($_POST['success']))? $_POST[$str]:'';
}


    
?>