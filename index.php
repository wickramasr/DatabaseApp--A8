<!DOCTYPE html>
<html lang="en">
<head>
  <title>NepSri</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
table, th, td {
  border: 2px solid black;
  border-spacing: 1px;
  }
  th, td {
  padding: 5px;
}
th {
  text-align: left;
}
table{
  width: 80%;    
  background-color: white ;
  
}
table {
  border-spacing: 2px;
}
</style>
</head>

<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">NepSri</a>
    </div>
    <ul class="nav navbar-nav">
      
      
      <li class="active"><a href="#"><b>Recipe</b></a></li>
      <li><a href="#"><b>Customer</b></a></li>
      <li><a href="#"><b>Ingredient</b></a></li>
      <li><a href="#"><b>Bill</b></a></li>
      <li><a href="#"><b>About Us</b></a></li>
        <li><a href="https://docs.google.com/document/d/1-DUma1qz0rY8BqHkYd2Lrz6LSKUHfq70c7sqaTGjUcY/edit"><strong><font        color=#2F4F2F><i         class="fa fa-fw fa-       question-circle"></i> HELP           </font></strong></a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h1><center><b>Welcome to NepSri</b></center></h1>

</div>
<?php

require('connect.php');

$result = $conn->query("select * from mytable");


$sql = "SELECT * from recipe;  ";
$result = $conn->query($sql);
if ($result->num_rows > 0)
 
{
echo '<div class="tab-content">';
echo '<div id="donor" class="tab-pane fade in active">';
echo '<table table-hover class="centerTable">';
echo '<tr bgcolor=#00FFFF style="color:#00006a">

<h2 style="color:Black"; align="center" class="w3-myfont">Recipe</h2>
<br/>
<th>Recipe Name</th>

<th>Recipe ID</th>
<th>Description</th>
<th>Preparing Time(min)</th>

</tr>';


// output data of each row

    while($row = $result->fetch_assoc())
 {

echo "<tr>
<td>" . $row["Recipe_Name"]. "</td>

<td>" . $row["Recipe_ID"]. "</td>
<td>" . $row["Description"]. "</td>
<td>" . $row["Preparing_Time"]. "</td>

</tr>";

    }
 echo "</table>";
} else {
    echo "0 results";
}  
$conn->close();
?>
</body>
</html>

</body>
</html>
