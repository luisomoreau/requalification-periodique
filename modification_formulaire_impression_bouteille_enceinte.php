<!doctype html>
<html>

<head>
<?php
include 'connect_db.php';
?>
<?php
//Enregistrement dans la base de données
$numcertif = $_POST['numcertif'];
$nomsign = $_POST['nomsign'];
$dateenr = $_POST['dateenr'];
$dateepr = $_POST['dateepr'];
$client = $_POST['client'];
$pressionService = $_POST['pressionService'];
$codebouteille = $_POST['codebouteille'];
$numenceinte1 = $_POST['numenceinte1'];
$datepremepr1 = $_POST['datepremepr1'];
$datedernepr1 = $_POST['datedernepr1'];
$obs1 = $_POST['obs1'];
$numenceinte2 = $_POST['numenceinte2'];
$datepremepr2 = $_POST['datepremepr2'];
$datedernepr2 = $_POST['datedernepr2'];
$obs2 = $_POST['obs2'];
$numenceinte3 = $_POST['numenceinte3'];
$datepremepr3 = $_POST['datepremepr3'];
$datedernepr3 = $_POST['datedernepr3'];
$obs3 = $_POST['obs3'];
$numenceinte4 = $_POST['numenceinte4'];
$datepremepr4 = $_POST['datepremepr4'];
$datedernepr4 = $_POST['datedernepr4'];
$obs4 = $_POST['obs4'];
$numenceinte5 = $_POST['numenceinte5'];
$datepremepr5 = $_POST['datepremepr5'];
$datedernepr5 = $_POST['datedernepr5'];
$obs5 = $_POST['obs5'];
$numenceinte6 = $_POST['numenceinte6'];
$datepremepr6 = $_POST['datepremepr6'];
$datedernepr6 = $_POST['datedernepr6'];
$obs6 = $_POST['obs6'];
$numenceinte7 = $_POST['numenceinte7'];
$datepremepr7 = $_POST['datepremepr7'];
$datedernepr7 = $_POST['datedernepr7'];
$obs7 = $_POST['obs7'];
$numenceinte8 = $_POST['numenceinte8'];
$datepremepr8 = $_POST['datepremepr8'];
$datedernepr8 = $_POST['datedernepr8'];
$obs8 = $_POST['obs8'];
$numenceinte9 = $_POST['numenceinte9'];
$datepremepr9 = $_POST['datepremepr9'];
$datedernepr9 = $_POST['datedernepr9'];
$obs9 = $_POST['obs9'];
$numenceinte10 = $_POST['numenceinte10'];
$datepremepr10 = $_POST['datepremepr10'];
$datedernepr10 = $_POST['datedernepr10'];
$obs10 = $_POST['obs10'];
$enregistrement2 = $bdd->prepare("UPDATE certificatgaz
									SET NumCertificat = :numcertif,
										NomSign = :nomsign,
										DateEnr = :dateenr,
										DateEpr = :dateepr,
										NomClientGaz = :client, 
										pressionService = :pressionService,
										CodeBouteille = :codebouteille,  
										numEnceinte1 = :numenceinte1, 
										anneePremEpr1 = :datepremepr1, 
										dateDernEpr1 = :datedernepr1, 
										obs1 = :obs1,
										numEnceinte2 = :numenceinte2, 
										anneePremEpr2 = :datepremepr2, 
										dateDernEpr2 = :datedernepr2, 
										obs2 = :obs2,
										numEnceinte3 = :numenceinte3, 
										anneePremEpr3 = :datepremepr3, 
										dateDernEpr3 = :datedernepr3, 
										obs3 = :obs3,
										numEnceinte4 = :numenceinte4, 
										anneePremEpr4 = :datepremepr4, 
										dateDernEpr4 = :datedernepr4, 
										obs4 = :obs4,
										numEnceinte5 = :numenceinte5, 
										anneePremEpr5 = :datepremepr5, 
										dateDernEpr5 = :datedernepr5, 
										obs5 = :obs5,
										numEnceinte6 = :numenceinte6, 
										anneePremEpr6 = :datepremepr6, 
										dateDernEpr6 = :datedernepr6, 
										obs6 = :obs6,
										numEnceinte7 = :numenceinte7, 
										anneePremEpr7 = :datepremepr7, 
										dateDernEpr7 = :datedernepr7, 
										obs7 = :obs7,
										numEnceinte8 = :numenceinte8, 
										anneePremEpr8 = :datepremepr8, 
										dateDernEpr8 = :datedernepr8, 
										obs8 = :obs8,
										numEnceinte9 = :numenceinte9, 
										anneePremEpr9 = :datepremepr9, 
										dateDernEpr9 = :datedernepr9, 
										obs9 = :obs9,
										numEnceinte10 = :numenceinte10, 
										anneePremEpr10 = :datepremepr10, 
										dateDernEpr10 = :datedernepr10, 
										obs10 = :obs10
									WHERE NumCertificat = :numcertif
									");
$enregistrement2->execute(array('numcertif' => $numcertif,
    'nomsign' => $nomsign,
    'dateenr' => $dateenr,
    'dateepr' => $dateepr,
    'client' => $client,
    'pressionService' => $pressionService,
    'codebouteille' => $codebouteille,
    'numenceinte1' => $numenceinte1,
    'datepremepr1' => $datepremepr1,
    'datedernepr1' => $datedernepr1,
    'obs1' => $obs1,
    'numenceinte2' => $numenceinte2,
    'datepremepr2' => $datepremepr2,
    'datedernepr2' => $datedernepr2,
    'obs2' => $obs2,
    'numenceinte3' => $numenceinte3,
    'datepremepr3' => $datepremepr3,
    'datedernepr3' => $datedernepr3,
    'obs3' => $obs3,
    'numenceinte4' => $numenceinte4,
    'datepremepr4' => $datepremepr4,
    'datedernepr4' => $datedernepr4,
    'obs4' => $obs4,
    'numenceinte5' => $numenceinte5,
    'datepremepr5' => $datepremepr5,
    'datedernepr5' => $datedernepr5,
    'obs5' => $obs5,
    'numenceinte6' => $numenceinte6,
    'datepremepr6' => $datepremepr6,
    'datedernepr6' => $datedernepr6,
    'obs6' => $obs6,
    'numenceinte7' => $numenceinte7,
    'datepremepr7' => $datepremepr7,
    'datedernepr7' => $datedernepr7,
    'obs7' => $obs7,
    'numenceinte8' => $numenceinte8,
    'datepremepr8' => $datepremepr8,
    'datedernepr8' => $datedernepr8,
    'obs8' => $obs8,
    'numenceinte9' => $numenceinte9,
    'datepremepr9' => $datepremepr9,
    'datedernepr9' => $datedernepr9,
    'obs9' => $obs9,
    'numenceinte10' => $numenceinte10,
    'datepremepr10' => $datepremepr10,
    'datedernepr10' => $datedernepr10,
    'obs10' => $obs10));
?>
<?php
//Fonction pour retourner un nombre en toute lettre
function int2str($a)
{
    if ($a < 0) return 'moins ' . int2str(-$a);
    if ($a < 17) {
        switch ($a) {
            case 0:
                return 'zero';
            case 1:
                return 'un';
            case 2:
                return 'deux';
            case 3:
                return 'trois';
            case 4:
                return 'quatre';
            case 5:
                return 'cinq';
            case 6:
                return 'six';
            case 7:
                return 'sept';
            case 8:
                return 'huit';
            case 9:
                return 'neuf';
            case 10:
                return 'dix';
            case 11:
                return 'onze';
            case 12:
                return 'douze';
            case 13:
                return 'treize';
            case 14:
                return 'quatorze';
            case 15:
                return 'quinze';
            case 16:
                return 'seize';
        }
    } else if ($a < 20) {
        return 'dix-' . int2str($a - 10);
    } else if ($a < 100) {
        if ($a % 10 == 0) {
            switch ($a) {
                case 20:
                    return 'vingt';
                case 30:
                    return 'trente';
                case 40:
                    return 'quarante';
                case 50:
                    return 'cinquante';
                case 60:
                    return 'soixante';
                case 70:
                    return 'soixante-dix';
                case 80:
                    return 'quatre-vingt';
                case 90:
                    return 'quatre-vingt-dix';
            }
        } else if ($a < 70) {
            return int2str($a - $a % 10) . ' ' . int2str($a % 10);
        } else if ($a < 80) {
            return int2str(60) . ' ' . int2str($a % 20);
        } else {
            return int2str(80) . ' ' . int2str($a % 20);
        }
    } else if ($a == 100) {
        return 'cent';
    } else if ($a == 200) {
        return 'deux cent';
    } else if ($a == 300) {
        return 'trois cent';
    } else if ($a == 400) {
        return 'quatre cent';
    } else if ($a == 500) {
        return 'cinq cent';
    } else if ($a == 600) {
        return 'six cent';
    } else if ($a == 700) {
        return 'sept cent';
    } else if ($a == 800) {
        return 'huit cent';
    } else if ($a == 900) {
        return 'neuf cent';
    } else if ($a < 200) {
        return int2str(100) . ' ' . int2str($a % 100);
    } else if ($a < 1000) {
        return int2str((int)($a / 100)) . ' ' . int2str(100) . ' ' . int2str($a % 100);
    } else if ($a == 1000) {
        return 'mille';
    } else if ($a < 2000) {
        return int2str(1000) . ' ' . int2str($a % 1000) . ' ';
    } else if ($a < 1000000) {
        return int2str((int)($a / 1000)) . ' ' . int2str(1000) . ' ' . int2str($a % 1000);
    }
    //on pourrait pousser pour aller plus loin, mais c'est sans interret pour ce projet, et pas interessant, c'est pas non plus compliqué...
}

?>
<title>Modification Formulaire Impression Enceinte de Gaz</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<link rel="stylesheet" href="css/bootstrap.css" media='screen, print'>
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <div class="span">
        <img src="entete.jpg" width="900">
    </div>
</div>
<div class="row">
    <h4>
        <center>
            ARRETE DU 15 MARS 2000 MODIFIE<br>
            CERTIFICAT D'INSPECTION DE REQUALIFICATION PERIODIQUE<br>
            D'EQUIPEMENT SOUS PRESSION DE GAZ
        </center>
    </h4>
    <p>
        &nbsp;&nbsp;&nbsp;INSPECTION opérée le <?php echo date("d/m/y", strtotime($dateenr)); ?> par le
        responsable, <?php echo $_POST['nomsign']; ?>.
    </p>
</div>
<div class="span11">
    <div class="well">
        <p>Etablissement où l'inspection de requalification a été faite : <strong> LSI 1319 Rue de Vert Buisson 76160 St
                LEGER du BOURG DENIS</strong>
        </p>

        <p>Nom et adresse de la société qui a demandé la requalification périodique et qui est redevable des frais :
            <strong> LSI 1319 Rue de Vert Buisson 76160 St LEGER du BOURG DENIS</strong>
        </p>

        <p> Nom du propriétaire : <strong><?php echo $_POST['client']; ?></strong></p>
        </p>
    </div>
</div>
<div class="span11">
<p>
<center>
    Constructeur : <?php
    $constructeur = $bdd->query("SELECT Fournisseur FROM enceintegaz WHERE idEnceinte ='$codebouteille'");
    while ($donneesconstructeur = $constructeur->fetch()) {
        echo $donneesconstructeur['Fournisseur'];
    }
    ?> |
    Materiau : <?php
    $matiere = $bdd->query("SELECT Matiere FROM enceintegaz WHERE idEnceinte ='$codebouteille'");
    while ($donneesmatiere = $matiere->fetch()) {
        echo $donneesmatiere['Matiere'];
    }
    ?> |
    Pression d'épreuve : <?php
    $pressionepreuve = $bdd->query("SELECT PressionEpreuve FROM enceintegaz WHERE idEnceinte ='$codebouteille'");
    while ($donneespressionepreuve = $pressionepreuve->fetch()) {
        echo $donneespressionepreuve['PressionEpreuve'];
    }
    ?> Bar |
    Pression de service : <?php echo $_POST['pressionService']; ?> Bar <br>
    Nature gaz : <?php
    $gaz = $bdd->query("SELECT Gaz FROM enceintegaz WHERE idEnceinte ='$codebouteille'");
    while ($donneesgaz = $gaz->fetch()) {
        echo $donneesgaz['Gaz'];
    }
    ?> <br>
    Volume : <?php
    $volume = $bdd->query("SELECT Volume FROM enceintegaz WHERE idEnceinte ='$codebouteille'");
    while ($donneesvolume = $volume->fetch()) {
        echo $donneesvolume['Volume'];
    }
    ?>L |
    Longueur : <?php
    $longueur = $bdd->query("SELECT Longueur FROM enceintegaz WHERE idEnceinte ='$codebouteille'");
    while ($donneeslongueur = $longueur->fetch()) {
        echo $donneeslongueur['Longueur'];
    }
    ?> mm |
    Diamètre : <?php
    $diametre = $bdd->query("SELECT Diametre FROM enceintegaz WHERE idEnceinte ='$codebouteille'");
    while ($donneesdiametre = $diametre->fetch()) {
        echo $donneesdiametre['Diametre'];
    }
    ?> mm
</center>
</p>
<table class="table table-bordered table-condensed">
    <thead>
    <tr>
        <th>#</th>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n°enceinte&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>année 1° epreuve</th>
        <th>Date dernière epreuve</th>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Observation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset ($_POST['numenceinte1'], $_POST['datepremepr1'], $_POST['datedernepr1'], $_POST['datepremepr1'], $_POST['obs1'])) { ?>
        <tr>
            <td>1</td>
            <td>
                <?php echo $_POST['numenceinte1']; ?>
            </td>
            <td>
                <?php echo $_POST['datepremepr1']; ?>
            </td>
            <td>
                <?php echo $_POST['datedernepr1']; ?>
            </td>
            <td>
                <?php echo $_POST['obs1']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if (isset ($_POST['numenceinte2'], $_POST['datepremepr2'], $_POST['datedernepr2'], $_POST['datepremepr2'], $_POST['obs2'])) { ?>
        <tr>
            <td>2</td>
            <td>
                <?php echo $_POST['numenceinte2']; ?>
            </td>
            <td>
                <?php echo $_POST['datepremepr2']; ?>
            </td>
            <td>
                <?php echo $_POST['datedernepr2']; ?>
            </td>
            <td>
                <?php echo $_POST['obs2']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if (isset ($_POST['numenceinte3'], $_POST['datepremepr3'], $_POST['datedernepr3'], $_POST['datepremepr3'], $_POST['obs3'])) { ?>
        <tr>
            <td>3</td>
            <td>
                <?php echo $_POST['numenceinte3']; ?>
            </td>
            <td>
                <?php echo $_POST['datepremepr3']; ?>
            </td>
            <td>
                <?php echo $_POST['datedernepr3']; ?>
            </td>
            <td>
                <?php echo $_POST['obs3']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if (isset ($_POST['numenceinte4'], $_POST['datepremepr4'], $_POST['datedernepr4'], $_POST['datepremepr4'], $_POST['obs4'])) { ?>
        <tr>
            <td>4</td>
            <td>
                <?php echo $_POST['numenceinte4']; ?>
            </td>
            <td>
                <?php echo $_POST['datepremepr4']; ?>
            </td>
            <td>
                <?php echo $_POST['datedernepr4']; ?>
            </td>
            <td>
                <?php echo $_POST['obs4']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if (isset ($_POST['numenceinte5'], $_POST['datepremepr5'], $_POST['datedernepr5'], $_POST['datepremepr5'], $_POST['obs5'])) { ?>
        <tr>
            <td>5</td>
            <td>
                <?php echo $_POST['numenceinte5']; ?>
            </td>
            <td>
                <?php echo $_POST['datepremepr5']; ?>
            </td>
            <td>
                <?php echo $_POST['datedernepr5']; ?>
            </td>
            <td>
                <?php echo $_POST['obs5']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if (isset ($_POST['numenceinte6'], $_POST['datepremepr6'], $_POST['datedernepr6'], $_POST['datepremepr6'], $_POST['obs6'])) { ?>
        <tr>
            <td>6</td>
            <td>
                <?php echo $_POST['numenceinte6']; ?>
            </td>
            <td>
                <?php echo $_POST['datepremepr6']; ?>
            </td>
            <td>
                <?php echo $_POST['datedernepr6']; ?>
            </td>
            <td>
                <?php echo $_POST['obs6']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if (isset ($_POST['numenceinte7'], $_POST['datepremepr7'], $_POST['datedernepr7'], $_POST['datepremepr7'], $_POST['obs7'])) { ?>
        <tr>
            <td>7</td>
            <td>
                <?php echo $_POST['numenceinte7']; ?>
            </td>
            <td>
                <?php echo $_POST['datepremepr7']; ?>
            </td>
            <td>
                <?php echo $_POST['datedernepr7']; ?>
            </td>
            <td>
                <?php echo $_POST['obs7']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if (isset ($_POST['numenceinte8'], $_POST['datepremepr8'], $_POST['datedernepr8'], $_POST['datepremepr8'], $_POST['obs8'])) { ?>
        <tr>
            <td>8</td>
            <td>
                <?php echo $_POST['numenceinte8']; ?>
            </td>
            <td>
                <?php echo $_POST['datepremepr8']; ?>
            </td>
            <td>
                <?php echo $_POST['datedernepr8']; ?>
            </td>
            <td>
                <?php echo $_POST['obs8']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if (isset ($_POST['numenceinte9'], $_POST['datepremepr9'], $_POST['datedernepr9'], $_POST['datepremepr9'], $_POST['obs9'])) { ?>
        <tr>
            <td>9</td>
            <td>
                <?php echo $_POST['numenceinte9']; ?>
            </td>
            <td>
                <?php echo $_POST['datepremepr9']; ?>
            </td>
            <td>
                <?php echo $_POST['datedernepr9']; ?>
            </td>
            <td>
                <?php echo $_POST['obs9']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if (isset ($_POST['numenceinte10'], $_POST['datepremepr10'], $_POST['datedernepr10'], $_POST['datepremepr10'], $_POST['obs10'])) { ?>
        <tr>
            <td>10</td>
            <td>
                <?php echo $_POST['numenceinte10']; ?>
            </td>
            <td>
                <?php echo $_POST['datepremepr10']; ?>
            </td>
            <td>
                <?php echo $_POST['datedernepr10']; ?>
            </td>
            <td>
                <?php echo $_POST['obs10']; ?>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>
<div class="span11">
    <div class="well">
        <p> Pression d'épreuve en toutes lettres :
            <strong>
                <?php
                $pressionepreuve = $bdd->query("SELECT PressionEpreuve FROM enceintegaz WHERE idEnceinte ='$codebouteille'");
                while ($donneespressionepreuve = $pressionepreuve->fetch()) {
                    $pressepr = $donneespressionepreuve['PressionEpreuve'];
                }
                ?>
                <?php echo int2str($pressepr); ?> bars</p>
        </strong></p>
    </div>
</div>
<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<div class="span11">
    <p>Equipements présentés hors site d'exploitation.<br>
        L'inspection de requalification de la bouteille et de ses accessoires sous pression n'ont donné lieu à aucune
        observation défavorable empêchant la remise en service des équipements, sous réserve du succès de la
        requalification périodique.</p>

    <div class="well">
        <p>N° de certificat : B<?php echo $_POST['numcertif']; ?></p>

        <p>Fait à Saint-Léger du Bourg Denis</p>

        <p>Le <?php echo date("d/m/y", strtotime($dateenr)); ?></p>
    </div>
</div>
</body>
</html>