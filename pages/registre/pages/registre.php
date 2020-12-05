<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registre d'événements</title>

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

    <link href="../dist/css/stylefooter.css" rel="stylesheet">

    <link href="../dist/css/style2.css" rel="stylesheet">

    <link id="t-colors" href="../dist/css/default.css" rel="stylesheet">



</head>

<body style="background-color:#6fc5ec">

<?php
session_start();
error_reporting(0);
  $con = new mysqli('localhost','root','','ensaevent'); 
  ?>


<nav class="navbar navbar-custom " role="navigation" style="background-color: #292c2f;border:none;">

<div class="container navigation">

<div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="../../index/index2.php">
            <h4 style="margin-left: -20px;
    margin-top: -6px;
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
    <a href="#" id="carettt" class="dropdown-toggle" data-toggle="dropdown" style="color: #f5f5f5;"><img src="../img/admiine.png" style="width: 25px;
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


<!-- heroimgbrs -->
<form method="POST" >
        <div style="height: unset;
    background-color: #ffffff;
    margin: 55px auto auto 196px;
    width: 72%;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border: none;">
                    <div style="background-color: #f0f0f0;display:inline-flex;width: 100%;border-top-left-radius: 5px;
                                                        border-top-right-radius: 5px;">
                                                        <?php
                                                        if(isset($_GET ['event_id']))
                                                        {
                                                            $_SESSION['id_event2'] = $_GET ['event_id'];
                                                            
                                                        }
                                                        $IDEV=$_SESSION['id_event2'];

                                                            $sel_req = "SELECT * FROM evenement where id_event= $IDEV";
                                                            $sel = $con->query($sel_req);
                                                            $row = $sel->fetch_array(); 
                                                            echo "<img src='../../../cover_imgs/".$row['event_img']."'
                                                            style='width: 650px;
                                                            height: 309px;
                                                            border-top-left-radius: 5px;
                                                            border-bottom: 1px solid #f0f0f0;'>";
                                                            ?>
                                                            <div style="
                                                        margin-left: 44px;
                                                        margin-top: 22px;
                                                        padding: 10px;
                                                        
                                                        height: 42px;
                                                        width: 42.4px;
                                                        border-radius: 30px;">
                                                        <h5 class="has-spinner">
                                                                <a href="http://www.facebook.com">
                                                                        <i class="fa fa-share" id="heart" aria-hidden="true" style="font-size: 21px;
                                                margin-left: -9px;
                                                margin-top: -4px;
                                                background-color: #ffffff;
                                                color: #656565;
                                                padding: 11px;
                                                border-radius: 30px;
                                                box-shadow: 0px 0px 7px -5px black;"></i>
                                                                </a>
                                                                </h5>
                                                            </div>
                                                            <div class="has-spinner" style="margin-top: 22px;
                                                                padding: 10px;
                                                                margin-left: 181px;
                                                                height: 42px;
                                                                width: 42.4px;
                                                                border-radius: 30px;">
                                                                <button type="submit" name="like" style="position: absolute;
                                                                width: 40px;
                                                                height: 41px;
                                                                margin-left: 15px;
                                                                border-radius: 20px;">
                                                                    <span class="spinner">
                                                                        <i class="fa fa-heart" id="heart" aria-hidden="true" style="font-size: 21px;
                                                margin-left: -9px;
                                                margin-top: -4px;
                                                background-color: #ffffff;
                                                padding: 11px;
                                                border-radius: 30px;
                                                box-shadow: 0px 0px 7px -5px black;"></i>
                                                                    </span>
                                                                </button>
                                                            </div>




                                        <div style="margin-top: 122px;
                                        margin-left: 772px;
                                        margin-right: 0px;
                                        position: absolute;">
                                                                    <?php
                                                                    $orgid=$row['id_organ'];
                                                                                    $sel1_req = "SELECT * FROM organisateur where id_organ= $orgid";
                                                                                    $sel1 = $con->query($sel1_req);
                                                                                    $row1 = $sel1->fetch_array(); 
                                                    echo"<h6 style='font-size: 20px;font-weight: 600px;margin-bottom: 20px;'>".$row['event_title']."</h6>";
                                                    echo"<h6 style='font-size: 15px;'>By ".$row1['organ_nam']."</h6>";
                                                        ?>
                                                    </div>

                                                    <div class="btn-group" role="group" aria-label="Basic example" style="position: absolute;
                                            margin-left: 840px;
                                            margin-top: 243px;">
                                                        <input type="submit" class="btn btn-primary" style="padding: 5px 45px;" value="Registre" name="ikhan">
                                                    </div>
                                                    <div class="form-group form-inline" style="margin-top: 243px;
                                            position: absolute;
                                            margin-left: 690px;">
                                                        <select class="form-control" name="quantity">
                                                            <option>Quantity</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>










                    </div>



            <div style="display: inline-flex;">
                <div style="    width: 137.3%;
            padding-right: 89px;
            line-height: 35px;
            font-size: 15px;
            padding-top: 60px;
            padding-left: 65px;">
                    <h6>Description</h6>
                    <?php echo"<p>".$row['event_description']."</p>"; ?>
                </div>


                <div style="
            padding-right: 44px;
            padding-left: 50px;
            padding-top: 65px;
            width: 690px;
            line-height: 30px;
            font-size: 14px;">
                    <h6 style="
                margin-bottom: 20px;
            "> Date And Time</h6>
                        <?php
                        echo"<p>".$row['start_date']."&nbsp&nbsp&nbsp&nbsp".$row['start_time']." - ".$row['end_time'].
                        "&nbsp Western European Standard Time Morocco Time</p>";?>
                        
                        <div>
                            <h6 style="margin-bottom: 20px; ">Location</h6>
                            <?php
                            echo"<p>".$row['event_location']."</p>";?>
                                    
                        </div>

                </div>
            </div>
            <br><br><br><br>
            <h6 style="
        margin-bottom: 20px;margin-left: 83px;font-size: 15px;">Share With Friends</h6>
            <div style="margin-left: 50px;padding-bottom: 58px;">

                <a href="https://www.facebook.com"><i class="fa fa-facebook" id="iconstyle" style="font-size: 15px;padding: 10px 12px 9px 13px;background-color:#6fc5ec;" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com"><i class="fa fa-linkedin" id="iconstyle" style="font-size: 15px;padding: 9px 11px 10px 11px;background-color:#6fc5ec;" aria-hidden="true"></i></a>
                <a href="https://www.twitter.com"><i class="fa fa-twitter" id="iconstyle" style="font-size: 15px;padding: 9px 11px 10px 11px;background-color:#6fc5ec;" aria-hidden="true"></i></a>
                <a href=https://www.gmail.com><i class="fa fa-envelope" id="iconstyle" style="font-size: 15px;padding: 9px 11px 10px 11px;background-color:#6fc5ec;" aria-hidden="true"></i></a>

            </div>

        </div>
