<main class="novaq-page novaq-page--classic novaq-faq-section">
    <section class="breadcrumb-title-bar colored-breadcrumb novaq-hero">
        <span class="novaq-hero__shape novaq-hero__shape--1" aria-hidden="true"></span>
        <span class="novaq-hero__shape novaq-hero__shape--2" aria-hidden="true"></span>
        <div class="main-content responsive-breadcrumb">
            <div class="novaq-hero__inner">
                <div class="novaq-hero__text novaq-faq-intro flex-grow-1">
                    <h1 class="novaq-hero__title text-white"><?= label('faq', 'Questions fréquentes') ?></h1>
                    <p class="novaq-hero__subtitle">Retrouvez les réponses à vos questions sur les commandes, livraisons et retours.</p>
                    <nav aria-label="breadcrumb" class="mt-3">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>"><?= label('home', 'Accueil') ?></a></li>
                            <li class="breadcrumb-item active"><?= label('faq', 'FAQ') ?></li>
                        </ol>
                    </nav>
                </div>
                <div class="novaq-hero__icon-wrap" aria-hidden="true">
                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="main-content novaq-content-section mt-4" id="faq_sec">
        <div class="row">
            <div class="home_faq col-md-7">
                <?php if (!empty($faq['data'])) { ?>
                    <div class="accordion novaq-faq-accordion mt-2 pl-0" id="accordionExample">
                        <?php foreach ($faq['data'] as $row) { ?>
                            <div class="card">
                                <div class="card-header" id="<?= 'h-' . $row['id'] ?>">
                                    <h2 class="clearfix mb-0">
                                        <a class="home_faq_btn pl-0 collapsed faq-btn-text" data-toggle="collapse" data-target="#<?= 'c-' . $row['id'] ?>" aria-expanded="false" aria-controls="<?= 'c-' . $row['id'] ?>">
                                            <?= html_escape($row['question']) ?>
                                            <i class="fa fa-angle-down rotate"></i>
                                        </a>
                                    </h2>
                                </div>
                                <div id="<?= 'c-' . $row['id'] ?>" class="collapse" aria-labelledby="<?= 'h-' . $row['id'] ?>" data-parent="#accordionExample">
                                    <div class="card-body"><?= nl2br(html_escape($row['answer'])) ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <div class="novaq-content-card novaq-reveal text-center py-5">
                        <p class="h5 mb-0"><?= label('no_faq_found', 'Aucune question pour le moment.') ?></p>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-5 d-none d-md-block">
                <div class="faq_image novaq-faq-image">
                    <img src="<?= THEME_ASSETS_URL . 'demo/faq1.png' ?>" alt="">
                </div>
            </div>
        </div>
    </section>
</main>
