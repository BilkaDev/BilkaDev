<section id="projects" class="projects section section-padding">
    <div class="wrapper">
        <h2 class="section-heading">projects</h2>
        <div class="projects__filters">
            <div class="projects__filters-box">
                <div class="projects__filter projects__filter--active" data-filter="all">all</div>
                <?php foreach ($projectCategories ?? [] as $category) : ?>
                    <div class="projects__filter"
                         data-filter="<?= $category['name'] ?>"><?= ucfirst($category['name']) ?></div>
                <?php endforeach; ?>
            </div>

        </div>

        <div class="projects__cards-boxes">
            <?php foreach ($projects ?? [] as $project) : ?>
                <div data-filter="<?= $project['categories'] ?>" class="projects__card-box">
                    <div class="projects__card-img">
                        <h3 class="projects__card-img-title"><?= $project['name'] ?></h3>
                        <img src="/public/img/project/<?= $project['image'] ?>" alt="<?= $project['alt'] ?>">
                        <p class="projects__card-img-info">More info</p>
                    </div>

                    <div class="projects__card-info">
                        <h3 class="projects__card-info-title"><?= $project['name'] ?></h3>
                        <ul class="projects__card-info-list">
                            <li class="projects__card-info-list-item">
                                <?= $project['description'] ?>
                            </li>
                            <?php foreach ($project['techs'] as $technology) : ?>
                                <li class="projects__card-info-list-item"><?= $technology ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php if ($project['online']) : ?>
                            <a type="button" class="projects__card-info-btn" target="_blank"
                               href="<?= $project['online'] ?>">View online</a>
                        <?php endif; ?>
                        <?php if (isset($project['sources']) && count($project['sources']) == 1) : ?>
                            <a type="button" class="projects__card-info-btn projects__card-info-btn--source"
                               target="_blank" href="<?= $project['sources'][0] ?>">View source</a>
                        <?php else: ?>
                            <div class="btn-view-source">
                                <div class="btn-view-source__left">
                                    <a type="button" target="_blank"
                                       href="<?= $project['sources'][0] ?>">View source BE</a>
                                </div>
                                <div class="btn-view-source__right">
                                    <a type="button" target="_blank"
                                       href="<?= $project['sources'][1] ?>">View source FE</a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
