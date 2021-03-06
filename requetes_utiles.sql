/* Type d'extincteurs les plus passés en requalification */

USE requalification;
SELECT CodeBouteille,
COUNT(NumCertificat) AS stat
FROM certificat
GROUP BY CodeBouteille
ORDER BY stat DESC;

/* Type d'enceintes de gaz les plus passé en requalification */

SELECT CodeBouteille,
  COUNT(NumCertificat) AS stat
FROM certificatgaz
GROUP BY CodeBouteille
ORDER BY stat DESC;

/* Enlever le B des certificats gaz */
UPDATE certificatgaz
   SET NumCertificat = REPLACE(Numcertificat,'B','');

/* Changer la colonne numcertif en int  */
ALTER TABLE certificatgaz CHANGE NumCertificat NumCertificat INT;

