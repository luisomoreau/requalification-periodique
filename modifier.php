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
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="brand" href="#">LSI</a>

                <div class="navbar-content">
                    <ul class="nav">
                        <li>
                            <a href="accueil.php">Accueil</a>
                        </li>
                        <li>
                            <a href="nouvelle_epreuve.php">Nouvelle Epreuve</a>
                        </li>
                        <li class="active">
                            <a href="modifier.php">Modifier Certificat</a>
                        </li>
                        <li>
                            <a href="rechercher.php">Rechercher</a>
                        </li>
                        <li>
                            <a href="back_office.php">Back Office</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h2>Modifier un certificat</h2>
    <div class="row">
    <div class="span4">
        <form action="modification_epreuve_extincteur_co2.php" method="post">
            <div class="well">
                <span class="help-block">Extincteur CO2</span>
                <p>E
                <input type="text" class="input-medium" name="numcertifm" placeholder="Numéro de certificat"></p>
                <br>
                <input type="submit" class="btn btn-success">
            </div>
        </form>
    </div>
    <div class="span4">
        <form action="modification_epreuve_bouteille_enceinte.php" method="post">
            <div class="well">
                <span class="help-block">Bouteille ou enceinte de Gaz</span>
                <p>B
                <input type="text" class="input-medium" name="numcertifm" placeholder="Numéro de certificat"></p>
                <br>
                <input type="submit" class="btn btn-success">
            </div>
        </form>
    </div>
    <div class="span4">
        <form action="modification_epreuve_bouteille_transportable.php" method="post">
            <div class="well">
                <span class="help-block">Bouteille Transportable</span>
                <p>BT
                <input type="text" class="input-medium" name="numcertifm" placeholder="Numéro de certificat"></p>
                <br>
                <input type="submit" class="btn btn-success">
            </div>
        </form>
    </div>
    </div>
</div>

</body>

</html>