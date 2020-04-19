<?php

$pname = $_POST['Recipe_Name'];
$pnumber = $_POST['Recipe_ID'];
$plocation = $_POST['Description'];
$dnum = $_POST['Preparing_Time'];
$id = mt_rand(10000, 99999); 

include 'connect.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
 	
	$sql = "insert into recipe values('$pname', '$id', '$pnumber', '$plocation' ,'$dnum');";
	$result = $conn->query($sql);

        header ("Location: home_recipe.php");
?>

