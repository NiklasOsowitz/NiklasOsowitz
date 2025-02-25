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
            <main id="swup" class="viewbox about">
                <section class="hero theme-dark">
                    <?php snippet('elements/section-header') ?>
                    <?php if($image = $site->image('niklasosowitz-hero-about.jpg')): ?>
                        <div class="hero-image theme-dark">
                            <img src="<?= $image->url() ?>" alt="<?= $image->alttext() ?>">
                        </div>
                    <?php endif ?>
                </section>
                <?php if ($page->profile()->isNotEmpty()): ?>
                    <section id="profile" class="section-padding-b theme-lighter">
                        <?php foreach ($page->profile()->toLayouts() as $area): ?>
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
                <?php endif ?>
                <section id="title-carousel" class="section-padding-a theme-dark">
                    <div class="area-full">
                        <?php snippet('elements/title-carousel') ?>
                    </div>
                </section>
                <?php if ($page->intrests()->isNotEmpty()): ?>
                    <section id="intrests" class="section-padding-b theme-lighter">
                        <?php foreach ($page->intrests()->toLayouts() as $area): ?>
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
                <?php endif ?>
                <?php if ($page->values()->isNotEmpty()): ?>
                    <section id="values" class="section-padding-b theme-lighter">
                        <?php foreach ($page->values()->toLayouts() as $area): ?>
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
                <?php endif ?>
                <?php snippet('elements/section-contact-teaser') ?>
                <?php snippet('elements/section-footer') ?>
                <?php snippet('seo/schemas') ?>
                <?php snippet('cookieconsentJs') ?>
            </main>
            <?php snippet('structure/navigation') ?>
        </div>
        <?php snippet('structure/scripts') ?>
    </body>
</html>