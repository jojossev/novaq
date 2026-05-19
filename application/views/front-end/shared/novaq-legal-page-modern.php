<?php
/**
 * @var string $novaq_page_title
 * @var string $novaq_page_content  HTML
 * @var string $novaq_page_icon     ionicons name (sans ion-icon)
 * @var string $novaq_page_subtitle optionnel
 * @var string $novaq_breadcrumb_label
 */
$subtitle = isset($novaq_page_subtitle) ? $novaq_page_subtitle : '';
$icon = isset($novaq_page_icon) ? $novaq_page_icon : 'document-text-outline';
$crumb = isset($novaq_breadcrumb_label) ? $novaq_breadcrumb_label : $novaq_page_title;
?>
<main class="novaq-page">
    <section class="novaq-hero">
        <span class="novaq-hero__shape novaq-hero__shape--1" aria-hidden="true"></span>
        <span class="novaq-hero__shape novaq-hero__shape--2" aria-hidden="true"></span>
        <span class="novaq-hero__shape novaq-hero__shape--3" aria-hidden="true"></span>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>"><?= label('home', 'Accueil') ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= html_escape($crumb) ?></li>
                </ol>
            </nav>
            <div class="novaq-hero__inner">
                <div class="novaq-hero__text">
                    <h1 class="novaq-hero__title"><?= html_escape($novaq_page_title) ?></h1>
                    <?php if ($subtitle !== '') { ?>
                        <p class="novaq-hero__subtitle"><?= html_escape($subtitle) ?></p>
                    <?php } ?>
                </div>
                <div class="novaq-hero__icon-wrap" aria-hidden="true">
                    <ion-icon name="<?= html_escape($icon) ?>"></ion-icon>
                </div>
            </div>
        </div>
    </section>
    <section class="container novaq-content-section">
        <article class="novaq-content-card novaq-reveal">
            <?= $novaq_page_content ?>
        </article>
    </section>
</main>
