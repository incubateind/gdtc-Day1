<!DOCTYPE html>

<?php
	session_start();
	
	if(!isset($_SESSION["userName"])){
		echo "inside";
		header("location: login.html");
		exit;
	}
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>At Tutorial 06</title>
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
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo-blue.css">
	
	<link rel="stylesheet" href="css/animate.css">
	<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$("document").ready(function(){
			$(".remove").click(function(){
				if(confirm("Are you sure?"))
					{
						$(this).parents("tr").remove();
						alert("Now data will be removed");
					}
				else
					{
						return false;
					}
			});
		});
	</script>  
	
</head>

<body data-spy="scroll" data-target=".navbar-collapse">

<!-- preloader section -->
<!-- <div class="preloader"> -->
	<!-- <div class="sk-spinner sk-spinner-wordpress"> -->
       <!-- <span class="sk-inner-circle"></span> -->
     <!-- </div> -->
<!-- </div> -->

<!-- header section -->
<header>
	<div class="container">
		<center style="padding: 50px 0px">
			<h3 style="color: #bd93f9">Tutorial 06</h3>
		</center>
	</div>
</header>

<div class="container">
	
	<table class="table table-hover">
	  <thead>
		<tr class="table-active">
		  <th scope="col">Name</th>
		  <th scope="col">Age</th>
		  <th scope="col">City</th>
		  <th scope="col">State</th>
		  <th scope="col">Actions</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
		  <td>Vinay Chauhan</td>
		  <td>18</td>
		  <td>Rajkot</td>
		  <td>Gujarat</td>
		  <td>
			<button type="button" class="btn btn-outline-warning">Edit</button>
			<button type="button" class="btn btn-outline-danger remove">Delete</button>
		  </td>
		</tr>
		<tr>
		  <td>Harsh Ved</td>
		  <td>20</td>
		  <td>Mumbai</td>
		  <td>Maharashtra</td>
		  <td>
			<button type="button" class="btn btn-outline-warning">Edit</button>
			<button type="button" class="btn btn-outline-danger remove">Delete</button>
		  </td>
		</tr>
		<tr>
		  <td>Vijay Odedara</td>
		  <td>23</td>
		  <td>Surat</td>
		  <td>Gujarat</td>
		  <td>
			<button type="button" class="btn btn-outline-warning">Edit</button>
			<button type="button" class="btn btn-outline-danger remove">Delete</button>
		  </td>
		</tr>
	   
	  </tbody>
	</table>
	
	<a href="user.php"><button type="button" class="btn btn-outline-danger" >Logout</button></a>

</div><!-- /example --

<!-- javascript js -->	
<!-- <script src="js/jquery.js"></script> -->
<!-- <script src="js/bootstrap.min.js"></script>	 -->
<!-- <script src="js/jquery.backstretch.min.js"></script> -->
<!-- <script src="js/custom.js"></script> -->
<!-- <script src="js/common.js"></script> -->

</body>
</html>