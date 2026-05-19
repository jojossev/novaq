<?php
$this->load->view('front-end/shared/novaq-legal-page-modern', [
    'novaq_page_title'       => label('shipping_policy', 'Politique de livraison'),
    'novaq_page_content'     => $shipping_policy,
    'novaq_page_icon'        => 'car-outline',
    'novaq_page_subtitle'    => 'Délais, zones desservies et suivi de vos colis.',
    'novaq_breadcrumb_label' => label('shipping_policy', 'Livraison'),
]);
