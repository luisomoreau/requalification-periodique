<!doctype html>
<html>

<head>
    <title>Back Office</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php
    include 'connect_db.php';
    ?>
</head>

<body>
<div class="container">
    <div class="navbar">
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
                        <li>
                            <a href="Rechercher.php">Rechercher</a>
                        </li>
                        <li class="active">
                            <a href="Back_Office.php">Back Office</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="span12">
        <div class="well">
            <h5>Extincteur CO2</h5>

            <form action="back_office.php" method="post">
                <span class="help-inline">Ajouter un client CO2 : </span>
                <input type="text" class="input-medium" name="clientco2" required="required" placeholder="Client">
                <input type="submit" class="btn btn-success">
                <?php
                if (isset ($_POST['clientco2'])) {
                    $clientco2 = $_POST['clientco2'];
                    $enrclientco2 = $bdd->exec('INSERT INTO clientco2 (NomClient) VALUES (' . $bdd->quote($_POST['clientco2']) . ')') or die(mysql_error());
                    ?> Le client a bien été ajouté <?php } ?>
            </form>
            <form action="back_office.php" method="post">
                <span class="help-inline">Ajouter une nouvelle bouteille : </span>
                <input type="text" class="input-medium" name="codebouteille" required="required"
                       placeholder="Code Bouteille">
                <input type="text" class="input-medium" name="fabricant" required="required" placeholder="Fabricant">
                <input type="text" class="input-medium" name="pressionepreuve" required="required"
                       placeholder="Pression d'épreuve">
                <input type="text" class="input-medium" name="volume" required="required" placeholder="Volume">
                <input type="text" class="input-medium" name="diametre" required="required" placeholder="Diamètre">
                <input type="text" class="input-medium" name="epaisseur" required="required" placeholder="Epaisseur">
                <input type="text" class="input-medium" name="longueur" required="required" placeholder="Longueur">
                <input type="text" class="input-medium" name="matiere" required="required" placeholder="Matière">
                <input type="text" class="input-medium" name="filetage" required="required" placeholder="Filetage">
                <input type="submit" class="btn btn-success">
                <?php
                if (isset ($_POST['codebouteille'], $_POST['fabricant'], $_POST['pressionepreuve'], $_POST['volume'], $_POST['diametre'], $_POST['epaisseur'], $_POST['longueur'], $_POST['matiere'], $_POST['filetage'])) {
                    $codebouteille = $_POST['codebouteille'];
                    $fabricant = $_POST['fabricant'];
                    $pressionepreuve = $_POST['pressionepreuve'];
                    $volume = $_POST['volume'];
                    $diametre = $_POST['diametre'];
                    $epaisseur = $_POST['epaisseur'];
                    $longueur = $_POST['longueur'];
                    $matiere = $_POST['matiere'];
                    $filetage = $_POST['filetage'];
                    $requete = $bdd->prepare('INSERT INTO bouteille (CodeBouteille, Fournisseur, PressionEpreuve, Volume, Diametre, Epaisseur, Longueur, Matiere, Filetage)
						VALUES (:codebouteille, :fabricant, :pressionepreuve, :volume, :diametre, :epaisseur, :longueur, :matiere, :filetage)');
                    $requete->execute(array(
                        'codebouteille' => $codebouteille,
                        'fabricant' => $fabricant,
                        'pressionepreuve' => $pressionepreuve,
                        'volume' => $volume,
                        'diametre' => $diametre,
                        'epaisseur' => $epaisseur,
                        'longueur' => $longueur,
                        'matiere' => $matiere,
                        'filetage' => $filetage
                    )) or die(mysql_error()); ?>
                    La bouteille a bien été ajouté <?php } ?>
            </form>
            <form action="back_office.php" method="post">
                <span class="help-inline">Ajouter un nouveau numéro de certification : </span>
                <input type="text" class="input-medium" name="marquecommerciale" required="required"
                       placeholder="Marque Commerciale">
                <input type="text" class="input-medium" name="numerocertification" required="required"
                       placeholder="Numéro de Certification">
                <input type="submit" class="btn btn-success">
                <?php
                if (isset ($_POST['marquecommerciale'], $_POST['numerocertification'])) {
                    $numerocertification = $_POST['numerocertification'];
                    $marquecommerciale = $_POST['marquecommerciale'];
                    $requete = $bdd->prepare('INSERT INTO certifications (marqueCommerciale, numeroCertification)
						VALUES (:marquecommerciale, :numerocertification)');
                    $requete->execute(array(
                        'marquecommerciale' => $marquecommerciale,
                        'numerocertification' => $numerocertification
                    )) or die(mysql_error()); ?>
                    La marque commerciale et le numéro de certification ont bien été ajouté <?php } ?>
            </form>
        </div>
        <div class="well">
            <h5>Enceinte Gaz</h5>

            <form action="back_office.php" method="post">
                <span class="help-inline">Ajouter un client Enceinte de gaz : </span>
                <input type="text" class="input-medium" name="client" required="required" placeholder="Client">
                <input type="submit" class="btn btn-success">
                <?php
                if (isset ($_POST['client'])) {
                    $client = $_POST['client'];
                    $enrclient = $bdd->exec('INSERT INTO client (nomclient) VALUES (' . $bdd->quote($_POST['client']) . ')') or die(mysql_error());
                    ?> Le client a bien été ajouté <?php } ?>
            </form>
            <form action="back_office.php" method="post">
                <span class="help-inline">Ajouter une nouvelle bouteille : </span>
                <input type="text" class="input-medium" name="fabricantgaz" required="required" placeholder="Fabricant">
                <input type="text" class="input-medium" name="pressionepreuvegaz" required="required"
                       placeholder="Pression d'épreuve">
                <input type="text" class="input-medium" name="volumegaz" required="required" placeholder="Volume">
                <input type="text" class="input-medium" name="diametregaz" required="required" placeholder="Diamètre">
                <input type="text" class="input-medium" name="longueurgaz" required="required" placeholder="Longueur">
                <input type="text" class="input-medium" name="matieregaz" required="required" placeholder="Matière">
                <input type="text" class="input-medium" name="gaz" required="required" placeholder="Type de Gaz">
                <input type="submit" class="btn btn-success">
                <?php
                if (isset ($_POST['fabricantgaz'], $_POST['pressionepreuvegaz'], $_POST['volumegaz'], $_POST['diametregaz'], $_POST['longueurgaz'], $_POST['matieregaz'], $_POST['gaz'])) {
                    $fabricantgaz = $_POST['fabricantgaz'];
                    $pressionepreuvegaz = $_POST['pressionepreuvegaz'];
                    $volumegaz = $_POST['volumegaz'];
                    $diametregaz = $_POST['diametregaz'];
                    $longueurgaz = $_POST['longueurgaz'];
                    $matieregaz = $_POST['matieregaz'];
                    $gaz = $_POST['gaz'];
                    $requete2 = $bdd->prepare('INSERT INTO enceintegaz (Fournisseur, PressionEpreuve, Volume, Diametre, Longueur, Matiere, Gaz)
						VALUES (:fabricantgaz, :pressionepreuvegaz, :volumegaz, :diametregaz, :longueurgaz, :matieregaz, :gaz)');
                    $requete2->execute(array(
                        'fabricantgaz' => $fabricantgaz,
                        'pressionepreuvegaz' => $pressionepreuvegaz,
                        'volumegaz' => $volumegaz,
                        'diametregaz' => $diametregaz,
                        'longueurgaz' => $longueurgaz,
                        'matieregaz' => $matieregaz,
                        'gaz' => $gaz
                    )) or die(print_r($bdd->errorinfo())); ?>
                    L'enceinte de gaz a bien été ajouté !
                <?php } ?>
            </form>
        </div>
    </div>