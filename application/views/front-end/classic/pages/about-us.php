<?php
$this->load->view('front-end/shared/novaq-legal-page-classic', [
    'novaq_page_title'       => label('about_us', 'À propos de nous'),
    'novaq_page_content'     => $about_us,
    'novaq_page_icon_fa'     => 'fa-users',
    'novaq_page_subtitle'    => 'Découvrez Novaq App, notre mission et notre engagement envers vous.',
    'novaq_breadcrumb_label' => label('about_us', 'À propos'),
]);
