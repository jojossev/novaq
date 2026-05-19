<?php
$this->load->view('front-end/shared/novaq-legal-page-classic', [
    'novaq_page_title'       => label('terms_and_condition', 'Conditions générales de vente'),
    'novaq_page_content'     => $terms_and_conditions,
    'novaq_page_icon_fa'     => 'fa-file-contract',
    'novaq_page_subtitle'    => 'Les règles qui encadrent vos achats sur Novaq App.',
    'novaq_breadcrumb_label' => label('terms_and_condition', 'CGV'),
]);
