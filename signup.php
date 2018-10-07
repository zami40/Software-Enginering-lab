

<?php
//error_reporting(E_ERROR ^ E_PARSE);
ob_start();
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['usr_id'])!="") {
  header("Location: home.php");
}

//check if form is submitted
if (isset($_POST['create'])) {
    //header("Location: \\reg-system\index.php");

   $email = mysqli_real_escape_string($connection, $_POST['email']);
   $password = mysqli_real_escape_string($connection, $_POST['psw']);
   $rpassword = mysqli_real_escape_string($connection, $_POST['rpsw']);
   $rank = mysqli_real_escape_string($connection, $_POST['rank']);
   // $date = date('Y-m-d h:i:s');
   //$userid = mysqli_real_escape_string($connection, $_POST['name1']);
   //$id = mysqli_real_escape_string($connection, $_POST['id']);
   

   $error = false;
    if($rpassword != $password){
      $error = true;
   }
    else{
      $error = false;
    }
  
    
   // encryption passward

   $result = mysqli_query($connection, "INSERT INTO users (password, email, rank) VALUES ('".sha1($password)."', '" .$email. "', '".$rank."')" ) or die("Error: ".mysqli_error($connection));
  // if (!$result) {
   // printf("Error: %s\n", mysqli_error($connection));
   // exit();
//}
    // or die( mysqli_error($connection)));

//   $result = mysqli_query($connection, "SELECT * FROM user_table WHERE email = '" . $email. "' and password = '" . md5($password) . "'");
 //  $update = mysqli_query($connection,"UPDATE users SET last_login= '" . $date. "' WHERE email = '" . $email. "' and password = '" . md5($password) . "' ");
  // if(!$error){
    if (mysqli_fetch_array($result))  {
       $_SESSION['usr_id'] = $email;
       $_SESSION['usr_name'] = $email;
       header("Location: index.php");
     } 
     // else {
     //  $errormsg = "Incorrect Email or Password!!!" ;
     // }
   //}
  // else {
    //  $errormsg = "Password does not match!!!";
   //}
  }

  
?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Software-engineering</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login_files\bootstrap.min.css">
    <script src="login_files\jquery.min.js"></script>
    <script src="login_files\bootstrap.min.js"></script>
  </head>

  <style>
    body {
        background-color = #93B874;
        background-image: url("image/44.jpg");

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
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="about.php">About Us</a></li>        
      </ul>
      <ul class="nav navbar-nav navbar-right">        
        <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign in</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="thumbnail"><img src="image\logonew.png"/></div>
  <div class="info">
    <h1>Smartex Online Shop Management System</h1>
    <h3>An Ultimate Fashion Wear</h3>
    <h3>Khulna</h3>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="image\ku.jpg"/></div>
  <!-- main image source "https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"; -->
  
  

  <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform" class="login-form">
    <input type="text" name="email" placeholder="email address"/>
    <input type="password" name="psw" placeholder="password"/>
    <input type="password" name="rpsw" placeholder="re-type password"/>
    <input type="int" name="rank" placeholder="rank"/>
    

    
    <span class= "text_danger"> <?php if (isset($errormsg)) {echo $errormsg;} ?>  </span>
    <button type="submit" name="create" value="create">Create</button>
    <p class="message"> Already registered? <a href="index.php">Sign In</a></p>
  </form>
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
  <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>

  </body>
</html>
