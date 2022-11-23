<?php
	$baseUrl = 'http://localhost/study-files/Git/UI-By-Tailwind/layouts/';## site baseUrl
	$siteName = 'Tailwind UI';## website Name
	
	function urlName($urlName){## function of get url name
		$getName = current(explode('.', $urlName));
		$currentName = ucwords(strtolower(preg_replace('/-/', ' ', $getName)));##str_replace('mix search', 'replacement', 'string');
		return $currentName;
	}
	/* $folder = dirname($_SERVER['PHP_SELF']);
	$getFolder = end(explode('/', $folder));
	print_r($getFolder); */
	//$getUrlName = urlName($_SERVER['PHP_SELF']);
	$requestUrl = basename($_SERVER['PHP_SELF']) == 'index.php' ? 'Home' : basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta Tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no" />
		<!-- site Title -->
		<title><?php echo (urlName($requestUrl).' | '.$siteName ) ?></title>
		<!-- google-font -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
		<!-- Icon -->
		<link rel="icon" href="<?php echo $baseUrl?>images/demo/logo.png" />
		<!-- Font Awesome -->
		<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl?>css/all.min.css" />
		<!-- Tailwind CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl?>css/app.css" />
		<script src="<?php // echo $baseUrl?>css/tailwind.min.css"></script>
		<style>
			@font-face {
				font-family: 'Arimo', 'Oswald';
				src: url( 'https://fonts.googleapis.com/css2?family=Arimo&family=Oswald&display=swap');
			} 
			.font-arimo{
				font-family:'Arimo', sans-serif!important;
			}
			.font-oswald{
				font-family:'Oswald', sans-serif!important;
			}
		</style>
	</head>
	<body class="font-oswald">
		<main>