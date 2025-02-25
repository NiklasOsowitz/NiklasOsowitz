<?php /** @var \Kirby\Cms\Block $block */ ?>
<?php
  $class = $block->class()->isNotEmpty() ? $block->class()->html() : '';
  $spacer = $block->spacer()->isNotEmpty() ? $block->spacer()->html() : '';
  $classes = trim($class . ' ' . $spacer);
?>
<div>
  <<?= $level = $block->level()->or('h2') ?> class="<?= $classes ?>">
    <?= $block->text() ?>
  </<?= $level ?>>
</div>