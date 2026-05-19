<?php
/**
 * @var string $novaq_page_title
 * @var string $novaq_page_content  HTML
 * @var string $novaq_page_icon_fa  classe Font Awesome (ex. fa-shield-alt)
 * @var string $novaq_page_subtitle optionnel
 * @var string $novaq_breadcrumb_label
 */
$subtitle = isset($novaq_page_subtitle) ? $novaq_page_subtitle : '';
$icon_fa = isset($novaq_page_icon_fa) ? $novaq_page_icon_fa : 'fa-file-alt';
$crumb = isset($novaq_breadcrumb_label) ? $novaq_breadcrumb_label : $novaq_page_title;
?>
<main class="novaq-page novaq-page--classic">
    <section class="breadcrumb-title-bar colored-breadcrumb novaq-hero">
        <span class="novaq-hero__shape novaq-hero__shape--1" aria-hidden="true"></span>
        <span class="novaq-hero__shape novaq-hero__shape--2" aria-hidden="true"></span>
        <div class="main-content responsive-breadcrumb">
            <div class="novaq-hero__inner d-flex align-items-start">
                <div class="novaq-hero__text flex-grow-1">
                    <h1 class="novaq-hero__title text-white mb-2"><?= html_escape($novaq_page_title) ?></h1>
                    <?php if ($subtitle !== '') { ?>
                        <p class="novaq-hero__subtitle"><?= html_escape($subtitle) ?></p>
                    <?php } ?>
                    <nav aria-label="breadcrumb" class="mt-3">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>"><?= label('home', 'Accueil') ?></a></li>
                            <li class="breadcrumb-item active"><?= html_escape($crumb) ?></li>
                        </ol>
                    </nav>
                </div>
                <div class="novaq-hero__icon-wrap" aria-hidden="true">
                    <i class="fa <?= html_escape($icon_fa) ?>" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="main-content novaq-content-section py-4">
        <article class="novaq-content-card novaq-reveal">
            <?= $novaq_page_content ?>
        </article>
    </section>
</main>
