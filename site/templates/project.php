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
            <main id="swup" class="viewbox project">
                <?php snippet('elements/section-header-project') ?>
                <section id="projectoverview" class="section-padding-d theme-darker">
                    <?php foreach ($page->projectoverview()->toLayouts() as $area): ?>
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
                <section id="projectcontent" class="section-padding-a theme-lighter">
                    <?php foreach ($page->projectcontent()->toLayouts() as $area): ?>
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
                <?php snippet('elements/section-footer') ?>
                <?php snippet('seo/schemas') ?>
                <?php snippet('cookieconsentJs') ?>
            </main>
            <?php snippet('structure/navigation') ?>
        </div>
        <?php snippet('structure/scripts') ?>
    </body>
</html>