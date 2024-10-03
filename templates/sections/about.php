<section id="about" class="about section section-padding ">
    <div class="wrapper">
        <h2 class="section-heading">about me</h2>
        <div class="about__boxes">
            <div class="about__box about__box-img">
                <img class="about__box-img-item" src="/public/img/about-me.png" alt="Marcin Bilka">

            </div>
            <div class="about__box about__box-heading">
                <h2 class="about__box-title">Who <span>am</span> I</h2>
                <p class="about__box-text"><?php echo $about['description'] ?? '' ?></p>
                <p class="about__box-text"><span>Current Focus:</span> <?php echo $about['focus'] ?? ''; ?></p>
            </div>
        </div>
    </div>
</section>

