<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Informations</title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php
session_start();
error_reporting(0);
$con = new mysqli('localhost','root','','ensaevent');
?>
    <!-- Navigation -->
    <nav class="navbar navbar-custom " role="navigation" style="background-color: #292c2f;">

        <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="../../index/index2.php">
            <h4 style="margin-left: -80px;
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
                <ul class="nav navbar-nav">
                <li><a href="../../registre/pages/registreMy.php" style="color: #292C2F;
    background-color: #fcfcfc;
    FONT-FAMILY: cabin;
    letter-spacing: 1px;
    font-size: 13px;
    padding: 6px 23px;
    border-radius: 30px;
    cursor: pointer;
    margin-top: 7.5px;">PUBLIER</a></li>
                    <li class="dropdown">
                    <a href="#" id="carettt" class="dropdown-toggle" data-toggle="dropdown" style="color: #f5f5f5;">
            <img src="../img/admiine.png" style="width: 25px;
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


                            <li style="border-bottom: none"><a href="eventManager.php" style="color: #f5f5f5;
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

                <li style="border-bottom: none"><a href="infos.php" style="color: #f5f5f5;
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

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">


    <li>
        <a href="infos.php">
            <i class="fa fa-circle" style="position: absolute;
        font-size: 27px;
        color: #585c60;
        margin-top: 6.5px;"></i>

            <span style="position: absolute;
            margin-left: 8px;
            color: rgb(238, 237, 237);
            font-family: monospace;">1</span>
            <span style="margin-left: 33px;
        color: #585c60;
        font-family: Trebuchet MS;
        font-size: 14px;
        font-weight: 600;">Infos de base</span></a>
    </li>
    <li>
        <a href="informations.php">
            <i class="fa fa-circle" style="position: absolute;
        font-size: 27px;
        color: #585c60;
        margin-top: 6.5px;"></i>

            <span style="position: absolute;
                margin-left: 8px;
                color: rgb(238, 237, 237);
                font-family: monospace;">2</span>
            <span style="margin-left: 33px;
        color: #585c60;
        font-family: Trebuchet MS;
        font-size: 14px;
        font-weight: 600;">Informations</span></a>
    </li>
    <li>
        <a href="billets.php">
            <i class="fa fa-circle" style="position:absolute;
        font-size: 27px;
        color: #585c60;
        margin-top: 6.5px;"></i>

            <span style="position: absolute;
                    margin-left: 8px;
                    color: rgb(238, 237, 237);
                    font-family: monospace;">3</span>
            <span style="    margin-left: 33px;
    color: #585c60;
    font-family: Trebuchet MS;
    font-size: 14px;
    font-weight: 600;">Billets</span></a>
    </li>

</ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
      <form method="POST" class="form-horizontal" action="informations.php" enctype="multipart/form-data">
        <div class="row" style=" padding-left: 230px; padding-right: 200px;padding-top: 30px">
            <div class="col-lg-12" style="display: inline-flex;">
                <i class="fa fa-picture-o" style="font-size: 31px;
                            color: rgba(233, 233, 233, 0.925);
                            position: absolute;
                            margin-top: 37px;
                            margin-left: -49px;" aria-hidden="true"></i>
                <h5 class="page-header">Image Principale de l'Evénement</h5>
            </div>

            <div>Il s'agit de la première image que les participants verront en haut de votre page.
             Utilisez une image de qualité : 2160 x 1080 px (ratio : 2:1).</div>
            <br>
                    <input type="file" name="eventImg" id="file-2" class="inputfile inputfile-2"
                        data-multiple-caption="{count} files selected" multiple />
                    <label for="file-2"><i class="fa fa-upload" aria-hidden="true"></i>
                        <span style="padding-left: 7px;">Choiser une image &hellip;</span></label>



        </div>


        <div class="row" style=" padding-left: 230px; padding-right: 200px;">
            <div class="col-lg-12" style="display: inline-flex;">
                <i class="fa fa-align-left" style="font-size: 31px;
                            color: rgba(233, 233, 233, 0.925);
                            position: absolute;
                            margin-top: 37px;
                            margin-left: -49px;" aria-hidden="true"></i>
                <h5 class="page-header">Desciption</h5>
            </div>
            <div>Ajoutez plus d'infos à votre événement comme votre calendrier, 
            vos sponsors, ou vos invités vedettes.
            </div>
            <br>

            <div class="form-group">
                <textarea class="form-control" name="eventDescription" rows="9"></textarea>
            </div>

        </div>



        <br><br>
        <!-- /.row -->
        <div class="btn-group" role="group" aria-label="Basic example" style="float: right;margin-right: 184px;">
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

    $idEvent=$_SESSION['id_event'];

    $eventDescription = $_POST["eventDescription"];
  	// Get image name
  	$image = $_FILES['eventImg']['name'];
  	// image file directory
  	$target = "../../../cover_imgs/".basename($image);
      $upd_req = "update evenement set event_img ='$image',event_description ='$eventDescription' where id_event=$idEvent";
      $upd = $con->query($upd_req);
  	move_uploaded_file($_FILES['eventImg']['tmp_name'], $target);

      if(!$upd)
      {
          echo"Probleme d'insertion<br>";
      }
      else
      echo "<script> window.location.assign('billets.php')</script>";

}

         
  $con->close();
/*UPDATE `evenement` SET `event_img`= null WHERE id_event = 1;*/
?>







</body>

</html>