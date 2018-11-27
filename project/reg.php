<?php

	//connection
	$db = mysqli_connect("localhost","root","","login");
  //when submitted button is presed
  if(isset($_POST['submit'])){
	 $name=$_POST['name'];
	 $email=$_POST['email'];
	 $phone=$_POST['phone'];
	
	 $sql = "INSERT INTO reg(name,email,phone) VALUES ('$name', '$email', '$phone')";
	  mysqli_query($db ,$sql);
	header("Location: tableShow.php");
  }
?>
<html lang="en">
<head>
  <title>Admin panal</title>
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<style type="text/css">
			body{
				background-image:url(r.jpg);
				background-size:cover;
				background-repeat: no-repeat;
				background-position: center;
				background-attachment: fixed;
				}
			
			Form{
			background-color:white;
			padding : 40px;
			margin-top: 136px;
			padding-bottom: 30px;
			color: black;
			margin-left:51px;
			}
			
			h2{
			text-align:center;
			}
			
			.btn{
			width: 90px;
			margin-top:20px;
			}
			.form-control{
			background-color:rgba(195, 234, 24, 0.26);
			height:45px;
			width:511px;
			
			
			}
		</style>
		
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>

	 
  </div>
</nav>

<div class="container">
<div class="row">
			<div class="col-sm-offset-2 col-sm-8">
			
	<form method="post" action="" enctype="multipart/form-data"
      	
	>
	<h2><b>Registration</b></h2>
	
		<p>name:</p>
		<input type="text" name="name" placeholder="Enter name">
		<p>email:</p>
		<input type="text" name="email" placeholder="Enter your email">
		<p>phone:</p>
		<input type="text" name="phone" placeholder="phone">
	 <div>
	 <br>
		<input type="submit" name="submit" value="submit">
	 </div>
	</form>
</div>
</body>
</html>
