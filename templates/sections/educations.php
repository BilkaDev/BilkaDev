<section id="education" class="skills section section-padding education">
    <div class="dark-block"></div>
    <div class="wrapper">
        <h2 class="section-heading">Education</h2>
        <div class="skills__boxes">
            <?php foreach ($educations ?? [] as $education) : ?>
                <div class="skills__box">
                    <div class="skills__box-heading">
                        <h3 class="skills__box-title"><?= $education['name'] ?></h3>
                        <hr>
                    </div>
                    <div class="education__box-items">
                        <div class="education__box-item">
                            <p><?= $education['date'] ?></p>
                        </div>
                        <div class="education__box-text">
                            <p><?= $education['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="trans-block"></div>
        </div>
    </div>
</section>

