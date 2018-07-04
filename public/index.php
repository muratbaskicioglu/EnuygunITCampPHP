<?php

	require_once("../config.php");
	require_once(LAYOUT_DIR . "header.php");

	$reqUrl = $_GET['page'];

	switch($reqUrl) {
		case "home":
			include(TEMPLATE_DIR . "home.php");
			break;
		case "html":
			include(TEMPLATE_DIR . "tutorials/html_tut.php");
			break;
		case "css":
			include(TEMPLATE_DIR . "tutorials/css_tut.php");
			break;
		case "javascript":
			include(TEMPLATE_DIR . "tutorials/javascript_tut.php");
			break;
		case "php":
			include(TEMPLATE_DIR . "tutorials/php_tut.php");
			break;
		case "contact":
			include(TEMPLATE_DIR . "contact.php");
			break;
		case "form":
			echo "<pre>";
			print_r($_POST);
			print_r($_FILES);
			echo "</pre>";
			$fileExtension = explode(".", $_FILES['photo']['name'])[1];
			$newFileName = "images/" . md5(rand()) . "." . $fileExtension;
			if(!move_uploaded_file($_FILES["photo"]["tmp_name"], $newFileName)) {
				echo "File upload error!";
			}
			break;
		case "add_article":
			include(TEMPLATE_DIR . "article/add.php");
			break;
		default:
			echo "Page not found.";
	}

	require_once(LAYOUT_DIR . "footer.php");

?>
