<?php
$this->title = $product->getNameProduct();
$this->style = 'public/css/base'; ?>

<section>
    <h1><?= $product->getNameProduct(); ?></h1>
    <p><a href="index.php?route=<?= $product->getProductType(); ?>"><?= $product->getProductType(); ?></a></p>
    <?php
    if (empty($product->getPictureLink())) {
    } else {
    ?>
        <img src="public/images/<?= $product->getPictureLink() ?>" alt="<?= $product->getNameProduct() ?>">
    <?php
    }
    ?>
    <p><?= $product->getProductDescription(); ?></p>
    <div class="additional-info">
        <p></p>
    </div>
</section>