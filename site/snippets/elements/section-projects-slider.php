<section id="projects" class="slider section-padding-a">
    <div class="area-pano spacer-b">
        <div class="tile">
            <h2 class="headline-2 typecolor-dim-d spacer-y">Selected work</h2>
            <p class="paragraph-1 typecolor-dim-d spacer-b">A selection of projects.</p>
        </div>
    </div>
    <div class="slider-container spacer-a hovereffect-b">
        <?php foreach(page('work')->children()->listed() as $project): ?>
            <div class="slider-item">
                <div class="slider-item-project">
                    <a href="<?= $project->url() ?>" class="slider-project-info vislayer-b hovereffect-a">
                        <div class="slider-project-title">
                            <?php if ($project->title()->isNotEmpty()): ?>
                                <div class="slider-project-title-heading paragraph-1"><?= $project->title() ?></div>
                            <?php endif ?>
                            <div class="slider-project-title-button">
                                <div class="slider-project-title-button-text">
                                    <?php if (kirby()->language()->code() === 'en'): ?>
                                        <div class="paragraph-1">view</div>
                                    <?php else: ?>
                                        <div class="paragraph-1">ansehen</div>
                                    <?php endif ?>
                                </div>
                                <div class="slider-project-title-button-icon">
                                    <?= svg('assets/icons/niklasosowitz-arrowright.svg') ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php if($image = $project->projectcover()->toFile()): ?>
                        <div class="slider-project-cover vislayer-a">
                            <img src="<?= $image->url() ?>" alt="<?= $image->alttext() ?>">
                        </div>
                    <?php endif ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <div class="area-pano slider-container-progress">
        <div class="slider-progressbar"></div>
    </div>
</section>