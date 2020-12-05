<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gestion des organisation</title>

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
        <form method="POST" class="form-horizontal" actionenctype="multipart/form-data">
            <div class="row" style="padding-left: 315px;padding-right: 210px;">
                <div class="col-lg-12" style="display: inline-flex;margin-bottom: 24px;">
                    <i class="fa fa-picture-o" style="font-size: 31px;
                            color: rgba(233, 233, 233, 0.925);
                            position: absolute;
                            margin-top: 37px;
                            margin-left: -49px;" aria-hidden="true"></i>
                    <h5 class="page-header">Compte Organisateur</h5>
                </div>

                <?php
                $idParticip=$_SESSION['id_particip'];
                    $sel_req000 = "SELECT * FROM organisateur where id_particip=$idParticip";
                    $sel000 = $con->query($sel_req000);
                
                ?>
                <div class="form-group form-inline">
                        
                    <select class="form-control" name="OrganName" style="margin-left: 34px;width: 60%;">
                    <option>Choiser Un Organisateur</option>
                    <?php 
                            while(NULL != ($row000 = $sel000->fetch_array()))
                            {echo "<option>".$row000['organ_nam']."</option>";}
                    ?>
                    </select>
                    <button type="submit"name="selc" style="position: absolute;
    width: 30px;
    height: 30px;
    margin-left: 15px;
    border-radius: 20px;">
                        <i class="fa fa-check-square" aria-hidden="true" style="font-size: 36px;
    margin-left: -8px;
    margin-top: -6px;
    color: white;"></i></button>
                </div><br>



                <?php

                if (isset($_POST['selc'])) {

                    $OrganName= $_POST['OrganName'];
                    $sel_req = "SELECT * FROM organisateur where organ_nam='$OrganName'";
                    $sel = $con->query($sel_req);
                    $row = $sel->fetch_array();

                    $_SESSION['id_organ'] = $row['id_organ'];

                ?>
                <br>

                <div class="form-group form-inline ">
                    <label>Organisateur :</label>
                    <input type="text" class="form-control" name="organName" placeholder="Soyez clair et précis"
                    value=" <?php echo $row['organ_nam']; ?>"
                       style="margin-left: 34px;width: 60%;">
                </div>
                <br>
                <div class="form-group form-inline">
                    <label>Web site :</label>
                    <input type="text" class="form-control" name="organWebsite" placeholder="Soyez clair et précis"
                    value="<?php echo $row['organ_website']; ?>"
                    style="margin-left: 64px;width: 60%;">
                </div>
                <br>
                <div class="form-group form-inline">
                    <label>Téléphone :</label>
                    <input type="text" class="form-control" name="organTel" placeholder="Soyez clair et précis"
                    value="<?php echo $row['organ_tel']; ?>"
                    style="margin-left: 52px;width: 60%;">
                </div>
                <br>
                <div class="form-group form-inline">
                    <label>Adresse :</label>
                    <input type="text" class="form-control" name="organAddrs" placeholder="Soyez clair et précis"
                    value="<?php echo $row['organ_addrs']; ?>"
                    style="margin-left: 66px;width: 60%;">
                </div>
                <div class="form-group form-inline">
                    <label>Photo de profil :</label>
                    <input type="file" name="organProfimg" id="file-2" class="inputfile inputfile-2"
                        data-multiple-caption="{count} files selected" multiple />
                    <label for="file-2" class="form-control" style="margin-left: 23px;width: 60%;"><i
                            class="fa fa-upload" aria-hidden="true"></i>
                        <span style="padding-left: 7px;">Choiser une image &hellip;</span></label>
                </div>

                <br>
                        <!-- /.row -->
            <div class="btn-group" role="group" aria-label="Basic example"
                style="float: right;margin-right: 110px;margin-top: 7px;">

                <input type="submit" name="ikhan" class="btn btn-primary" value="Modifier"
                style="background-color: #489c8c;width: 100px;border-color:#489c8c">

                <input type="submit" name="fg" class="btn btn-primary" value="Supprimer"
                style="margin-left: 20px;width: 100px;background-color: #fa7272;color: white;">

            </div>


                <?php }
                else
                {?>

                <div style="display:inline-flex;">
                    <h6 style="padding: 20px 0px;
                font-size: 18px;
                text-align: center;
                padding-left: 25px;">Ou Créer Un nouveau compte Organisateur</h6>
                <div style="background-color: #b0b0b0;width: 110px;height: 1px;position: absolute;margin-top: 30px;margin-left: -93px;"></div>
                <div style="background-color: #b0b0b0;width: 110px;height: 1px;position: absolute;margin-top: 30px;margin-left: 380px;"></div>
                </div>

                <div class="form-group form-inline ">
                    <label>Organisateur :</label>
                    <input type="text" class="form-control" name="organName" placeholder="......................"
                       style="margin-left: 34px;width: 60%;">
                </div>
                <br>
                <div class="form-group form-inline">
                    <label>Web site :</label>
                    <input type="text" class="form-control" name="organWebsite" placeholder="......................"
                    style="margin-left: 64px;width: 60%;">
                </div>
                <br>
                <div class="form-group form-inline">
                    <label>Téléphone :</label>
                    <input type="text" class="form-control" name="organTel" placeholder="......................"
                    style="margin-left: 52px;width: 60%;">
                </div>
                <br>
                <div class="form-group form-inline">
                    <label>Adresse :</label>
                    <input type="text" class="form-control" name="organAddrs" placeholder="......................"
                    style="margin-left: 66px;width: 60%;">
                </div>
                <div class="form-group form-inline">
                    <label>Photo de profil :</label>
                    <input type="file" name="organProfimg" id="file-2" class="inputfile inputfile-2"
                        data-multiple-caption="{count} files selected" multiple />
                    <label for="file-2" class="form-control" style="margin-left: 23px;width: 60%;"><i
                            class="fa fa-upload" aria-hidden="true"></i>
                        <span style="padding-left: 7px;">Choiser une image &hellip;</span></label>
                </div>


            </div>



            <br>
                        <!-- /.row -->
            <div class="btn-group" role="group" aria-label="Basic example"
                style="float: right;margin-right: 298px;">
                <input type="reset" class="btn btn-outline-primary" style="margin-right:20px;width: 100px;"
                    value="Annuler">
                <input type="submit" name="ikhan2" class="btn btn-primary" value="Sauvegarder">
            </div>

            <?php } ?>

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

