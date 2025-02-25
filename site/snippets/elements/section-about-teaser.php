<section id="about-teaser" class="section-padding-b">
    <div class="area-standard spacer-a">
        <div class="tile">
            <p class="paragraph-2 spacer-a"><?= $site->aboutteasertitle() ?></p>
        </div>
    </div>
    <div class="area-standard area-grid-25 gap-b spacer-a">
        <?php $aboutPage = page('about'); if ($aboutPage && $aboutPage->isPublished()): ?>
            <a href="<?= $aboutPage->url('about') ?>" class="about-teaser-item about-teaser-item-var3 theme-dark hovereffect-a">
                <div class="about-teaser-item-title headline-2"><?= $site->aboutteaserabouttitle() ?></div>
                <?php if($image = $site->image('niklasosowitz-aboutimage.jpg')): ?>
                    <div class="about-teaser-item-image">
                        <img src="<?= $image->url() ?>" alt="<?= $image->alttext() ?>">
                    </div>
                <?php endif ?>
            </a>
        <?php endif ?>
        <a href="<?= $site->contactfield4url()->toUrl() ?>" target=”_blank” class="about-teaser-item about-teaser-item-var1 theme-medium hovereffect-a">
            <div class="about-teaser-item-title"><?= svg('assets/brandmark/ultralightbeam-brandmark.svg') ?></div>
            <div class="about-teaser-item-description paragraph-2"><?= $site->contactfield4text() ?></div>
            <div class="about-teaser-link">
                <div class="about-teaser-link-content">
                    <?= svg('assets/icons/niklasosowitz-arrowtopright.svg') ?>
                </div>
            </div>
        </a>
        <a href="<?= $site->contactfield1url()->toUrl() ?>" target=”_blank” class="about-teaser-item about-teaser-item-var1 theme-dim-d hovereffect-a">
            <div class="about-teaser-item-title headline-2"><?= $site->contactfield1title() ?></div>
            <div class="about-teaser-item-description paragraph-2"><?= $site->contactfield1text() ?></div>
            <div class="about-teaser-link">
                <div class="about-teaser-link-content">
                    <?= svg('assets/icons/niklasosowitz-arrowtopright.svg') ?>
                </div>
            </div>
        </a>
        <?php if(page('about')->values()->isNotEmpty()): ?>
            <?php $aboutPage = page('about'); if ($aboutPage && $aboutPage->isPublished()): ?>
                <div class="about-teaser-item about-teaser-item-var1 theme-energize-a hovereffect-a" type="button" onclick="toggleCon()">
                    <div class="about-teaser-item-title headline-2">Contact me</div>
                    <div class="about-teaser-link">
                        <div class="about-teaser-link-content">
                            <?= svg('assets/icons/niklasosowitz-contact.svg') ?>
                        </div>
                    </div>
                </div>            
                <a href="<?= $aboutPage->url('about/#values') ?>" class="about-teaser-item about-teaser-item-var1 theme-dark hovereffect-a">
                    <div class="about-teaser-item-title headline-2">Value(s)</div>
                    <?php if($image = $site->image('niklasosowitz-valuesimage.jpg')): ?>
                        <div class="about-teaser-item-image">
                            <img src="<?= $image->url() ?>" alt="<?= $image->alttext() ?>">
                        </div>
                    <?php endif ?>
                </a>
            <?php endif ?>
        <?php endif ?>
    </div>
    <div class="area-standard area-grid-25 gap-b spacer-a">
        <?php if($site->contactfield2title()->isNotEmpty()): ?>
            <a href="<?= $site->contactfield2url()->toUrl() ?>" target="_blank" class="about-teaser-item about-teaser-item-var2 theme-light hovereffect-a">
                <div class="paragraph-2"><?= $site->contactfield2title() ?></div>
                <div class="about-teaser-link-2">
                    <?= svg('assets/icons/niklasosowitz-arrowtopright.svg') ?>
                </div>
            </a>
        <?php endif ?>
        <?php if($site->contactfield3title()->isNotEmpty()): ?>
            <a href="<?= $site->contactfield3url()->toUrl() ?>" target="_blank" class="about-teaser-item about-teaser-item-var2 theme-light hovereffect-a">
                <div class="paragraph-2"><?= $site->contactfield3title() ?></div>
                <div class="about-teaser-link-2">
                    <?= svg('assets/icons/niklasosowitz-arrowtopright.svg') ?>
                </div>
            </a>
        <?php endif ?>
        <?php if($site->contactfield5title()->isNotEmpty()): ?>
            <a href="<?= $site->contactfield5url()->toUrl() ?>" target="_blank" class="about-teaser-item about-teaser-item-var2 theme-light hovereffect-a">
                <div class="paragraph-2"><?= $site->contactfield5title() ?></div>
                <div class="about-teaser-link-2">
                    <?= svg('assets/icons/niklasosowitz-arrowtopright.svg') ?>
                </div>
            </a>
        <?php endif ?>
        <?php if($site->contactfield6title()->isNotEmpty()): ?>
            <a href="<?= $site->contactfield6url()->toUrl() ?>" target="_blank" class="about-teaser-item about-teaser-item-var2 theme-light hovereffect-a">
                <div class="paragraph-2"><?= $site->contactfield6title() ?></div>
                <div class="about-teaser-link-2">
                    <?= svg('assets/icons/niklasosowitz-arrowtopright.svg') ?>
                </div>
            </a>
        <?php endif ?>
    </div>
</section>