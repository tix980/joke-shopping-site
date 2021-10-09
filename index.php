<?php
use JokeShoppingSite\models\Api;

require_once 'vendor/autoload.php';

/* Access the  api model*/
$api = new Api();
/* Access the reddit api function*/
$redditApi = $api->redditApi();
/* Access the reddit post list */
$results = $redditApi->data->children;

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Dad Joke Shopping Site</title>
		<link rel="stylesheet" href="css/index.css">
	</head>
	<body>
    <?php require_once 'header.php' ?>
		<main>
			<div class="page-container">
				<div class="flex-container">

					<!--use form POST method -->
					<?php foreach($results as $result){?>
						<form method="POST" action="payment-detail.php" class="container" style="border-color:<?php echo $color ?>">
							<input type="hidden" name="id" value="<?= $result->data->name; ?>" />
							<input type="hidden" name="title" value="<?= $result->data->title; ?>" />
							<input type="hidden" name="info" value="<?= $result->data->selftext; ?>" />
							<div>
								<h2><?php echo $result->data->title; ?></h2>
								<p><?php echo $info = $result->data->selftext; ?></p>
							</div>
							<button name="btn" id="btn">Click here</button>
						</form>
					<?php }?>
				</div>
			</div>
		</main>
	</body>
</html>
