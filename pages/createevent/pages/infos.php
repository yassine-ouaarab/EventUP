<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Infos de base</title>

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

    <link href="../dist/css/style2.css" rel="stylesheet">

    <link id="t-colors" href="../dist/css/default.css" rel="stylesheet">


</head>

<body>
<?php
session_start();
error_reporting(0);
$con = new mysqli('localhost','root','','ensaevent');
?>

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
    margin-top: 8px;">PUBLIER</a></li>
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

    <div id="page-wrapper">

            <form method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="row" style=" padding-left: 230px; padding-right: 200px;">
                <div class="col-lg-12" style="display: inline-flex;">
                    <i class="fa fa-info-circle"
                        style="font-size: 33px;color: rgba(233, 233, 233, 0.925);position: absolute;margin-top: 35px;margin-left: -41px;"
                        aria-hidden="true"></i>
                    <h5 class="page-header">Infos de base</h5>
                </div>

                <div>Nommez votre événement et expliquez aux participants potentiels pourquoi ils doivent absolument venir.
                 Ajoutez des infos soulignant son caractère unique.</div>
                <br>

                <div class="form-group ">
                    <label>Nom de l'événement<span style="color: red;"> *</span></label>
                    <input class="form-control" name="eventName" placeholder="Soyez clair et précis" style="margin-bottom: 10px;">
                </div>

                <div class="form-group form-inline" style="margin-bottom: 25px;">
                    <select class="form-control" name="eventType" style=" width:49%;">
                        <option>Type</option>
                        <option>Attraction</option>
                        <option>Camp, voyage ou retraite</option>
                        <option>Concert ou spectacle</option>
                        <option>Conférence</option>
                        <option>Convention</option>
                        <option>Course ou compétition d'endurance</option>
                        <option>Dîner ou gala</option>
                        <option>Festival ou foire</option>
                        <option>Formation, cours ou atelier</option>
                        <option>Jeu ou compétition</option>
                        <option>Projection</option>
                        <option>Rally</option>
                        <option>Rencontre ou événement social</option>
                        <option>Salon professionnel, grand public ou exposition</option>
                        <option>Soirée ou activité sociale</option>
                        <option>Séance de dédicaces</option>
                        <option>Séminaire ou entretien</option>
                        <option>Tournoi</option>
                        <option>Visite</option>
                    </select>

                    <select class="form-control" name="eventCategory" style=" width:49%; margin-left: 7px;">
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

                <?php
                $idParticip=$_SESSION['id_particip'];
                    $sel_req000 = "SELECT * FROM organisateur where id_particip=$idParticip";
                    $sel000 = $con->query($sel_req000);
                
                ?>

                <div class="form-group form-inline">
                        
                    <select class="form-control" name="eventOrgan" style="width: 615px;">
                    <option>Nom de l'organisateur</option>
                    <?php 
                            while(NULL != ($row000 = $sel000->fetch_array()))
                            {echo "<option>".$row000['organ_nam']."</option>";}
                    ?>
                    </select>

                    
                    <a href="../../compte/pages/organisateur.php" style="cursor:pointer;"><i class="fa fa-user-plus" aria-hidden="true" style="position: absolute;
                    font-size: 34px;
                    margin-left: 19px;
                    color: #c3c3c3;"></i></a>
                </div>

            </div>


 
            <div class="row" style=" padding-left: 230px; padding-right: 200px;">
                <div class="col-lg-12" style="display: inline-flex;">
                    <i class="fa fa-map-o" style="font-size: 31px;
                        color: rgba(233, 233, 233, 0.925);
                        position: absolute;
                        margin-top: 37px;
                        margin-left: -49px;" aria-hidden="true"></i>
                    <h5 class="page-header">Location</h5>
                </div>

                <div>Faites découvrir votre événement aux personnes de 
                la région et faites-leur savoir où cela se passe.</div>
                <br>

                <div class="form-group ">
                    <label>Lieu de l'événement<span style="color: red;"> *</span></label>
                    <br>
                    <div style="display: inline-block;width: 100%;">
                        <i class="fa fa-map-marker"
                            style="font-size:15px;position: absolute;margin-top: 9px;margin-left: 725px;"
                            aria-hidden="true"></i>
                        <input class="form-control" name="eventLieu" style="padding-right: 40px;padding-left: 15px;"
                            placeholder="Entrer un lieu ou un adresse">
                    </div>
                </div>
            </div>




            <div class="row" style=" padding-left: 230px; padding-right: 200px;">
                <div class="col-lg-12" style="display: inline-flex;">
                    <i class="fa fa-calendar"
                        style="font-size: 33px;color: rgba(233, 233, 233, 0.925);position: absolute;margin-top: 35px;margin-left: -47px;"
                        aria-hidden="true"></i>
                    <h5 class="page-header">Date et heure</h5>
                </div>

                <div>Indiquez aux participants potentiels quand votre événement commence 
                et se termine pour qu'ils puissent planifier au mieux leur venue.</div>
                <br>

                <div style="display: inline-flex;width: 100%;">
                    <div class="form-group" style="width: 320px;">
                        <label>Début de l'événement<span style="color: red;"> *</span></label>
                        <br>
                        <input type="date" name="dateDebut" class="form-control">
                    </div>
                    <div class="form-group" style="width: 320px;margin-left: 45px;">
                        <label>Fin de l'événement<span style="color: red;"> *</span></label>
                        <br>
                        <input type="date" name="dateFin" class="form-control">
                    </div>
                </div>

                <div style="display: inline-flex;width: 100%;">
                    <div class="form-group" style="width: 320px;">
                        <label>Heure de début<span style="color: red;"> *</span></label>
                        <br>
                        <input type="time" name="heureDebut" class="form-control">
                    </div>
                    <div class="form-group" style="width: 320px;margin-left: 45px;">
                        <label>Heure de fin<span style="color: red;"> *</span></label>
                        <br>
                        <input type="time" name="heureFin" class="form-control">
                    </div>
                </div>


            </div>

            <br><br>
            <!-- /.row -->
            <div class="btn-group" role="group" aria-label="Basic example" style="float: right;margin-right: 184px;">
                <input type="reset" class="btn btn-outline-primary" style="margin-right:15px;width: 100px;"
                    value="Annuler">
                <input type="submit" name="ikhan" class="btn btn-primary" value="Sauvegarder">
            </div>
            <br><br><br><br><br>
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



    <?php

