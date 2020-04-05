<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
input[type=text], select, textarea {
  width: 50%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 2px;
  resize: vertical;
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
input[type=submit]:hover {
  background-color: #45a049;
}
.container {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 10px;
}
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}
.col-75 {
  float: left;
  width: 50%;
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
    width: 50%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2><center><font color="#238E68"><strong>Add new recipe to the table</strong></font></center></h2></h2>


<div class="container">
  <form action="target_nepsri.php" method= "POST">
    <div class="row">
      <div class="col-25">
        <label for="Recipe_Name">Recipe Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="Recipe_Name" name="Recipe_Name" placeholder="Recipe for???..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Recipe_ID">Recipe ID</label>
      </div>
      <div class="col-75">
        <input type="number" id="Recipe_ID" name="Recipe_ID" placeholder="Recipe ID????..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Description">Description</label>
      </div>
      <div class="col-75">
      <input type="text" id="Description" name="Description" placeholder="Description.......">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Preparing_Time">Preparing Time(min)</label>
      </div>
      <div class="col-75">
        <input type="Number" id="Preparing_Time" name="Preparing_Time" placeholder="time..">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Add">
    </div>
  </form>
</div>
</body>
</html>
