<?php
use JokeShoppingSite\models\Api;

require_once 'header.php';
require_once 'vendor/autoload.php';

$nameCode = $title = $checkoutLink = "";

if(isset($_POST['btn'])) {
	$_SESSION['namecode'] = $_POST['id'];
	$nameCode = (string)$_SESSION['namecode'];
	$nameCode = trim($nameCode, "t3_");
	$_SESSION['title'] = $_POST['title'];
	$title = (string)$_SESSION['title'];
	$title = trim($title, "!?");
	$info = $_POST['info'];
	$_SESSION['info'] = $info;

	/* Access the api model*/
	$api = new Api();
	/* Access the selected dad joke post reddit api function */
	$selectedJoke = $api->selectedRedditPost($nameCode,$title);
	/* Access the checkout session link based on the selected joke's information */
	$session = $api->selectedJokePayment($title);
	$checkoutLink= $session->url;


}



?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Joke Detail</title>
		<link rel="stylesheet" href="css/payment-detail.css">
		<link rel="stylesheet" href="css/index.css">
	</head>
	<body>
	<main id="main">
		<div class="page-container">
			<form action="" method="POST" id="orderForm" class="container" name="order_form" style="border-color:<?php echo $color ?>">
				<input type="hidden" name="id" value="<?= $nameCode; ?>" />
				<h2>Please confirm your order</h2>
				<h3><?= $title; ?></h3>
				<p><?= $info; ?></p>
				<a href="<?php echo $checkoutLink; ?>">Check Out</a>
			</form>
	</main>
	</body>
</html>


