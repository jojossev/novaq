<?php
defined('BASEPATH') or exit('No direct script access allowed');

$settings = get_novaq_mobile_money_settings();
$providers = get_novaq_mobile_money_providers($settings);
if (empty($providers)) {
    return;
}

$variant = isset($variant) ? $variant : 'compact';
$title = isset($title) ? $title : label('mobile_money', 'Mobile Money');
$instructions = trim((string) ($settings['mobile_money_instructions'] ?? ''));
$show_instructions = $variant === 'checkout' && $instructions !== '';
$icon_base = base_url('assets/front_end/shared/payment-icons/');
?>
<div class="novaq-mobile-money novaq-mobile-money--<?= html_escape($variant) ?>">
    <?php if ($variant !== 'inline') { ?>
        <h6 class="novaq-mobile-money__title mb-2"><?= html_escape($title) ?></h6>
    <?php } ?>
    <?php if ($show_instructions) { ?>
        <p class="novaq-mobile-money__intro text-muted small mb-3"><?= nl2br(html_escape($instructions)) ?></p>
    <?php } ?>
    <ul class="novaq-mobile-money__list list-unstyled mb-0">
        <?php foreach ($providers as $provider) {
            $tel_href = $provider['number'] !== '' ? 'tel:' . preg_replace('/\s+/', '', $provider['number']) : '';
            $ussd_href = $provider['ussd'] !== '' ? 'tel:' . str_replace('#', '%23', $provider['ussd']) : '';
            ?>
            <li class="novaq-mobile-money__item novaq-mobile-money__item--<?= html_escape($provider['brand']) ?>">
                <img src="<?= html_escape($icon_base . $provider['brand'] . '.svg') ?>"
                    alt=""
                    class="novaq-mobile-money__logo"
                    width="52"
                    height="28"
                    loading="lazy"
                    decoding="async"
                    aria-hidden="true">
                <div class="novaq-mobile-money__body">
                    <span class="novaq-mobile-money__label fw-semibold d-block"><?= html_escape($provider['label']) ?></span>
                    <div class="novaq-mobile-money__actions d-flex flex-wrap gap-2 mt-1">
                        <?php if ($provider['number'] !== '' && $tel_href !== '') { ?>
                            <a href="<?= html_escape($tel_href) ?>" class="btn btn-sm btn-outline-primary">
                                <i class="fa fa-phone" aria-hidden="true"></i> <?= html_escape($provider['number']) ?>
                            </a>
                        <?php } ?>
                        <?php if ($provider['ussd'] !== '' && $ussd_href !== '') { ?>
                            <a href="<?= html_escape($ussd_href) ?>" class="btn btn-sm btn-outline-secondary">
                                <i class="fa fa-hashtag" aria-hidden="true"></i> <?= html_escape($provider['ussd']) ?>
                            </a>
                        <?php } ?>
                        <?php if ($provider['url'] !== '' && filter_var($provider['url'], FILTER_VALIDATE_URL)) { ?>
                            <a href="<?= html_escape($provider['url']) ?>" class="btn btn-sm btn-link px-0" target="_blank" rel="noopener noreferrer">
                                <?= label('learn_more', 'En savoir plus') ?> <i class="fa fa-external-link-alt small" aria-hidden="true"></i>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
