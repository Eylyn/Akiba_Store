<?php
$this->title = 'Evénement : ' .$event->getEventName();
$this->style = 'public/css/base'; ?>

<section>
    <h1><?= $event->getEventName(); ?></h1>
    <p><span>Le <?= $event->getEventDate() ?></span> <br>
    <?= $event->getEventDescription() ?> <br>
    <span> <?= $event->getPrice() ?>€</span></p>
    <div class="tags">
        <p><?= $event->getTags() ?></p>
    </div>
</section>