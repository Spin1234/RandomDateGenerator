<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fun Tools</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <form class="container-fluid justify-content-start">
    <a href="home.html"><button class="btn btn-outline-success me-2" type="button">Home</button></a>
    <center><h6 style="color: white;">Random Date Generator</h6></center>
  </form>
</nav>
<br>
<center>
  <h4>Generate Random Dates</h4><br>
<form action="" method="post">
    <label for="Year">Year: </label>
    <input type="number" name="year" id="Year" required>
    <br><br>
    <label for="SD">Strating Mounth (1-12): </label>
    <input type="number" name="sd" id="SD">
    <br><br>
    <label for="ED">Ending Mounth (1-12): </label>
    <input type="number" name="ed" id="ED">
    <br><br>
    <label for="C">How many random dates you want? </label>
    <input type="number" name="c" id="C">
    <br><br>
    <input type="submit" value="Get dates">
</form>
</center>
<br>
<center>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
  # code...
  $year=$_POST['year'];
  $sd=$_POST['sd'];
  $ed=$_POST['ed'];
  $c=$_POST['c'];
  echo "<h4>"."Random Dates (DD/MM/YY) generated ($sd to $ed Months) : $c"."</h4>";
  for ($i=1; $i <= $c ; $i++) { 
    echo "Date $i: ".rand(1,30)."/".rand($sd,$ed)."/".$year."<hr>";
  }
}
?>
</center>
<br>
<h2>How to use this tool</h2>
<ul>
  <li>In the year section enter the year you want random of </li>
  <li>In starting mounth section enter the mounth from which you want random dates</li>
  <li>Inending mounth section enter the mounth upto which the random dates will be generated</li>
  <li>And at last enter how many dates you want to be generated</li>
</ul>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>