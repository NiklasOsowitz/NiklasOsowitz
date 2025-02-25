<footer id="footer" class="footer">
    <div class="area area-wide">
        <div class="tile-flex-row gap-c">
            <a href="<?= url('legalnotice') ?>" class="paragraph-4 hovereffect-a"><?= page('legalnotice')->title() ?></a>
            <a href="<?= url('privacypolicy') ?>" class="paragraph-4 hovereffect-a"><?= page('privacypolicy')->title() ?></a>
            <p class="paragraph-4"><?= $site->creatortag() ?></p>
        </div>
        <a href="<?= url('home') ?>" class="hovereffect-a">
            <?= svg('assets/brandmark/niklasosowitz-brandmark-icon.svg') ?>
        </a>
    </div>
</footer>