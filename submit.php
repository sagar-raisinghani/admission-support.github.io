<?php
$name=$_POST["user_name"];
$email=$_POST["user_email"];
$phn=$_POST["user_mobile"];
$class=$_POST["user_class"];
$years=$_POST["user_years"];

/*$servername="localhost";
$db="injection";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,$db);
$sql="INSERT INTO injecttable VALUES ('$name','$class','$years','$phn','$email')";
$result=mysqli_query($conn,$sql);*/

$mysqli = new mysqli("localhost", "iste", "Tech.18", "iste_201718");
if ($stmt = $mysqli->prepare("INSERT INTO member (name, class, years, mobile, email) VALUES (?, ?, ?, ?, ?)")) 
{
    // Bind the variables to the parameter as strings. 
    $stmt->bind_param("ssiis", $name, $class, $years, $phn, $email);
 
    // Execute the statement.
    $stmt->execute();
 
    // Close the prepared statement.
    $stmt->close();
}
?>

<script type="text/javascript">
	window.location.href="member.html";
</script>