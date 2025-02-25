<?php if ($site->preloaderstatus()->toBool() === true): ?>
    <div class="preloader-overlay"></div>
    <div class="preloader">
        <div class="counter">
            <div class="digit-1">
                <div class="num">0</div>
                <div class="num offset">1</div>
            </div>
            <div class="digit-2">
                <div class="num">0</div>
                <div class="num offset">1</div>
                <div class="num">2</div>
                <div class="num">3</div>
                <div class="num">4</div>
                <div class="num">5</div>
                <div class="num">6</div>
                <div class="num">7</div>
                <div class="num">8</div>
                <div class="num">9</div>
                <div class="num">0</div>
            </div>
            <div class="digit-3">
                <div class="num">0</div>
                <div class="num">1</div>
                <div class="num">2</div>
                <div class="num">3</div>
                <div class="num">4</div>
                <div class="num">5</div>
                <div class="num">6</div>
                <div class="num">7</div>
                <div class="num">8</div>
                <div class="num">9</div>
            </div>
            <div class="digit-4">%</div>
        </div>
        <div class="preloader-brandmark">
            <?= svg('assets/brandmark/niklasosowitz-brandmark-heavy.svg') ?>
        </div>
    </div>
<?php endif ?>