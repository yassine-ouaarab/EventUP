<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>eventUP Login</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

  <link rel="stylesheet" type="text/css" media="screen" href="../css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/style.css">

<style>
body:before {
  background-color: white
}

</style>

</head>

<body>
<?php
session_start();
?>

  <div class="container">
    <div class="info">
    </div>
  </div>
  <div class="form" >
    <div class="thumbnail" style="background-color: #00a2df;
    overflow: hidden;
    box-shadow: 0px 1px 15px -10px #959595;"><img src="img/user.png" 
    style="width: 120px;margin-top: -20px;margin-left: -14px;"/></div>
    
    <form class="register-form" method="POST">
      <i class="fa fa-user" id="usr"></i><input type="text" placeholder="Your Name" name="name" />
      <i class="fa fa-envelope" style="font-size:14px" id="usr"></i><input type="text" placeholder="Your Email" name="mail" />
      <i class="fa fa-unlock-alt" id="usr"></i><input type="password" placeholder="Password" name="pass"/>
      <button type ="submit" name="create" style="background-color: #00A0DC;height: 45px;
    line-height: 1px;">Create</button>
      <p class="message">Already registered? <a href="#" style="color: #0c86b4;">Sign In</a></p>
    </form>

    <form class="login-form" method="POST">
    <p class="falsepass">User not exist or Password Wrong !</p>
      <i class="fa fa-user" id="usr"></i><input type="text" placeholder="Username" name="username"/>
      <i class="fa fa-unlock-alt" id="usr"></i><input type="password" placeholder="Password" name="userpass" />
      <button type ="submit" name="login" style="background-color: #00A0DC;height: 45px;
    line-height: 1px;">Login</button>
      <p class="message">Not registered? <a href="#" style="color: #0c86b4;">Create an account</a></p>
    </form>
  </div>

  <script src="../js/jquery-3.3.1.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="js/index.js"></script>





  <?php 
  error_reporting(0);
$con = new mysqli('localhost','root','','ensaevent'); 




$Username = $_POST["username"];
$Userpass = $_POST["userpass"];

/*
$sel_reqE = "SELECT userPass FROM participant WHERE userName='$Username'";
$sel = $con->query($sel_req);
$row = $sel->fetch_array();
echo $row[2];*/


if (isset($_POST['login'])) {
        
  $sel_req = "SELECT * FROM participant WHERE user_nam='$Username' and user_pass = '$Userpass'";
  $sel = $con->query($sel_req);
  $row = $sel->fetch_array();

        if(!$row)
        {
                ?>
                <style>
                .falsepass
                {    
                  display: block;
                }
                
                </style>
                <?php
        }
        else
        {
        $_SESSION['id_particip'] = $row['id_particip'];
            echo "<script> window.location.assign('../pages/index/index2.php')</script>";
        }

  }

  $name = $_POST["name"];
  $mail = $_POST["mail"];
  $pass = $_POST["pass"];

 
  if (isset($_POST['create'])) {
        
    $ins_req = "insert into participant values (2,'$name','$pass','$mail','vide','vide','vide')";
    $ins = $con->query($ins_req);
}
         
  $con->close();
  ?>




























</body>

</html>