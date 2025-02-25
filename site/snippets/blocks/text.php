<?php /** @var \Kirby\Cms\Block $block */ ?>
<?php
  $class = $block->class()->isNotEmpty() ? $block->class()->html() : '';
  $spacer = $block->spacer()->isNotEmpty() ? $block->spacer()->html() : '';
  $classes = trim($class . ' ' . $spacer);
?>
<div class="<?= $classes ?>">
  <?= $block->text() ?>
</div>