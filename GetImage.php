<?php
	require "Config.php";
	session_start();
	
	if (isset($_SESSION[$Session_Name])){
		
		if ($_SESSION[$Session_Name] !=='1'){
			die;
		}

		;
	} else {
		die;
	}

	;
	$IMGRequestName = $_GET[$GetName];
	
	if ($FileType == 'png' & file_exists($IMG_DIR . $IMGRequestName . ".png")){
		$IMG = imagecreatefrompng($IMG_DIR . $IMGRequestName . ".png");
		header('Content-Type: image/PNG');
		imagepng($IMG);
		die;
	}

	elseif ($FileType == 'jpg' & file_exists($IMG_DIR . $IMGRequestName . ".jpg")){
		$IMG = imagecreatefromjpeg($IMG_DIR . $IMGRequestName . ".jpg");
		header('Content-Type: image/JPEG');
		imagejpeg($IMG);
		die;
	} else {
		$IMG = imagecreatefrompng($NotFoundImage);
		header('Content-Type: image/PNG');
		imagepng($IMG);
	}

	;
	?>