<?php foreach(page('work')->children()->listed()->limit(3) as $project): ?>
    <div class="teaser-item">
        <div class="teaser-item-project">
            <a href="<?= $project->url() ?>" class="teaser-project-info vislayer-b hovereffect-a">
                <div class="teaser-project-title">
                    <?php if ($project->title()->isNotEmpty()): ?>
                        <div class="teaser-project-title-heading paragraph-1"><?= $project->title() ?></div>
                    <?php endif ?>
                    <div class="teaser-project-title-button">
                        <div class="teaser-project-title-button-text">
                            <?php if (kirby()->language()->code() === 'en'): ?>
                                <div class="paragraph-1">view</div>
                            <?php else: ?>
                                <div class="paragraph-1">ansehen</div>
                            <?php endif ?>
                        </div>
                        <div class="teaser-project-title-button-icon">
                            <?= svg('assets/icons/niklasosowitz-arrowright.svg') ?>
                        </div>
                    </div>
                </div>
            </a>
            <?php if($image = $project->projectcover()->toFile()): ?>
                <div class="teaser-project-cover vislayer-a">
                    <img src="<?= $image->url() ?>" alt="<?= $image->alttext() ?>">
                </div>
            <?php endif ?>
        </div>
    </div>
<?php endforeach ?>