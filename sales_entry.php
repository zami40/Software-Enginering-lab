<?php
ob_start();
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['usr_id']) == "") {
  header("Location: index.php");
}




?>

<!DOCTYPE html>
<html>
<head>
  <head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="login_files/bootstrap.min.css">
  <script src="login_files\jquery.min.js"></script>
  <script src="login_files\bootstrap.min.js"></script>
</head>

<style>
    body {
        background-color = #93B874;
        background-image: url("image/34.jpg");
    }
        
  </style> 
<body>

<nav class="navbar navbar-inverse">


  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Smartex Online Shopping</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Portfolio</a></li>
        <li><a href="inventory.php">inventory</a></li>
        <li><a href="purchase_entry.php">purchase entry</a></li>
        <li class="active"><a href="sales_entry.php">sales entry</a></li>
        <li><a href="daily_report.php">daily report</a></li>
        <li><a href="employee_sales.php">employee sales</a></li>
        <li><a href="monthly_report.php">monthly report</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="about.php">About Us</a></li>            
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php
            echo $_SESSION['usr_name']; ?>
         </a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
      </ul>
      
    </div>
  </div>
</nav>
  


</body>
</head>
<body>

<div class="container">
  <div class="info">
    <h1><font color="#ffffff">Smartex Online Shop Management System</h1>
    <h4><font color="#ffffff">An Ultimate Fashion Wear, Khulna</h4>
    
    <!--Code starts here-->    <!--Code starts here-->
        <!--Code starts here-->    <!--Code starts here-->




      <div>

        <h1>Sales Information:</h1>
        <h3>Date:</h3>
        <input type="Date" name="date" style="color:black;">
        <br><br>
        <h3>TIme:</h3>

        <input type="time" name="time" placeholder="Time" style="color:black;">
        
        <br>
        <h1>Product details:</h1>

        <br>
        <input type="text" placeholder="item id" style="color:black;" name="id">

        <br><br>
        <input type="number" placeholder="Pieces" style="color:black;" >
        <br><br>
        <button type="submit" name="submit" style="color:black;">Submit</button>
        <br><br>
          

      </div>




      <!--code ends here-->

      <br><br>
      <div>
        <h4>All Right Reserved by (c)Cse Discipline, KU, Khulna.</h4>
      </div>
  </div>
</div>


</body>
</html>