<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<title>Garage Management</title>
  <!-- Add Bootstrap Links -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
 .tab1 { 
            tab-size: 2; 
        } 
.w3-button
{
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.button:hover 
{
  background-color: black;
}
th
{
	color:white;
}
table
{
	padding: 10px;
	
}
.button:hover 
{
  background-color: black;
}
button
{
  background-color: #008000;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.button:hover 
{
  background-color: black;
}
button
{
  background-color: #008000;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.bg {
  background-image: url(""headd.png"");

  height: 50%; 

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.w3-container{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.home-bg{
  width: 70vw;
  height: 30vh;
}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;background-color:blue;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-100"><b>
  </div>
  <div class="w3-bar-block">
  <img src="cars.jpg" align="middle" height="150" width="200"><br>
  <a href="#" onclick="window.location.href='index.php'" class="w3-bar-item w3-button  w3-hover-white">Home</a> 
    <a href="#showcase" onclick="window.location.href='add.php'"class="w3-bar-item w3-button   w3-hover-white">Add Accounts</a> 
    <a href="#services" onclick="window.location.href='edit.php'"class="w3-bar-item w3-button w3-white w3-border w3-hover-white">Edit Accounts</a> 
    <a href="#designers" onclick="window.location.href='view.php'"class="w3-bar-item w3-button w3-hover-white">View</a> 
    <a href="#packages" onclick="window.location.href='cb.php'"class="w3-bar-item w3-button w3-hover-white">Company Balance</a> 
    <a href="#contact" onclick="window.location.href='add1.php'"class="w3-bar-item w3-button  w3-hover-white">Add Vehicle</a>
  </div>
</nav>
<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  
   <div class="w3-container" style="margin-top:50px" id="showcase">
	<img class="home-bg" src="head1.png" align="middle"><br>
<?php
$z=$_POST["sno"];
$conn=mysqli_connect("localhost","root","","database");
	$sqli = "SELECT* FROM main where sno=".$z;
    $resulti = mysqli_query($conn, $sqli);
	$rowi = mysqli_fetch_assoc($resulti);
	if($rowi['status']=='incomplete')
	{
		echo "<form action='verify1.php' method='post'>";
echo "<div class='container' style='width:60vw'>";
  echo "<h1 align='center'>Edit Accounts</h1>";
  echo "<br> <br>";
  echo "<table class='table'>";
    echo "<thead>";
      echo "<tr bgcolor='#21395c'>";
        echo "<th></th>";
     echo"   <th></th>";
      echo"</tr>";
    echo "</thead>";
	echo "<tbody>";
    echo "<tr>";
      echo " <td>Date</td>";
       echo "<td>".$rowi['date']."</td>";
      echo "</tr>";    
	  echo "<tr bgcolor='lightblue'>";
        echo "<td>Vehicle No</td>";
        echo "<td>".$rowi['vehicle']."</td>";
      echo "</tr>";	  
	  echo "<tr>";
        echo "<td>To</td>";
        echo "<td>".$rowi['too']."</td>";
      echo "</tr>";    
	  echo "<tr bgcolor='lightblue'>";
        echo "<td>Remark</td>";
        echo "<td><input type='text' value='".$rowi['remark']."' name='remark'></td>";
      echo "</tr>";
	  echo "<tr>";
        echo "<td>Cash Mode</td>";
        echo "<td>".$rowi['cashmode']."</td>";
      echo "</tr>"; 
	  	  
	  $_SESSION['date']=$rowi['date'];
	  $_SESSION['vehicle']=$rowi['vehicle'];
	  $_SESSION['to']=$rowi['too'];
	  $_SESSION['advance']=$rowi['advance'];
	  $_SESSION['advancetype']=$rowi['advancetype'];
	  $_SESSION['cashmode']=$rowi['cashmode']; 	
	  $_SESSION['sno']=$z;
	  $_SESSION['bill']=$rowi['bill'];
	
	echo "<tr><td></td><td><input class='btn btn-success' type='submit' value='continue'>"; 
  	 echo " </tbody>";
  echo "</table>";
echo "</div>";
echo "</form>";
	}
	else
	{
		echo "<script>window.alert('Enter a valid serial number')</script>";
		echo "<br><br><form action='edit.php' method='post'><input type='submit' value='Go Back'></form>";
	}
?>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>

