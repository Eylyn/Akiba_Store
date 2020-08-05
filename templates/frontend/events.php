<?php
$this->title = 'Événements';
$this->style = 'public/css/base'; ?>

<section>
    <h1>Événements</h1>
    <?php
    foreach ($events as $event) {
    ?>
        <div class="event-div">
            <h2><a href="index.php?route=event&eventId=<?= $event->getId() ?>"><?= $event->getEventName() ?></a></h2>
            <div>
                <p><?= substr($event->getEventDescription(), 0, 500); ?>... </p>
                <p>le <?= $event->getEventDate() ?></p>
                <p class="event-price"> <?= $event->getPrice() ?>€</p>
            </div>
        </div>
    <?php
    }
    ?>

</section>