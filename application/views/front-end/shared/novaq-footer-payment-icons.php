<?php
defined('BASEPATH') or exit('No direct script access allowed');

$mm_settings = get_novaq_mobile_money_settings();
$show_footer_mm = novaq_mobile_money_is_enabled($mm_settings)
    && (@$mm_settings['mobile_money_show_footer'] ?: '1') == '1';

if (!$show_footer_mm) {
    return;
}

$icons = get_novaq_footer_payment_icons();
if (empty($icons)) {
    return;
}

$icon_base = base_url('assets/front_end/shared/payment-icons/');
?>
<nav class="novaq-footer-payments" aria-label="<?= html_escape(label('accepted_payments', 'Moyens de paiement acceptés')) ?>">
    <ul class="novaq-footer-payments__list list-unstyled mb-0">
        <?php foreach ($icons as $icon) {
            $icon_file = $icon_base . $icon['brand'] . '.svg';
            $has_url = $icon['url'] !== '' && filter_var($icon['url'], FILTER_VALIDATE_URL);
            ?>
            <li class="novaq-footer-payments__item novaq-footer-payments__item--<?= html_escape($icon['brand']) ?>">
                <?php if ($has_url) { ?>
                    <a href="<?= html_escape($icon['url']) ?>"
                        class="novaq-footer-payments__link"
                        target="_blank"
                        rel="noopener noreferrer"
                        title="<?= html_escape($icon['label']) ?>">
                        <img src="<?= html_escape($icon_file) ?>" alt="<?= html_escape($icon['label']) ?>" class="novaq-footer-payments__icon" width="40" height="28" loading="lazy" decoding="async">
                    </a>
                <?php } else { ?>
                    <span class="novaq-footer-payments__link novaq-footer-payments__link--static" title="<?= html_escape($icon['label']) ?>">
                        <img src="<?= html_escape($icon_file) ?>" alt="<?= html_escape($icon['label']) ?>" class="novaq-footer-payments__icon" width="40" height="28" loading="lazy" decoding="async">
                    </span>
                <?php } ?>
            </li>
        <?php } ?>
    </ul>
</nav>
