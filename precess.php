<?php 

include('dbconnect.php');

	function generateBarcode() {
   		$tmpBarcodeID = "";
   		$tmpCountTrys = 0;
		  while ($tmpBarcodeID == "")	{
  			srand ((double) microtime( )*1000000);
  			$random_1  = rand(1,9);
  			$random_2  = rand(0,9);
  			$random_3  = rand(0,9);
  			$random_4  = rand(0,9);
  			$random_5  = rand(0,9);
  			$random_6  = rand(0,9);
  			$random_7  = rand(0,9);
  			$random_8  = rand(0,9);
  			$random_9  = rand(0,9);
  			$random_10 = rand(0,9);
  			$random_11 = rand(0,9);
  			$random_12 = rand(0,9);

  			$tmpBarcodeID = $random_1 . $random_2 . $random_3 . $random_4 . $random_5 . $random_6 . $random_7 . $random_8 . $random_9 . $random_10 . $random_11 . $random_12;
			return $tmpBarcodeID;
  		}
    }
	$randnum = generateBarcode();
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['ph'];
	$qty=$_POST['qty'];
	$price=99.99 * $qty;
	$sql="INSERT INTO barcodetest(bcode,name,email,phone,qty,price) VALUES ('".$randnum."','".$name."','".$email."','".$phone."','".$qty."','".$price."')";
	if(!mysqli_query($con, $sql))
	{
		die('Error:'.mysqli_error($con));
	}
	
	echo "<script> alert('1 record added!');
	window.location.href='print.php?barcode=$randnum';</script>";
	
	mysql_close($con);
?>