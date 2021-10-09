<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dad Joke Shopping Site</title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
<main id="main">
	<div class="page-container">
		<form action="#" method="POST" id="orderForm" name="order_form">
			<h2>Order Form</h2>
			<div id="client-name">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" value="<?= isset($name) ? $name : '';?>" placeholder="please enter your name here">
				<span class="warning">
													<?= isset($nameError) ? $nameError : '';?>
											</span>
			</div>
			<div id="address-box">
				<label for="address">Address</label>
				<input type="text" id="address" name="address" value="<?= isset($address) ? $address : ''; ?>" placeholder="please enter your address here">
				<span class="warning">
													<?= isset($addressError) ? $addressError : ''; ?>
											</span>
			</div>
			<div id="email-box">
				<label for="email">Email address</label>
				<input type="email" id="email" name="email" value="<?= isset($email) ? $email : ""; ?>" placeholder="Please enter your email address here">
				<span class="warning">
													<?= isset($emailError) ? $emailError : ''; ?>
											</span>
			</div>
			<div id="food-option">
				<label for="food-type">Food Type</label>
				<?php
				$dropDownResult = '';
				//$flavors = [ "Please select the flavor", "Cheese flavor", "Blueberry flavor", "Strawberry flavor", "Cookie flavor" ];
				$flavors = [ "default" =>"Please select the flavor", "cheese" =>"Cheese flavor", "blueberry" =>"Blueberry flavor", "strawberry" =>"Strawberry flavor", "cookie" =>"Cookie flavor"];
				foreach($flavors as $index => $flavor){
					global $foodType;
					if($foodType == $index ){
						$ch = 'selected';
					}else{
						$ch = '';
					}
					$dropDownResult .= '<option value=' . $index . ' '. $ch . '>'. $flavor . '</option>';
				}
				echo "<select id='food-type' name='food_type'>" . $dropDownResult . '</select>';
				?>
				<span class="warning">
													<?= isset($foodTypeError) ? $foodTypeError : ''; ?>
											</span>
			</div>
			<div id="payment-box">
				<p>Payment Method:</p>
				<?php $paymentMethodValues =["credit card", "paypal"];
				$creditCard = '<label for="credit-card">' . $paymentMethodValues[0] . '</label>';
				$paypal = '<label for="credit-card">' . $paymentMethodValues[1] . '</label>';
				?>
				<input type="radio" id="credit-card" name="payment_method" value="credit-card" <?php if($paymentMethod =='credit-card'){echo "checked";} ?> />
				<?php echo $creditCard ?>
				<input type="radio" id="paypal" name="payment_method" value="paypal" <?php if($paymentMethod =='paypal'){echo "checked";} ?>  />
				<?php echo $paypal ?>
				<span class="warning">
													<?= isset($paymentMethodError) ? $paymentMethodError : '';?>
											</span>
			</div>
			<div id="consent-box">
				<?php
				$checkBoxInfo = ["By clicking this check box, you agree to pay the delivery fee"];
				echo '<label for="consent">' . $checkBoxInfo[0] . '</label>';
				?>
				<input type="checkbox" id="consent" name="check_box" <?php if($checkBox == 'on'){echo "checked";} ?> />
				<span class="warning">
													<?= isset($checkBoxError) ? $checkBoxError : ''; ?>
											</span>
			</div>
			<button type="submit" id="btn" name="btn">Order</button>
		</form>
		<div id="hidden">
			<h2>Congrats! Your order has been placed.</h2>
			<img src="images/order_completed_icon.png" id="order-icon" alt="order complete icon">
		</div>
	</div>
</main>
</body>
</html>


<script src="https://js.scripe.com/v3/"></script>
<script charset="utf-8">
	var stripe = Stripe('<?= STRIPE_SECRET_KEY ?>');
	stripe.redirectToCheckout({sessionId:'<?= $session->id; ?>'});
</script>