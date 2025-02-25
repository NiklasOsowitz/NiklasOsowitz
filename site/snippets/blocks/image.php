<?php

/** @var \Kirby\Cms\Block $block */
$alt     = $block->alt();
$format = $block->format()->value();
$class   = $block->class()->value();
$spacer   = $block->spacer()->value();
$classes = trim($class . ' ' . $spacer . ' ' . $format);
$src     = null;

if ($block->location() == 'web') {
    $src = $block->src()->esc();
} elseif ($image = $block->image()->toFile()) {
    $alt = $alt->or($image->alt());
    $src = $image->url();
}
?>
<?php if ($src): ?>
    <div class="image <?= $classes ?>">
        <img src="<?= $src ?>" alt="<?= $alt->esc() ?>">
    </div>
<?php endif ?>