
<!DOCTYPE html>
<html lang="en">
<head>
<title>IIUM Vehicle Registeration System</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Card Payment Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- Web Fonts -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
<!-- //Web Fonts -->
</head>

<body>

	<div class="topnav">
	<img src="logo.png" width="500px" height="100px">
	<a href="payment.php">Payment</a>
	<a href="logout">Logout</a>

	</div>

<div class="main">
	<h1>Card Payment Forms</h1>
	<div id="myAccordion" class="nl-accordion">
		<ul>
			<li>
				<input type="radio" id="nl-radio-1" name="nl-radio" class="nl-radio" checked="checked"/>
				<label class="nl-label" for="nl-radio-1">Payment Card</label>
				<div class="nl-content">
					<div class="agileits_w3layouts_tab1 agileits_w3layouts_tab">
					<form action="#" method="post" class="creditly-card-form agileinfo_form">
						<section class="creditly-wrapper wthree w3_agileits_wrapper">
								<div class="first-row form-group">
									<div class="controls">
										<label class="control-label">Name on Card</label>
										<input class="billing-address-name form-control" type="text" name="name" required="">Siti Zulaikha
									</div>
									<div class="controls">
										<label class="control-label">Card Number</label>
										<input class="number credit-card-number form-control" type="text" name="number"inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"  required="">---- ---- ---- ----
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<label class="control-label">Expiration Date</label>
												<input class="expiration-month-and-year form-control date" type="text" name="expiration-month-and-year"  required="">MM / YY
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right">
											<div class="controls">
												<label class="control-label">CVV</label>
												<input class="security-code form-control" Â·inputmode="numeric" type="text" name="security-code"  required=""> ---
											</div>
										</div>
										<div class="clear"> </div>
									</div>
								</div>
								<button class="submit"><span>Make a payment <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></button>
						</section>
					</form>
					</div>
				</div>
			</li>

		</ul>
	</div>
	<div class="agileits_copyright">
		<p>© 2019 All rights reserved | Design by Zu & Ina</p>
	</div>
</div>
<!-- js scripts -->
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- credit-card -->
	<script type="text/javascript" src="js/creditly.js"></script>
	<script type="text/javascript">
		$(function() {
		  var creditly = Creditly.initialize(
			  '.creditly-wrapper .expiration-month-and-year',
			  '.creditly-wrapper .credit-card-number',
			  '.creditly-wrapper .security-code',
			  '.creditly-wrapper .card-type');

		  $(".creditly-card-form .submit").click(function(e) {
			e.preventDefault();
			var output = creditly.validate();
			if (output) {
			  // Your validated credit card output
			  console.log(output);
			}
		  });
		});
	</script>
<!-- //credit-card -->
<!-- //js scripts -->
</body>
</html>
