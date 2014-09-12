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
<div class="navbar">
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
    <a class="btn btn-danger btn-large" href="Epreuve_Extincteur_CO2.php">Extincteur CO2 <a/>
        <a class="btn btn-large" href="Epreuve_Bouteille_Enceinte.php">Bouteille ou Enceinte</a>
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

<form action="formulaire_impression_CO2plus.php" method="post">
<div class="well">
<input type="text" class="input-medium" name="nomsign" required="required" placeholder="Nom">
<span class="help-inline">Nom du signataire</span>
<br>
<input type="date" class="input-medium" name="dateenr" required="required" placeholder="jj/mm/aaaa">
<span class="help-inline">Date Enregistrement</span>
<br>
<input type="date" class="input-medium" name="dateepr" required="required" placeholder="jj/mm/aaaa">
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
</select>
<span class="help-inline">Code Bouteille&nbsp;</span>
<select name="codebouteille" required="required">
    <?php
    $codebouteille = $bdd->query('SELECT CodeBouteille FROM bouteille');
    while ($donneescodebouteille = $codebouteille->fetch()) {
        ?>
        <option
            value="<?php echo $donneescodebouteille['CodeBouteille']; ?>"><?php echo $donneescodebouteille['CodeBouteille']; ?></option>
    <?php } ?>
</select>
<span class="help-inline">Numéro  de Certification&nbsp;</span>
<select name="certification" required="required">
    <?php
    $certification = $bdd->query('SELECT marqueCommerciale, numeroCertification FROM certifications');
    while ($donneescertification = $certification->fetch()) {
        ?>
        <option
            value="<?php echo $donneescertification['numeroCertification']; ?>"><?php echo $donneescertification['marqueCommerciale'], "&nbsp;", $donneescertification['numeroCertification']; ?></option>
    <?php } ?>
</select>
<br>
<span class="help-inline">Pression de Service</span>
<input type="text" class="input-medium" name="pressionservice" required="required" placeholder="Pression de service">
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
        <input type="text" class="input-medium" name="numenceinte1" required="required" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr1" required="required"
               placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr1" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs1" placeholder="observation">
    </td>
</tr>
<tr>
    <td>2</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte2" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr2" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr2" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs2" placeholder="observation">
    </td>
</tr>
<tr>
    <td>3</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte3" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr3" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr3" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs3" placeholder="observation">
    </td>
</tr>
<tr>
    <td>4</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte4" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr4" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr4" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs4" placeholder="observation">
    </td>
</tr>
<tr>
    <td>5</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte5" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr5" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr5" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs5" placeholder="observation">
    </td>
</tr>
<tr>
    <td>6</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte6" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr6" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr6" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs6" placeholder="observation">
    </td>
</tr>
<tr>
    <td>7</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte7" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr7" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr7" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs7" placeholder="observation">
    </td>
</tr>
<tr>
    <td>8</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte8" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr8" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr8" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs8" placeholder="observation">
    </td>
</tr>
<tr>
    <td>9</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte9" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr9" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr9" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs9" placeholder="observation">
    </td>
</tr>
<tr>
    <td>10</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte10" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr10" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr10" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs10" placeholder="observation">
    </td>
</tr>
<tr>
    <td>11</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte11" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr11" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr11" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs11" placeholder="observation">
    </td>
</tr>
<tr>
    <td>12</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte12" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr12" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr12" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs12" placeholder="observation">
    </td>
</tr>
<tr>
    <td>13</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte13" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr13" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr13" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs13" placeholder="observation">
    </td>
</tr>
<tr>
    <td>14</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte14" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr14" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr14" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs14" placeholder="observation">
    </td>
</tr>
<tr>
    <td>15</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte15" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr15" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr15" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs15" placeholder="observation">
    </td>
</tr>
<tr>
    <td>16</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte16" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr16" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr16" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs16" placeholder="observation">
    </td>
</tr>
<tr>
    <td>17</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte17" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr17" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr17" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs17" placeholder="observation">
    </td>
</tr>
<tr>
    <td>18</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte18" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr18" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr18" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs18" placeholder="observation">
    </td>
</tr>
<tr>
    <td>19</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte19" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr19" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr19" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs19" placeholder="observation">
    </td>
</tr>
<tr>
    <td>20</td>
    <td>
        <input type="text" class="input-medium" name="numenceinte20" placeholder="n°enceinte">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="4" name="datepremepr20" placeholder="aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" maxlength="7" name="datedernepr20" placeholder="mm/aaaa">
    </td>
    <td>
        <input type="text" class="input-medium" name="obs20" placeholder="observation">
    </td>
</tr>
</tbody>
</table>
<span class="help-inline">Numéro de certificat :<br></span>
<input type="text" name="numcertif" class="input-medium" required="required">

<p><strong>Dernier numero de certificat : E
        <?php $dernnumcertif = $bdd->query("SELECT MAX(CONVERT((NumCertificat),UNSIGNED)) AS numcertifmax FROM certificat");
        while ($donneesdernnumcertif = $dernnumcertif->fetch()) {
            ?>
            &nbsp;<?php echo $donneesdernnumcertif['numcertifmax'];
        }
        ?>
    </strong></p>
</div>
<input type="submit" class="btn pull-right btn-success">
</form>
</div>
</body>
</html>