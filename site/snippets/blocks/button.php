<?php
use Kirby\Cms\Html;
use Kirby\Toolkit\Str;

/** @var \Kirby\Cms\Block $block */

$type        = $block->buttontype()->value();
$url         = $block->buttonurl()->toUrl();
$href        = $block->buttonhref()->value();

$title       = $block->buttontitle()->html();
$icon        = $block->buttonicon();
$attributes  = $block->buttonattributes();

$style       = $block->buttonstyle()->html();
$class       = $block->class()->html();
$spacer      = $block->spacer()->html();
$classes     = trim($class . ' ' . $style . ' ' . $spacer);

if (Str::startsWith($href, '#')) {
    $fullHref = url($page->url() . $href);
} elseif (Str::startsWith($href, '/')) {
    $fullHref = url($href);
} else {
    $fullHref = url($href);
}

?>
<?php if ($type === 'hyperlink'): ?>
    <a href="<?= Html::encode($url) ?>" <?= $attributes ?> class="<?= $classes ?>">
        <div class="button-container">
            <div class="button-text"><?= $title ?></div>
            <?php if ($block->buttonicon()->isNotEmpty()): ?>
                <div class="button-icon"><?= svg('assets/icons/niklasosowitz-' . $icon . '.svg') ?></div>
            <?php endif ?>
        </div>
    </a>
<?php elseif ($type === 'button'): ?>
    <button type="button" <?= $attributes ?> class="<?= $classes ?>">
        <div class="button-container">
            <div class="button-text"><?= $title ?></div>
            <?php if ($block->buttonicon()->isNotEmpty()): ?>
                <div class="button-icon"><?= svg('assets/icons/niklasosowitz-' . $icon . '.svg') ?></div>
            <?php endif ?>
        </div>
    </button>
<?php elseif ($type === 'expert'): ?>
    <a href="<?= Html::encode($fullHref) ?>" <?= $attributes ?> class="<?= $classes ?>">
        <div class="button-container">
            <div class="button-text"><?= $title ?></div>
            <?php if ($block->buttonicon()->isNotEmpty()): ?>
                <div class="button-icon"><?= svg('assets/icons/niklasosowitz-' . $icon . '.svg') ?></div>
            <?php endif ?>
        </div>
    </a>
<?php endif ?>