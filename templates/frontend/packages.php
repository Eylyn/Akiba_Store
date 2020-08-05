<?php
$this->title = 'Formules';
$this->style = 'public/css/base'; ?>

<section>
    <h1>Formules</h1>
    <?php
    foreach ($packages as $package) {
    ?>
        <div class="package-div">
            <h2><a href="index.php?route=package&packageId=<?= $package->getId() ?>"><?= $package->getName() ?></a></h2>
            <div>
                <p><?= substr($package->getContent(), 0, 500); ?>... </p>
                <?php 
                if (empty($package->getIllustration())) {
                }
                else {
                    ?>
                    <img src="public/images/<?= $package->getIllustration() ?>" alt="<?= $package->getName() ?>">
                    <?php
                }
                ?>
                <p class="package-price"> <?= $package->getPrice() ?>€</p>
            </div>
        </div>
    <?php
    }
    ?>

</section>