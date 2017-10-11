<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Bardode Module By Maqubool</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Enter you credentials.</h5>
					<form class="" method="post" action="precess.php">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="ph" class="cols-sm-2 control-label">Phone No.</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-mobile fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="ph" id="ph"  placeholder="Enter your phone no."/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="qty" class="cols-sm-2 control-label">Number of Tickets</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-ticket fa-lg" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="qty" id="qty"  placeholder="Number of Tickets"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="price" class="cols-sm-2 control-label">Amount Payable</label>
							<label for="price" name="price" class="cols-sm-2 control-label">$xx.xx</label>
						</div>

						<div class="form-group ">
							<input type="submit" id="button" class="btn btn-primary btn-lg btn-block buy-button" value="BUY"/><!--
							<a href="precess.php" target="_blank" type="submit" id="button" class="btn btn-primary btn-lg btn-block buy-button">Buy</a>-->
						</div>
						
					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>