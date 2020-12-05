<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Compte Utilisateur</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="../dist/css/component.css" rel="stylesheet">
    
    <link href="../dist/css/style2.css" rel="stylesheet">
    
    <link id="t-colors" href="../dist/css/default.css" rel="stylesheet">

    <style>
        a:hover
        {
            color:red;
        }
    </style>
    
</head>

<body>
<?php
session_start();
error_reporting(0);
$con = new mysqli('localhost','root','','ensaevent'); ?>

    <!-- Navigation -->
    <nav class="navbar navbar-custom " role="navigation" style="background-color: #292c2f;border:none;">

<div class="container navigation">

<div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="../../index/index2.php">
            <h4 style="margin-left: -20px;
    margin-top: -7px;
    text-transform: initial;
    font-family: Cairo;
    font-weight: bold;
    font-size: 35.82px;
    color: #00a0dce3;">event<span style="font-family: Cairo;
    font-weight: bold;
    font-size: 32px;
    color: #ffffffe6;">UP<span></h4>
          </a>
        </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav" style="margin-top: 7px;">
        <li><a href="../../browse/pages/parcourir.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 1px;
font-size: 13px;">PARCOURIR</a></li>

        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 1px;
font-size: 13px;">AIDE<b class="caret"></b></a>

        <ul class="dropdown-menu" style="background-color: #292c2f;border:none">
            <li style="border-bottom: none"><a href="#" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">COMMENT CA MARCHE ?</a>
            </li>

            <li style="border-bottom: 0.2px solid #999999;"><a href="#" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">OÙ SE TROUVE MES BILLETS ?</a></li>

            <li><a href="#" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">HELP CENTER</a></li>

        </ul>
        </li>

        <li><a href="../../createevent/pages/infos.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 1px;
font-size: 14px;">CRÉE UN ÉVENEMENT</a></li>

<li class="dropdown">
    <a href="#" id="carettt" class="dropdown-toggle" data-toggle="dropdown" style="color: #f5f5f5;"><img src="../../browse/img/admiine.png" style="width: 25px;
        height: 25px;
        margin-top: -2px;
        margin-right: -3px;">
        <b class="caret"></b></a>
    <ul class="dropdown-menu" style="background-color: #292c2f;border:none">
        <li style="border-bottom: 0.1px solid #4f4f4f"><a href="../../browse/pages/parcourir.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">PARCOURIR</a></li>

<?php
    $idParticip=$_SESSION['id_particip'];?>

        <li style="border-bottom: none"><a href="#" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">
<?php echo"BILLETS (0)";
?></a></li>


        <li style="border-bottom: 0.1px solid #4f4f4f"><a href="#" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">
<?php echo"AIMÉ (0)";?></a></li>

        <li style="border-bottom: none"><a href="../../createevent/pages/eventManager.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">GÉRER LES ÉVENEMENS</a></li>

        <li style="border-bottom: 0.1px solid #4f4f4f"><a href="../../compte/pages/organisateur.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">PROFILE D'ORGANISATEUR</a></li>

        <li style="border-bottom: none"><a href="../../compte/pages/participant.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">PARAMÉTRES DE COMPTE</a></li>

        <li style="border-bottom: none"><a href="../../createevent/pages/infos.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">CRÉE UN ÉVENEMENT</a></li>

        <li><a href="../../../login/login.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">SE DÉCONNECTER</a></li>
    </ul>
    </li>

</ul>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->


    <div id="page-wrapper">
        <form method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="row" style="padding-left: 315px;padding-right: 210px;">
                <div class="col-lg-12" style="display: inline-flex;margin-bottom: 33px;margin-left: 130px;">
                    <i class="fa fa-picture-o" style="font-size: 31px;
                            color: rgba(233, 233, 233, 0.925);
                            position: absolute;
                            margin-top: 37px;
                            margin-left: -49px;" aria-hidden="true"></i>
                    <h5 class="page-header">Compte Participant</h5>
                </div>

                <br><br><br><br><br><br>
                <?php
                    $sel_req = "SELECT * FROM participant where id_particip=$idParticip";
                    $sel = $con->query($sel_req);
                
                    $row = $sel->fetch_array();
                    
                ?>
                
                <div class="form-group form-inline ">
                    <label>Nom d'utilisateur :</label>
                    <input type="text" class="form-control" name="userName" placeholder="Soyez clair et précis"
                    value= "<?php echo $row['user_nam']; ?>"
                       style="margin-left: 20px;width: 60%;">
                </div>
                <br>
                <div class="form-group form-inline">
                    <label>Mots de pass :</label>
                    <input type="text" class="form-control" name="userPass" placeholder="Soyez clair et précis"
                    value= "<?php echo $row['user_pass']; ?>"
                    style="margin-left: 45px;width: 60%;">
                </div>
                <br>
                <div class="form-group form-inline">
                    <label>Adresse e-mail :</label>
                    <input type="email" class="form-control" name="userMail" placeholder="Soyez clair et précis"
                    value= "<?php echo $row['user_mail']; ?>"
                    style="margin-left: 35px;width: 60%;">
                </div>
                <br>
                <div class="form-group form-inline">
                    <label>Téléphone :</label>
                    <input type="text" class="form-control" name="userTel" placeholder="Soyez clair et précis"
                    value= "<?php echo $row['user_tel']; ?>"
                    style="margin-left: 64px;width: 60%;">
                </div>
                <br>
                <div class="form-group form-inline">
                    <label>Adresse :</label>
                    <input type="text" class="form-control" name="userAddrs" placeholder="Soyez clair et précis"
                    value= "<?php echo $row['user_addrs']; ?>"
                    style="margin-left: 76px;width: 60%;">
                </div>
                <div class="form-group form-inline">
                    <label>Photo de profil :</label>
                    <input type="file" name="userProfimg" id="file-2" class="inputfile inputfile-2"
                        data-multiple-caption="{count} files selected" multiple />
                    <label for="file-2" class="form-control" style="margin-left: 34px;width: 60%;"><i
                            class="fa fa-upload" aria-hidden="true"></i>
                        <span style="padding-left: 7px;">Choiser une image &hellip;</span></label>
                </div>


            </div>



            <br>
                        <!-- /.row -->
            <div class="btn-group" role="group" aria-label="Basic example"
                style="float: right;margin-right: 291px;margin-top: 7px;">
                <input type="reset" class="btn btn-outline-primary" style="margin-right:15px;width: 100px;"
                    value="Annuler">
                <input type="submit" name="ikhan" class="btn btn-primary" value="Sauvegarder">
            </div>

        </form>

    </div>
    <!-- /#page-wrapper -->


    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->

    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="../dist/js/custom-file-input.js"></script>

    <?php

if (isset($_POST['ikhan'])) {

    $userName=$_POST['userName'];
    $userPass=$_POST['userPass'];
    $userMail=$_POST['userMail'];
    $userTel=$_POST['userTel'];
    $userAddrs=$_POST['userAddrs'];

  	// Get image name
  	$image = $_FILES['userProfimg']['name'];
  	// image file directory
  	$target = "../../../user_imgs/".basename($image);
      $upd_req = "update participant
      set user_nam ='$userName',
      user_pass ='$userPass',
      user_mail ='$userMail',
      user_tel ='$userTel',
      user_addrs ='$userAddrs',
      user_profimg ='$image' where id_particip=$idParticip";

      
      $upd = $con->query($upd_req);
      move_uploaded_file($_FILES['userProfimg']['tmp_name'], $target);

      echo "<script> window.location.assign('participant.php')</script>";


}
$con->close();
?>






</body>

</html>