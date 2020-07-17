<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link href="<?= $style ?>.css" rel="stylesheet" />
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="icon" href="public/images/site/favicon.jpg">

</head>

<body>
    <header>
        <div id="topbar" class="col-12 ">
            <div class="topbar-container d-none d-md-flex">

                <ul class="topbar-info">
                    <li><a href="index.php"><img id="logo" src="public/images/site/logo.jpg" alt="akiba-store logo"></a></li>
                    <li><img class="topbar-icon" src="public/icones/phone.gif" alt="phond"> 05 61 38 72 54</li>
                    <li><img class="topbar-icon" src="public/icones/mail.gif" alt="mail"> akiba.store31@gmail.com</li>
                </ul>
                <ul class="topbar-link">
                    <li><a href="">S'enregistrer <img class="topbar-icon" src="public/icones/registration.gif" alt="registration"></a></li>
                    <li><a href="">Panier <img class="topbar-icon" src="public/icones/basket.gif" alt="basket"></a></li>
                </ul>
            </div>
            <div class="topbar-container d-flex d-sm-flex d-md-none">
                <li><a href="index.php"><img id="logo" src="public/images/site/logo.jpg" alt="akiba-store logo"></a></li>
            </div>
        </div>
        <nav class="col-12">
            <div class="nav-container topbar-container d-none d-md-flex">
                <ul class="nav">
                    <li class="nav-item"><a href="">Mangas</a></li>
                    <li class="nav-item"><a href="">Figurines</a></li>
                    <li class="nav-item"><a href="">Goodies</a></li>
                    <li class="nav-item"><a href="">Cosplay/Vêtements</a></li>
                    <li class="nav-item"><a href="">Evénements</a></li>
                    <li class="nav-item"><a href="">Formules</a></li>
                </ul>
            </div>
            <div class="nav-container d-flex d-sm-flex d-md-none">

                <ul class="nav">
                    <li class="nav-item"><a href="">Mangas</a></li>
                    <li class="nav-item"><a href="">Figurines</a></li>
                    <li class="nav-item"><a href="">Goodies</a></li>
                    <li class="nav-item"><a href="">Cosplay/Vêtements</a></li>
                    <li class="nav-item"><a href="">Evénements</a></li>
                    <li class="nav-item"><a href="">Formules</a></li>
                </ul>

                <ul class="topbar-link">
                    <li><a href="">S'enregistrer <img class="topbar-icon" src="public/icones/registration.gif" alt="registration"></a></li>
                    <li><a href="">Panier <img class="topbar-icon" src="public/icones/basket.gif" alt="basket"></a></li>
                </ul>
            </div>

        </nav>
    </header>

    <?= $content ?>

    <footer>
        <section id="footer-link" class="row container col-xs-12">
            <ul class="col-sm-6 col-xs-12">
                <li><a href=""> Mentions Légales</a></li>
                <li><a href="y">Politique de confidentialité</a></li>
            </ul>
            <ul class="col-sm-6 col-xs-12">
                <li><a href="">Accueil</a></li>
                <li><a href="">Conditions Générales de Vente</a></li>
            </ul>
        </section>
        <section id="copyright" class="col-xs-12 container-fluid">
            <p>© 2020 Site par Elodie BASSIBEY</p>
        </section>
    </footer>
</body>

</html>