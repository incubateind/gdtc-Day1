<!DOCTYPE html>
<?php
	$month = $_POST["month"];
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>At Tutorial 05</title>
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
				<h3 style="color: #bd93f9">Selected: </h3>
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
							 <label for="exampleSelect1">Selected month is</label>
								<select class="form-control" id="exampleSelect1">
								<option <?php if($month == 1) echo selected; ?>>January</option>
								<option <?php if($month == 2) echo selected; ?>>February</option>
								<option <?php if($month == 3) echo selected; ?>>March</option>
								<option <?php if($month == 4) echo selected; ?>>April</option>
								<option <?php if($month == 5) echo selected; ?>>May</option>
								<option <?php if($month == 6) echo selected; ?>>June</option>
								<option <?php if($month == 7) echo selected; ?>>July</option>
								<option <?php if($month == 8) echo selected; ?>>August</option>
								<option <?php if($month == 9) echo selected; ?>>September</option>
								<option <?php if($month == 10) echo selected; ?>>October</option>
								<option <?php if($month == 11) echo selected; ?>>November</option>
								<option <?php if($month == 12) echo selected; ?>>December</option>
							  </select>
						  </div>
						 <br>
						  <div class="row">
							<div class="col-lg-4 col-sm-4">
								<button type="submit" class="btn btn-outline-success">Select again</button>
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