<html>
<head>
	<title> ATW registration </title>
	<link rel="shortcut icon" type="image/x-icon" href="iste_blue.png" />
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
	$username = "iste";
	$password = "Tech.18";
	$servername = "localhost";
	$dbname = "iste_201718";
	
	$con = mysqli_connect($servername,$username,$password,$dbname) or die("\n Connection Failed !" . $con->connect_error);

	$query="select * from test";
	$sql=mysqli_query($con,$query);

	if(!$sql || mysqli_num_rows($sql)==0 )
	{
		?>
		<div class="container">
		<div class="col-md-4"></div>
		<div class="col-md-4 text-danger"> No Results Found !</div>
		<div class="col-md-4"></div>
		</div>
		<?php
	}
	else
	{
		?>
		<div class="container">
		<div class="col-md-2"></div>
		<table class="table table-bordered">
		<tr>
			<th> user_id</th>
			<th> name</th>
			<th> PhoneNumber</th>
			<th> className</th>
			<th> event</th>
			<th> Category</th>	
		<tr>
		<?php
		while($data=mysqli_fetch_Array($sql))
		{
			echo "<tr>";
			echo "<td> $data[0] </td> ";
			echo "<td> $data[1] </td> ";
			echo "<td> $data[2] </td> ";
			echo "<td> $data[3] </td> ";
			echo "<td> $data[4] </td> ";
			echo "<td> $data[5] </td> ";
			echo "</tr>";
		}
		?>
		</table>
		</div>
		<?php
	}
 ?>
</body>
</html>