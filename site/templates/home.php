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
            <main id="swup" class="viewbox home">
                <section class="hero">
                    <?php snippet('elements/banner') ?>
                    <div class="hero-item">
                        <div class="area-full">
                            <?php snippet('elements/brandmark-carousel') ?>
                        </div>
                    </div>
                    <div class="hero-item hero-item-subline">
                        <div class="area-pano area-grid-50 gap-b">
                            <div class="headline-3 reveal-a"><?= $site->subline1()->value() ?></div>
                            <div class="hero-flex area-flex-row gap-c reveal-a">
                                <div class="hero-flex area-flex-row gap-a">
                                    <h2 class="headline-3"><?= $site->subline3()->value() ?></h2>
                                    <?= svg('assets/icons/niklasosowitz-heart.svg') ?>
                                </div>
                                <?php snippet('structure/langtoggle') ?>
                            </div>
                        </div>
                    </div>
                    <div class="hero-item-bottom">
                        <div class="area-pano">
                            <a href="#hello" class="hero-scrolldown hovereffect-a reveal-b">
                                <?= svg('assets/icons/niklasosowitz-arrowbottom.svg') ?>
                                <div class="headline-3"><?= $site->scrolldowntitle()->value() ?></div>
                            </a>
                        </div>
                    </div>
                    <?php if($image = $page->image('niklasosowitz-hero.jpg')): ?>
                        <div class="hero-image theme-dark">
                            <img class="hero-image-img" src="<?= $image->url() ?>" alt="<?= $image->alttext() ?>">
                        </div>
                    <?php endif ?>
                </section>
                <?php if ($page->hello()->isNotEmpty()): ?>
                    <section id="hello" class="section-padding-b theme-darker">
                        <?php foreach ($page->hello()->toLayouts() as $area): ?>
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
                <?php if ($page->vision()->isNotEmpty()): ?>
                    <section id="vision" class="section-padding-c theme-medium">
                        <?php foreach ($page->vision()->toLayouts() as $area): ?>
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