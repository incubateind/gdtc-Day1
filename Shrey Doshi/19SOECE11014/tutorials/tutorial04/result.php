<!DOCTYPE html>
<?php
	$principalAmount = $_GET["principalAmount"];
	$rateOfInterest = $_GET["rateOfInterest"];
	$numberOfYears = $_GET["numberOfYears"];
	$simpleInterest = ($principalAmount * $rateOfInterest * $numberOfYears)/100;

?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>At Result</title>
	<link href="../../images/sdLogo.png" rel="icon">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
<!-- 
Easy Profile Template
http://www.templatemo.com/tm-467-easy-profile
-->
	<!-- stylesheet css -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
	
	
</head>

<body>
	
	<header>
		<div class="container">
			<center style="padding: 50px 0px">
				<h3 style="color: #bd93f9">Simple Interest is :</h3>
			</center>
		</div>
	</header>
	
	<div class="container">
		<div class="bs-docs-section">
			<div class="row">
				<div class="col-lg-2 col-sm-2">
				</div>
				<div class="col-lg-8 col-sm-8">
					<div class="bs-component">
					  <form action="index.php" style="box-shadow: 3px 1px 18px #bd93f9 inset; margin: 20px; padding: 30px 40px;">
						                  
						  <div class="form-group">
							<h4>Principal Amount : <?php echo $principalAmount?></h4>						
						  </div>
						  <div class="form-group">
							<h4>Rate of Interest : <?php echo $rateOfInterest?></h4>	
						  </div>
						  <div class="form-group">
							<h4>Number of years : <?php echo $numberOfYears?></h4>	
						  </div>
						  <div class="form-group">
							<h4>Simple Interest : <?php echo $simpleInterest?></h4>	
						  </div>
						 
						  <br><br>
						  <div class="row">
							<div class="col-lg-4 col-sm-4">
								<button type="submit" class="btn btn-outline-success">Calculate Again</button>
							</div>
							<div class="col-lg-6 col-sm-6">
							</div>
							<div class="col-lg-2 col-sm-2">
								
							</div>
						  </div>                
					  </form>
					</div>
				</div> 
				<div class="col-lg-2 col-sm-2">
				</div>
			</div>
		</div>
	</div>

</body>
</html>