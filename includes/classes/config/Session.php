<?php
	ob_start();
    session_start();
    $current_page = basename($_SERVER['PHP_SELF']);
	if (!empty($_SESSION['username'])){
		if ($current_page == "index.php")
			header('Location: add_user.php');
		}
	else{
		if ($current_page != "index.php")
			header('Location: index.php');
	}
?>
