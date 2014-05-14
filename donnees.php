ALTER TABLE  `certificat` 
ADD  `numEnceinte11` VARCHAR( 255 ) NULL ,
ADD  `anneePremEpr11` VARCHAR ( 4 ) NULL ,
ADD  `dateDernEpr11` VARCHAR( 7 ) NULL ,
ADD  `obs11` VARCHAR( 255 ) NULL ,
ADD  `numEnceinte12` VARCHAR( 255 ) NULL ,
ADD  `anneePremEpr12` VARCHAR ( 4 ) NULL ,
ADD  `dateDernEpr12` VARCHAR( 7 ) NULL ,
ADD  `obs12` VARCHAR( 255 ) NULL ,
ADD  `numEnceinte13` VARCHAR( 255 ) NULL ,
ADD  `anneePremEpr13` VARCHAR ( 4 ) NULL ,
ADD  `dateDernEpr13` VARCHAR( 7 ) NULL ,
ADD  `obs13` VARCHAR( 255 ) NULL ,
ADD  `numEnceinte14` VARCHAR( 255 ) NULL ,
ADD  `anneePremEpr14` VARCHAR ( 4 ) NULL ,
ADD  `dateDernEpr14` VARCHAR( 7 ) NULL ,
ADD  `obs14` VARCHAR( 255 ) NULL ,
ADD  `numEnceinte15` VARCHAR( 255 ) NULL ,
ADD  `anneePremEpr15` VARCHAR ( 4 ) NULL ,
ADD  `dateDernEpr15` VARCHAR( 7 ) NULL ,
ADD  `obs15` VARCHAR( 255 ) NULL ,
ADD  `numEnceinte16` VARCHAR( 255 ) NULL ,
ADD  `anneePremEpr16` VARCHAR ( 4 ) NULL ,
ADD  `dateDernEpr16` VARCHAR( 7 ) NULL ,
ADD  `obs16` VARCHAR( 255 ) NULL ,
ADD  `numEnceinte17` VARCHAR( 255 ) NULL ,
ADD  `anneePremEpr17` VARCHAR ( 4 ) NULL ,
ADD  `dateDernEpr17` VARCHAR( 7 ) NULL ,
ADD  `obs17` VARCHAR( 255 ) NULL ,
ADD  `numEnceinte18` VARCHAR( 255 ) NULL ,
ADD  `anneePremEpr18` VARCHAR ( 4 ) NULL ,
ADD  `dateDernEpr18` VARCHAR( 7 ) NULL ,
ADD  `obs18` VARCHAR( 255 ) NULL ,
ADD  `numEnceinte19` VARCHAR( 255 ) NULL ,
ADD  `anneePremEpr19` VARCHAR ( 4 ) NULL ,
ADD  `dateDernEpr19` VARCHAR( 7 ) NULL ,
ADD  `obs19` VARCHAR( 255 ) NULL ,
ADD  `numEnceinte20` VARCHAR( 255 ) NULL ,
ADD  `anneePremEpr20` VARCHAR ( 4 ) NULL ,
ADD  `dateDernEpr20` VARCHAR( 7 ) NULL ,
ADD  `obs20` VARCHAR( 255 ) NULL

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
										('$numenceinte11',
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
									WHERE Numcertificat = '$numcertif'));
									
									
$numcertif = $_POST['numcertif'];
	$nomsign= $_POST['nomsign'];
	$dateenr = $_POST['dateenr'];
	$dateepr = $_POST['dateepr'];
	$client = $_POST['client'];
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