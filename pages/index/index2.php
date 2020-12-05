<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Acceuill</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="dist/css/stylefooter.css" rel="stylesheet">

    <link href="dist/css/stylecontactus.css" rel="stylesheet">

    <link href="dist/css/cardevntstyle.css" rel="stylesheet">

    <link id="t-colors" href="dist/css/default.css" rel="stylesheet">




</head>

<body style="background-color: white;">

<?php
session_start();
error_reporting(0);
  $con = new mysqli('localhost','root','','ensaevent'); 
  ?>

<nav class="navbar navbar-custom " role="navigation" style="padding-top: 12px;background-color: transparent;border:none;">

<div class="container navigation">

<div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="index2.php">
            <h4 style="    margin-left: -50px;
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
        <li><a href="../browse/pages/parcourir.php" style="color: #f5f5f5;
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

        <li><a href="../createevent/pages/infos.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 1px;
font-size: 14px;">CRÉE UN ÉVENEMENT</a></li>

<li class="dropdown">
    <a href="#" id="carettt" class="dropdown-toggle" data-toggle="dropdown" style="color: #f5f5f5;background: transparent;"><img src="img/admiine.png" style="width: 25px;
        height: 25px;
        margin-top: -2px;
        margin-right: -3px;">
        <b class="caret"></b></a>
    <ul class="dropdown-menu" style="background-color: #292c2f;border:none">
        <li style="border-bottom: 0.1px solid #4f4f4f"><a href="../browse/pages/parcourir.php" style="color: #f5f5f5;
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

        <li style="border-bottom: none"><a href="../createevent/pages/eventManager.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">GÉRER LES ÉVENEMENS</a></li>

        <li style="border-bottom: 0.1px solid #4f4f4f"><a href="../compte/pages/organisateur.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">PROFILE D'ORGANISATEUR</a></li>

        <li style="border-bottom: none"><a href="../compte/pages/participant.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">PARAMÉTRES DE COMPTE</a></li>

        <li style="border-bottom: none"><a href="../createevent/pages/infos.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">CRÉE UN ÉVENEMENT</a></li>

        <li><a href="../../login/login.php" style="color: #f5f5f5;
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




 <!--<img src="img/background01.jpg" id="heroimg">-->
 <div style="margin-top: -80px;
    width: 1423px;
    height: 799px;
    background-image: url(img/background01.jpg);
    background-size: 1423px 799px;
    background-position: center;">

      <div class="col-md-8 col-md-offset-2" style="text-align: center;
    margin-top: 204px;
    margin-left: 271px;
