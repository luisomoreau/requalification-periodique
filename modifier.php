<!doctype html>
<html>

<head>
    <title>Modifier Certificat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
    <h1>Modifier un certificat</h1>

    <form action="modification_epreuve_extincteur_co2.php" method="post">
        <div class="well">
            <span class="help-block">Extincteur CO2</span>
            <input type="text" class="input-medium" name="numcertifm" placeholder="Numéro de certificat">
        </div>
        <input type="submit" class="btn btn-success">
    </form>
    <form action="modification_epreuve_bouteille_enceinte.php" method="post">
        <div class="well">
            <span class="help-block">Bouteille ou enceinte de Gaz</span>
            <input type="text" class="input-medium" name="numcertifm" placeholder="Numéro de certificat">
        </div>
        <input type="submit" class="btn btn-success">
    </form>
</div>
</body>

</html>