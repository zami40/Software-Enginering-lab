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
        <li><a href="sales_entry.php">sales entry</a></li>
        <li><a href="daily_report.php">daily report</a></li>
        <li><a href="employee_sales.php">employee sales</a></li>
        <li class="active"><a href="monthly_report.php">monthly report</a></li>
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
        <h3>Monthly Report of Sales:</h3>

        <table width="100%" border="1">
          <tr>
            <td><strong><font color="#000000" size = "5">Date</font></strong></td>
            <td><strong><font color="#000000" size = "5">Item id</font></strong></td>
            <td><strong><font color="#000000" size = "5">Product description</font></strong></td>
            <td><strong><font color="#000000" size = "5">Pieces</font></strong></td>
            <td><strong><font color="#000000" size = "5">Amount</font></strong></td>
            
          </tr>
          <?php
          $sql = "SELECT employee_sales.date as date, pro_id as id, product.catagory as catagory, product.type as type, product.color as color, product.size as size, SUM(employee_sales.piece) as pieces, price
            from employee_sales, product
            WHERE pro_id = product.id
            GROUP BY pro_id";
      //echo $sql;exit;
      $result = mysqli_query($connection, $sql);
      $total = 0;
      while($row=mysqli_fetch_array($result))
      {
      ?>
          <tr> 
            <td><font color="#ffffff" size = "4"><?php echo $row['date']; ?></font></td>
            <td><font color="#ffffff" size = "4"><?php echo $row['id']; ?></font></td>
            <td><font color="#ffffff" size = "4"><?php echo $row['catagory'] . " " . $row['type'] . " " . $row['color'] . " " . $row['size']; ?></font></td>
            <td><font color="#ffffff" size = "4"><?php echo $row['pieces']; ?></font></td>
            <td><font color="#ffffff" size = "4"><?php echo $row['price']; ?></font></td>
          
          </tr>
        <?php
        $total = $total + $row['pieces'] * $row['price'];
         }
        ?>

        </table>
        
        <h3>Grand Total: </h3><br>
        <input type="text" name="total" style="color:black;" value="<?php echo $total; ?>">


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