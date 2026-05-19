<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Valeurs par défaut Mobile Money (RDC) — surchargeables dans Admin → Paramètres de paiement.
 */
$config['novaq_mobile_money_defaults'] = [
    'mobile_money_method' => '1',
    'mobile_money_show_footer' => '1',
    'mobile_money_show_contact' => '1',
    'mobile_money_show_checkout' => '1',
    'mobile_money_checkout_as_payment' => '1',
    'mobile_money_instructions' => 'Effectuez votre paiement vers le numéro marchand indiqué, puis envoyez la preuve depuis les détails de commande. Mentionnez votre numéro de commande en référence.',

    'mpesa_enabled' => '1',
    'mpesa_label' => 'M-Pesa (Vodacom)',
    'mpesa_number' => '+243 81 000 0000',
    'mpesa_url' => 'https://www.vodacom.cd/',
    'mpesa_ussd' => '*150#',

    'orange_money_enabled' => '1',
    'orange_money_label' => 'Orange Money',
    'orange_money_number' => '+243 89 000 0000',
    'orange_money_url' => 'https://www.orange.cd/',
    'orange_money_ussd' => '*144#',

    'airtel_money_enabled' => '1',
    'airtel_money_label' => 'Airtel Money',
    'airtel_money_number' => '+243 99 000 0000',
    'airtel_money_url' => 'https://www.airtel.cd/',
    'airtel_money_ussd' => '*501#',
];
