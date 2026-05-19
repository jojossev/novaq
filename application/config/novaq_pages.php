<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config['footer_tagline'] = 'Novaq App est une boutique en ligne proposant des produits sélectionnés avec une expérience d\'achat simple, sécurisée et fiable.';

require_once APPPATH . 'config/novaq_content/about_us.php';
require_once APPPATH . 'config/novaq_content/privacy_policy.php';
require_once APPPATH . 'config/novaq_content/terms_conditions.php';
require_once APPPATH . 'config/novaq_content/return_policy.php';
require_once APPPATH . 'config/novaq_content/shipping_policy.php';
require_once APPPATH . 'config/novaq_content/faq.php';

$config['about_us'] = $novaq_about_us;
$config['privacy_policy'] = $novaq_privacy_policy;
$config['terms_conditions'] = $novaq_terms_conditions;
$config['return_policy'] = $novaq_return_policy;
$config['shipping_policy'] = $novaq_shipping_policy;
$config['faq_items'] = $novaq_faq_items;
