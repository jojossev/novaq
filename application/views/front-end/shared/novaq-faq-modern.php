<main class="novaq-page novaq-faq-section">
    <section class="novaq-hero">
        <span class="novaq-hero__shape novaq-hero__shape--1" aria-hidden="true"></span>
        <span class="novaq-hero__shape novaq-hero__shape--2" aria-hidden="true"></span>
        <span class="novaq-hero__shape novaq-hero__shape--3" aria-hidden="true"></span>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>"><?= label('home', 'Accueil') ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= label('faq', 'FAQ') ?></li>
                </ol>
            </nav>
            <div class="novaq-hero__inner">
                <div class="novaq-hero__text novaq-faq-intro">
                    <h1 class="novaq-hero__title"><?= label('faq', 'Questions fréquentes') ?></h1>
                    <p class="novaq-hero__subtitle">Bienvenue dans notre centre d'aide. Retrouvez ici les réponses aux questions les plus fréquentes concernant nos produits, commandes, paiements, livraisons et remboursements.</p>
                </div>
                <div class="novaq-hero__icon-wrap" aria-hidden="true">
                    <ion-icon name="help-circle-outline"></ion-icon>
                </div>
            </div>
        </div>
    </section>
    <section class="container novaq-content-section">
        <div class="row g-4 align-items-start">
            <div class="col-lg-7">
                <?php if (!empty($faq['data'])) { ?>
                    <div class="accordion novaq-faq-accordion" id="novaqFaqAccordion">
                        <?php foreach ($faq['data'] as $row) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="<?= 'h-' . $row['id'] ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= 'c-' . $row['id'] ?>" aria-expanded="false" aria-controls="<?= 'c-' . $row['id'] ?>">
                                        <?= html_escape($row['question']) ?>
                                    </button>
                                </h2>
                                <div id="<?= 'c-' . $row['id'] ?>" class="accordion-collapse collapse" aria-labelledby="<?= 'h-' . $row['id'] ?>" data-bs-parent="#novaqFaqAccordion">
                                    <div class="accordion-body">
                                        <?= nl2br(html_escape($row['answer'])) ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <div class="novaq-content-card novaq-reveal text-center py-5">
                        <p class="h5 mb-0 text-muted"><?= label('no_faq_found', 'Aucune question pour le moment.') ?></p>
                    </div>
                <?php } ?>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <div class="novaq-faq-image text-center">
                    <img src="<?= base_url('assets/front_end/modern/image/pictures/faq-img.png') ?>" alt="">
                </div>
            </div>
        </div>
    </section>
</main>
