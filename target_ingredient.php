<?php

$iname = $_POST['Ingredient_Name'];
$inumber = $_POST['Ingredient_ID'];
$iamount= $_POST['Ingredient_Amount'];

include 'connect.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
 	
	$sql = "insert into ingredient values('$iname', '$inumber', '$iamount');";
	$result = $conn->query($sql);

        header ("Location: home_ingredient.php");
?>

