<?php
$teams=$_POST['team'];

/*
$servername="localhost";
$db="injection";
$username="root";
$password="";*/
$conn=mysqli_connect("localhost","iste","Tech.18","iste_201718");
foreach ($teams as $team){ 
    $sql="UPDATE data SET flag=1 WHERE user_id=$team";
    $result=mysqli_query($conn,$sql);
}

?>
<script type="text/javascript">
	window.location.href="get.php";
</script>
