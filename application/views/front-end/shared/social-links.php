<?php
defined('BASEPATH') or exit('No direct script access allowed');
$social = isset($social_links) && is_array($social_links) ? $social_links : get_social_media_links();
$theme = isset($theme) ? $theme : (defined('THEME') ? THEME : 'modern');

$networks = [
    'linkedin_link'  => ['label' => 'LinkedIn',  'ion' => 'logo-linkedin',  'fa' => 'fa-linkedin-in', 'clr' => 'clr-linkedin'],
    'instagram_link' => ['label' => 'Instagram', 'ion' => 'logo-instagram', 'fa' => 'fa-instagram',   'clr' => 'clr-insta'],
    'facebook_link'  => ['label' => 'Facebook',  'ion' => 'logo-facebook',  'fa' => 'fa-facebook-f',  'clr' => 'clr-facebook'],
    'tiktok_link'    => ['label' => 'TikTok',    'ion' => 'logo-tiktok',    'fa' => 'fa-tiktok',      'clr' => 'clr-tiktok'],
    'twitter_link'   => ['label' => 'X',         'ion' => 'logo-twitter',   'fa' => 'fa-x-twitter',   'clr' => 'clr-twitter'],
    'whatsapp_link'  => ['label' => 'WhatsApp',  'ion' => 'logo-whatsapp',  'fa' => 'fa-whatsapp',    'clr' => 'clr-whatsapp'],
    'youtube_link'   => ['label' => 'YouTube',   'ion' => 'logo-youtube',   'fa' => 'fa-youtube',     'clr' => 'clr-youtube'],
];
?>
<?php foreach ($networks as $key => $meta) {
    if (empty($social[$key])) {
        continue;
    }
    $url = output_escaping($social[$key]);
    if ($theme === 'classic') { ?>
        <a href="<?= $url ?>" target="_blank" rel="noopener noreferrer" title="<?= $meta['label'] ?>" aria-label="<?= $meta['label'] ?>">
            <i class="fab <?= $meta['fa'] ?> rounded-icon <?= $meta['clr'] ?>"></i>
        </a>
    <?php } else { ?>
        <a href="<?= $url ?>" class="style-none" target="_blank" rel="noopener noreferrer" title="<?= $meta['label'] ?>" aria-label="<?= $meta['label'] ?>">
            <ion-icon name="<?= $meta['ion'] ?>" class="social-media-icon pointer"></ion-icon>
        </a>
    <?php }
} ?>
