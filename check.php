<?php
// News Design by itorkungz
// require('act.php');
// $protect = "AntiHack";
// if(isset($_SESSION['username'])) {
// 	require('_page/page.main.php');
// }else {
// 	if(@$_GET['page'] == "register") {
// 		require('_page/page.register.php');
// 	}else {
// 		require('_page/page.login.php');
// 	}
// }



	if (!isset($_SESSION["UserID"])) {
		header('Location: index.php');
		
	}

?>
<!-- http_response_code(404);
exit();

header("HTTP/1.0 404 Not Found");


header('Location: http://www.example.com/');
exit; -->