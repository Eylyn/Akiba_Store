<?php
$this->title = 'Accueil';
$this->style = 'public/css/base'; ?>

<div class="container-fluid">

    <section class="header-section row">
        <h1>Bienvenue sur le site d'Akiba Store</h1>
        <div class="events-slider">
            <?php
            foreach ($products as $product) {
                ?>
                <div>
                    <h3><a href="index.php?route=product&productId=<?= $product->getId() ?>"><?= $product->getNameProduct() ?></a></h3>
                    <div class="product-info">
                    <p><a href="index.php?route=productsType&productType=<?= $product->getProductType() ?>"><?= $product->getProductType() ?></a></p>
                    <p class="product-description"><?= $product->getProductDescription() ?></p> 
                    <img src="public/images/<?= $product->getPictureLink() ?>" alt="">
                    <p class="product-price"> <?= $product->getPrice() ?>€</p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </section>

    <div class="row container-fluid">
        <div class="d-none d-md-block left column col-md-3 ">
            <h2>News</h2>
            <div class="news-item"></div>
            <div class="news-item"></div>
            <div class="news-item"></div>
        </div>

        <section class="main-section col-md-6 col-sm-12">
            <div id="news">
                <h2>Nouveautés</h2>
            </div>
            <div id="preorders">
                <h2>Précommandes</h2>
            </div>
            <div id="other">
                <h2>Autres</h2>
            </div>
        </section>

        <div class="d-none d-md-block right column col-md-3">
            <h2>Evénements à venir</h2>
            <?php
            foreach ($events as $event) {
                ?>
                <div class="event-aside">
                    <h4><a href="index.php?route=event&eventId=<?= $event->getId() ?>"><?= $event->getEventName()?></a></h4>
                    <div>
                    <p><?= substr($event->getEventDescription(), 0, 100); ?>... </p>
                    <p>le <?= $event->getEventDate() ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>


</div>