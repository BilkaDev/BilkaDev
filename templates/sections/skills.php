<section id="skills" class="skills section section-padding">
    <div class="dark-block"></div>
    <div class="wrapper">
        <h2 class="section-heading">skills</h2>
        <div class="skills__boxes">
            <?php foreach ($skills ?? [] as $category => $items) : ?>
                <div class="skills__box">
                    <div class="skills__box-heading">
                        <h3 class="skills__box-title"><?= ucfirst($category) ?></h3>
                        <hr>
                    </div>
                    <div class="skills__box-items">
                        <?php foreach ($items as $item) : ?>
                            <div class="skills__box-item">
                                <img src="/public/img/icon/<?= $item['image'] ?>" alt="<?= $item['alt'] ?>">
                                <p><?= $item['name'] ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="trans-block"></div>
</section>

