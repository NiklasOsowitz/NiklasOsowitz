<?php
use Kirby\Cms\Html;

/** @var \Kirby\Cms\Block $block */

if (
    $block->location() == 'kirby' &&
    $video = $block->video()->toFile()
) {
    $url   = $video->url();
    $attrs = array_filter([
        'autoplay' => $block->autoplay()->toBool(),
        'controls' => $block->controls()->toBool(),
        'loop'     => $block->loop()->toBool(),
        'muted'    => $block->muted()->toBool(),
        'poster'   => $block->poster()->toFile()?->url(),
        'preload'  => $block->preload()->value(),
		'class'	   => $block->class()->value(),
    ]);
} else {
    $url = $block->url();
}
?>
<?php if ($video = Html::video($url, [], $attrs ?? [])): ?>
    <?= $video ?>
<?php endif ?>