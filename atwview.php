<?php
/*$servername="localhost";
$db="iste";
$username="Tech.18";
$password="iste_201718";*/
$conn=mysqli_connect("localhost","iste","Tech.18","iste_201718");
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<form action="sync.php" method="post">
	<div class="container">
	  	
		<h2 style="margin:10,10,10,10;display: inline-block;">Registations</h2>
		<button class="btn btn-default" type="submit" style="margin-top:20px;margin-right: 20px;margin-bottom: 15px;float: right;" formaction="sync.php">Sync</button> 
		
	                                                                                      
	<div class="table-responsive">          
	  <table class="table">
	    <thead>
	      <tr>
	      	<th></th>
	        <th>#</th>
	        <th>Name</th>
	        <th>Class</th>
	        <th>Phone</th>
	      </tr>
	    </thead>
	    <tbody>
	      <?php
	      $sql="SELECT user_id,name1, className1, phoneNumber1, name2, className2, phoneNumber2, name3, className3, phoneNumber3 from data order by user_id";
		  $result=mysqli_query($conn,$sql);
		  while($row=mysqli_fetch_assoc($result))
	      {
	      	echo "<tr>";
	      		/*echo "<td>"; echo "<button class=btn btn-default style='height:30px;font-size:12px;'>OK</button>"; echo "</td>";*/
	      		echo "<td>"; ?> 
	      			<input type='checkbox' name=team[] value="<?php echo $row['user_id']; ?>"></input> 
	      		<?php echo "</td>";
	      		echo "<td>"; echo $row['user_id']; echo"</td>";
		        echo "<td>"; echo $row['name1']; echo"<br>"; echo $row['name2']; echo"<br>"; echo $row['name3']; echo"</td>";
		        echo "<td>"; echo $row['className1']; echo"<br>"; echo $row['className2']; echo"<br>"; echo $row['className3']; echo"</td>";
		        echo "<td>"; echo $row['phoneNumber1']; echo"<br>"; echo $row['phoneNumber2']; echo"<br>"; echo $row['phoneNumber3']; echo"</td>";
	      	echo"</tr>";
	      }
	      ?>
	    </tbody>
	  </table>
	</div>
</form>
</body>
</html>



<?php
/*

$sql="SELECT name1, className1, phoneNumber1, name2, className2, phoneNumber2, name3, className3, phoneNumber3, flag, register from data";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
	echo $row['name1'];
	echo $row['className1'];
	echo $row['phoneNumber2'];
	echo $row['name2'];
	echo $row['className2'];
	echo $row['phoneNumber2'];
	echo $row['name3'];
	echo $row['className3'];
	echo $row['phoneNumber3'];
	echo $row['flag'];
	echo $row['register'];
}
*/
?>