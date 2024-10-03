<section id="experience" class="skills section section-padding experience">
    <div class="wrapper">
        <h2 class="section-heading">experience</h2>
        <div class="skills__boxes">
            <?php foreach ($experiences ?? [] as $experience) : ?>
                <div class="skills__box">
                    <div class="skills__box-heading">
                        <h3 class="skills__box-title"><?= $experience['name'] ?></h3>
                        <hr>
                    </div>
                    <div class="experience__box-items">
                        <div class="experience__box-item">
                            <p><?= $experience['date'] ?></p>
                        </div>
                        <div class="experience__box-text">
                            <p><?= $experience['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="trans-block"></div>
        </div>
    </div>
</section>
