<!doctype html>
<html>

<head>
    <title>Nouvelle Epreuve Extincteur CO2</title>
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
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="brand" href="#">LSI</a>

                <div class="navbar-content">
                    <ul class="nav">
                        <li>
                            <a href="Accueil.php">Accueil</a>
                        </li>
                        <li class="active">
                            <a href="Nouvelle_Epreuve.php">Nouvelle Epreuve</a>
                        </li>
                        <li>
                            <a href="Modifier.php">Modifier Certificat</a>
                        </li>
                        <li>
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
    <div class="container">
        <h4>Type de bouteille</h4>
        <a class="btn btn-large" href="Epreuve_Extincteur_CO2.php">Extincteur CO2 <a/>
            <a class="btn  btn-warning btn-large" href="Epreuve_Bouteille_Enceinte.php">Bouteille ou Enceinte</a>
    </div>
    <div class="well">
        <?php
        $fournisseur = $_POST['fournisseur'];
        $matiere = $_POST['matiere'];
        $volume = $_POST['volume'];
        $pressionepreuve = $_POST['pressionepreuve'];
        $gaz = $_POST['gaz'];
        $requete = $bdd->prepare('SELECT Longueur, Diametre FROM enceintegaz WHERE idEnceinte = :codebout');
        ?>
        <p>Fabricant : <?php echo $fournisseur; ?></p>

        <p>Matière : <?php echo $matiere; ?> </p>

        <p>Volume : <?php echo $volume; ?> L</p>

        <p>Pression d'épreuve : <?php echo $pressionepreuve; ?> Bars</p>

        <p>Gaz : <?php echo $gaz; ?> </p>

        <p><strong>Code Bouteille Correspondant :
                <?php $codebouteille = $bdd->query("SELECT idEnceinte FROM enceintegaz WHERE Fournisseur ='$fournisseur' AND Matiere='$matiere' AND Volume='$volume' AND PressionEpreuve='$pressionepreuve'AND Gaz='$gaz'");
                while ($donneescodebouteille = $codebouteille->fetch()) {
                    ?>
                    <br><?php echo $donneescodebouteille['idEnceinte'];
                    $requete->execute(array(
                        'codebout' => $donneescodebouteille['idEnceinte']));
                    while ($donneesrequete = $requete->fetch()) {
                        ?>
                        =>&nbsp;Longueur : <?php echo $donneesrequete['Longueur']; ?>
                        mm, Diamètre : <?php echo $donneesrequete['Diametre']; ?>mm<br>
                    <?php
                    }
                } ?>
            </strong></p>

    </div>
		