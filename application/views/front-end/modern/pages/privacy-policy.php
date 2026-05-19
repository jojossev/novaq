<?php
$this->load->view('front-end/shared/novaq-legal-page-modern', [
    'novaq_page_title'       => label('privacy_policy', 'Politique de confidentialité'),
    'novaq_page_content'     => $privacy_policy,
    'novaq_page_icon'        => 'shield-checkmark-outline',
    'novaq_page_subtitle'    => 'Comment nous protégeons et utilisons vos données personnelles.',
    'novaq_breadcrumb_label' => label('privacy_policy', 'Confidentialité'),
]);
