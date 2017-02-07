<?php
// ID of the subscription
$offerId = 'S336642857_PL';
// include PHP SDK
include_once('/cleeng-php-sdk/cleeng_api.php');
$cleengApi = new Cleeng_Api();

?>
<html>
	<head>
		<title>Demo Page for Assignment: API Product Owner</title>
			<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
			<meta name= "robots"  content="all"/>
			<link rel="Stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="http://cdn.cleeng.com/js-api/3.0/api.js"></script>
	</head>
		<body>
			<?php
			// Check if visitor has access to protected content
			if ($cleengApi->isAccessGranted($offerId)): ?>
			
				<center><h2>Thank you for purchasing a monthly subscription.<br>
				This is premium content especially for you</h2>
				<iframe width="640" height="360" src="https://www.youtube.com/embed/diMGKqJP2Hk" frameborder="0" allowfullscreen></iframe>
				</center>
			<?php else: ?>
				<center><h2>Please login to see content of this page.</h2></center>
			  <div id="login" 
					data-cleeng-container
					data-action="checkout"
					data-display-type="inline"
					data-offer-id="S336642857_PL"
					data-completed-callback="cleengCallbackHandler(result)">
				</div>
				  <script>
				function cleengCallbackHandler(result) {
					if (result.accessGranted == true) {
						window.location.reload();
					}
				}
				</script>
			<?php endif; ?>

				<hr />
				<p>
					&copy; Safe & secure content protection and monetization by 
					<a href="http://cleeng.com" title="Cleeng Content Monetization" target="_blank">
						<img src="http://cdn.cleeng.com/images/layout/cleeng_logo_small.png" alt="Cleeng Content Monetization" title="Cleeng Content Monetization" />
					</a>.
				</p>
		</body>
</html>
		