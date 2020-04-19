<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
input[type=text], select, textarea {
  width: 80%;
  padding: 10px;
  border: 2px solid #ccc;
  border-radius: 3px;
  resize: vertical;
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
input[type=submit] {
  background-color: #9e9ba3;
  color: white;
  padding: 15px 25px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  float: right;
}
input[type=submit]:hover {
  background-color: #45a049;
}
.container {
  border-radius: 12px;
  background-color:#D8D8D8;
  padding: 11px;
}
.col-25 {
  float: left;
  width: 35%;
  margin-top: 6px;
}
.col-75 {
  float: left;
  width: 60%;
  margin-top: 6px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 60%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2><center><font color="#000000"><strong>Add new ingredient to the table</strong></font></center></h2></h2>


<div class="container">
  <form action="target_ingredient.php" method= "POST">
    <div class="row">
      <div class="col-27">
        <label for="Ingredient_Name">Ingredient Name</label>
        <input type="text" id="Ingredient_Name" name="Ingredient_Name" placeholder="Ingredient Name for???..">
	</div></div>
	 <div class="row">
      <div class="col-27">
        <label for="Ingredient_ID">Ingredient ID</label>
        <input type="text" id="Ingredient_ID" name="Ingredient_ID" placeholder="Ingredient ID for???..">
      </div></div>
    <div class="row">
      <div class="col-27">
        <label for="Ingredient_Amount">Ingredient Amount</label>
        <input type="text" id="Ingredient_Amount" name="Ingredient_Amount" placeholder="Ingredient Amount for???..">
	</div></div>
    <div class="row">
      <input type="submit" value="Add">
    </div>
  </form>
</div>
</body>
</html>
