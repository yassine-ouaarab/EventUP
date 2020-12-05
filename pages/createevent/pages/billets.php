<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Création des billets</title>

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
    <form method="POST" class="form-horizontal" action="billets.php">
        <div class="row" style=" padding-left: 230px; padding-right: 200px;">
            <div class="col-lg-12" style="display: inline-flex;margin-top: 25px;">
                <i class="fa fa-ticket" style="    font-size: 38px;
                    color: rgba(233, 233, 233, 0.925);
                    position: absolute;
                    margin-top: 35px;
                    margin-left: -52px;" aria-hidden="true"></i>
                <h5 class="page-header">Ajouter un billet</h5>
            </div>


            <div class="form-group ">
                <input style="margin-top: 145px;" class="form-control" name="ticketQuantity" placeholder="Quantité">
            </div>

            <br>

            <div style="display: inline-flex;width: 100%;">
                <div class="form-group" style="width: 320px;">
                    <label>Date de début<span style="color: red;"> *</span></label>
                    <br>
                    <input type="date" name="dateDebut" class="form-control" placeholder="Soyez clair et précis">
                </div>
                <div class="form-group" style="width: 320px;margin-left: 45px;">
                    <label>Fin des ventes<span style="color: red;"> *</span></label>
                    <br>
                    <input type="date" name="dateFin" class="form-control" placeholder="Soyez clair et précis">
                </div>
            </div><br><br>

            <div style="display: inline-flex;width: 100%;">
                <div class="form-group" style="width: 320px;">
                    <label>Heure de début<span style="color: red;"> *</span></label>
                    <br>
                    <input type="time" name="heureDebut" class="form-control" placeholder="Soyez clair et précis">
                </div>
                <div class="form-group" style="width: 320px;margin-left: 45px;">
                    <label>Heure de fin<span style="color: red;"> *</span></label>
                    <br>
                    <input type="time" name="heureFin" class="form-control" placeholder="Soyez clair et précis">
                </div>
            </div>
        </div>
        <br><br><br>
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



    <?php


$ticketQuantity = $_POST["ticketQuantity"];
$dateDebut = $_POST["dateDebut"];
$dateFin = $_POST["dateFin"];
$heureDebut = $_POST["heureDebut"];
$heureFin = $_POST["heureFin"];

$idEvent=$_SESSION['id_event'];

  if (isset($_POST['ikhan'])) {


    $ins_req = "insert into ticket values (2,'$ticketQuantity','$dateDebut','$dateFin','$heureDebut','$heureFin',$idEvent)"; 
    $ins = $con->query($ins_req);

    $sel_req2 = "SELECT * FROM ticket where 
    ticket_quantity='$ticketQuantity' 
    and start_sale_date='$dateDebut' 
    and end_sale_date='$dateFin'
    and start_sale_time='$heureDebut' 
    and end_sale_time='$heureFin'
    and id_event=$idEvent";

    $sel2 = $con->query($sel_req2);
    $row2 = $sel2->fetch_array();

    $_SESSION['id_ticket']=$row2["id_ticket"];
    
    if($ins)
    {
        echo"<script>alert('Création de événement avec succees');</script>";
    }
    else
    echo "Probléme";
    
        
    }
         
  $con->close();
  ?>



</body>

</html>