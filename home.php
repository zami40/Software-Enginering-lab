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
        <li class="active"><a href="home.php">Portfolio</a></li>
        <li><a href="inventory.php">inventory</a></li>
        <li><a href="purchase_entry.php">purchase entry</a></li>
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
    <h1><font color="#ffffff">Smartex Online Shop Management System</h1>
    <h4><font color="#ffffff">An Ultimate Fashion Wear, Khulna</h4>
    
    <!--Code starts here-->    <!--Code starts here-->
        <!--Code starts here-->    <!--Code starts here-->




      <div>

        <?php
        $useri = $_SESSION['usr_id'];
          $sql = "SELECT users.id as id, email, name, contactNo, BirthDate,       gender, area, street, houseNo, block, zipCode, section
                FROM users, employee
                where users.id = employee.id and users.email = '$useri' ";
                
      //echo $sql;exit;
      $result = mysqli_query($connection, $sql);
      
      while($row=mysqli_fetch_array($result))
      {
      ?>

        <h2>employees personal Information:</h2>
        <h3>Name:</h3>
        
        <input type="text" name="name" style="color:black" value="<?php echo $row['name']; ?>" readonly>
        <br>
        <h2>Address details:</h2>

        <h3>Street:</h3>
        <input type="text" name="street"  style="color:black" value="<?php echo $row['street']; ?>" readonly>

        <h3>house no:</h3>
        <input type="text" name="house" style="color:black" value="<?php echo $row['houseNo']; ?>" readonly>

        <h3>block:</h3>
        <input type="text" name="block" style="color:black" value="<?php echo $row['block']; ?>"  readonly>

        <h3>Zip code:</h3>
        <input type="text" name="zip" style="color:black" value="<?php echo $row['zipCode']; ?>" readonly>

        <h3>section:</h3>
        <input type="text" name="section" style="color:black" value="<?php echo $row['section']; ?>" readonly>

        <h3>Contact no:</h3>
        <input type="text" name="contact" style="color:black" value="<?php echo $row['contactNo']; ?>" readonly>

        <h3>birth Date:</h3>
        <input type="text" name="birth" style="color:black" value="<?php echo $row['BirthDate']; ?>" readonly>

        <h3>gender:</h3>
        <input type="text" name="gender" style="color:black" value="<?php echo $row['gender']; ?>" readonly>
        <br>
        <br>

        <?php
        
         }
        ?>
        
         <br>
        <br>



      </div>




      <!--code ends here-->


      <div>
        <h4>All Right Reserved by (c)Cse Discipline, KU, Khulna.</h4>
      </div>
  </div>
</div>
<!--div class="container">
  <div class="info">
    <table width="100%" border="1">
        <tr> 
          <td><strong><font color="#000000" size = "7">Course Id</font></strong></td>
          <td><strong><font color="#000000" size = "7">Year</font></strong></td>
          <td><strong><font color="#000000" size = "7">Term</font></strong></td>
          <td><strong><font color="#000000" size = "7">Gpa</font></strong></td>
  
    
        </tr>

        <?php
        $sql = "SELECT * FROM student, takes where st_id = s_id and email = '" .$_SESSION['usr_name']. "'";
    //echo $sql;exit;
    $result = mysqli_query($connection, $sql);
    while($row=mysqli_fetch_array($result))
    {
    ?>
        <tr> 
          <td><font color="#ffffff" size = "5"><?php echo $row['c_id']; ?></font></td>
          <td><font color="#ffffff" size = "5"><?php echo (($row['term_code'] -($row['term_code'] %10))/ 10); ?></font></td>
          <td><font color="#ffffff" size = "5"><?php echo ($row['term_code'] % 10); ?></font></td>
          <td><font color="#ffffff" size = "5"><?php echo $row['grade']; ?></font></td>
        
        </tr>
      <?php
    }
    ?>
  </div>
</div-->

</body>
</html>