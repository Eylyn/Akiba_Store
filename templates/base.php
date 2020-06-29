<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link href="<?= $style ?>.css" rel="stylesheet" />
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div id="topbar">
            <a href="index.php"><img src="" alt=""></a>
            <div id="basket"></div>
        </div>
        <nav>
            <li class="nav-item"><a href="">Mangas</a></li>
            <li class="nav-item"><a href="">Figurines</a></li>
            <li class="nav-item"><a href="">Cosplay/Vêtements</a></li>
            <li class="nav-item"><a href="">Evénements</a></li>
            <li class="nav-item"><a href="">Formules</a></li>
        </nav>
    </header>

    <?= $content ?>
    
    <footer>

    </footer>
</body>

</html>