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
            <main id="swup" class="viewbox work">
                <?php snippet('elements/section-header') ?>
                <?php if ($page->work()->isNotEmpty()): ?>
                    <section id="intro" class="theme-darker section-padding-d">
                        <?php foreach ($page->work()->toLayouts() as $area): ?>
                            <?php
                                $padding = $area->padding()->isNotEmpty() ? $area->padding()->html() : '';
                                $grid = $area->grid()->isNotEmpty() ? $area->grid()->html() : '';
                                $class = $area->class()->isNotEmpty() ? $area->class()->html() : '';
                                $spacer = $area->spacer()->isNotEmpty() ? $area->spacer()->html() : '';
                                $classes = trim($class . ' ' . $grid . ' ' . $spacer . ' ' . $padding);
                            ?>
                            <div class="<?= $classes ?>">
                                <?php foreach ($area->columns() as $tile): ?>
                                    <?php foreach ($tile->blocks() as $element): ?>
                                        <?php snippet('blocks/' . $element->type(), ['block' => $element, 'layout' => $area]) ?>
                                    <?php endforeach ?>
                                <?php endforeach ?>
                            </div>
                        <?php endforeach ?>
                    </section>
                <?php endif ?>
                <?php snippet('elements/section-projects-slider') ?>
                <?php if ($page->theprocess()->isNotEmpty()): ?>
                    <section id="theprocess" class="theme-lighter section-padding-c">
                    <?php foreach ($page->theprocess()->toLayouts() as $area): ?>
                            <?php
                                $padding = $area->padding()->isNotEmpty() ? $area->padding()->html() : '';
                                $grid = $area->grid()->isNotEmpty() ? $area->grid()->html() : '';
                                $class = $area->class()->isNotEmpty() ? $area->class()->html() : '';
                                $spacer = $area->spacer()->isNotEmpty() ? $area->spacer()->html() : '';
                                $classes = trim($class . ' ' . $grid . ' ' . $spacer . ' ' . $padding);
                            ?>
                            <div class="<?= $classes ?>">
                                <?php foreach ($area->columns() as $tile): ?>
                                    <?php foreach ($tile->blocks() as $element): ?>
                                        <?php snippet('blocks/' . $element->type(), ['block' => $element, 'layout' => $area]) ?>
                                    <?php endforeach ?>
                                <?php endforeach ?>
                            </div>
                        <?php endforeach ?>
                    </section>
                <?php endif ?>
                <?php snippet('elements/section-about-teaser') ?>
                <?php snippet('elements/section-footer') ?>
                <?php snippet('seo/schemas') ?>
                <?php snippet('cookieconsentJs') ?>
            </main>
            <?php snippet('structure/navigation') ?>
        </div>
        <?php snippet('structure/scripts') ?>
    </body>
</html>