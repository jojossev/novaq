<?php
/**
 * Enregistre les textes Novaq App dans la table settings.
 * Usage: php scripts/update_novaq_content.php
 */
define('BASEPATH', __DIR__ . '/../system/');
chdir(__DIR__ . '/..');
require_once __DIR__ . '/../index.php';

$CI =& get_instance();
$CI->load->helper('function_helper');
$CI->config->load('novaq_pages');

$pages = [
    'about_us' => $CI->config->item('about_us'),
    'privacy_policy' => $CI->config->item('privacy_policy'),
    'terms_conditions' => $CI->config->item('terms_conditions'),
    'return_policy' => $CI->config->item('return_policy'),
    'shipping_policy' => $CI->config->item('shipping_policy'),
];

foreach ($pages as $variable => $value) {
    if (empty($value)) {
        continue;
    }
    $row = $CI->db->where('variable', $variable)->get('settings')->row_array();
    if (empty($row)) {
        $CI->db->insert('settings', ['variable' => $variable, 'value' => $value]);
        echo "Créé: {$variable}\n";
    } else {
        $CI->db->where('variable', $variable)->update('settings', ['value' => $value]);
        echo "Mis à jour: {$variable}\n";
    }
}

$web = get_settings('web_settings', true);
if (!is_array($web)) {
    $web = [];
}
$web['app_short_description'] = $CI->config->item('footer_tagline');
$row = $CI->db->where('variable', 'web_settings')->get('settings')->row_array();
if (!empty($row)) {
    $CI->db->where('variable', 'web_settings')->update('settings', ['value' => json_encode($web)]);
    echo "Mis à jour: web_settings.app_short_description\n";
}

$faq_items = $CI->config->item('faq_items');
if (is_array($faq_items)) {
    $CI->db->truncate('faqs');
    foreach ($faq_items as $item) {
        $CI->db->insert('faqs', [
            'question' => $item['question'],
            'answer' => $item['answer'],
            'status' => '1',
            'date_added' => date('Y-m-d H:i:s'),
        ]);
    }
    echo 'FAQ: ' . count($faq_items) . " entrées insérées.\n";
}

echo "Terminé.\n";
