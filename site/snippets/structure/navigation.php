<div class="navigation-close-backdrop hovereffect-b"></div>
<nav>
    <div id="navigation" class="area-navigation">
        <div class="area-wide area-navigation-container">
            <?php foreach(site()->children()->listed() as $mainpages): ?>
                <div class="navigation-item">
                    <a href="<?= $mainpages->url() ?>" class="navigation-headline navigation-link hovereffect-a"><?= $mainpages->title() ?></a>
                </div>
            <?php endforeach ?>
            <div class="navigation-item">
                <div class="navigation-headline navigation-link hovereffect-a" type="button" onclick="toggleCon()"><?= $site->contacttitle()->value() ?></div>
            </div>
            <div class="navigation-spacer"></div>
            <div class="navigation-item navigation-item-foot">
                <div class="navigation-item-foot-wrapper">
                    <div class="navigation-item-foot-wrapper-line1">
                        <a href="<?= url('legalnotice') ?>" class="navigation-link navigation-link-small hovereffect-a"><?= page('legalnotice')->title() ?></a>
                        <a href="<?= url('privacypolicy') ?>" class="navigation-link navigation-link-small hovereffect-a"><?= page('privacypolicy')->title() ?></a>
                    </div>
                    <p class="navigation-link navigation-link-small navigation-link-small-span"><?= $site->creatortag() ?></p>
                    <?php snippet('structure/langtoggle') ?>
                </div>
                <div class="navigation-spacer"></div>
                <a href="<?= url('home') ?>" class="navigation-brandmark hovereffect-a">
                    <?= svg('assets/brandmark/niklasosowitz-brandmark-icon.svg') ?>
                </a>
            </div>
        </div>
    </div>
    <div id="contact" class="area-navigation">
        <div class="area-wide area-navigation-container">
            <div class="navigation-item">
                <a href="mailto:<?= $site->email() ?>" target="_blank" class="navigation-headline navigation-link hovereffect-a"><?= $site->emailtitle()->value() ?></a>
                <a href="mailto:<?= $site->email() ?>" target="_blank" class="navigation-link navigation-link-small hovereffect-a"><?= $site->email() ?></a>
            </div>
            <div class="navigation-item">
                <a href="tel:<?= $site->phone() ?>" target="_blank" class="navigation-headline navigation-link hovereffect-a"><?= $site->phonetitle()->value() ?></a>
                <a href="tel:<?= $site->phone() ?>" target="_blank" class="navigation-link navigation-link-small hovereffect-a"><?= $site->phone() ?></a>
            </div>
            <div class="navigation-item">
                <a href="<?= $site->contactfield1url()->toUrl() ?>" target="_blank" class="navigation-headline navigation-link hovereffect-a"><?= $site->contactfield1title() ?></a>
                <a href="<?= $site->contactfield1url()->toUrl() ?>" target="_blank" class="navigation-link navigation-link-small hovereffect-a"><?= $site->contactfield1subtitle() ?></a>
            </div>
            <div class="navigation-item">
                <a href="<?= $site->contactfield2url()->toUrl() ?>" target="_blank" class="navigation-headline navigation-link hovereffect-a"><?= $site->contactfield2title() ?></a>
                <a href="<?= $site->contactfield2url()->toUrl() ?>" target="_blank" class="navigation-link navigation-link-small hovereffect-a"><?= $site->contactfield2subtitle() ?></a>
            </div>
            <div class="navigation-spacer"></div>
            <a href="<?= url('home') ?>" class="navigation-brandmark hovereffect-a">
                <?= svg('assets/brandmark/NiklasOsowitz-Brandmark-Icon.svg') ?>
            </a>
        </div>
    </div>
</nav>