<?= js('https://unpkg.com/swup@4', ['defer' => true]) ?>
<?= js('assets/js/swup.js', ['defer' => true]) ?>
<?= js('https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js') ?>
<?= js('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/gsap.min.js') ?>
<?= js('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/ScrollTrigger.min.js') ?>
<?php if ($site->preloaderstatus()->toBool() === true): ?>
    <?= js('assets/js/loading.js') ?>
<?php endif ?>
<?= js('assets/js/cursor.js', ['defer' => true]) ?>
<?= js('assets/js/navigation.js', ['defer' => true]) ?>
<?= js('assets/js/carousel.js') ?>
<?= js('assets/js/effects.js') ?>
<?= js('assets/js/projectsslider.js') ?>
<?= js('assets/js/haccordion.js') ?>