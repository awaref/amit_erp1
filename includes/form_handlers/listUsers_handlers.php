<?php 
  
  $crud = new Crud();

  $query = "SELECT * FROM `users`";
  $result = $crud->getData($query); 

  if ($result === false) 
  {
    echo "Query cannot be excuted";
  }

?>