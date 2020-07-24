<?php
$this->title = $product->getNameProduct();
$this->style = 'public/css/base'; ?>

<section>
    <h1><?= $product->getNameProduct(); ?></h1>
    <p><a href="index.php?route=<?= $product->getProductType(); ?>"><?= $product->getProductType(); ?></a></p>
    <img src="public/images/<?= $product->getPictureLink(); ?>" alt="">
    <p><?= $product->getProductDescription(); ?></p>
    <div class="additional-info">
        <p></p>
    </div>
</section>