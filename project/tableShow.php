<?php

//conncetion
  $db = mysqli_connect("localhost","root","","login");
//query
  $query="select * from reg";
  $result=mysqli_query($db,$query);
  
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Fetch Date</title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
	</head>
	
	<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>

	 <ul class="nav navbar-nav navbar-right">
      <li><a href="ts.php"><span class="glyphicon glyphicon-log-in"></span> Information</a></li>
    </ul>
  </div>
</nav>

		<h1 align="center">This is fetch data and crate a table</h1>
		
		<table align="center" border="1px" style="width:500px;line-height:50px;" >
			<tr>
				<th colspan="4"><h2>Database Record</h2></th>
			</tr>
			
				<th>ID</th>
				<th>USER</th>
				<th>PASS</th>
				<th>PHONE</th>
				
			<!--fetch data in database and show the table -->
			
			<?php
				while($row = mysqli_fetch_array($result)){
			?>	
				 
				 <tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['phone'];?></td>
				 </tr>
				 
			<?php	 
				}
			?>
		</table>
		
	</body>
	
</html>
