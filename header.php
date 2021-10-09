<?php
session_start();

/* Define strip secret key and domain link */
define('STRIPE_SECRET_KEY', 'sk_test_51JMJbVIrt4Znc9lNBs4Fm2TzvBnsMkUdSdmsUnyEIZeywo9IIcyLHFcnH8HKaKn2CWSWiQx6T4BUWfd4ow4LgvfW00LiQsvQGr');
define('DOMAIN','http://localhost:63342/JokeShoppingSite/');

//color changes whenever you refresh the page
$color = "#" . dechex(rand(0, 0xFFFFFF));



?>
<header>
	<div class="flex-container2">
		<h1><a href="./index.php">Dad Joke Shopping Site</a></h1>
		<div id="direction"><--------- Click me to go back to home page!!</div>
	</div>
</header>
