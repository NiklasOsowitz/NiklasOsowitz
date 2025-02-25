<?php
use Kirby\Cms\Html;

/** @var \Kirby\Cms\Block $block */

$headline = $block->haccordionHeadline()->value();

$class = $block->class()->isNotEmpty() ? $block->class()->html() : '';
$spacer = $block->spacer()->isNotEmpty() ? $block->spacer()->html() : '';
$classeshaccordion = trim($class . ' ' . $spacer);
?>

<div class="haccordion <?= $classeshaccordion ?>">
    <?php if ($block->haccordionHeadline()->isNotEmpty()): ?>
        <div class="haccordion-head"><?= $headline ?></div>
    <?php endif ?>
    <div class="haccordion-body">
        <?php foreach ($block->haccordionItems()->toStructure() as $item): ?>
            <div class="haccordion-item hovereffect-c">
                <div class="haccordion-item-wrapper">
                    <div class="haccordion-item-headline vislayer-b">
                        <?= $item->haccordionItemHeadline()->value() ?>
                    </div>
                    <div class="haccordion-item-content vislayer-b">
                        <div class="haccordion-item-content-carousel">
                            <?php foreach ($item->haccordionItemContent()->toStructure() as $content): ?>
                                <div class="haccordion-item-content-carousel-item">
                                    <?= $content->itemtext()->value() ?>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="haccordion-item-background vislayer-a"></div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>