<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Imprimer mon billet</title>

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


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color:#6fc5ec" onload="window.print();">
<!---->
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







    <!-- /.navbar-static-side -->
    </nav>
<!-- heroimgbrs -->
<form method="POST">
        <div style="height: unset;
    background-color: #ffffff;
    margin: 56px auto auto 372px;
    width: 649.7px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border: none;
    padding-bottom: 8px;">
            <div style="background-color: #f0f0f0;width: 100%;border-top-left-radius: 5px;
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
                $evog=$row['id_organ'];
                echo "<img src='../../../cover_imgs/".$row['event_img']."'
                style='width: 650px;
                height: 309px;
                border-top-left-radius: 5px;
                border-bottom: 1px solid #f0f0f0;'>";
                ?>
                
                
            </div>

            <div style="    margin-top: 30px;
    margin-left: 50px;
    position: absolute;">
                            <?php
              echo"<h6 style='font-size: 22px;font-weight: 600px;margin-bottom: 20px;'>".$row['event_title']."</h6>";
              
              $sel11_req = "SELECT * FROM organisateur where id_organ= $evog";
              $sel11 = $con->query($sel11_req);
              $row11 = $sel11->fetch_array(); 
              echo"<p style='font-size: 15px;'>Par ".$row11['organ_nam'].".</p>";
                ?>
            </div>

            <div style="line-height: 35px;
                font-size: 15px;
                margin-left: 400px;
                margin-top: 32px;
                position: absolute;">
                    <?php
                    $nbrand=$_SESSION['rnd'];
                    echo "<h6>Demande #".$nbrand."</h6>";
                    $sel12_req = "SELECT * FROM participant where id_particip=$idParticip ";
                    $sel12 = $con->query($sel12_req);
                    $row12 = $sel12->fetch_array(); 
                    $prtcp = $row12['user_nam'];
                        echo"<p style='margin-top: -16px;'>Par ".$prtcp.".</p>";?>
                </div>


                <div style="padding-right: 44px;
                    padding-left: 50px;
                    padding-top: 121px;
                    width: 690px;
                    line-height: 30px;
                    font-size: 14px;">
                    <h6 style="
                  margin-bottom: 20px;"> Date And Time</h6>
                        <?php
                        echo"<p>".$row['start_date']."&nbsp&nbsp&nbsp&nbsp".$row['start_time']." - ".$row['end_time'].
                        "&nbsp Western European Standard Time Morocco Time.</p>";?>
                        
                    <div>
                        <h6 style="margin-bottom: 20px; ">Location</h6>
                        <?php
                        echo"<p>".$row['event_location'].".</p>";?>
                                
                    </div>
                        
                </div>

                
                


           


        </div>
</form>
<!-- heroimgbrs -->

 

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
         
  $con->close();
  ?>

</body>

</html>