">
        <div class=" home-content" style="padding-right: 199px;
    padding-left: 92px;">
          <h1 style="text-transform: capitalize;
        font-weight: 900;
        color: #FFF;font-size: 43px;font-weight: 700;">Inscription à l'événement tout-en-un</h1>
          <h4 class="lead" style="color: #FFF;
        font-size: 18px;
        font-weight: 300;
        line-height: 1.4;">Nous fournissons tout ce dont vous avez besoin pour faire de votre événement 
        un succès avec une plate-forme simple et facile à utiliser.</h4>
          <a href="../browse/pages/parcourir.php" class="btnhero1">Parcourir</a><a
            href="../createevent/pages/infos.php" class="btnhero2" 
            style="background-color:##069ed7e3;border-color:##069ed7e3">Crée Un évenement</a>
        </div>
      </div>

    </div>

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="boxes" class="home-section" style="padding-top: 68px;padding-bottom: 0px;">
      <div class="section-title" style="text-align: center;margin-bottom: 60px;">
        <h2 style="font-size:30px;">FONCTIONNALITÉS</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa-3x circled" style="background-color:#00A0DC"><img src="img/ico1.png" id="icomg"></i>
                <h4 class="h-bold">Enregistrez vos billets gratuitement</h4>

              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa-3x circled" style="background-color:#00A0DC"><img src="img/ico2.png" id="icomg" style="width: 35px;"></i>
                <h4 class="h-bold">Organisez des événements illimités</h4>

              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fa-3x circled" style="background-color:#00A0DC"><img src="img/ico3.png" id="icomg"></i>
                <h4 class="h-bold">Collecter toutes les données d'inscription</h4>

              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa-3x circled" style="background-color:#00A0DC"><img src="img/ico4.png" id="icomg"></i>
                <h4 class="h-bold" style="padding-right: 12px;padding-left: 13px;">
                Contact avec l'équipe de support directement</h4>

              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /Section: boxes -->


    <section id="callaction" class="home-section paddingtop-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray" style="padding-bottom: 0px;">
              <div class="row">
                <div class="col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                    <h3 style="font-size: 29px;font-family: cabin;letter-spacing: 1px;">Dans une urgence? Besoin d'aide maintenant?</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="margin-top:-20px;margin-bottom: 23px;">
                  <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="cta-btn" style="margin-right: 130px;">
                      <a href="#" class="btn btn-skin btn-lg" style="background-color: #00A0DC;border-color: #00A0DC;
                      text-transform: inherit;font-family: sans-serif;">Centre d'aide</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section id="boxes" class="home-section paddingtop-80">
      <div class="section-title" style="text-align: center;margin-bottom: 60px;margin-top: -25px;">
        <h2 style="font-size: 32px;">POUR TOUT GENRE D'EVENEMENTS</h2>
      </div>
      <div class="container">
        <div class="row" id="categrow">
          <div style="display: inline-flex;"><img src="img/categ4.jpg" id="categimg">
            <p id="categname" style="margin-left: 110px">Conférences</p>
          </div>
          <div style="display: inline-flex;"><img src="img/categ22.jpg" id="categimg">
            <p id="categname" style="margin-left: 137px;">Festivals</p>
          </div>
          <div style="display: inline-flex;"><img src="img/vld3.jpg" id="categimg">
            <p id="categname" style="margin-left: 149px">Théatre</p>
          </div>
        </div>
        <div class="row" id="categrow" style=" margin-top: -16px;">
          <div style="display: inline-flex;"><img src="img/categ1.jpg" id="categimg">
            <p id="categname" style="margin-left: 83px">clubs de comédie</p>
          </div>
          <div style="display: inline-flex;"><img src="img/categ5.jpg" id="categimg">
            <p id="categname" style="margin-left: 67px">Événements sportifs</p>
          </div>
          <div style="display: inline-flex;"><img src="img/categ6.jpg" id="categimg">
            <p id="categname" style="margin-left: 150px">Ateliers</p>
          </div>
        </div>
      </div>

    </section>



    <!-- Section: contact us -->
    <div id="contact" style="padding-bottom: 20px;">
      <div class="container">
        <div class="col-md-8">
          <div class="row">
            <div class="section-title">
              <h3 style="font-size: 37px;margin-left: 0px;margin-top: 12px;">Contactez Nous</h3>
              <p>S'il vous plaît remplissez le formulaire ci-dessous nous vous contacterons dans les plus brefs délais.</p>
            </div>
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message"
                  required></textarea>
                <p class="help-block text-danger"></p>
              </div>
              <div id="success"></div>
              <button type="submit" class="btn btn-custom btn-lg">Envoyer</button>
            </form>
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1 contact-info" style="margin-top: -20px;">
          <div class="contact-item">
            <h3>Contact Info</h3>
            <p><span><i class="fa fa-map-marker"></i> Adresse</span>École Nationale des Sciences Appliquées<br>
            Bd Béni Amir, BP 77, Khouribga - Maroc</p>
          </div>
          <div class="contact-item">
            <p><span><i class="fa fa-phone"></i> Téléphone</span> 05 23 49 23 39</p>
          </div>
          <div class="contact-item">
            <p><span><i class="fa fa-envelope-o"></i> Email</span> contact.ensak@usms.ma</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /Section: contact us -->


    <section id="boxes" class="home-section paddingtop-80">
    <form method="POST">
      <div class="section-title" style="text-align: center;margin-bottom: 37px;margin-top: 50px">
        <h2>Vivez le meilleur</h2>
      </div>
      <div class="container">
        <div class="row" id="evntrow">


          <div id="cardevnt">
          <a href="../../pages/registre/pages/registre.php?event_id=1">
          <?php
                $sel_req = "SELECT * FROM evenement where id_event=1";
                $sel = $con->query($sel_req);
            
                $row = $sel->fetch_array();
                    echo "<img src='../../cover_imgs/".$row['event_img']."' id='evntimg'>";
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
              <a href="index2.php?eventID=1">
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

          <div id="cardevnt">
          <a href="../../pages/registre/pages/registre.php?event_id=2">
          <?php
                $sel_req = "SELECT * FROM evenement where id_event=2";
                $sel = $con->query($sel_req);
            
                $row = $sel->fetch_array();
                    echo "<img src='../../cover_imgs/".$row['event_img']."' id='evntimg'>";
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
              <a href="index2.php?eventID=3">
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

          <div id="cardevnt">
          <a href="../../pages/registre/pages/registre.php?event_id=3">
          <?php
                $sel_req = "SELECT * FROM evenement where id_event=3";
                $sel = $con->query($sel_req);
            
                $row = $sel->fetch_array();
                    echo "<img src='../../cover_imgs/".$row['event_img']."' id='evntimg'>";
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
              

            <a href="index2.php?eventID=2">
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




        </div>
      </div>
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
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

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