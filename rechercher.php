<!doctype html>
<html>

<head>
    <?php
    include 'connect_db.php';
    ?>
    <title>Rechercher</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="brand" href="#">LSI</a>

                <div class="navbar-content">
                    <ul class="nav">
                        <li>
                            <a href="Accueil.php">Accueil</a>
                        </li>
                        <li>
                            <a href="Nouvelle_Epreuve.php">Nouvelle Epreuve</a>
                        </li>
                        <li>
                            <a href="Modifier.php">Modifier Certificat</a>
                        </li>
                        <li class="active">
                            <a href="Rechercher.php">Rechercher</a>
                        </li>
                        <li>
                            <a href="Back_Office.php">Back Office</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h2>Rechercher dans la base de données</h2>

    <div class="well">
        <form action="rechercher.php" method="post">
            <span class="help-inline"><strong>Rechercher par date d'enregistrement&nbsp;</strong></span>
            <input type="date" name="dateenr" class="input-medium" placeholder="jj/mm/aaaa">
            <input type="submit" class="btn btn-success">
        </form>
        <p> Certificats extincteurs CO2 :<?php if (isset($_POST['dateenr'])) {
                $dateenr = $_POST['dateenr'];
                $numcertifext = $bdd->query("SELECT NumCertificat FROM certificat WHERE DateEnr ='$dateenr'");
                while ($donneesnumcertifext = $numcertifext->fetch()) {
                    ?>&nbsp;<?php echo $donneesnumcertifext['NumCertificat'];
                }
            }
            ?>
        </p>

        <p> Certificats Bouteille ou Enceinte de gaz :<?php if (isset($_POST['dateenr'])) {
                $dateenr = $_POST['dateenr'];
                $numcertifgaz = $bdd->query("SELECT NumCertificat FROM certificatgaz WHERE DateEnr ='$dateenr'");
                while ($donneesnumcertifgaz = $numcertifgaz->fetch()) {
                    ?>&nbsp;<?php echo $donneesnumcertifgaz['NumCertificat'];
                }
            }
            ?>
        </p>

        <p> Bouteille transportable :<?php if (isset($_POST['dateenr'])) {
                $dateenr = $_POST['dateenr'];
                $numcertiftp = $bdd->query("SELECT NumCertificat FROM certificattransportable WHERE DateEnr ='$dateenr'");
                while ($donneesnumcertiftp = $numcertiftp->fetch()) {
                    ?>&nbsp;<?php echo $donneesnumcertiftp['NumCertificat'];
                }
            }
            ?>
        </p>
    </div>
    <div class="well">
        <form action="rechercher.php" method="post">
            <span class="help-inline"><strong>Rechercher par d'épreuve&nbsp;</strong></span>
            <input type="date" name="dateepr" class="input-medium" placeholder="jj/mm/aaaa">
            <input type="submit" class="btn btn-success">
        </form>
        <p> Certificats extincteurs CO2 :<?php if (isset($_POST['dateepr'])) {
                $dateepr = $_POST['dateepr'];
                $numcertifext2 = $bdd->query("SELECT NumCertificat FROM certificat WHERE DateEpr ='$dateepr'");
                while ($donneesnumcertifext2 = $numcertifext2->fetch()) {
                    ?>&nbsp;<?php echo $donneesnumcertifext2['NumCertificat'];
                }
            }
            ?>
        </p>

        <p> Certificats Enceinte de gaz :<?php if (isset($_POST['dateepr'])) {
                $dateepr = $_POST['dateepr'];
                $numcertifgaz2 = $bdd->query("SELECT NumCertificat FROM certificatgaz WHERE DateEpr ='$dateepr'");
                while ($donneesnumcertifgaz2 = $numcertifgaz2->fetch()) {
                    ?>&nbsp;<?php echo $donneesnumcertifgaz2['NumCertificat'];
                }
            }
            ?>
        </p>

        <p> Bouteille Transportable :<?php if (isset($_POST['dateepr'])) {
                $dateepr = $_POST['dateepr'];
                $numcertiftp2 = $bdd->query("SELECT NumCertificat FROM certificattransportable WHERE DateEpr ='$dateepr'");
                while ($donneesnumcertiftp2 = $numcertiftp2->fetch()) {
                    ?>&nbsp;<?php echo $donneesnumcertiftp2['NumCertificat'];
                }
            }
            ?>
        </p>
    </div>
    <div class="well">
        <label class="help-inline"><strong>Rechercher par numéro de bouteille</strong></label>

        <form action="rechercher.php" method="post">
            <span class="help-inline"><strong>Extincteur CO2&nbsp;</strong></span>
            <input type="text" name="numextincteur" class="input-medium">
            <input type="submit" class="btn btn-success">
        </form>
        <p> Certificats extincteurs CO2 :<?php if (isset($_POST['numextincteur'])) {
                $numextincteur = $_POST['numextincteur'];
                $numcertifext3 = $bdd->query("SELECT NumCertificat FROM certificat WHERE
																															numEnceinte1 ='$numextincteur' OR 
																															numEnceinte2 ='$numextincteur' OR
																															numEnceinte3 ='$numextincteur' OR
																															numEnceinte4 ='$numextincteur' OR
																															numEnceinte5 ='$numextincteur' OR
																															numEnceinte6 ='$numextincteur' OR
																															numEnceinte7 ='$numextincteur' OR
																															numEnceinte8 ='$numextincteur' OR
																															numEnceinte9 ='$numextincteur' OR
																															numEnceinte10 ='$numextincteur' OR
																															numEnceinte11 ='$numextincteur' OR
																															numEnceinte12 ='$numextincteur' OR
																															numEnceinte13 ='$numextincteur' OR
																															numEnceinte14 ='$numextincteur' OR
																															numEnceinte15 ='$numextincteur' OR
																															numEnceinte16 ='$numextincteur' OR
																															numEnceinte17 ='$numextincteur' OR
																															numEnceinte18 ='$numextincteur' OR
																															numEnceinte19 ='$numextincteur' OR
																															numEnceinte20 ='$numextincteur'
																															");
                while ($donneesnumcertifext3 = $numcertifext3->fetch()) {
                    ?>&nbsp;<?php echo $donneesnumcertifext3['NumCertificat'];
                }
            }
            ?>
        </p>

        <form action="rechercher.php" method="post">
            <span class="help-inline"><strong>Enceinte de gaz &nbsp; </strong></span>
            <input type="text" name="numbouteille" class="input-medium">
            <input type="submit" class="btn btn-success">
        </form>
        <p> Certificats Enceinte de Gaz :<?php if (isset($_POST['numbouteille'])) {
                $numbouteille = $_POST['numbouteille'];
                $numcertifgaz3 = $bdd->query("SELECT NumCertificat FROM certificatgaz WHERE
																															numEnceinte1 ='$numbouteille' OR 
																															numEnceinte2 ='$numbouteille' OR
																															numEnceinte3 ='$numbouteille' OR
																															numEnceinte4 ='$numbouteille' OR
																															numEnceinte5 ='$numbouteille' OR
																															numEnceinte6 ='$numbouteille' OR
																															numEnceinte7 ='$numbouteille' OR
																															numEnceinte8 ='$numbouteille' OR
																															numEnceinte9 ='$numbouteille' OR
																															numEnceinte10 ='$numbouteille'																													
																															");
                while ($donneesnumcertifgaz3 = $numcertifgaz3->fetch()) {
                    ?>&nbsp;<?php echo $donneesnumcertifgaz3['NumCertificat'];
                }
            }
            ?>
        </p>

        <form action="rechercher.php" method="post">
            <span class="help-inline"><strong>Bouteille Transportable &nbsp; </strong></span>
            <input type="text" name="numbouteille" class="input-medium">
            <input type="submit" class="btn btn-success">
        </form>
        <p> Certificats Bouteille Transportable :<?php if (isset($_POST['numbouteille'])) {
                $numbouteille = $_POST['numbouteille'];
                $numcertiftp3 = $bdd->query("SELECT NumCertificat FROM certificattransportable WHERE
																															numEnceinte1 ='$numbouteille' OR
																															numEnceinte2 ='$numbouteille' OR
																															numEnceinte3 ='$numbouteille' OR
																															numEnceinte4 ='$numbouteille' OR
																															numEnceinte5 ='$numbouteille' OR
																															numEnceinte6 ='$numbouteille' OR
																															numEnceinte7 ='$numbouteille' OR
																															numEnceinte8 ='$numbouteille' OR
																															numEnceinte9 ='$numbouteille' OR
																															numEnceinte10 ='$numbouteille'
																															");
                while ($donneesnumcertiftp3 = $numcertiftp3->fetch()) {
                    ?>&nbsp;<?php echo $donneesnumcertiftp3['NumCertificat'];
                }
            }
            ?>
        </p>
    </div>
</div>
</body>

</html>