</form>
<!-- heroimgbrs -->

    <!-- /.row -->


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-lg-3">
                    <div class="widget">
                    <h4>Social</h4>
              <ul class="link-list" style="margin-top: -11px;">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Linkedln</a></li>
              </ul>
              <h6 style="font-size: 13px;color: #dddddd;margin-top: 18px;">&copy; Copyright eventUP 2020.</h6>

                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="widget" style="margin-left: 30px;">
                        <h4>Information</h4>
                        <ul class="link-list">
                        <li><a href="#">Press release</a></li>
                        <li><a href="#">Termes et conditions</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Contactez nous</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="widget" style="margin-left: 20px;">
                        <h4>Pages</h4>
                        <ul class="link-list">
                        <li><a href="#">Parcourir</a></li>
                        <li><a href="#">Créer événements</a></li>
                        <li><a href="#">Gerer événements</a></li>
                        <li><a href="#">Mon compte</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="widget">
                        <h4>Newsletter</h4>
                        <p>Inscrivez-vous à la newsletter mensuelle pour rester à jour</p>
                        <div class="form-group multiple-form-group input-group">
                            <input type="email" name="email" class="form-control">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-theme btn-add"><i class="fa fa-paper-plane" aria-hidden="true" style="color:#292c2f"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script>

        $(function () {
            $('.has-spinner').click(function () {
                $(this).toggleClass('active');
            });
        });

    </script>



    <?php


$quantity = $_POST["quantity"];
$_SESSION['rnd']=rand(3080131,9080131);
$nbrand=$_SESSION['rnd'];

  if (isset($_POST['ikhan'])) {
    
    $sel_req = "SELECT * FROM ticket where id_event= $IDEV";
    $sel = $con->query($sel_req);
    $row = $sel->fetch_array();
    $tick=$row['id_ticket']; 
    
    $ins22_req = "insert into reserve values($idParticip,$tick,$quantity,$nbrand)";
    $ins22 = $con->query($ins22_req);
    echo "<script> window.location.assign('printBillet.php')</script>";
        
}


    if (isset($_POST['like'])) {
        $ins_req = "insert into favoris values ($idParticip,$IDEV)";
        $ins = $con->query($ins_req);
    
        
    echo "<script>alert('Ajouter au favoris');</script>";
      
    }

  $con->close();
  ?>
</body>

</html>