<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Parcourir d'événements</title>

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

    <link href="../dist/css/cardevntstyle.css" rel="stylesheet">

    <link href="../dist/css/style2.css" rel="stylesheet">

    <link id="t-colors" href="../dist/css/default.css" rel="stylesheet">

    <style>
        #form {
            outline: 0;
            width: 84%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            padding-left: 10px;
            border: none;
            border-bottom: rgb(119, 119, 119) 2px solid;
            box-sizing: border-box;
            font-size: 14px;
            background-color: transparent;
            margin-top: 21px;
            color: #bfbfbf;
            font-family: monospace;
        }

        #formDate {
            outline: 0;
            width: 130%;
            border: 0;
            margin: 0 0 15px;
            padding-left: 120px;
            border: none;
            border-bottom: rgb(119, 119, 119) 2px solid;
            box-sizing: border-box;
            font-size: 14px;
            background-color: transparent;
            margin-top: 21px;
            color: #999999;
            font-family: monospace;
        }

        #titreDate {
            position: absolute;
            outline: 0;
            width: 17%;
            border: 0;
            margin: 0 0 15px;
            padding-left: 12px;
            box-sizing: border-box;
            font-size: 14px;
            background-color: transparent;
            margin-top: 3px;
            color: #999999;
            font-family: monospace;
        }
    </style>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color: white;">

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





    <div style="margin-top: -65px;
    width: 1423px;
    height: 666px;
    background-image: url(../img/galery12.jpg);
    background-position: center;">
    
              <h1 style="text-transform: capitalize;
    font-weight: 900;
    color: #ffffff;
    font-size: 50px;
    width: 873px;
    line-height: 77px;
    text-align: center;
    margin-top: 235px;
    margin-left: 282px;
    position: absolute;
    font-weight: 700;">trouver des événements facilement avec une seule touche</h1>

        <form method="POST" action="parcourir.php">
        <div id="recherche" style="background-color: #1d2022;
    border-top-left-radius: 60px;
    border-bottom-left-radius: 60px;
    width: 380px;
    margin-left: 141px;">
            <div class="form-group form-inline" id="form" style="    width: 304px;
    padding: 0px;
    margin-left: 45px;">
                <select class="form-control" style="background-color: transparent;
                border: none;
                color: #999999;
                font-family: monospace;" name="eventCategory">
                    <option>Catégorie</option>
                    <option>Activités scolaires</option>
                    <option>Automobile, bateau et avion</option>
                    <option>Autre</option>
                    <option>Cinéma, média et divertissement</option>
                    <option>Commerces et professions</option>
                    <option>Communauté et culture</option>
                    <option>Famille et éducation</option>
                    <option>Gastronomie</option>
                    <option>Gouvernement et politique</option>
                    <option>Maison et déco</option>
                    <option>Mode et beauté</option>
                    <option>Musique</option>
                    <option>Passe-temps et intérêts spéciaux</option>
                    <option>Religion et spiritualité</option>
                    <option>Saisonnier et Fêtes</option>
                    <option>Santé et bien-être</option>
                    <option>Science et technologie</option>
                    <option>Sport et mise en forme</option>
                    <option>Théâtre et arts visuels</option>
                    <option>Voyages et plein air</option>
                    <option>Œuvres de charité</option>
                </select>
            </div>
        </div>
        <div id="recherche" style="border-left: 1px solid #393939;
    background-color: #1d2022;
    margin-left: 520px;">
            <div class="form-group " style="width: 64%;margin-left: 28px;">
               <!-- <input type="text" class="form-control" id="form" placeholder="Choiser Date :">-->
               <p id="titreDate">Date :<p>
                <input type="date" name="dateDebut" class="form-control" id="formDate">
            </div>
        </div>
        <div id="recherche" style="border-left: 1px solid #393939;background-color: #1d2022;width: 392px;
    margin-left: 869px;
    border-top-right-radius: 60px;
    border-bottom-right-radius: 60px;">
        <div class="form-group form-inline" id="form" style="width: 285px;
            padding: 0px;
            margin-left: 20px;">
                <?php    $sel_req000 = "SELECT * FROM evenement";
                    $sel000 = $con->query($sel_req000); ?>
                <select class="form-control" style="background-color: transparent;
                border: none;
                color: #999999;
                font-family: monospace;width: 95%;" name="eventLieu">
                    <option>Location </option>
                    <?php 
                            while(NULL != ($row000 = $sel000->fetch_array()))
                            {echo "<option>".$row000['event_location']."</option>";}
                    ?>
                </select>
            </div>
            <button type="submit" class="form-con" style="
            float: right;
            width: 42px;
            margin-right: 20px;
            margin-top: -46px;
            padding: 12px;
            background-color: #1d2022;
            border-radius: 3px;
            color: #c9c9c9;
            font-size: 16px;
            border: none;" name="ikhan">
                <i class="fa fa-search"></i>
            </button>
        </div>
        </form>
    </div>


    <section id="boxes" class="home-section paddingtop-80">
        <form method="POST">

        <?php 
        if (isset($_POST['ikhan'])) {
            $_SESSION['id_event'] = 1;
                $eventCategory=$_POST['eventCategory'];
                $eventType=$_POST['eventType'];
                $dateDebut=$_POST['dateDebut'];
                $sel_req = "SELECT * FROM evenement where event_category='$eventCategory'
                and event_type= '$eventType' and start_date='$dateDebut'";
                $sel = $con->query($sel_req);
                $row = $sel->fetch_array();


                if($row){
        ?>
        <div class="section-title" style="text-align: center;
        margin-bottom: -8px;
        margin-top: 54px;">
            <h2>Résultats de recherche :</h2>
        </div>
        <div class="container" style="padding-right: 0px;padding-left: 0px;margin-right: 81px;margin-left: auto;">
            <div class="row" id="evntrow" style="display:block;margin-left: -110px;">
                <?php
                $sel_req = "SELECT * FROM evenement where event_category='$eventCategory'
                and event_type = '$eventType' and start_date='$dateDebut'";
                $sel = $con->query($sel_req);
                $n=0;
                while(NULL !=($row = $sel->fetch_array())) 
                {
                    ?>
                <div id="cardevnt" style="margin-left: 33px;margin-top: 33px;float: left;">
                     <a href="../../registre/pages/registre.php?event_id=<?php echo $row['id_event'];?>">
                    <?php
                        echo "<img src='../../../cover_imgs/".$row['event_img']."' id='evntimg'>";
                        ?></a>

                    <div style="display: inline-flex;
    position: absolute;
    margin-top: 170px;
    margin-left: -140px;">
                        <a href="http://www.facebook.com">
                        <h6>
                            <i class="fa fa-share" id="heart" aria-hidden="true"></i>
                        </h6>
                        </a>
                        <h6 class="has-spinner">
                        <a href="parcourir.php?eventID=<?php echo $row['id_event'];?>">       
                            <span class="spinner">
                            <i class="fa fa-heart" id="heart" aria-hidden="true" style="font-size: 21px;margin-left: 18px;"></i>
                            </span>
                        </a>
                        </h6>
                    </div>

                    <div class="evninfo">
                    <?php
              echo "<h6>".$row['event_title']."</h6>";
              echo"<p>".$row['start_date']."&nbsp&nbsp".$row['start_time']." - ".$row['end_time']."</p>";
              echo"<p>".$row['event_location']."</p>";
              ?>
                    </div>
                </div>
                <?php }?>
            </div>

        </div>
        <?php }
        


        else{
            ?>
            <div class="section-title" style="text-align: center;
            margin-bottom: 25px;
            margin-top: 54px;">
                <h2>Aucun résultat trouvé</h2>
            </div>
            <div class="container">
            </div>
            <?php }
            
        
        
        }












        
        else {
        ?>
        <div class="section-title" style="text-align: center;
        margin-bottom: -8px;
        margin-top: 58px;">
            <h2 style="border-bottom: #00A0DC solid 5px;
    padding-bottom: 7px;
    width: 263px;
    margin-left: 86px;
    margin-bottom: 15px;margin-top: -15px;">Vivez le meilleur</h2>
        </div>
        <div class="container" style="padding-right: 0px;padding-left: 0px;margin-right: 81px;margin-left: auto;">
            <div class="row" id="evntrow" style="display:block;margin-left: -110px;">
                <?php
                $sel_req = "SELECT * FROM evenement";
                $sel = $con->query($sel_req);
                while(NULL !=($row = $sel->fetch_array())) 
                {
                    ?>
                <div id="cardevnt" style="margin-left: 33px;margin-top: 33px;float: left;">
                <a href="../../registre/pages/registre.php?event_id=<?php echo $row['id_event'];?>">
                    <?php
                        echo "<img src='../../../cover_imgs/".$row['event_img']."' id='evntimg'>";
                        ?></a>

                <div style="display: inline-flex;
    position: absolute;
    margin-top: 170px;
    margin-left: -140px;">
                    <a href="http://www.facebook.com">
                    <h6>
                        <i class="fa fa-share" id="heart" aria-hidden="true"></i>
                    </h6>
                    </a>
                    <h6 class="has-spinner">
                    <a href="parcourir.php?eventID=<?php echo $row['id_event'];?>">            
                        <span class="spinner">
                        <i class="fa fa-heart" id="heart" aria-hidden="true" style="font-size: 21px;margin-left: 18px;"></i>
                        </span>
                    </a>
                    </h6>
                </div>

                    <div class="evninfo">
                    <?php
              echo "<h6>".$row['event_title']."</h6>";
              echo"<p>".$row['start_date']."&nbsp&nbsp".$row['start_time']." - ".$row['end_time']."</p>";
              echo"<p>".$row['event_location']."</p>";
              ?>
                    </div>
                </div>
                <?php }?>
            </div>

        </div>
        <?php }?>

    </form>
    </section>

  

    <!-- /#page-wrapper -->
    <footer style="margin-top: 10px;">
        <div class="container" style="padding-bottom: 0px;">
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

    <!-- Morris Charts JavaScript -->

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <?php



if(isset($_GET ['eventID']))
{

  $id_EV = $_GET ['eventID'];
$ins_req = "insert into favoris values ($idParticip,$id_EV)";
$ins = $con->query($ins_req);
//    echo "<script> window.location.assign('index.php')</script>";   
}
 $con->close();
 ?>

</body>

</html>