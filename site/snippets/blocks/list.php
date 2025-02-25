<?php /** @var \Kirby\Cms\Block $block */ ?>
<?php
  $class = $block->class()->isNotEmpty() ? $block->class()->html() : '';
  $spacer = $block->spacer()->isNotEmpty() ? $block->spacer()->html() : '';
  $listtype = $block->listtype()->isNotEmpty() ? $block->listtype()->html() : '';
  $classes = trim($class . ' ' . $listtype . ' ' . $spacer);
?>
<div class="<?= $classes ?>">
    <?= $block->text() ?>
</div>