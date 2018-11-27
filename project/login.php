<?php 
 session_start();
 $db = mysqli_connect("localhost","root","","login");
 
 if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from log where user='".$uname."'AND Pass='".$password."' limit 1";
    $result=mysqli_query($db,$sql);
	
	 if(mysqli_num_rows($result)==1){
        echo "<script> window.location.assign('reg.php'); </script>";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
 }
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title text-align="center"> Login</title>
		<link rel="stylesheet" href="login.css">
		
		
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		
		<style type="text/css">
			body{
				background-image:url(bk.Jpg);
				background-size:cover
				color:white;
				background-repeat: no-repeat;
				background-position: center;
				background-attachment: fixed;
				
			}
			Form{
			background-color:rgba(169, 68, 66, 0.35);
			padding : 40px;
			margin-top: 95px;
			padding-bottom: 60px;
			color: white;
			margin-right:105px;
			}
			h2{
			text-align:center;
			}
			.btn{
			width: 100px;
			margin-top:20px;
			}
			.form-control{
			background-color:rgba(49, 31, 13, 0.63);
			}
		</style>
		
		
	</head>
	<body>
	

    
	<div class="container">
			<div class="row">
			<div class="col-sm-offset-3 col-sm-7">
			
			<img src="user.png" class="user">
			<form method="POST" action="reg.php">
			<h2><b>Log In Here</b></h2>
				<p>Email</p>
				<input type="text" name="username" placeholder="Enter Email">
				<p>Password</p>
				<input type="password" name="password" placeholder="••••••"><br></br>
				<a href="admin.php"><input type="submit" name="login" value="Sign In"></a><br></br>
				<a href="#">Forget Password</a>
			</form>
		</div>


		
	</body>
</html>
