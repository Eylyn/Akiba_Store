<?php
$this->title = $package->getName();
$this->style = 'public/css/base'; ?>

<section>
    <h1><?= $package->getName(); ?></h1>
    <?php
    if (empty($package->getIllustration())) {
    } else {
    ?>
        <img src="public/images/<?= $package->getIllustration() ?>" alt="<?= $package->getName() ?>">
    <?php
    }
    ?>
    <p><?= $package->getContent(); ?></p>
    <div class="additional-info">
        <p></p>
    </div>
</section>