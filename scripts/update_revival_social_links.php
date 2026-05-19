<?php
/**
 * Enregistre les liens Revival Group dans web_settings (base de données).
 * Usage: php scripts/update_revival_social_links.php
 */
define('BASEPATH', __DIR__ . '/../system/');
$_SERVER['CI_ENV'] = 'production';
chdir(__DIR__ . '/..');
require_once __DIR__ . '/../index.php';

$CI =& get_instance();
$CI->load->helper('function_helper');
$CI->config->load('revival_social');

$social = $CI->config->item('social_links');
$web = get_settings('web_settings', true);
if (!is_array($web)) {
    $web = [];
}

$web = array_merge($web, $social);

$row = $CI->db->where('variable', 'web_settings')->get('settings')->row_array();
if (empty($row)) {
    $CI->db->insert('settings', [
        'variable' => 'web_settings',
        'value' => json_encode($web),
    ]);
    echo "web_settings créé avec les liens sociaux Revival.\n";
} else {
    $CI->db->where('variable', 'web_settings')->update('settings', [
        'value' => json_encode($web),
    ]);
    echo "web_settings mis à jour avec les liens sociaux Revival.\n";
}

foreach ($social as $key => $url) {
    echo "  - {$key}: {$url}\n";
}
