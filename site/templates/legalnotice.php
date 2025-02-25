<!DOCTYPE html>
<html lang="<?= $site->lang() ?>" class="basiccursor">
    <head>
        <?php snippet('structure/head') ?>
        <?php snippet('cookieconsentCss') ?>
    </head>
    <body>
        <div id="content" data-nav="false" data-con="false">
            <?php snippet('structure/cursor') ?>
            <?php snippet('structure/menubutton') ?>
            <?php snippet('structure/switch') ?>
            <?php snippet('structure/preloader') ?>
            <main id="swup" class="viewbox legalnotice">
                <?php snippet('elements/section-header') ?>
                <section id="legalnotice" class="section-padding-c">
                    <?php foreach ($page->legalnotice()->toLayouts() as $area): ?>
                        <?php
                            $padding = $area->padding()->isNotEmpty() ? $area->padding()->html() : '';
                            $grid = $area->grid()->isNotEmpty() ? $area->grid()->html() : '';
                            $class = $area->class()->isNotEmpty() ? $area->class()->html() : '';
                            $spacer = $area->spacer()->isNotEmpty() ? $area->spacer()->html() : '';
                            $classes = trim($class . ' ' . $grid . ' ' . $spacer . ' ' . $padding);
                        ?>
                        <div class="<?= $classes ?>">
                            <?php foreach ($area->columns() as $tile): ?>
                                <div class="tile">
                                    <?php foreach ($tile->blocks() as $element): ?>
                                        <?php snippet('blocks/' . $element->type(), ['block' => $element, 'layout' => $area]) ?>
                                    <?php endforeach ?>
                                </div>
                            <?php endforeach ?>
                        </div>
                    <?php endforeach ?>
                </section>
                <?php snippet('elements/section-footer') ?>
                <?php snippet('seo/schemas') ?>
                <?php snippet('cookieconsentJs') ?>
            </main>
            <?php snippet('structure/navigation') ?>
        </div>
        <?php snippet('structure/scripts') ?>
    </body>
</html>