<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gestion d'événements</title>

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


    <div id="page-wrapper" style="margin:0px;">

            <form method="POST" class="form-horizontal" enctype="multipart/form-data">

            <div class="row" style="padding-left: 310px;padding-right: 300px;padding-top: 50px;padding-bottom: 23px;">
                <div class="form-group form-inline" style="margin-bottom: 25px;">
 
                        <select class="form-control" name="eventTitle" style=" width:98%;">
                        <option>Choiser un événement</option>;
                        <?php
                        $sel_req000 = "SELECT * FROM organisateur where id_particip=$idParticip";
                        $sel000 = $con->query($sel_req000);
                        while(NULL!=($row000 = $sel000->fetch_array()))
                        {    
                            $Org=$row000['id_organ'];
                            $sel_req001 = "SELECT * FROM evenement where id_organ=$Org";
                                    $sel001 = $con->query($sel_req001);
                                    while(NULL!=($row001 = $sel001->fetch_array()))
                                {echo "<option>".$row001['event_title']."</option>";}
                        }?>
                            </select>
                            <button type="submit" name="selc" style="position: absolute;
                        width: 30px;
                        height: 30px;
                        margin-left: 15px;
                        border-radius: 20px;">
                        <i class="fa fa-check-square" aria-hidden="true" style="font-size: 36px;
                        margin-left: -8px;
                        margin-top: -6px;
                        color: white;"></i></button>
                        
                </div>
            </div>
            <?php 
            $eventTitle= $_POST['eventTitle'];
                            if (isset($_POST['selc'])) {

                                $sel_req = "SELECT * FROM evenement where event_title='$eventTitle'";
                                $sel = $con->query($sel_req);
                                $row = $sel->fetch_array();
            
                                $_SESSION['evID'] = $row['id_event'];
            ?>
            <div class="row" style=" padding-left: 356px; padding-right: 350px;">

                <div class="form-group ">
                    <label>Nom de l'événement<span style="color: red;"> *</span></label>
                    <input class="form-control" name="eventName" style="margin-bottom: 10px;"
                    placeholder="Soyez clair et précis" 
                    value="<?php echo $row['event_title'];?>">
                </div>

                <div class="form-group form-inline" style="margin-bottom: 25px;margin-top: 22px;">
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
            </div>




            <div class="row" style=" padding-left: 356px; padding-right: 350px;">


                <div class="form-group ">
                    <label>Lieu de l'événement<span style="color: red;"> *</span></label>
                    <br>
                    <div style="display: inline-block;width: 100%;">
                        <i class="fa fa-map-marker"
                            style="font-size:15px;position: absolute;margin-top: 9px;margin-left: 701px;"
                            aria-hidden="true"></i>
                        <input class="form-control" name="eventLieu" style="padding-right: 40px;padding-left: 15px;"
                            placeholder="Entrer un lieu ou un adresse" <?php echo "value=".$row['event_location'];?>>
                    </div>
                </div>
            </div>



            <div class="row" style=" padding-left: 356px; padding-right: 350px;">


                <div style="display: inline-flex;width: 100%;">
                    <div class="form-group" style="width: 320px;">
                        <label>Début de l'événement<span style="color: red;"> *</span></label>
                        <br>
                        <input type="date" name="dateDebut" class="form-control" <?php echo "value=".$row['start_date'];?>>
                    </div>
                    <div class="form-group" style="width: 320px;margin-left: 45px;">
                        <label>Fin de l'événement<span style="color: red;"> *</span></label>
                        <br>
                        <input type="date" name="dateFin" class="form-control" <?php echo "value=".$row['end_date'];?>>
                    </div>
                </div>

                <div style="display: inline-flex;width: 100%;">
                    <div class="form-group" style="width: 320px;">
                        <label>Heure de début<span style="color: red;"> *</span></label>
                        <br>
                        <input type="time" name="heureDebut" class="form-control" <?php echo "value=".$row['start_time'];?>>
                    </div>
                    <div class="form-group" style="width: 320px;margin-left: 45px;">
                        <label>Heure de fin<span style="color: red;"> *</span></label>
                        <br>
                        <input type="time" name="heureFin" class="form-control" <?php echo "value=".$row['end_time'];?>>
                    </div>
                </div>


            </div>

            <div class="row" style=" padding-left: 350px; padding-right: 350px;margin-top:10px;">

                <input type="file" name="eventImg" id="file-2" class="inputfile inputfile-2"
                            data-multiple-caption="{count} files selected" multiple />
                        <label for="file-2"><i class="fa fa-upload" aria-hidden="true"></i>
                            <span style="padding-left: 7px;">Choiser une image &hellip;</span></label>
            </div>

            <br>

                <div class="row" style=" padding-left: 356px; padding-right: 350px;">
                    <div class="form-group">
                        <textarea class="form-control" name="eventDescription" rows="9" id="EventDescription"></textarea>
                        <script> document.getElementById("EventDescription").value = "<?php echo $row['event_description'];?>";</script>
                    </div>

                </div>
            
                <br><br>
            <div class="btn-group" role="group" aria-label="Basic example" style="float: right;margin-right: 325px;">
            <input type="submit" name="ikhan" class="btn btn-primary" value="Modifier" 
            style="width: 100px;background-color: #489c8c;border-color:#489c8c;">
                <input type="submit" name="ikhan0" class="btn btn-outline-primary" style="margin-left:20px;width: 100px;
                background-color: #fa7272;color: white;"
                    value="Supprimer">
            </div>


            <?php } else { ?>

                    <div class="row" style=" padding-left: 356px; padding-right: 350px;">

                    <div class="form-group ">
                        <label>Nom de l'événement<span style="color: red;"> *</span></label>
                        <input class="form-control" name="eventName" placeholder="Soyez clair et précis" style="margin-bottom: 10px;">
                    </div>

                    <div class="form-group form-inline" style="margin-bottom: 25px;margin-top: 22px;">
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
                    </div>



                                <div class="row" style=" padding-left: 356px; padding-right: 350px;">


                    <div class="form-group ">
                        <label>Lieu de l'événement<span style="color: red;"> *</span></label>
                        <br>
                        <div style="display: inline-block;width: 100%;">
                            <i class="fa fa-map-marker"
                                style="font-size:15px;position: absolute;margin-top: 9px;margin-left: 701px;"
                                aria-hidden="true"></i>
                            <input class="form-control" name="eventLieu" style="padding-right: 40px;padding-left: 15px;"
                                placeholder="Entrer un lieu ou un adresse">
                        </div>
                    </div>
                    </div>


                    <div class="row" style=" padding-left: 356px; padding-right: 350px;">


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

                    <div class="row" style=" padding-left: 350px; padding-right: 350px;margin-top:10px;">

                        <input type="file" name="eventImg" id="file-2" class="inputfile inputfile-2"
                                data-multiple-caption="{count} files selected" multiple />
                            <label for="file-2"><i class="fa fa-upload" aria-hidden="true"></i>
                                <span style="padding-left: 7px;">Choiser une image &hellip;</span></label>



                    </div>
            
            <br>

            <div class="row" style=" padding-left: 356px; padding-right: 350px;">
                <div class="form-group">
                    <textarea class="form-control" name="eventDescription" rows="9"></textarea>
                </div>

            </div>

            <br><br>
            <div class="btn-group" role="group" aria-label="Basic example" style="float: right;margin-right: 325px;">
            <input type="submit" class="btn btn-primary" value="Modifier" 
            style="width: 100px;background-color: #489c8c;border-color:#489c8c;" disabled>
                <input type="submit" class="btn btn-outline-primary" style="margin-left:20px;width: 100px;
                background-color: #fa7272;color: white;"
                    value="Supprimer" disabled>
            </div>

<?php } ?>

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
$eventDescription = $_POST["eventDescription"];

