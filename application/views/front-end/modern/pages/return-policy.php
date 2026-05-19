<?php
$this->load->view('front-end/shared/novaq-legal-page-modern', [
    'novaq_page_title'       => label('return_policy', 'Politique de retour'),
    'novaq_page_content'     => $return_policy,
    'novaq_page_icon'        => 'return-down-back-outline',
    'novaq_page_subtitle'    => 'Retours, échanges et remboursements en toute transparence.',
    'novaq_breadcrumb_label' => label('return_policy', 'Retours'),
]);
