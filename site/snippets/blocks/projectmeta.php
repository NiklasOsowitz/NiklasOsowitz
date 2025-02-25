<?php
/** @var \Kirby\Cms\Block $block */
$class   = $block->class()->value();
$spacer  = $block->spacer()->value();
$classes = trim($class . ' ' . $spacer);
?>

<?php if ($page->projectyear()->isNotEmpty()): ?>
    <div class="projectmeta">
        <div class="area-flex-row gap-b justify-spacebetween <?= $classes ?>" style="align-items: stretch;">
            <?php if ($page->title()->isNotEmpty()): ?>
                <div class="projectmeta-item" style="flex-shrink: 0.5; flex-grow: unset;">
                    <p class="paragraph-2"><?= $page->title()->value() ?></p>
                </div>
                <div class="projectmeta-divider">
                    <span></span>
                </div>
            <?php endif ?>
            <?php if ($page->projectclient()->isNotEmpty()): ?>
                <div class="projectmeta-item">
                    <p class="paragraph-2">Client:</p>
                    <p class="paragraph-2"><?= $page->projectclient()->value() ?></p>
                </div>
                <div class="projectmeta-divider">
                    <span></span>
                </div>
            <?php endif ?>
            <?php if ($page->projectyear()->isNotEmpty()): ?>
                <div class="projectmeta-item">
                    <p class="paragraph-2">Year:</p>
                    <p class="paragraph-2"><?= $page->projectyear()->value() ?></p>
                </div>
                <div class="projectmeta-divider">
                    <span></span>
                </div>
            <?php endif ?>
            <?php if ($page->projecttags()->isNotEmpty()): ?>
                <div class="projectmeta-item">
                    <p class="paragraph-2">Tags:</p>
                    <p class="paragraph-2"><?= $page->projecttags()->value() ?></p>
                </div>
            <?php endif ?>
            <?php if ($page->projectexternlink()->isNotEmpty()): ?>
                    <div class="projectmeta-divider">
                        <span></span>
                    </div>
                <div class="projectmeta-item" style="flex-shrink: 0.5; flex-grow: unset;">
                    <a href="<?= $page->projectexternlink()->value() ?>" class="hovereffect-a">
                        <div class="paragraph-2">View this on Behance</div>
                        <?= svg('assets/icons/niklasosowitz-arrowtopright.svg') ?>
                    </a>
                </div>
            <?php endif ?>
        </div>
    </div>
<?php endif ?>