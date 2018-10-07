<?php
ob_start();
session_start();
include_once 'dbconnect.php';
 
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
        background-image: url("image/colorful.jpg");
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
        <li ><a href="home.php">Portfolio</a></li>
        </li>
        
       

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php
            //echo $_SESSION['usr_name']; ?>
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
    <h3><font color="#ffffff">An Ultimate Fashion Wear</h3>
    <h3><font color="#ffffff">Khulna</h3>
  </div>
</div>

<div class="container">
  <div class="info">
    
    
    <h3 ><font color="#ffffff"></font></h1>
    <h3 ><font color="#ffffff">This Software is Developed By:</font></h3>

    <h4 ><font color="#ffffff">Rifat Hasan Shuvo</font></h1>
    <h4 ><font color="#ffffff">Student ID: 140227</font></h1>

    <h4 ><font color="#ffffff">Imran Hossain Arif</font></h1>
    <h4 ><font color="#ffffff">Student ID: 140231</font></h1>

    <h4 ><font color="#ffffff">&</font></h1>
    <h4 ><font color="#ffffff">SK Al Zaminur Rahman</font></h1>
    <h4 ><font color="#ffffff">Student ID: 140240</font></h1>

    <h3 ><font color="#ffffff">Under The Supervision of</font></h1>

    <h4 ><font color="#ffffff">Debasish Chakrabarti</font></h1>
    <h4 ><font color="#ffffff">Lecturer</font></h3>

    <h4 ><font color="#ffffff">Fatima Tabassum</font></h1>
    <h4 ><font color="#ffffff">Lecturer</font></h3>
    
    <h4 ><font color="#ffffff">CSE Discipline, Khulna University</font></h3>
    <h4 ><font color="#ffffff">Khulna</font></h1>

    


  </div>
</div>


<div class="container">
  <div class="info">
    
  </div>
</div>


</body>
</html>