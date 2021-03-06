<!doctype html>
<html>

<head>
    <title>Modification Epreuve Transportable</title>
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
    $codebouteillea = $bdd->query("SELECT CodeBouteille FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneescodebouteillea = $codebouteillea->fetch();

    $nomsigna = $bdd->query("SELECT NomSign FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesnomsigna = $nomsigna->fetch();

    $dateenra = $bdd->query("SELECT DateEnr FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdateenra = $dateenra->fetch();

    $dateepra = $bdd->query("SELECT DateEpr FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdateepra = $dateepra->fetch();

    $clienta = $bdd->query("SELECT NomClientTransportable FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesclienta = $clienta->fetch();

    $pressionServicea = $bdd->query("SELECT pressionService FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneespressionServicea = $pressionServicea->fetch();

    $numenceinte1a = $bdd->query("SELECT numEnceinte1 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesnumenceinte1a = $numenceinte1a->fetch();
    $datepremepr1a = $bdd->query("SELECT anneePremEpr1 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatepremepr1a = $datepremepr1a->fetch();
    $datedernepr1a = $bdd->query("SELECT dateDernEpr1 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatedernepr1a = $datedernepr1a->fetch();
    $obs1a = $bdd->query("SELECT obs1 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesobs1a = $obs1a->fetch();

    $numenceinte2a = $bdd->query("SELECT numEnceinte2 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesnumenceinte2a = $numenceinte2a->fetch();
    $datepremepr2a = $bdd->query("SELECT anneePremEpr2 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatepremepr2a = $datepremepr2a->fetch();
    $datedernepr2a = $bdd->query("SELECT dateDernEpr2 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatedernepr2a = $datedernepr2a->fetch();
    $obs2a = $bdd->query("SELECT obs2 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesobs2a = $obs2a->fetch();

    $numenceinte3a = $bdd->query("SELECT numEnceinte3 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesnumenceinte3a = $numenceinte3a->fetch();
    $datepremepr3a = $bdd->query("SELECT anneePremEpr3 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatepremepr3a = $datepremepr3a->fetch();
    $datedernepr3a = $bdd->query("SELECT dateDernEpr3 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatedernepr3a = $datedernepr3a->fetch();
    $obs3a = $bdd->query("SELECT obs3 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesobs3a = $obs3a->fetch();

    $numenceinte4a = $bdd->query("SELECT numEnceinte4 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesnumenceinte4a = $numenceinte4a->fetch();
    $datepremepr4a = $bdd->query("SELECT anneePremEpr4 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatepremepr4a = $datepremepr4a->fetch();
    $datedernepr4a = $bdd->query("SELECT dateDernEpr4 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatedernepr4a = $datedernepr4a->fetch();
    $obs4a = $bdd->query("SELECT obs4 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesobs4a = $obs4a->fetch();

    $numenceinte5a = $bdd->query("SELECT numEnceinte5 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesnumenceinte5a = $numenceinte5a->fetch();
    $datepremepr5a = $bdd->query("SELECT anneePremEpr5 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatepremepr5a = $datepremepr5a->fetch();
    $datedernepr5a = $bdd->query("SELECT dateDernEpr5 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatedernepr5a = $datedernepr5a->fetch();
    $obs5a = $bdd->query("SELECT obs5 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesobs5a = $obs5a->fetch();

    $numenceinte6a = $bdd->query("SELECT numEnceinte6 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesnumenceinte6a = $numenceinte6a->fetch();
    $datepremepr6a = $bdd->query("SELECT anneePremEpr6 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatepremepr6a = $datepremepr6a->fetch();
    $datedernepr6a = $bdd->query("SELECT dateDernEpr6 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatedernepr6a = $datedernepr6a->fetch();
    $obs6a = $bdd->query("SELECT obs6 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesobs6a = $obs6a->fetch();

    $numenceinte7a = $bdd->query("SELECT numEnceinte7 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesnumenceinte7a = $numenceinte7a->fetch();
    $datepremepr7a = $bdd->query("SELECT anneePremEpr7 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatepremepr7a = $datepremepr7a->fetch();
    $datedernepr7a = $bdd->query("SELECT dateDernEpr7 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatedernepr7a = $datedernepr7a->fetch();
    $obs7a = $bdd->query("SELECT obs7 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesobs7a = $obs7a->fetch();

    $numenceinte8a = $bdd->query("SELECT numEnceinte8 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesnumenceinte8a = $numenceinte8a->fetch();
    $datepremepr8a = $bdd->query("SELECT anneePremEpr8 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatepremepr8a = $datepremepr8a->fetch();
    $datedernepr8a = $bdd->query("SELECT dateDernEpr8 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatedernepr8a = $datedernepr8a->fetch();
    $obs8a = $bdd->query("SELECT obs8 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesobs8a = $obs8a->fetch();

    $numenceinte9a = $bdd->query("SELECT numEnceinte9 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesnumenceinte9a = $numenceinte9a->fetch();
    $datepremepr9a = $bdd->query("SELECT anneePremEpr9 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatepremepr9a = $datepremepr9a->fetch();
    $datedernepr9a = $bdd->query("SELECT dateDernEpr9 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatedernepr9a = $datedernepr9a->fetch();
    $obs9a = $bdd->query("SELECT obs9 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesobs9a = $obs9a->fetch();

    $numenceinte10a = $bdd->query("SELECT numEnceinte10 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesnumenceinte10a = $numenceinte10a->fetch();
    $datepremepr10a = $bdd->query("SELECT anneePremEpr10 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatepremepr10a = $datepremepr10a->fetch();
    $datedernepr10a = $bdd->query("SELECT dateDernEpr10 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesdatedernepr10a = $datedernepr10a->fetch();
    $obs10a = $bdd->query("SELECT obs10 FROM certificattransportable WHERE NumCertificat ='$numcertifm'");
    $donneesobs10a = $obs10a->fetch();

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
<div class="modal hide" id="codebouteille" aria-hidden="true" style="display: none;">
    <div class="modal-header"><a class="close" data-dismiss="modal">×</a>

        <h3>Rechercher Code Bouteille</h3>
    </div>
    <div class="modal-body">
        <form action="recherchecodebouteillegaz.php" method="post">
            <div class="well">
                <span class="help-block">Fabricant</span>
                <select name="fournisseur">
                    <?php
                    $resultat1 = $bdd->query('SELECT Fournisseur FROM enceintegaz GROUP BY Fournisseur');
                    while ($donnees1 = $resultat1->fetch()) {
                        ?>
                        <option
                            value="<?php echo $donnees1['Fournisseur']; ?>"><?php echo $donnees1['Fournisseur']; ?></option>
                    <?php } ?>
                </select>
                <span class="help-block">Matière</span>
                <select name="matiere">
                    <?php
                    $resultat2 = $bdd->query('SELECT Matiere FROM enceintegaz GROUP BY Matiere');
                    while ($donnees2 = $resultat2->fetch()) {
                        ?>
                        <option value="<?php echo $donnees2['Matiere']; ?>"><?php echo $donnees2['Matiere']; ?></option>
                    <?php } ?>
                </select>
                <span class="help-block">Volume</span>
                <select name="volume">
                    <?php
                    $resultat3 = $bdd->query('SELECT Volume FROM enceintegaz GROUP BY Volume ORDER BY Volume ASC');
                    while ($donnees3 = $resultat3->fetch()) {
                        ?>
                        <option value="<?php echo $donnees3['Volume']; ?>"><?php echo $donnees3['Volume']; ?></option>
                    <?php } ?>
                </select>
                <span class="help-block">Pression d'épreuve</span>
                <select name="pressionepreuve">
                    <?php
                    $resultat4 = $bdd->query('SELECT PressionEpreuve FROM enceintegaz GROUP BY PressionEpreuve');
                    while ($donnees4 = $resultat4->fetch()) {
                        ?>
                        <option
                            value="<?php echo $donnees4['PressionEpreuve']; ?>"><?php echo $donnees4['PressionEpreuve']; ?></option>
                    <?php } ?>
                </select>
                <span class="help-block">Type Gaz</span>
                <select name="gaz">
                    <?php
                    $resultat5 = $bdd->query('SELECT Gaz FROM enceintegaz GROUP BY Gaz');
                    while ($donnees5 = $resultat5->fetch()) {
                        ?>
                        <option value="<?php echo $donnees5['Gaz']; ?>"><?php echo $donnees5['Gaz']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" class="btn pull-right btn-success">
        </form>
    </div>
</div>
<a class="btn pull-right btn-primary" data-toggle="modal" href="#codebouteille">Rechercher Code Bouteille</a>
<br>

<form action="modification_formulaire_impression_bouteille_transportable.php" method="post">
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
    $client = $bdd->query('SELECT nomclient FROM client');
    while ($donneesclient = $client->fetch()) {
        ?>
        <option value="<?php echo $donneesclient['nomclient']; ?>"><?php echo $donneesclient['nomclient']; ?></option>
    <?php } ?>
    <option value="<?php echo $donneesclienta['NomClientTransportable']; ?>"
            selected="selected"><?php echo $donneesclienta['NomClientTransportable']; ?></option>
</select>
<span class="help-inline">Code Bouteille&nbsp;</span>
<select name="codebouteille">
    <?php
    $codebouteille = $bdd->query('SELECT idEnceinte FROM enceintegaz');
    while ($donneescodebouteille = $codebouteille->fetch()) {
        ?>
        <option
            value="<?php echo $donneescodebouteille['idEnceinte']; ?>"><?php echo $donneescodebouteille['idEnceinte']; ?></option>
    <?php } ?>
    <option value="<?php echo $donneescodebouteillea['CodeBouteille']; ?>"
            selected="selected"><?php echo $donneescodebouteillea['CodeBouteille']; ?></option>
</select>
<br>
<span class="help-inline">Pression de Service</span>
<input type="text" class="input-medium" name="pressionService"
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
    </tbody>
</table>
<span class="help-inline">Numéro de certificat : BT<br></span>
<input type="text" name="numcertif" class="input-medium" value="<?php echo $numcertifm; ?>">

<p><strong>Dernier numero de certificat : BT
        <?php $dernnumcertif = $bdd->query("SELECT MAX(CONVERT((NumCertificat),UNSIGNED)) AS numcertifmax FROM certificattransportable");
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