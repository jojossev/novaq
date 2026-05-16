<?php
define('BASEPATH', true);
include('application/config/config.php');
echo "Config language: " . $config['language'] . "\n";
include('application/language/french/web_labels_lang.php');
echo "popular_categories: " . (isset($lang['popular_categories']) ? $lang['popular_categories'] : 'NOT FOUND') . "\n";
echo "top_offer: " . (isset($lang['top_offer']) ? $lang['top_offer'] : 'NOT FOUND') . "\n";
