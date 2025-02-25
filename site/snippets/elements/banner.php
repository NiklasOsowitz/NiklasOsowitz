<?php
use Kirby\Cms\Html;
$text        = $site->banner()->value();
$buttonType  = $site->bannertype()->value();
$url         = $site->bannerlink()->toUrl();
$attributes  = $site->bannerattributes()->value();
?>
<?php if ($site->bannerstatus()->toBool()): ?>
    <?php if ($buttonType === 'url' && $url): ?>
        <div class="banner hovereffect-a spacer-a reveal-b">
            <a href="<?= Html::encode($url) ?>" class="area-standard area-flex-row banner-content">
                <?php if($avatar = $kirby->user('niklas@ultralightbeam.studio')->avatar()): ?>
                    <img class="banner-avatar" src="<?= $avatar->url() ?>" alt="NiklasOsowitz avatar">
                <?php endif ?>
                <div>:</div>
                <?= $text ?>
            </a>
        </div>
    <?php else: ?>
        <div class="banner hovereffect-a spacer-a reveal-b">
            <div type="button" <?= $attributes ?> class="area-standard area-flex-row banner-content">
                <?php if($avatar = $kirby->user('niklas@ultralightbeam.studio')->avatar()): ?>
                    <img class="banner-avatar" src="<?= $avatar->url() ?>" alt="NiklasOsowitz avatar">
                <?php endif ?>
                <div>:</div>
                <?= $text ?>
            </div>
        </div>
    <?php endif ?>
<?php endif ?>