$evID=$_SESSION['evID'];


  if (isset($_POST['ikhan'])) {

    $image = $_FILES['eventImg']['name'];
    $target = "../../../cover_imgs/".basename($image);
    
    $upd_req = "update evenement set
    event_title='$eventName',event_type='$eventType',event_category='$eventCategory',event_location='$eventLieu',
    start_date='$dateDebut',end_date='$dateFin',start_time='$heureDebut',end_time='$heureFin',
    event_img ='$image',event_description ='$eventDescription'
    where id_event=$evID";

    $upd = $con->query($upd_req);

    move_uploaded_file($_FILES['eventImg']['tmp_name'], $target);

    echo "<script> window.location.assign('eventManager.php')</script>";

}



if (isset($_POST['ikhan0'])) {

    $sel_req0 = "select * from ticket where id_event=$evID";
    $sel0 = $con->query($sel_req0);
    $row0 = $sel0->fetch_array();

    $teckreserv = $row0['id_ticket'];
    $del_req0 = "delete from reserve where id_ticket=$teckreserv";
    $del0 = $con->query($del_req0);

    $del_req1 = "delete from ticket where id_event=$evID";
    $del1 = $con->query($del_req1);

    $del_req2 = "delete from favoris where id_event=$evID";
    $del2 = $con->query($del_req2);

    $del_req3 = "delete from evenement where id_event=$evID";
    $del3 = $con->query($del_req3);

    echo "<script> window.location.assign('eventManager.php')</script>";


}


  $con->close();
  ?>




</body>

</html>