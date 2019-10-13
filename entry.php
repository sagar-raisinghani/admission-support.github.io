<?php
require "conn.php";
$name1 = $_POST ["name1"];
$className1 =$_POST ["className1"];
$phoneNumber1 =$_POST ["phoneNumber1"];
$name2 = $_POST ["name2"];
$className2 =$_POST ["className2"];
$phoneNumber2 =$_POST ["phoneNumber2"];
$name3 = $_POST ["name3"];
$className3 =$_POST ["className3"];
$phoneNumber3 =$_POST ["phoneNumber3"];
$mysql_qry = "insert into data (name1, className1, phoneNumber1, name2, className2, phoneNumber2, name3, className3, phoneNumber3) values('$name1','$className1','$phoneNumber1','$name2','$className2','$phoneNumber2','$name3','$className3','$phoneNumber3')";

if($conn->query($mysql_qry) === TRUE) {
echo "Data Insertion Successful";
}
else{
echo "Error:" . $mysql_qry. "<br>". $conn->error;
}
$conn->close();
?>
