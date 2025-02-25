<section id="contact-teaser">
    <div class="area-wide area-flex-column section-padding-b tile-c theme-light spacer-2 roundness-a">
        <div class="tile">
            <h2 class="headline-0 spacer-b"><?= $site->contactteasertitle() ?></h2>
            <p class="paragraph-1 spacer-c"><?= $site->contactteasersubtitle() ?></p>
            <button type="button" onclick="toggleCon()" class="button-a roundness-b hovereffect-b">
                <div class="button-container">
                    <div class="button-text"><?= $site->contactteaserbuttontext() ?></div>
                    <div class="button-icon"><?= svg('assets/icons/niklasosowitz-arrowright.svg') ?></div>
                </div>
            </button>
        </div>
    </div>
</section>