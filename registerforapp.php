<?php
	$db_name = "iste_201718";
	$mysql_username = "iste";
	$mysql_password = "Tech.18";
	$server_name = "localhost";
	$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
    if($conn) 
    {
        echo "Connection Successful";
    }
    else 
    {
        echo "Connection Unsuccesful";
    }

	$name = $_POST["name"];
	$username = $_POST["emailAddress"];
	$phone = $_POST["phoneNumber"];
	//$year = $_POST["year"];
	//$eventname = $_POST["eventname"];
	//$category = $_POST["category"];

	$statement = mysqli_prepare($con, "INSERT INTO test(name,username,phone) VALUES (?,?,?)");
	mysqli_stmt_bind_param($statement,"siss",$name,$username,$phone);
	mysqli_stmt_execute($statement);

	$response = array();
	$response["success"] = true;

	echo json_decode($response);
?>
