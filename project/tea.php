<?php

//conncetion
  $db = mysqli_connect("localhost","root","","ratikra");
//query
  $query="select * from teacher";
  $result=mysqli_query($db,$query);
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
</head>
<body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="tea.php">Teacher</a></li>
      <li><a href="stnt.php">Student</a></li>
      <li><a href="cor.php">course</a></li>
      
    
  </div>
</nav>





		<table align="center" border="1px" style="width:500px;line-height:50px;" >
			<tr>
				<th colspan="4"><h2>Database Record</h2></th>
			</tr>
			
				<th>name</th>
				<th>Couse Name</th>
				<th>PHONE</th>
				<th>Email</th>
				
			<!--fetch data in database and show the table -->
			
			<?php
				while($row = mysqli_fetch_array($result)){
			?>	
				 
				 <tr>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['c_name'];?></td>
					<td><?php echo $row['phone'];?></td>
					<td><?php echo $row['email'];?></td>
				 </tr>
				 
			<?php	 
				}
			?>
		</table>



</body>
</html>

