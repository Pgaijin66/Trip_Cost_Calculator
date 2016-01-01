<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" charset="utf-8" />
	<title>Form Feedback</title>
	<link rel="stylesheet" type="text/css" href="style.css">
		<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

</head>
<body>
<?php 

		

		// Checking for form submission via post or get

			
			//  validation
			if (isset($_POST['distance'],$_POST['gallon_price'],$_POST['effeciency'])) {
				
				// calculate price
				// short hand variable decleration
				$distance=$_POST['distance'];
				$gallonPrice=$_POST['gallon_price'];
				$effeciency=$_POST['effeciency'];

				$gallons=$distance / $effeciency;
				$dollars= $gallons * $gallonPrice;
				$hours=$distance/65;

				echo "<p>Total estimated cost:</p>";
				echo "<p>The total cost of driving $distance miles avegaring $effeciency per gallon and paying an average of 
				$gallonPrice is $dollars. If you drive at an average of 65 miles per hour , the trip will take approximately 
				 $hours .</p>";
			}else{
				
				echo '<p class="error">Error .<br /> Please enter valid details/</p>';
		
		// // end of total submission
		}



	 ?>
	
<body>
</html>
