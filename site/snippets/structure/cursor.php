<?php if ($site->preloaderstatus()->toBool() === true): ?>
    <div id="cursor" class="cursor cursor-preloader">
        <div class="cursor-loader">
            <div class="cursor-load">
                <div class="cursor-load-fill"></div>
            </div>
        </div>
        <div class="cursor-expand">
            <?= svg('assets/icons/niklasosowitz-expand.svg') ?>
        </div>
        <div class="cursor-shrink">
            <?= svg('assets/icons/niklasosowitz-shrink.svg') ?>
        </div>
    </div>
<?php elseif ($site->preloaderstatus()->toBool() === false): ?>
    <div id="cursor" class="cursor">
        <div class="cursor-expand">
            <?= svg('assets/icons/niklasosowitz-expand.svg') ?>
        </div>
        <div class="cursor-shrink">
            <?= svg('assets/icons/niklasosowitz-shrink.svg') ?>
        </div>
    </div>
<?php endif ?>