$id_organ=$_SESSION['id_organ'];

if (isset($_POST['ikhan'])) {  /*Update Data*/

    $organName=$_POST['organName'];
    $organWebsite=$_POST['organWebsite'];
    $organTel=$_POST['organTel'];
    $organAddrs=$_POST['organAddrs'];

  	// Get image name
  	$image = $_FILES['organProfimg']['name'];
  	// image file directory
  	$target = "../../../organ_imgs/".basename($image);
      $upd_req = "update organisateur
      set organ_nam ='$organName',
      organ_website ='$organWebsite',
      organ_tel ='$organTel',
      organ_addrs ='$organAddrs',
      organ_profimg ='$image' where id_organ=$id_organ";

      
      $upd = $con->query($upd_req);
      move_uploaded_file($_FILES['organProfimg']['tmp_name'], $target);

      echo "<script> window.location.assign('organisateur.php')</script>";


}

if (isset($_POST['fg'])) {  /*Delete Data*/
 
    $sel_req0 = "select * from evenement where id_organ=$id_organ";
    $sel0 = $con->query($sel_req0);
    while(null != ($row0 = $sel0->fetch_array()))
    {
    $teckorg = $row0['id_event'];
    $sel_req1 = "select * from ticket where id_event=$teckorg";
    $sel1 = $con->query($sel_req1);
    $row1 = $sel1->fetch_array();

    $teckreserv = $row1['id_ticket'];
    
    $del_req0 = "delete from reserve where id_ticket=$teckreserv";
    $del0 = $con->query($del_req0);

    $del_req1 = "delete from ticket where id_event=$teckorg";
    $del1 = $con->query($del_req1);

    $del_req2 = "delete from favoris where id_event=$teckorg";
    $del2 = $con->query($del_req2);

    $del_req3 = "delete from evenement where id_organ=$id_organ";
    $del3 = $con->query($del_req3);
    
    }
    
    $del_req4 = "delete from organisateur where id_organ=$id_organ";
    $del4 = $con->query($del_req4);

      echo "<script> window.location.assign('organisateur.php')</script>";


}



if (isset($_POST['ikhan2'])) {   /*insert Data*/

    $organName=$_POST['organName'];
    $organWebsite=$_POST['organWebsite'];
    $organTel=$_POST['organTel'];
    $organAddrs=$_POST['organAddrs'];

  	// Get image name
  	$image = $_FILES['organProfimg']['name'];
  	// image file directory
  	$target = "../../../organ_imgs/".basename($image);
      $ins_req = "insert into organisateur values (2,'$organName','$organWebsite','$organTel','$organAddrs','$image',$idParticip)";
      
      $ins = $con->query($ins_req);
      move_uploaded_file($_FILES['organProfimg']['tmp_name'], $target);

      echo "<script> window.location.assign('organisateur.php')</script>";
}



$con->close();
?>






</body>

</html>