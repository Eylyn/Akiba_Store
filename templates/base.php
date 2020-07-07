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
        <div id="topbar col-12">
            <div class="topbar-container">

                <ul class="topbar_info">
                    <li><a href="index.php"><img id="logo" src="public/images/site/logo.jpg" alt="akiba-store logo"></a></li>
                    <li><img class="topbar-icon" src="public/icones/phone.gif" alt="phond"> 05 61 38 72 54</li>
                    <li><img class="topbar-icon" src="public/icones/mail.gif" alt="mail"> akiba.store31@gmail.com</li>
                </ul>
                <ul class="topbar-link">
                    <li><a href="">S'enregistrer <img class="topbar-icon" src="public/icones/registration.gif" alt="registration"></a></li>
                    <li><a href="">Panier <img class="topbar-icon" src="public/icones/basket.gif" alt="basket"></a></li>
                </ul>
            </div>
        </div>
        <nav class="col-12">
            <div class="nav-container">
                <ul class="nav">
                    <li class="nav-item"><a href="">Mangas</a></li>
                    <li class="nav-item"><a href="">Figurines</a></li>
                    <li class="nav-item"><a href="">Cosplay/Vêtements</a></li>
                    <li class="nav-item"><a href="">Evénements</a></li>
                    <li class="nav-item"><a href="">Formules</a></li>
                </ul>
            </div>

        </nav>
    </header>

    <?= $content ?>

    <footer>
    <section class="row container col-xs-12">
            <ul class="col-sm-offset-1 col-sm-5 col-xs-12">
                <li><a href="index.php?route=mentions"> Mentions Légales</a></li>
                <li><a href="index.php?route=confidentiality">Politique de confidentialité</a></li>
            </ul>
            <ul class="col-sm-5 col-xs-12">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php?route=APropos">A propos de l'auteur</a></li>
            </ul>
        </section>
        <section id="copyright" class="col-xs-12">
            <p>© 2020 Site par Elodie BASSIBEY - Formation OpenClassrooms <a href="https://openclassrooms.com/fr/paths/48-developpeur-web-junior"> Développeur Web Junior</a></p>
        </section>
    </footer>
</body>

</html>