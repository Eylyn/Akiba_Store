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
                    <h3><a href=""><?= $product->getNameProduct() ?></a></h3>
                    <p class="description"><?= $product->getProductType() ?></p> 

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
        </div>
    </div>


</div>