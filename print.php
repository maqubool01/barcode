<html>
<head>
	<title>Ticket</title>
	<style rel="stylesheet">
		.letitgo{
			max-width: 600px;
		}
		.letitgo > p{
			font: 15px arial, sans-serif;
			font-weight: bold;
		}
	</style>
</head>
<body>
<?php
	require_once('dbconnect.php');
	include 'barcode128.php';
	$txtbarcode = $_GET['barcode'];
	$result=mysqli_query($con, "SELECT bcode, name, phone, qty, price from barcodetest where bcode = '".$txtbarcode."'");
	while($row=mysqli_fetch_array($result))
	{
		$bPic =  bar128(stripcslashes($row['bcode']));
		$name = $row['name'].'</br>';
		$phone = $row['phone'].'</br>';
		$qty = $row['qty'].'</br>';
		$price = $row['price'].'</br>';
	}
	mysqli_close($con);
?>
	<div class = "letitgo">
		<p>Name: <?php echo $name ?></p>
		<p>Phone #: <?php echo $phone ?></p>
		<p>No of tickes: <?php echo $qty ?></p>
		<p>Total Cost: &#8377;<?php echo $price ?></p>
		<hr />
	</div>
	<?php echo $bPic ?>
</body>
</html>
