<!doctype html>
<html>
  
  <head>
  <?php
  include 'connect_db.php';
  ?>
	<?php
	//Enregistrement dans la base de données
	$numcertif = $_POST['numcertif'];
	$nomsign= $_POST['nomsign'];
	$dateenr = $_POST['dateenr'];
	$dateepr = $_POST['dateepr'];
	$client = $_POST['client'];
	$pressionservice = $_POST['pressionservice'];
	$codebouteille = $_POST['codebouteille'];
	$certification = $_POST['certification'];
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
	$numenceinte11 = $_POST['numenceinte11'];
	$datepremepr11 = $_POST['datepremepr11'];
	$datedernepr11 = $_POST['datedernepr11'];
	$obs11 = $_POST['obs11'];
	$numenceinte12 = $_POST['numenceinte12'];
	$datepremepr12 = $_POST['datepremepr12'];
	$datedernepr12 = $_POST['datedernepr12'];
	$obs12 = $_POST['obs12'];
	$numenceinte13 = $_POST['numenceinte13'];
	$datepremepr13 = $_POST['datepremepr13'];
	$datedernepr13 = $_POST['datedernepr13'];
	$obs13 = $_POST['obs13'];
	$numenceinte14 = $_POST['numenceinte14'];
	$datepremepr14 = $_POST['datepremepr14'];
	$datedernepr14 = $_POST['datedernepr14'];
	$obs14 = $_POST['obs14'];
	$numenceinte15 = $_POST['numenceinte15'];
	$datepremepr15 = $_POST['datepremepr15'];
	$datedernepr15 = $_POST['datedernepr15'];
	$obs15 = $_POST['obs15'];
	$numenceinte16 = $_POST['numenceinte16'];
	$datepremepr16 = $_POST['datepremepr16'];
	$datedernepr16 = $_POST['datedernepr16'];
	$obs16 = $_POST['obs16'];
	$numenceinte17 = $_POST['numenceinte17'];
	$datepremepr17 = $_POST['datepremepr17'];
	$datedernepr17 = $_POST['datedernepr17'];
	$obs17 = $_POST['obs17'];
	$numenceinte18 = $_POST['numenceinte18'];
	$datepremepr18 = $_POST['datepremepr18'];
	$datedernepr18 = $_POST['datedernepr18'];
	$obs18 = $_POST['obs18'];
	$numenceinte19 = $_POST['numenceinte19'];
	$datepremepr19 = $_POST['datepremepr19'];
	$datedernepr19 = $_POST['datedernepr19'];
	$obs19 = $_POST['obs19'];
	$numenceinte20 = $_POST['numenceinte20'];
	$datepremepr20 = $_POST['datepremepr20'];
	$datedernepr20 = $_POST['datedernepr20'];
	$obs20 = $_POST['obs20'];
	$enregistrement = $bdd-> query("INSERT INTO certificat 
										(NumCertificat, 
										NomSign, 
										DateEnr, 
										DateEpr, 
										NomClientCO2,
										pressionService,
										CodeBouteille, 
										Certification, 
										numEnceinte1, 
										anneePremEpr1, 
										dateDernEpr1, 
										obs1,
										numEnceinte2, 
										anneePremEpr2, 
										dateDernEpr2, 
										obs2,
										numEnceinte3, 
										anneePremEpr3, 
										dateDernEpr3, 
										obs3,
										numEnceinte4, 
										anneePremEpr4, 
										dateDernEpr4, 
										obs4,
										numEnceinte5, 
										anneePremEpr5, 
										dateDernEpr5, 
										obs5,
										numEnceinte6, 
										anneePremEpr6, 
										dateDernEpr6, 
										obs6,
										numEnceinte7, 
										anneePremEpr7, 
										dateDernEpr7, 
										obs7,
										numEnceinte8, 
										anneePremEpr8, 
										dateDernEpr8, 
										obs8,
										numEnceinte9, 
										anneePremEpr9, 
										dateDernEpr9, 
										obs9,
										numEnceinte10, 
										anneePremEpr10, 
										dateDernEpr10, 
										obs10,
										numEnceinte11, 
										anneePremEpr11, 
										dateDernEpr11, 
										obs11,
										numEnceinte12, 
										anneePremEpr12, 
										dateDernEpr12, 
										obs12,
										numEnceinte13, 
										anneePremEpr13, 
										dateDernEpr13, 
										obs13,
										numEnceinte14, 
										anneePremEpr14, 
										dateDernEpr14, 
										obs14,
										numEnceinte15, 
										anneePremEpr15, 
										dateDernEpr15, 
										obs15,
										numEnceinte16, 
										anneePremEpr16, 
										dateDernEpr16, 
										obs16,
										numEnceinte17, 
										anneePremEpr17, 
										dateDernEpr17, 
										obs17,
										numEnceinte18, 
										anneePremEpr18, 
										dateDernEpr18, 
										obs18,
										numEnceinte19, 
										anneePremEpr19, 
										dateDernEpr19, 
										obs19,
										numEnceinte20, 
										anneePremEpr20, 
										dateDernEpr20, 
										obs20
										)
										VALUES 
										('$numcertif',
										'$nomsign',
										'$dateenr',
										'$dateepr',
										'$client',
										'$pressionservice',
										'$codebouteille',
										'$certification',
										'$numenceinte1',
										'$datepremepr1',
										'$datedernepr1',
										'$obs1',
										'$numenceinte2',
										'$datepremepr2',
										'$datedernepr2',
										'$obs2',
										'$numenceinte3',
										'$datepremepr3',
										'$datedernepr3',
										'$obs3',
										'$numenceinte4',
										'$datepremepr4',
										'$datedernepr4',
										'$obs4',
										'$numenceinte5',
										'$datepremepr5',
										'$datedernepr5',
										'$obs5',
										'$numenceinte6',
										'$datepremepr6',
										'$datedernepr6',
										'$obs6',
										'$numenceinte7',
										'$datepremepr7',
										'$datedernepr7',
										'$obs7',
										'$numenceinte8',
										'$datepremepr8',
										'$datedernepr8',
										'$obs8',
										'$numenceinte9',
										'$datepremepr9',
										'$datedernepr9',
										'$obs9',
										'$numenceinte10',
										'$datepremepr10',
										'$datedernepr10',
										'$obs10',
										'$numenceinte11',
										'$datepremepr11',
										'$datedernepr11',
										'$obs11',
										'$numenceinte12',
										'$datepremepr12',
										'$datedernepr12',
										'$obs12',
										'$numenceinte13',
										'$datepremepr13',
										'$datedernepr13',
										'$obs13',
										'$numenceinte14',
										'$datepremepr14',
										'$datedernepr14',
										'$obs14',
										'$numenceinte15',
										'$datepremepr15',
										'$datedernepr15',
										'$obs15',
										'$numenceinte16',
										'$datepremepr16',
										'$datedernepr16',
										'$obs16',
										'$numenceinte17',
										'$datepremepr17',
										'$datedernepr17',
										'$obs17',
										'$numenceinte18',
										'$datepremepr18',
										'$datedernepr18',
										'$obs18',
										'$numenceinte19',
										'$datepremepr19',
										'$datedernepr19',
										'$obs19',
										'$numenceinte20',
										'$datepremepr20',
										'$datedernepr20',
										'$obs20'
										)");										
	?>
	<?php
	//Fonction pour retourner un nombre en toute lettre
function int2str($a){
	if ($a<0) return 'moins '.int2str(-$a);
	if ($a<17){
		switch ($a){
			case 0: return 'zero';
			case 1: return 'un';
			case 2: return 'deux';
			case 3: return 'trois';
			case 4: return 'quatre';
			case 5: return 'cinq';
			case 6: return 'six';
			case 7: return 'sept';
			case 8: return 'huit';
			case 9: return 'neuf';
			case 10: return 'dix';
			case 11: return 'onze';
			case 12: return 'douze';
			case 13: return 'treize';
			case 14: return 'quatorze';
			case 15: return 'quinze';
			case 16: return 'seize';
		}
	} else if ($a<20){
		return 'dix-'.int2str($a-10);
	} else if ($a<100){
		if ($a%10==0){
			switch ($a){
				case 20: return 'vingt';
				case 30: return 'trente';
				case 40: return 'quarante';
				case 50: return 'cinquante';
				case 60: return 'soixante';
				case 70: return 'soixante-dix';
				case 80: return 'quatre-vingt';
				case 90: return 'quatre-vingt-dix';
			}
		} else if ($a<70){
			return int2str($a-$a%10).' '.int2str($a%10);
		} else if ($a<80){
			return int2str(60).' '.int2str($a%20);
		} else{
			return int2str(80).' '.int2str($a%20);
		}
	} else if ($a==100){
		return 'cent';
	} else if ($a<200){
		return int2str(100).' '.int2str($a%100);
	} else if ($a<1000){
		return int2str((int)($a/100)).' '.int2str(100).' '.int2str($a%100);
	} else if ($a==1000){
		return 'mille';
	} else if ($a<2000){
		return int2str(1000).' '.int2str($a%1000).' ';
	} else if ($a<1000000){
		return int2str((int)($a/1000)).' '.int2str(1000).' '.int2str($a%1000);
	}  
	//on pourrait pousser pour aller plus loin, mais c'est sans interret pour ce projet, et pas interessant, c'est pas non plus compliqué...
	}
	?>
    <title>Formulaire Impression Epreuve CO2</title>
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
		<h5> 
		<center>
			EXTINCTEUR DIOXYDE DE CARBONE (CO2) <br>
			CERTIFICAT D'INSPECTION <br>
			POUR REQUALIFICATION PERIODIQUE ET REMISE EN ETAT
		</center>
		</h5>
			<p><center>ARRETE du 15 mars 2000</center></p>
			<p>
				&nbsp;&nbsp;&nbsp;Je sousigné M. <?php echo $_POST['nomsign']; ?>, responsable, certifie que :<br>
				- Que la société LSI est titulaire du droit d'usage de la marque NF - REMISE EN SERVICE N° 138 en cours de validité.<br>
				- Avoir inspecté intérieurement et exterieurement sur paroi non revêtue dans toutes leurs parties les équipements 
				dont les numéros figurent ci-dessous et n'avoir constaté aucun défaut.<br>
				- Qu'après la requalification périodique, ces équipements seront reconditionnés avec des accessoires 
				(robinet - tromblon) différents de ceux dont ils étaient équipés avant la requalification périodique, 
				mais d'origine, adapté et contrôlés par le constructeur, pour l'équipement du type d'extincteur avec lequel ils sont remis en conformité.<br>
				- Que les équipements constituant le lot présenté à la requalification périodique (voir table ci-après) ont été identifiés dans le repertoire
				des extincteurs portatifs au dioxyde de carbone sous les références suivantes :
			</p>
		</div>
		<div class="well">
			<?php $codebouteille = $_POST['codebouteille']; ?>
			<p>FABRICANT BOUTEILLE : <?php 
						$fournisseur = $bdd-> query("SELECT Fournisseur FROM bouteille WHERE CodeBouteille ='$codebouteille'");
						while ($donneesfournisseur =  $fournisseur->fetch()) { echo $donneesfournisseur['Fournisseur']; }
						?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				CODE REPERE : <?php echo $_POST['codebouteille']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
				NOM DU CLIENT : <?php echo $_POST['client']; ?></p>
			<p>SOUS LE NUMERO DE CERTIFICATION : <?php echo $_POST['certification']; ?></p>
			<p>PRESSION D'EPREUVE : 
			<?php 
						$pressionepreuve = $bdd-> query("SELECT PressionEpreuve FROM bouteille WHERE CodeBouteille ='$codebouteille'");
						while ($donneespressionepreuve =  $pressionepreuve->fetch()) { $pressepr = $donneespressionepreuve['PressionEpreuve']; }
						?>
			<?php echo int2str($pressepr); ?> bars &nbsp;&nbsp;
			PRESSION DE SERVICE : <?php echo $_POST['pressionservice']; ?> bars</p>
		</div>
		<div class="span11">
				<p><center>
				Volume : <?php 
						$volume = $bdd-> query("SELECT Volume FROM bouteille WHERE CodeBouteille ='$codebouteille'");
						while ($donneesvolume =  $volume->fetch()) { echo $donneesvolume['Volume']; }
						?>L | 
				Materiau : <?php 
						$matiere = $bdd-> query("SELECT Matiere FROM bouteille WHERE CodeBouteille ='$codebouteille'");
						while ($donneesmatiere =  $matiere->fetch()) { echo $donneesmatiere['Matiere']; }
						?> | 
				Pression d'épreuve : <?php 
						$pressionepreuve = $bdd-> query("SELECT PressionEpreuve FROM bouteille WHERE CodeBouteille ='$codebouteille'");
						while ($donneespressionepreuve =  $pressionepreuve->fetch()) { echo $donneespressionepreuve['PressionEpreuve']; }
						?> Bars | 
				Filetage : <?php 
						$filetage = $bdd-> query("SELECT Filetage FROM bouteille WHERE CodeBouteille ='$codebouteille'");
						while ($donneesfiletage =  $filetage->fetch()) { echo $donneesfiletage['Filetage']; }
						?></center></p>
			<table class="table table-bordered table-condensed">
				<thead>
                  <tr>
					<th>#</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n°enceinte&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th>année 1° epreuve</th>
                    <th>Date dernière epreuve</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Observation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                  </tr>
                </thead>
				<tbody>
					<?php if(isset ($_POST['numenceinte1'], $_POST['datepremepr1'],$_POST['datedernepr1'],$_POST['datepremepr1'],$_POST['obs1'])) { ?>
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
					<?php if(isset ($_POST['numenceinte2'], $_POST['datepremepr2'],$_POST['datedernepr2'],$_POST['datepremepr2'],$_POST['obs2'])) { ?>
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
					<?php if(isset ($_POST['numenceinte3'], $_POST['datepremepr3'],$_POST['datedernepr3'],$_POST['datepremepr3'],$_POST['obs3'])) { ?>
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
					<?php if(isset ($_POST['numenceinte4'], $_POST['datepremepr4'],$_POST['datedernepr4'],$_POST['datepremepr4'],$_POST['obs4'])) { ?>
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
					<?php if(isset ($_POST['numenceinte5'], $_POST['datepremepr5'],$_POST['datedernepr5'],$_POST['datepremepr5'],$_POST['obs5'])) { ?>
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
					<?php if(isset ($_POST['numenceinte6'], $_POST['datepremepr6'],$_POST['datedernepr6'],$_POST['datepremepr6'],$_POST['obs6'])) { ?>
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
					<?php if(isset ($_POST['numenceinte7'], $_POST['datepremepr7'],$_POST['datedernepr7'],$_POST['datepremepr7'],$_POST['obs7'])) { ?>
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
					<?php if(isset ($_POST['numenceinte8'], $_POST['datepremepr8'],$_POST['datedernepr8'],$_POST['datepremepr8'],$_POST['obs8'])) { ?>
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
					<?php if(isset ($_POST['numenceinte9'], $_POST['datepremepr9'],$_POST['datedernepr9'],$_POST['datepremepr9'],$_POST['obs9'])) { ?>
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
					<?php if(isset ($_POST['numenceinte10'], $_POST['datepremepr10'],$_POST['datedernepr10'],$_POST['datepremepr10'],$_POST['obs10'])) { ?>
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
					<?php if(isset ($_POST['numenceinte11'], $_POST['datepremepr11'],$_POST['datedernepr11'],$_POST['datepremepr11'],$_POST['obs11'])) { ?>
					<tr>
						<td>11</td>
						<td>
						<?php echo $_POST['numenceinte11']; ?>
						</td>
						<td>
						<?php echo $_POST['datepremepr11']; ?>
						</td>
						<td>
						<?php echo $_POST['datedernepr11']; ?>
						</td>
						<td>
						<?php echo $_POST['obs11']; ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(isset ($_POST['numenceinte12'], $_POST['datepremepr12'],$_POST['datedernepr12'],$_POST['datepremepr12'],$_POST['obs12'])) { ?>
					<tr>
						<td>12</td>
						<td>
						<?php echo $_POST['numenceinte12']; ?>
						</td>
						<td>
						<?php echo $_POST['datepremepr12']; ?>
						</td>
						<td>
						<?php echo $_POST['datedernepr12']; ?>
						</td>
						<td>
						<?php echo $_POST['obs12']; ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(isset ($_POST['numenceinte13'], $_POST['datepremepr13'],$_POST['datedernepr13'],$_POST['datepremepr13'],$_POST['obs13'])) { ?>
					<tr>
						<td>13</td>
						<td>
						<?php echo $_POST['numenceinte13']; ?>
						</td>
						<td>
						<?php echo $_POST['datepremepr13']; ?>
						</td>
						<td>
						<?php echo $_POST['datedernepr13']; ?>
						</td>
						<td>
						<?php echo $_POST['obs13']; ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(isset ($_POST['numenceinte14'], $_POST['datepremepr14'],$_POST['datedernepr14'],$_POST['datepremepr14'],$_POST['obs14'])) { ?>
					<tr>
						<td>14</td>
						<td>
						<?php echo $_POST['numenceinte14']; ?>
						</td>
						<td>
						<?php echo $_POST['datepremepr14']; ?>
						</td>
						<td>
						<?php echo $_POST['datedernepr14']; ?>
						</td>
						<td>
						<?php echo $_POST['obs14']; ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(isset ($_POST['numenceinte15'], $_POST['datepremepr15'],$_POST['datedernepr15'],$_POST['datepremepr15'],$_POST['obs15'])) { ?>
					<tr>
						<td>15</td>
						<td>
						<?php echo $_POST['numenceinte15']; ?>
						</td>
						<td>
						<?php echo $_POST['datepremepr15']; ?>
						</td>
						<td>
						<?php echo $_POST['datedernepr15']; ?>
						</td>
						<td>
						<?php echo $_POST['obs15']; ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(isset ($_POST['numenceinte16'], $_POST['datepremepr16'],$_POST['datedernepr16'],$_POST['datepremepr16'],$_POST['obs16'])) { ?>
					<tr>
						<td>16</td>
						<td>
						<?php echo $_POST['numenceinte16']; ?>
						</td>
						<td>
						<?php echo $_POST['datepremepr16']; ?>
						</td>
						<td>
						<?php echo $_POST['datedernepr16']; ?>
						</td>
						<td>
						<?php echo $_POST['obs16']; ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(isset ($_POST['numenceinte17'], $_POST['datepremepr17'],$_POST['datedernepr17'],$_POST['datepremepr17'],$_POST['obs17'])) { ?>
					<tr>
						<td>17</td>
						<td>
						<?php echo $_POST['numenceinte17']; ?>
						</td>
						<td>
						<?php echo $_POST['datepremepr17']; ?>
						</td>
						<td>
						<?php echo $_POST['datedernepr17']; ?>
						</td>
						<td>
						<?php echo $_POST['obs17']; ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(isset ($_POST['numenceinte18'], $_POST['datepremepr18'],$_POST['datedernepr18'],$_POST['datepremepr18'],$_POST['obs18'])) { ?>
					<tr>
						<td>18</td>
						<td>
						<?php echo $_POST['numenceinte18']; ?>
						</td>
						<td>
						<?php echo $_POST['datepremepr18']; ?>
						</td>
						<td>
						<?php echo $_POST['datedernepr18']; ?>
						</td>
						<td>
						<?php echo $_POST['obs18']; ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(isset ($_POST['numenceinte19'], $_POST['datepremepr19'],$_POST['datedernepr19'],$_POST['datepremepr19'],$_POST['obs19'])) { ?>
					<tr>
						<td>19</td>
						<td>
						<?php echo $_POST['numenceinte19']; ?>
						</td>
						<td>
						<?php echo $_POST['datepremepr19']; ?>
						</td>
						<td>
						<?php echo $_POST['datedernepr19']; ?>
						</td>
						<td>
						<?php echo $_POST['obs19']; ?>
						</td>
					</tr>
					<?php } ?>
					<?php if(isset ($_POST['numenceinte20'], $_POST['datepremepr20'],$_POST['datedernepr20'],$_POST['datepremepr20'],$_POST['obs20'])) { ?>
					<tr>
						<td>20</td>
						<td>
						<?php echo $_POST['numenceinte20']; ?>
						</td>
						<td>
						<?php echo $_POST['datepremepr20']; ?>
						</td>
						<td>
						<?php echo $_POST['datedernepr20']; ?>
						</td>
						<td>
						<?php echo $_POST['obs20']; ?>
						</td>
					</tr>
					<?php } ?>
				<tbody>
			</table>
		</div>
		<div class="span11">
			<div class="well">
				<p>N° de certificat : <?php echo $_POST['numcertif']; ?></p>
				<p>Fait à Saint-Léger du Bourg Denis<br>
				Le <?php echo date("d/m/y", strtotime($dateenr)); ?></p>
			</div>
		</div>
  </body>