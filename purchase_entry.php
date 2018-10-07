<?php
ob_start();
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['usr_id']) == "") {
  header("Location: index.php");
}

if(isset($_POST['submit'])){
  

  // $name=$_GET['item name'];
  // $date=$_GET['date'];
  // $catagory=$_GET['catagory'];
  // $type=$_GET['type'];
  // $color=$_GET['color'];
  // $size = $_GET['size'];
  // $userType=$_GET['gender'];
  // $pieces=$_GET['piece'];
  // $price=$_GET['price'];

  // $SQL = "INSERT INTO `product`( `name`, `date`, `catagory`, `type`, `color`, `size`, `userType`, `pieces`, `price`) VALUES (".$name.",".$date.",".$catagory.",".$type.",".$color.",".$size.",".$gender.",".$pieces.",".$price.")";

  // echo 'hi';
  // header("Location: about.php");

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
        <li class="active"><a href="purchase_entry.php">purchase entry</a></li>
        <li><a href="sales_entry.php">sales entry</a></li>
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
    <h1><font color>Smartex Online Shop Management System</h1>
    <h4><font color="#ffffff">An Ultimate Fashion Wear, Khulna</h4>
    
    <!--Code starts here-->    <!--Code starts here-->
        <!--Code starts here-->    <!--Code starts here-->




      <div>

          <h1>Purchase Information:</h1>
          
          <input type="text" name="purchase id" placeholder="purchase id" style="color:black;">

          <br><br>
          <input type="text" name="item name" placeholder="Item name" style="color:black;">

          <br><br>
          <input type="date" name="date" style="color:black;">
          <br>
          <h1>Product details:</h1>
          
          <input type="text" name="category" placeholder="Catagory" style="color:black;">

          <br><br>
          <input type="text" placeholder="Type" style="color:black;" name="type">

          <br><br>
          <input type="text" placeholder="Color" style="color:black;" name="color">

          <br><br>
          <input type="text" name="size" placeholder="Size" style="color:black;">

          <br>
          <h2>USER:</h2>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="child"> Child
          <br> <br>
          <input type="number" placeholder="pieces" style="color:black;" name="piece">
          <br><br>
          <input type="number" style="color:black;" name="price" placeholder="Price">
          <br>

          <br><br>
          <button type="submit" name="submit" value="submit" style="color:black;" >submit</button>
          

          <br><br>

      </div>




      <!--code ends here-->


      <div>
        <h4>All Right Reserved by (c)Cse Discipline, KU, Khulna.</h4>
      </div>
  </div>
</div>


</body>
</html>