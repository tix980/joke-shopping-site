<?php
use JokeShoppingSite\models\Api;

/* refresh the page and auto play the joke every 20 secs */
header("Refresh:20");

require_once 'header.php';
require_once 'vendor/autoload.php';

$credentials = './service-key/test-api-project-319800-bdfa5ef3b3e0.json';
$mp3 = "";
$title=(string)$_SESSION['title'];
$info = (string)$_SESSION['info'];
$nameCode = (string)$_SESSION['namecode'];

/* Access the  api model*/
$api = new Api();
/* Access the cloud text to speech API*/
$tts = $api->convertMp3($credentials,$title,$info,$nameCode);
$mp3 = $nameCode.'.mp3';




?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Joke Detail</title>
		<link rel="stylesheet" href="css/payment-success.css">
		<link rel="stylesheet" href="css/index.css">
	</head>
	<body>
	<main id="main">
		<div class="page-container">
			<div id="success-page">
				<h2>Congrats, now you can listen to this joke now!</h2>
				<div id="radio-player">
					<audio controls autoplay>
					<source src="./jokes-mp3/<?= $mp3 ?>" type="audio/mpeg">
				</audio>
				</div>
			</div>
	</main>
	</body>
</html>
