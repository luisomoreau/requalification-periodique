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
<?php
//Récupération du numéro de certificat
if (isset($_POST['numcertifm'])) {
    $numcertifm = $_POST['numcertifm'];
}
//définition des variables
$codebouteillea = $bdd->query("SELECT CodeBouteille FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneescodebouteillea = $codebouteillea->fetch();

$nomsigna = $bdd->query("SELECT NomSign FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnomsigna = $nomsigna->fetch();

$dateenra = $bdd->query("SELECT DateEnr FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdateenra = $dateenra->fetch();

$dateepra = $bdd->query("SELECT DateEpr FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdateepra = $dateepra->fetch();

$clienta = $bdd->query("SELECT NomClientCO2 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesclienta = $clienta->fetch();

$pressionServicea = $bdd->query("SELECT pressionService FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneespressionServicea = $pressionServicea->fetch();

$certificationa = $bdd->query("SELECT Certification FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneescertificationa = $certificationa->fetch();

$numenceinte1a = $bdd->query("SELECT numEnceinte1 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte1a = $numenceinte1a->fetch();
$datepremepr1a = $bdd->query("SELECT anneePremEpr1 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr1a = $datepremepr1a->fetch();
$datedernepr1a = $bdd->query("SELECT dateDernEpr1 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr1a = $datedernepr1a->fetch();
$obs1a = $bdd->query("SELECT obs1 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs1a = $obs1a->fetch();

$numenceinte2a = $bdd->query("SELECT numEnceinte2 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte2a = $numenceinte2a->fetch();
$datepremepr2a = $bdd->query("SELECT anneePremEpr2 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr2a = $datepremepr2a->fetch();
$datedernepr2a = $bdd->query("SELECT dateDernEpr2 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr2a = $datedernepr2a->fetch();
$obs2a = $bdd->query("SELECT obs2 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs2a = $obs2a->fetch();

$numenceinte3a = $bdd->query("SELECT numEnceinte3 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte3a = $numenceinte3a->fetch();
$datepremepr3a = $bdd->query("SELECT anneePremEpr3 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr3a = $datepremepr3a->fetch();
$datedernepr3a = $bdd->query("SELECT dateDernEpr3 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr3a = $datedernepr3a->fetch();
$obs3a = $bdd->query("SELECT obs3 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs3a = $obs3a->fetch();

$numenceinte4a = $bdd->query("SELECT numEnceinte4 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte4a = $numenceinte4a->fetch();
$datepremepr4a = $bdd->query("SELECT anneePremEpr4 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr4a = $datepremepr4a->fetch();
$datedernepr4a = $bdd->query("SELECT dateDernEpr4 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr4a = $datedernepr4a->fetch();
$obs4a = $bdd->query("SELECT obs4 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs4a = $obs4a->fetch();

$numenceinte5a = $bdd->query("SELECT numEnceinte5 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte5a = $numenceinte5a->fetch();
$datepremepr5a = $bdd->query("SELECT anneePremEpr5 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr5a = $datepremepr5a->fetch();
$datedernepr5a = $bdd->query("SELECT dateDernEpr5 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr5a = $datedernepr5a->fetch();
$obs5a = $bdd->query("SELECT obs5 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs5a = $obs5a->fetch();

$numenceinte6a = $bdd->query("SELECT numEnceinte6 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte6a = $numenceinte6a->fetch();
$datepremepr6a = $bdd->query("SELECT anneePremEpr6 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr6a = $datepremepr6a->fetch();
$datedernepr6a = $bdd->query("SELECT dateDernEpr6 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr6a = $datedernepr6a->fetch();
$obs6a = $bdd->query("SELECT obs6 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs6a = $obs6a->fetch();

$numenceinte7a = $bdd->query("SELECT numEnceinte7 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte7a = $numenceinte7a->fetch();
$datepremepr7a = $bdd->query("SELECT anneePremEpr7 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr7a = $datepremepr7a->fetch();
$datedernepr7a = $bdd->query("SELECT dateDernEpr7 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr7a = $datedernepr7a->fetch();
$obs7a = $bdd->query("SELECT obs7 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs7a = $obs7a->fetch();

$numenceinte8a = $bdd->query("SELECT numEnceinte8 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte8a = $numenceinte8a->fetch();
$datepremepr8a = $bdd->query("SELECT anneePremEpr8 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr8a = $datepremepr8a->fetch();
$datedernepr8a = $bdd->query("SELECT dateDernEpr8 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr8a = $datedernepr8a->fetch();
$obs8a = $bdd->query("SELECT obs8 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs8a = $obs8a->fetch();

$numenceinte9a = $bdd->query("SELECT numEnceinte9 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte9a = $numenceinte9a->fetch();
$datepremepr9a = $bdd->query("SELECT anneePremEpr9 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr9a = $datepremepr9a->fetch();
$datedernepr9a = $bdd->query("SELECT dateDernEpr9 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr9a = $datedernepr9a->fetch();
$obs9a = $bdd->query("SELECT obs9 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs9a = $obs9a->fetch();

$numenceinte10a = $bdd->query("SELECT numEnceinte10 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte10a = $numenceinte10a->fetch();
$datepremepr10a = $bdd->query("SELECT anneePremEpr10 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr10a = $datepremepr10a->fetch();
$datedernepr10a = $bdd->query("SELECT dateDernEpr10 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr10a = $datedernepr10a->fetch();
$obs10a = $bdd->query("SELECT obs10 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs10a = $obs10a->fetch();

$numenceinte11a = $bdd->query("SELECT numEnceinte11 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte11a = $numenceinte11a->fetch();
$datepremepr11a = $bdd->query("SELECT anneePremEpr11 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr11a = $datepremepr11a->fetch();
$datedernepr11a = $bdd->query("SELECT dateDernEpr11 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr11a = $datedernepr11a->fetch();
$obs11a = $bdd->query("SELECT obs11 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs11a = $obs11a->fetch();

$numenceinte12a = $bdd->query("SELECT numEnceinte12 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte12a = $numenceinte12a->fetch();
$datepremepr12a = $bdd->query("SELECT anneePremEpr12 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr12a = $datepremepr12a->fetch();
$datedernepr12a = $bdd->query("SELECT dateDernEpr12 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr12a = $datedernepr12a->fetch();
$obs12a = $bdd->query("SELECT obs12 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs12a = $obs12a->fetch();

$numenceinte13a = $bdd->query("SELECT numEnceinte13 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte13a = $numenceinte13a->fetch();
$datepremepr13a = $bdd->query("SELECT anneePremEpr13 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr13a = $datepremepr13a->fetch();
$datedernepr13a = $bdd->query("SELECT dateDernEpr13 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr13a = $datedernepr13a->fetch();
$obs13a = $bdd->query("SELECT obs13 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs13a = $obs13a->fetch();

$numenceinte14a = $bdd->query("SELECT numEnceinte14 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte14a = $numenceinte14a->fetch();
$datepremepr14a = $bdd->query("SELECT anneePremEpr14 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr14a = $datepremepr14a->fetch();
$datedernepr14a = $bdd->query("SELECT dateDernEpr14 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr14a = $datedernepr14a->fetch();
$obs14a = $bdd->query("SELECT obs14 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs14a = $obs14a->fetch();

$numenceinte15a = $bdd->query("SELECT numEnceinte15 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte15a = $numenceinte15a->fetch();
$datepremepr15a = $bdd->query("SELECT anneePremEpr15 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr15a = $datepremepr15a->fetch();
$datedernepr15a = $bdd->query("SELECT dateDernEpr15 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr15a = $datedernepr15a->fetch();
$obs15a = $bdd->query("SELECT obs15 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs15a = $obs15a->fetch();

$numenceinte16a = $bdd->query("SELECT numEnceinte16 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte16a = $numenceinte16a->fetch();
$datepremepr16a = $bdd->query("SELECT anneePremEpr16 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr16a = $datepremepr16a->fetch();
$datedernepr16a = $bdd->query("SELECT dateDernEpr16 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr16a = $datedernepr16a->fetch();
$obs16a = $bdd->query("SELECT obs16 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs16a = $obs16a->fetch();

$numenceinte17a = $bdd->query("SELECT numEnceinte17 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte17a = $numenceinte17a->fetch();
$datepremepr17a = $bdd->query("SELECT anneePremEpr17 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr17a = $datepremepr17a->fetch();
$datedernepr17a = $bdd->query("SELECT dateDernEpr17 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr17a = $datedernepr17a->fetch();
$obs17a = $bdd->query("SELECT obs17 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs17a = $obs17a->fetch();

$numenceinte18a = $bdd->query("SELECT numEnceinte18 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte18a = $numenceinte18a->fetch();
$datepremepr18a = $bdd->query("SELECT anneePremEpr18 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr18a = $datepremepr18a->fetch();
$datedernepr18a = $bdd->query("SELECT dateDernEpr18 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr18a = $datedernepr18a->fetch();
$obs18a = $bdd->query("SELECT obs18 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs18a = $obs18a->fetch();

$numenceinte19a = $bdd->query("SELECT numEnceinte19 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte19a = $numenceinte19a->fetch();
$datepremepr19a = $bdd->query("SELECT anneePremEpr19 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr19a = $datepremepr19a->fetch();
$datedernepr19a = $bdd->query("SELECT dateDernEpr19 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr19a = $datedernepr19a->fetch();
$obs19a = $bdd->query("SELECT obs19 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs19a = $obs19a->fetch();

$numenceinte20a = $bdd->query("SELECT numEnceinte20 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesnumenceinte20a = $numenceinte20a->fetch();
$datepremepr20a = $bdd->query("SELECT anneePremEpr20 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatepremepr20a = $datepremepr20a->fetch();
$datedernepr20a = $bdd->query("SELECT dateDernEpr20 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesdatedernepr20a = $datedernepr20a->fetch();
$obs20a = $bdd->query("SELECT obs20 FROM certificat WHERE NumCertificat ='$numcertifm'");
$donneesobs20a = $obs20a->fetch();


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
                    <li class="active">
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
    <h2>Modification de Certificat "Extincteur CO2"</h2>
</div>
<br>

<div class="modal hide" id="codebouteille" aria-hidden="true" style="display: none;">
    <div class="modal-header"><a class="close" data-dismiss="modal">×</a>

        <h3>Rechercher Code Bouteille</h3>
    </div>
    <div class="modal-body">
        <form action="recherchecodebouteille.php" method="post">
            <div class="well">
                <span class="help-block">Fabricant</span>
                <select name="fournisseur">
                    <?php
                    $resultat1 = $bdd->query('SELECT Fournisseur FROM bouteille GROUP BY Fournisseur');
                    while ($donnees1 = $resultat1->fetch()) {
                        ?>
                        <option
                            value="<?php echo $donnees1['Fournisseur']; ?>"><?php echo $donnees1['Fournisseur']; ?></option>
                    <?php } ?>
                </select>
                <span class="help-block">Matière</span>
                <select name="matiere">
                    <?php
                    $resultat2 = $bdd->query('SELECT Matiere FROM bouteille GROUP BY Matiere');
                    while ($donnees2 = $resultat2->fetch()) {
                        ?>
                        <option value="<?php echo $donnees2['Matiere']; ?>"><?php echo $donnees2['Matiere']; ?></option>
                    <?php } ?>
                </select>
                <span class="help-block">Volume</span>
                <select name="volume">
                    <?php
                    $resultat3 = $bdd->query('SELECT Volume FROM bouteille GROUP BY Volume');
                    while ($donnees3 = $resultat3->fetch()) {
                        ?>
                        <option value="<?php echo $donnees3['Volume']; ?>"><?php echo $donnees3['Volume']; ?></option>
                    <?php } ?>
                </select>
                <span class="help-block">Pression d'épreuve</span>
                <select name="pressionepreuve">
                    <?php
                    $resultat4 = $bdd->query('SELECT PressionEpreuve FROM bouteille GROUP BY PressionEpreuve');
                    while ($donnees4 = $resultat4->fetch()) {
                        ?>
                        <option
                            value="<?php echo $donnees4['PressionEpreuve']; ?>"><?php echo $donnees4['PressionEpreuve']; ?></option>
                    <?php } ?>
                </select>
                <span class="help-block">Filetage</span>
                <select name="filetage">
                    <?php
                    $resultat5 = $bdd->query('SELECT Filetage FROM bouteille GROUP BY Filetage');
                    while ($donnees5 = $resultat5->fetch()) {
                        ?>
                        <option
                            value="<?php echo $donnees5['Filetage']; ?>"><?php echo $donnees5['Filetage']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" class="btn pull-right btn-success">
        </form>
    </div>
</div>
<a class="btn pull-right btn-primary" data-toggle="modal" href="#codebouteille">Rechercher Code Bouteille</a>
<br>

<form action="modification_formulaire_impression_CO2.php" method="post">
<div class="well">
<input type="text" class="input-medium" name="nomsign" value="<?php echo $donneesnomsigna['NomSign']; ?>"
       placeholder="Nom">
<span class="help-inline">Nom du signataire</span>
<br>
<input type="date" class="input-medium" name="dateenr" value="<?php echo $donneesdateenra['DateEnr']; ?>"
       placeholder="jj/mm/aaaa">
<span class="help-inline">Date Enregistrement</span>
<br>
<input type="date" class="input-medium" name="dateepr" value="<?php echo $donneesdateepra['DateEpr']; ?>"
       placeholder="jj/mm/aaaa">
<span class="help-inline">Date Epreuve</span>
<br>
<span class="help-inline">Client&nbsp;</span>
<select name="client">
    <?php
    $clientco2 = $bdd->query('SELECT NomClient FROM clientco2');
    while ($donneesclientco2 = $clientco2->fetch()) {
        ?>
        <option
            value="<?php echo $donneesclientco2['NomClient']; ?>"><?php echo $donneesclientco2['NomClient']; ?></option>
    <?php } ?>
    <option value="<?php echo $donneesclienta['NomClientCO2']; ?>"
            selected="selected"><?php echo $donneesclienta['NomClientCO2']; ?></option>
</select>
<span class="help-inline">Code Bouteille&nbsp;</span>
<select name="codebouteille">
    <?php
    $codebouteille = $bdd->query('SELECT CodeBouteille FROM bouteille');
    while ($donneescodebouteille = $codebouteille->fetch()) {
        ?>
        <option
            value="<?php echo $donneescodebouteille['CodeBouteille']; ?>"><?php echo $donneescodebouteille['CodeBouteille']; ?></option>
    <?php } ?>
    <option value="<?php echo $donneescodebouteillea['CodeBouteille']; ?>"
            selected="selected"><?php echo $donneescodebouteillea['CodeBouteille']; ?></option>
</select>
<span class="help-inline">Numéro  de Certification&nbsp;</span>
<select name="certification">
    <?php
    $certification = $bdd->query('SELECT marqueCommerciale, numeroCertification FROM certifications');
    while ($donneescertification = $certification->fetch()) {
        ?>
        <option
            value="<?php echo $donneescertification['numeroCertification']; ?>"><?php echo $donneescertification['marqueCommerciale'], "&nbsp;", $donneescertification['numeroCertification']; ?></option>
    <?php } ?>
    <option value="<?php echo $donneescertificationa['Certification']; ?>"
            selected="selected"><?php echo $donneescertificationa['Certification']; ?></option>
</select>
<br>
<span class="help-inline">Pression de Service</span>
<input type="text" class="input-medium" name="pressionservice"
       value="<?php echo $donneespressionServicea['pressionService']; ?>" placeholder="Pression de service">
<table name="tableau" class="table table-condensed table-striped table-bordered">
<thead>
<tr>
    <th>#</th>
    <th>N°enceinte</th>
    <th>Année 1° épreuve</th>
    <th>Date dernière épreuve</th>
    <th>Observation</th>
</tr>
</thead>
<tbody>
<tr>
    <td>1</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte1"
               value="<?php echo $donneesnumenceinte1a['numEnceinte1']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr1"
               value="<?php echo $donneesdatepremepr1a['anneePremEpr1']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr1"
               value="<?php echo $donneesdatedernepr1a['dateDernEpr1']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs1" value="<?php echo $donneesobs1a['obs1']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>2</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte2"
               value="<?php echo $donneesnumenceinte2a['numEnceinte2']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr2"
               value="<?php echo $donneesdatepremepr2a['anneePremEpr2']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr2"
               value="<?php echo $donneesdatedernepr2a['dateDernEpr2']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs2" value="<?php echo $donneesobs2a['obs2']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>3</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte3"
               value="<?php echo $donneesnumenceinte3a['numEnceinte3']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr3"
               value="<?php echo $donneesdatepremepr3a['anneePremEpr3']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr3"
               value="<?php echo $donneesdatedernepr3a['dateDernEpr3']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs3" value="<?php echo $donneesobs3a['obs3']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>4</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte4"
               value="<?php echo $donneesnumenceinte4a['numEnceinte4']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr4"
               value="<?php echo $donneesdatepremepr4a['anneePremEpr4']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr4"
               value="<?php echo $donneesdatedernepr4a['dateDernEpr4']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs4" value="<?php echo $donneesobs4a['obs4']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>5</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte5"
               value="<?php echo $donneesnumenceinte5a['numEnceinte5']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr5"
               value="<?php echo $donneesdatepremepr5a['anneePremEpr5']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr5"
               value="<?php echo $donneesdatedernepr5a['dateDernEpr5']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs5" value="<?php echo $donneesobs5a['obs5']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>6</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte6"
               value="<?php echo $donneesnumenceinte6a['numEnceinte6']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr6"
               value="<?php echo $donneesdatepremepr6a['anneePremEpr6']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr6"
               value="<?php echo $donneesdatedernepr6a['dateDernEpr6']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs6" value="<?php echo $donneesobs6a['obs6']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>7</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte7"
               value="<?php echo $donneesnumenceinte7a['numEnceinte7']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr7"
               value="<?php echo $donneesdatepremepr7a['anneePremEpr7']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr7"
               value="<?php echo $donneesdatedernepr7a['dateDernEpr7']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs7" value="<?php echo $donneesobs7a['obs7']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>8</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte8"
               value="<?php echo $donneesnumenceinte8a['numEnceinte8']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr8"
               value="<?php echo $donneesdatepremepr8a['anneePremEpr8']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr8"
               value="<?php echo $donneesdatedernepr8a['dateDernEpr8']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs8" value="<?php echo $donneesobs8a['obs8']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>9</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte9"
               value="<?php echo $donneesnumenceinte9a['numEnceinte9']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr9"
               value="<?php echo $donneesdatepremepr9a['anneePremEpr9']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr9"
               value="<?php echo $donneesdatedernepr9a['dateDernEpr9']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs9" value="<?php echo $donneesobs9a['obs9']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>10</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte10"
               value="<?php echo $donneesnumenceinte10a['numEnceinte10']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr10"
               value="<?php echo $donneesdatepremepr10a['anneePremEpr10']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr10"
               value="<?php echo $donneesdatedernepr10a['dateDernEpr10']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs10" value="<?php echo $donneesobs10a['obs10']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>11</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte11"
               value="<?php echo $donneesnumenceinte11a['numEnceinte11']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr11"
               value="<?php echo $donneesdatepremepr11a['anneePremEpr11']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr11"
               value="<?php echo $donneesdatedernepr11a['dateDernEpr11']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs11" value="<?php echo $donneesobs11a['obs11']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>12</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte12"
               value="<?php echo $donneesnumenceinte12a['numEnceinte12']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr12"
               value="<?php echo $donneesdatepremepr12a['anneePremEpr12']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr12"
               value="<?php echo $donneesdatedernepr12a['dateDernEpr12']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs12" value="<?php echo $donneesobs12a['obs12']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>13</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte13"
               value="<?php echo $donneesnumenceinte13a['numEnceinte13']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr13"
               value="<?php echo $donneesdatepremepr13a['anneePremEpr13']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr13"
               value="<?php echo $donneesdatedernepr13a['dateDernEpr13']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs13" value="<?php echo $donneesobs13a['obs13']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>14</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte14"
               value="<?php echo $donneesnumenceinte14a['numEnceinte14']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr14"
               value="<?php echo $donneesdatepremepr14a['anneePremEpr14']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr14"
               value="<?php echo $donneesdatedernepr14a['dateDernEpr14']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs14" value="<?php echo $donneesobs14a['obs14']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>15</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte15"
               value="<?php echo $donneesnumenceinte15a['numEnceinte15']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr15"
               value="<?php echo $donneesdatepremepr15a['anneePremEpr15']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr15"
               value="<?php echo $donneesdatedernepr15a['dateDernEpr15']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs15" value="<?php echo $donneesobs15a['obs15']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>16</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte16"
               value="<?php echo $donneesnumenceinte16a['numEnceinte16']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr16"
               value="<?php echo $donneesdatepremepr16a['anneePremEpr16']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr16"
               value="<?php echo $donneesdatedernepr16a['dateDernEpr16']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs16" value="<?php echo $donneesobs16a['obs16']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>17</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte17"
               value="<?php echo $donneesnumenceinte17a['numEnceinte17']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr17"
               value="<?php echo $donneesdatepremepr17a['anneePremEpr17']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr17"
               value="<?php echo $donneesdatedernepr17a['dateDernEpr17']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs17" value="<?php echo $donneesobs17a['obs17']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>18</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte18"
               value="<?php echo $donneesnumenceinte18a['numEnceinte18']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr18"
               value="<?php echo $donneesdatepremepr18a['anneePremEpr18']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr18"
               value="<?php echo $donneesdatedernepr18a['dateDernEpr18']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs18" value="<?php echo $donneesobs18a['obs18']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>19</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte19"
               value="<?php echo $donneesnumenceinte19a['numEnceinte19']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr19"
               value="<?php echo $donneesdatepremepr19a['anneePremEpr19']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr19"
               value="<?php echo $donneesdatedernepr19a['dateDernEpr19']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs19" value="<?php echo $donneesobs19a['obs19']; ?>"
               placeholder="observation">
    </td>
</tr>
<tr>
    <td>20</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte20"
               value="<?php echo $donneesnumenceinte20a['numEnceinte20']; ?>" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr20"
               value="<?php echo $donneesdatepremepr20a['anneePremEpr20']; ?>" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr20"
               value="<?php echo $donneesdatedernepr20a['dateDernEpr20']; ?>" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs20" value="<?php echo $donneesobs20a['obs20']; ?>"
               placeholder="observation">
    </td>
</tr>
</tbody>
</table>
<span class="help-inline">Numéro de certificat :<br></span>
<input type="text" name="numcertif" class="input-medium" value="<?php echo $numcertifm; ?>">

<p><strong>Dernier numero de certificat :
        <?php $dernnumcertif = $bdd->query("SELECT MAX(CONVERT((NumCertificat),UNSIGNED)) AS numcertifmax FROM certificat");
        while ($donneesdernnumcertif = $dernnumcertif->fetch()) {
            ?>
            &nbsp;<?php echo $donneesdernnumcertif['numcertifmax'];
        }
        ?>
    </strong></p>
</div>
<input type="submit" class="btn pull-right btn-success" value="Modifier">
</form>
</div>
</body>
</html>