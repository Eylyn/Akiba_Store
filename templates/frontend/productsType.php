<?php
$this->title = $productType;
$this->style = 'public/css/base'; ?>

<section>
    <h1><?= $productType ?></h1>
    <?php 
    foreach ($products as $product) {
        ?>
        <div class="product-type">
            <h2><a href="index.php?route=product&productId=<?= $product->getId() ?>"><?= $product->getNameProduct() ?></a></h2>
            <img src="public/images/<?= $product->getPictureLink(); ?>" alt="">
            <p><?= $product->getProductDescription(); ?></p>
            <div class="additional-info">
                <p></p>
            </div>
        </div>
    <?php 
    }
    ?>

</section>