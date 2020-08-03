<?php
$this->title = 'Événements';
$this->style = 'public/css/base'; ?>

<section>
    <h1>Événements</h1>
    <?php
    foreach ($events as $event) {
    ?>
        <div class="">
            <h4><a href="index.php?route=event&eventId=<?= $event->getId() ?>"><?= $event->getEventName() ?></a></h4>
            <div>
                <p><?= substr($event->getEventDescription(), 0, 500); ?>... </p>
                <p>le <?= $event->getEventDate() ?></p>
            </div>
        </div>
    <?php
    }
    ?>

</section>