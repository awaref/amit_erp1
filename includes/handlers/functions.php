<?php 
 function check_str($str){
        global $_POST;
        echo (isset($_POST[$str]))? $_POST[$str]:'';
}
?>