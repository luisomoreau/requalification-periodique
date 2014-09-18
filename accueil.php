<!doctype html>
<html>

<head>
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="#">LSI</a>

            <div class="navbar-content">
                <ul class="nav">
                    <li class="active">
                        <a href="Accueil.php">Accueil</a>
                    </li>
                    <li>
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
    <div class="hero-unit hidden-phone">
        <img class="pull-right" src="logo.gif" width="200">

        <h1>Requalification</h1>

        <p>Impression de certificats pour la requalification d'enceintes de gaz</p>

        <p></p>
    </div>
    <div class="row main-features">
        <div class="span4">
            <div class="well">
                <h3 class="align-center">Nouvelle Epreuve</h3>
                <a class="btn btn-block btn-primary btn-large" href="Nouvelle_Epreuve.php"><span class="btn-label">Nouveau</span></a>
            </div>
        </div>
        <div class="span4">
            <div class="well">
                <h3 class="align-center">Modifier Certificat</h3>
                <a class="btn btn-block btn-info btn-large" href="Modifier.php"><span class="btn-label">Modifier</span></a>
            </div>
        </div>
        <div class="span4">
            <div class="well">
                <h3 class="align-center">Rechercher</h3>
                <a class="btn btn-block btn-success btn-large" href="Rechercher.php">Rechercher</a>
            </div>
        </div>
    </div>
</div>

<footer class="modal-footer navbar-fixed-bottom">
    La Sécurité Incendie, tous droits réservés, développé par Louis Moreau
</footer>
</body>

</html>