<?php
use Kirby\Cms\Html;

/** @var \Kirby\Cms\Block $block */

$header = $block->header()->value();
$gridboxtype = $block->gridboxtype()->isNotEmpty() ? $block->gridboxtype()->html() : '';
$class = $block->class()->isNotEmpty() ? $block->class()->html() : '';
$spacer = $block->spacer()->isNotEmpty() ? $block->spacer()->html() : '';
$classesgridbox = trim($gridboxtype . ' ' . $class . ' ' . $spacer);

?>
<div class="<?= $classesgridbox ?>">
    <div class="gridbox-header headline-3">
        <?= $header ?>
    </div>
    <?php foreach ($block->items()->toStructure() as $item): ?>
        <div class="gridbox-item paragraph-2">
            <?= $item->itemtext()->kirbytext() ?>
        </div>
    <?php endforeach ?>
</div>