$eventName = $_POST["eventName"];
$eventType = $_POST["eventType"];
$eventCategory = $_POST["eventCategory"];
$eventLieu = $_POST["eventLieu"];
$dateDebut = $_POST["dateDebut"];
$dateFin = $_POST["dateFin"];
$heureDebut = $_POST["heureDebut"];
$heureFin = $_POST["heureFin"];




  if (isset($_POST['ikhan'])) {

    $eventOrgan = $_POST["eventOrgan"];
$sel_req = "SELECT * FROM organisateur where organ_nam='$eventOrgan'";
$sel = $con->query($sel_req);
$row = $sel->fetch_array();
$organID=$row["id_organ"];


    $ins_req = "insert into evenement values
    (7,'$eventName','$eventType','$eventCategory','$eventLieu','$dateDebut','$dateFin','$heureDebut','$heureFin','','',$organID)";
    $ins = $con->query($ins_req);
    

    $sel_req2 = "SELECT * FROM evenement where 
    event_title='$eventName' 
    and event_type='$eventType'
    and id_organ=$organID";

    $sel2 = $con->query($sel_req2);
    $row2 = $sel2->fetch_array();

    $_SESSION['id_event']=$row2["id_event"];

    if(!$ins)
    {
        echo"Probleme d'insertion<br>";
    }
    else
    echo "<script> window.location.assign('informations.php')</script>";
    
        
    }
         
  $con->close();
  ?>




</body>

</html>