<!DOCTYPE html>

<?php $current_url = current_url();

$settings = get_settings('system_settings', true);
$authentication_settings = get_settings('authentication_settings');
$sms_gateway_settings = get_settings('sms_gateway_settings');

if ($sms_gateway_settings !== null && is_string($sms_gateway_settings)) {
    $sms_gateway_data = get_settings('sms_gateway_settings');
} else {
    $sms_gateway_data = [];
}


if ($authentication_settings !== null && is_string($authentication_settings)) {
    $authentication = json_decode(get_settings('authentication_settings'), true);
} else {
    $authentication = [];
}

?>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="<?= base_url('assets/admin') ?>" data-template="vertical-menu-template-free">

</html>
<!-- Menu -->
<input type="hidden" id="sms_gateway_data" value='<?= isset($sms_gateway_data) ? ($sms_gateway_data) : [] ?>' />

<!-- Sidebar -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo px-3 ms-1">
        <a href="<?= base_url('admin/home') ?>" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="<?= base_url() . get_settings('logo') ?>" class="brand-image">
            </span>
        </a>

        <a href="<?= base_url('admin/home') ?>" class="app-brand-link">

        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <div class="pb-2 pt-4 px-3">
        <!-- Rechercher Bar -->
        <input type="text" class="form-control menuRechercher" placeholder="Rechercher dans le menu...">
    </div>

    <ul class="menu-inner py-1 ps ps--active-y">

        <!-- Ajouter icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->

        <!-- Tableau de bord -->
        <li class="menu-item <?= ($current_url == base_url('admin/home')) ? 'active' : '' ?>">
            <a href="<?= base_url('/admin/home') ?>" class="menu-link ">
                <i class="ion-icon-desktop-outline text-danger"></i>
                <div data-i18n="Tableau de bord">Tableau de bord</div>
            </a>
        </li>

        <!-- Commandes -->
        <?php if (has_permissions('read', 'orders') || has_permissions('read', 'send_notification')) { ?>
            <?php
            $orders_menu_active = ($current_url == base_url('admin/orders') || $current_url == base_url('admin/orders/order-tracking') || $current_url == base_url('admin/orders/edit_orders'));
            $system_notif_active = ($current_url == base_url('admin/notification_settings/manage_ststem_notifications'));
            $is_menu_active = $orders_menu_active || $system_notif_active;
            ?>
            <li class="menu-item <?= $is_menu_active ? 'active open' : '' ?>">
                <a href="#" class="menu-link menu-toggle">
                    <i class="ion-icon-cart-outline text-success"></i>
                    <div data-i18n="Layouts">Commandes</div>
                </a>

                <ul class="menu-sub">
                    <?php if (has_permissions('read', 'orders')) { ?>
                        <li class="menu-item <?= ($current_url == base_url('admin/orders')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/orders/') ?>#order" class="menu-link">
                                <div data-i18n="Without menu">Commandes</div>
                            </a>
                        </li>
                    <?php } ?>

                    <?php if (has_permissions('read', 'orders')) { ?>
                        <li class="menu-item <?= ($current_url == base_url('admin/orders/order-tracking')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/orders/order-tracking') ?>#order" class="menu-link">
                                <div data-i18n="Without menu">Suivi de commande</div>
                            </a>
                        </li>
                    <?php } ?>


                    <?php if (has_permissions('read', 'send_notification')) { ?>
                        <li
                            class="menu-item <?= ($current_url == base_url('admin/notification_settings/manage_ststem_notifications')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/notification_settings/manage_ststem_notifications') ?>#order"
                                class="menu-link">
                                <div data-i18n="Without menu">Notifications système</div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>



        <!-- Catégories -->
        <?php if (has_permissions('read', 'categories')) { ?>
            <li
                class="menu-item <?= ($current_url == base_url('admin/category/create_category') || ($current_url == base_url('admin/category/category-order'))) ? 'active open' : '' ?>">
                <a href="#" class="menu-link menu-toggle">
                    <i class="ion-icon-disc-outline text-primary"></i>
                    <div data-i18n="Layouts">Catégories</div>
                </a>
                <ul class="menu-sub">
                    <?php if (has_permissions('read', 'categories')) { ?>
                        <li
                            class="menu-item <?= ($current_url == base_url('admin/category/create_category')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/category/create_category') ?>" class="menu-link">
                                <div data-i18n="Without menu">Catégories</div>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if (has_permissions('read', 'category_order')) { ?>
                        <li
                            class="menu-item <?= ($current_url == base_url('admin/category/category-order')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/category/category-order') ?>" class="menu-link">
                                <div data-i18n="Without menu">Ordre des catégories</div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>

        <!-- Marques -->
        <?php if (has_permissions('read', 'brands')) { ?>
            <li class="menu-item <?= ($current_url == base_url('admin/brand')) ? 'active' : '' ?>">
                <a href="<?= base_url('admin/brand/') ?>" class="menu-link">
                    <i class="ion-icon-color-filter-outline text-warning"></i>
                    <div data-i18n="Without menu">Marques</div>
                </a>
            </li>
        <?php } ?>

        <!-- Produits -->
        <?php if (has_permissions('read', 'product') || has_permissions('read', 'attribute') || has_permissions('read', 'attribute_set') || has_permissions('read', 'attribute_value') || has_permissions('read', 'tax') || has_permissions('read', 'product_order')) { ?>
            <li
                class="menu-item <?= ($current_url == base_url('admin/attributes') || $current_url == base_url('admin/taxes/manage-taxes') || $current_url == base_url('admin/product/create-product') || $current_url == base_url('admin/product/bulk-upload') || $current_url == base_url('admin/product') || $current_url == base_url('admin/product_faqs') || $current_url == base_url('admin/product/product-order')) ? 'active open' : '' ?>">
                <a href="#" class="menu-link menu-toggle">
                    <i class="ion-icon-file-tray-stacked-outline text-info"></i>
                    <div data-i18n="Layouts">Produits</div>
                </a>

                <ul class="menu-sub">
                    <?php if (has_permissions('read', 'attribute')) { ?>
                        <li class="menu-item <?= ($current_url == base_url('admin/attributes')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/attributes') ?>" class="menu-link">
                                <div data-i18n="Layouts">Attributs</div>
                            </a>
                        </li>
                    <?php } ?>

                    <?php if (has_permissions('read', 'tax')) { ?>
                        <li class="menu-item <?= ($current_url == base_url('admin/taxes/manage-taxes')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/taxes/manage-taxes') ?>" class="menu-link">
                                <div data-i18n="Layouts">Taxes</div>
                            </a>
                        </li>
                    <?php } ?>

                    <?php if (has_permissions('read', 'product')) { ?>
                        <li class="menu-item <?= ($current_url == base_url('admin/product/create-product')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/product/create-product') ?>" class="menu-link">
                                <div data-i18n="Layouts">Ajouter un produit</div>
                            </a>
                        </li>
                    <?php } ?>

                    <?php if (has_permissions('read', 'product')) { ?>
                        <li class="menu-item <?= ($current_url == base_url('admin/product/bulk-upload')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/product/bulk-upload') ?>" class="menu-link">
                                <div data-i18n="Layouts">Téléversement en masse</div>
                            </a>
                        </li>
                    <?php } ?>

                    <?php if (has_permissions('read', 'product')) { ?>
                        <li class="menu-item <?= ($current_url == base_url('admin/product')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/product/') ?>" class="menu-link">
                                <div data-i18n="Layouts">Gérer les produits</div>
                            </a>
                        </li>
                    <?php } ?>

                    <?php if (has_permissions('read', 'product_faqs')) { ?>
                        <li class="menu-item <?= ($current_url == base_url('admin/product_faqs')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/product_faqs/') ?>" class="menu-link">
                                <div data-i18n="Layouts">FAQ des produits</div>
                            </a>
                        </li>
                    <?php } ?>

                    <?php if (has_permissions('read', 'product_order')) { ?>
                        <li class="menu-item <?= ($current_url == base_url('admin/product/product-order')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/product/product-order') ?>" class="menu-link">
                                <div data-i18n="Layouts">Ordre des produits</div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>

        <!-- Vente Flash -->
        <?php if (has_permissions('read', 'flash_sale')) { ?>
            <li
                class="menu-item <?= ($current_url == base_url('admin/flash_sale') || $current_url == base_url('admin/flash_sale/view_sale')) ? 'active' : '' ?>">
                <a href="<?= base_url('admin/flash_sale/') ?>" class="menu-link">
                    <i class="ion-icon-flash-outline text-danger"></i>
                    <div data-i18n="Layouts">Vente Flash</div>
                </a>
            </li>
        <?php } ?>


        <!-- Point of sale -->
        <?php if (has_permissions('read', 'point_of_sale')) {
        ?>
            <li class="menu-item <?= ($current_url == base_url('admin/point_of_sale')) ? 'active' : '' ?>">
                <a href="<?= base_url('admin/point_of_sale/') ?>" class="menu-link">
                    <i class="ion-icon-calculator-outline text-success"></i>
                    <div data-i18n="Layouts">Point de vente</div>
                </a>
            </li>
        <?php }
        ?>
        <!-- Médias -->
        <?php if (has_permissions('read', 'media')) { ?>
            <li class="menu-item <?= ($current_url == base_url('admin/media')) ? 'active' : '' ?>">
                <a href="<?= base_url('admin/media/') ?>" class="menu-link">
                    <i class="ion-icon-musical-notes-outline text-primary"></i>
                    <div data-i18n="Layouts">Médias</div>
                </a>
            </li>
        <?php } ?>

        <!-- Diaporamas -->
        <?php if (has_permissions('read', 'home_slider')) { ?>
            <li class="menu-item <?= ($current_url == base_url('admin/slider/manage-slider')) ? 'active' : '' ?>">
                <a href="<?= base_url('admin/slider/manage-slider') ?>" class="menu-link">
                    <i class="ion-icon-image-outline text-warning"></i>
                    <div data-i18n="Layouts">Diaporamas</div>
                </a>
            </li>
        <?php } ?>

        <!-- Offres -->
        <?php if (has_permissions('read', 'offer') || has_permissions('read', 'offer_slider') || has_permissions('read', 'offer_section_order')) { ?>
            <li
                class="menu-item <?= ($current_url == base_url('admin/offer') || $current_url == base_url('admin/offer_slider') || $current_url == base_url('admin/offer-slider/section-order')) ? 'active open' : '' ?>">
                <a href="#" class="menu-link menu-toggle">
                    <i class="ion-icon-gift-outline text-info"></i>
                    <div data-i18n="Layouts">Offres</div>

                </a>
                <ul class="menu-sub">
                    <?php if (has_permissions('read', 'offer')) { ?>
                        <li class="menu-item <?= ($current_url == base_url('admin/offer')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/offer') ?>" class="menu-link">
                                <div data-i18n="Layouts">Offres</div>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if (has_permissions('read', 'offer_slider')) { ?>
                        <li class="menu-item <?= ($current_url == base_url('admin/offer_slider')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/offer_slider') ?>" class="menu-link">
                                <div data-i18n="Layouts">Diaporama d'offres</div>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if (has_permissions('read', 'offer_section_order')) { ?>
                        <li
                            class="menu-item <?= ($current_url == base_url('admin/offer-slider/section-order')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/offer-slider/section-order') ?>" class="menu-link">
                                <div data-i18n="Layouts">Ordre des sections</div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>


        <!-- manage stock -->
        <?php if (has_permissions('read', 'manage_stock')) { ?>
            <li class="menu-item <?= ($current_url == base_url('admin/manage_stock')) ? 'active' : '' ?>">
                <a href="<?= base_url('admin/manage_stock') ?>" class="menu-link">
                    <i class="ion-icon-cube-outline text-danger"></i>
                    <div data-i18n="Layouts">Gérer Stock</div>
                </a>
            </li>



        <?php } ?>

        <?php if (has_permissions('read', 'chat')) { ?>
            <li class="menu-item <?= ($current_url == base_url('admin/chat')) ? 'active' : '' ?>">
                <a href="<?= base_url('admin/chat') ?>" class="menu-link">
                    <i class="ion-icon-chatbubble-outline text-warning"></i>
                    <div data-i18n="Layouts">Chat</div>
                </a>
            </li>
        <?php } ?>
        <!-- Tickets de support -->
        <?php if (has_permissions('read', 'support_tickets')) { ?>
            <li
                class="menu-item <?= ($current_url == base_url('admin/tickets/ticket-types') || $current_url == base_url('admin/tickets')) ? 'active open' : '' ?>">
                <a href="#" class="menu-link menu-toggle">
                    <i class="ion-icon-ticket-outline text-success"></i>
                    <div data-i18n="Layouts">Tickets de support</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?= ($current_url == base_url('admin/tickets/ticket-types')) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/tickets/ticket-types') ?>" class="menu-link">
                            <div data-i18n="Layouts">Types de tickets</div>
                        </a>
                    </li>
                    <li class="menu-item <?= ($current_url == base_url('admin/tickets')) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/tickets') ?>" class="menu-link">
                            <div data-i18n="Layouts">Tickets</div>
                        </a>
                    </li>
                </ul>
            </li>
        <?php } ?>

        <!-- Code promo -->
        <?php if (has_permissions('read', 'promo_code')) { ?>
            <li class="menu-item <?= ($current_url == base_url('admin/promo-code/manage-promo-code')) ? 'active' : '' ?>">
                <a href="<?= base_url('admin/promo-code/manage-promo-code') ?>" class="menu-link">
                    <i class="ion-icon-extension-puzzle-outline text-primary"></i>
                    <div data-i18n="Layouts">Code promo</div>
                </a>
            </li>
        <?php } ?>

        <!-- Sections en vedette -->
        <?php if (has_permissions('read', 'featured_section')) { ?>
            <li
                class="menu-item  <?= ($current_url == base_url('admin/featured-sections') || $current_url == base_url('admin/featured-sections/section-order')) ? 'active open' : '' ?>">
                <a href="#" class="menu-link menu-toggle">
                    <i class="ion-icon-server-outline text-warning"></i>
                    <div data-i18n="Layouts">Sections en vedette</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item  <?= ($current_url == base_url('admin/featured-sections')) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/featured-sections/') ?>" class="menu-link">
                            <div data-i18n="Layouts">Gérer les sections</div>
                        </a>
                    </li>
                    <?php if (has_permissions('read', 'featured_section_order')) { ?>
                        <li
                            class="menu-item  <?= ($current_url == base_url('admin/featured-sections/section-order')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/featured-sections/section-order') ?>" class="menu-link">
                                <div data-i18n="Layouts">Ordre des sections</div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>

        <!-- Client -->
        <?php if (has_permissions('read', 'customers')) { ?>
            <li
                class="menu-item <?= ($current_url == base_url('admin/customer') || $current_url == base_url('admin/customer/addresses') || $current_url == base_url('admin/transaction/view-transaction') || $current_url == base_url('admin/transaction/customer-wallet')) ? 'active open' : '' ?>">
                <a href="#" class="menu-link menu-toggle">
                    <i class="ion-icon-person-outline text-info"></i>
                    <div data-i18n="Layouts">Client</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?= ($current_url == base_url('admin/customer')) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/customer/') ?>" class="menu-link">
                            <div data-i18n="Layouts">Voir les clients</div>

                        </a>
                    </li>
                    <li class="menu-item <?= ($current_url == base_url('admin/customer/addresses')) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/customer/addresses') ?>" class="menu-link">
                            <div data-i18n="Layouts">Adresses</div>
                        </a>
                    </li>
                    <?php if (has_permissions('read', 'customers_transactions')) { ?>
                        <li
                            class="menu-item <?= ($current_url == base_url('admin/transaction/view-transaction')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/transaction/view-transaction') ?>" class="menu-link">

                                <div data-i18n="Layouts">Voir les transactions</div>
                            </a>
                        </li>
                        <li
                            class="menu-item <?= ($current_url == base_url('admin/transaction/customer-wallet')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/transaction/customer-wallet') ?>" class="menu-link">

                                <div data-i18n="Layouts">Transactions du portefeuille</div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>


        <!-- Return request -->
        <?php if (has_permissions('read', 'return_request')) { ?>
            <li
                class="menu-item <?= ($current_url == base_url('admin/return-request') || $current_url == base_url('admin/return_reasons')) ? 'active open' : '' ?>">
                <a href="#" class="menu-link menu-toggle">
                    <i class="ion-icon-refresh-outline text-danger"></i>
                    <div data-i18n="Layouts">Gérer les retours</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?= ($current_url == base_url('admin/return-request')) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/return-request') ?>" class="menu-link">

                            <div data-i18n="Layouts">Demandes de retour</div>
                        </a>
                    </li>
                    <li class="menu-item <?= ($current_url == base_url('admin/return_reasons')) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/return_reasons') ?>" class="menu-link">
                            <div data-i18n="Layouts">Motifs de retour</div>
                        </a>
                    </li>
                </ul>
            </li>

        <?php } ?>


        <!-- Livreur -->
        <?php if (has_permissions('read', 'delivery_boy') || has_permissions('read', 'fund_transfer') || has_permissions('read', 'manage_cash')) { ?>
            <li
                class="menu-item <?= ($current_url == base_url('admin/delivery-boys/manage-delivery-boy') || $current_url == base_url('admin/fund-transfer') || $current_url == base_url('admin/delivery-boys/manage-cash')) ? 'active open' : '' ?>">
                <a href="#" class="menu-link menu-toggle">
                    <i class="ion-icon-id-card-outline text-success"></i>
                    <div data-i18n="Layouts">Livreurs</div>
                </a>
                <ul class="menu-sub">
                    <?php if (has_permissions('read', 'delivery_boy')) { ?>
                        <li
                            class="menu-item <?= ($current_url == base_url('admin/delivery-boys/manage-delivery-boy')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/delivery-boys/manage-delivery-boy') ?>" class="menu-link ">
                                <div data-i18n="Layouts">Gérer les livreurs</div>
                            </a>
                        </li>
                    <?php } ?>

                    <?php if (has_permissions('read', 'fund_transfer')) { ?>
                        <li class="menu-item <?= ($current_url == base_url('admin/fund-transfer')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/fund-transfer/') ?>" class="menu-link">
                                <div data-i18n="Layouts">Transfert de fonds</div>
                            </a>
                        </li>
                    <?php } ?>

                    <?php if (has_permissions('read', 'manage_cash')) { ?>
                        <li
                            class="menu-item <?= ($current_url == base_url('admin/delivery-boys/manage-cash')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/delivery-boys/manage-cash') ?>" class="menu-link">
                                <div data-i18n="Layouts">Gérer la collecte</div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>


        <!-- Demandes de paiement -->
        <?php if (has_permissions('read', 'payment_request')) { ?>
            <li class="menu-item <?= ($current_url == base_url('admin/payment-request')) ? 'active' : '' ?>">
                <a href="<?= base_url('admin/payment-request') ?>" class="menu-link">
                    <i class="ion-icon-cash-outline text-primary"></i>
                    <div data-i18n="Layouts">Demandes de paiement</div>
                </a>
            </li>
        <?php } ?>

        <!-- Send notification -->
        <?php if (has_permissions('read', 'send_notification')) { ?>
            <li
                class="menu-item <?= ($current_url == base_url('admin/Notification-settings/manage-notifications')) ? 'active' : '' ?>">
                <a href="<?= base_url('admin/Notification-settings/manage-notifications') ?>" class="menu-link">
                    <i class="ion-icon-paper-plane-outline text-warning"></i>
                    <div data-i18n="Layouts">Envoyer notification</div>
                </a>
            </li>
        <?php } ?>

        <!-- Message personnalisé -->
        <?php if (has_permissions('read', 'custom_notifications')) { ?>
            <li class="menu-item <?= ($current_url == base_url('admin/custom_notification')) ? 'active' : '' ?>">
                <a href="<?= base_url('admin/custom_notification') ?>" class="menu-link">
                    <i class="ion-icon-notifications-outline text-info"></i>
                    <div data-i18n="Layouts">Message personnalisé</div>
                </a>
            </li>
        <?php } ?>


        <!-- Système -->
        <?php if (has_permissions('read', 'settings')) { ?>
            <li
                class="menu-item <?=
                                    ($current_url == base_url('admin/Setting/system_page') || ($current_url == base_url('admin/setting') ||
                                        $current_url == base_url('admin/system-health') || $current_url == base_url('admin/email-settings') ||
                                        $current_url == base_url('admin/payment-settings') || $current_url == base_url('admin/shipping-settings') ||
                                        $current_url == base_url('admin/time-slots') || $current_url == base_url('admin/notification-settings') ||
                                        $current_url == base_url('admin/contact-us') || $current_url == base_url('admin/about-us') ||
                                        $current_url == base_url('admin/privacy-policy') || $current_url == base_url('admin/privacy-policy/return-policy') ||
                                        $current_url == base_url('admin/privacy-policy/shipping-policy') || $current_url == base_url('admin/admin-privacy-policy') ||
                                        $current_url == base_url('admin/delivery-boy-privacy-policy') || $current_url == base_url('admin/client-api-keys') ||
                                        $current_url == base_url('admin/updater') || $current_url == base_url('admin/purchase-code'))) ? 'active' : '' ?>">
                <a href="<?= base_url('admin/Setting/system_page/') ?>" class="menu-link">
                    <i class="ion-icon-cog-outline text-danger"></i>
                    <div data-i18n="Without menu">Système</div>
                </a>
            </li>
        <?php } ?>

        <!-- web setting -->
        <?php if (has_permissions('read', 'web_settings')) { ?>
            <li
                class="menu-item <?= $current_url == base_url('admin/Web_setting/web_settings_page') || ($current_url == base_url('admin/web-setting') || $current_url == base_url('admin/themes') || $current_url == base_url('admin/language') || $current_url == base_url('admin/web-setting/firebase')) ? 'active ' : '' ?>">
                <a href="<?= base_url('admin/Web_setting/web_settings_page/') ?>" class="menu-link">
                    <i class="ion-icon-earth-outline text-success"></i>
                    <div data-i18n="Layouts">Paramètres Web</div>
                </a>

            </li>
        <?php } ?>

        <!-- pickup location -->
        <?php if (has_permissions('read', 'pickup_location')) { ?>
            <li
                class="menu-item <?= ($current_url == base_url('admin/Retrait_location/manage-pickup-locations')) ? 'active' : '' ?>">
                <a href="<?= base_url('admin/Retrait_location/manage-pickup-locations') ?>" class="menu-link">
                    <i class="ion-icon-car-sport-outline text-primary"></i>
                    <div data-i18n="Layouts">Point de retrait</div>
                </a>
            </li>
        <?php } ?>
        <!-- Emplacement -->
        <?php if (has_permissions('read', 'area') || has_permissions('read', 'city') || has_permissions('read', 'zipcodes')) { ?>
            <li
                class="menu-item  <?= ($current_url == base_url('admin/area/manage-zipcodes') || $current_url == base_url('admin/area/manage-cities') || $current_url == base_url('admin/area/manage-areas') || $current_url == base_url('admin/area/manage_countries') || $current_url == base_url('admin/area/location-bulk-upload')) ? 'active open' : '' ?>">
                <a href="#" class="menu-link menu-toggle">
                    <i class="ion-icon-location-outline text-warning"></i>
                    <div data-i18n="Layouts">Emplacement</div>
                </a>
                <ul class="menu-sub">
                    <?php if (has_permissions('read', 'zipcodes')) { ?>
                        <li class="menu-item <?= ($current_url == base_url('admin/area/manage-zipcodes')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/area/manage-zipcodes') ?>" class="menu-link">

                                <div data-i18n="Layouts">Codes postaux</div>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if (has_permissions('read', 'city')) { ?>
                        <li class="menu-item  <?= ($current_url == base_url('admin/area/manage-cities')) ? 'active' : '' ?> ">
                            <a href="<?= base_url('admin/area/manage-cities') ?>" class="menu-link">

                                <div data-i18n="Layouts">Ville</div>
                            </a>
                        </li>
                    <?php } ?>
                    <!-- <?php if (has_permissions('read', 'area')) { ?>
                        <li class="menu-item  <?= ($current_url == base_url('admin/area/manage-areas')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/area/manage-areas') ?>" class="menu-link">

                                <div data-i18n="Layouts">Areas</div>
                            </a>
                        </li>
                    <?php } ?> -->
                    <?php if (has_permissions('read', 'area')) { ?>
                        <li class="menu-item  <?= ($current_url == base_url('admin/area/manage_countries')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/area/manage_countries') ?>" class="menu-link">

                                <div data-i18n="Layouts">Pays</div>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if (has_permissions('read', 'area') && has_permissions('read', 'city') && has_permissions('read', 'zipcodes')) { ?>
                        <li
                            class="menu-item  <?= ($current_url == base_url('admin/area/location-bulk-upload')) ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/area/location-bulk-upload') ?>" class="menu-link">

                                <div data-i18n="Layouts">Téléversement en masse </div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>

        <!-- Rapports -->
        <?php if (has_permissions('read', 'reports')) { ?>
            <li
                class="menu-item <?= ($current_url == base_url('admin/invoice/sales-invoice') || $current_url == base_url('admin/invoice/inventory-report')) ? 'active open' : '' ?>">
                <a href="#" class="menu-link menu-toggle">
                    <i class="ion-icon-pie-chart-outline text-info"></i>
                    <div data-i18n="Layouts">Rapports</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?= ($current_url == base_url('admin/invoice/sales-invoice')) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/invoice/sales-invoice') ?>" class="menu-link">
                            <div data-i18n="Layouts">Rapport de ventes</div>
                        </a>
                    </li>
                    <li
                        class="menu-item <?= ($current_url == base_url('admin/invoice/inventory-report')) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/invoice/inventory-report') ?>" class="menu-link">
                            <div data-i18n="Layouts">Rapport d'inventaire</div>
                        </a>
                    </li>
                </ul>
            </li>
        <?php } ?>

        <!-- FAQ -->
        <?php if (has_permissions('read', 'faq')) { ?>
            <li class="menu-item <?= ($current_url == base_url('admin/faq')) ? 'active' : '' ?>">
                <a href="<?= base_url('admin/faq/') ?>" class="menu-link">
                    <i class="ion-icon-help-circle-outline text-danger"></i>
                    <div data-i18n="Layouts">FAQ</div>
                </a>
            </li>
        <?php }
        ?>
        <?php
        if (has_permissions('read', 'system_user')) {
        ?>
            <!-- Système users -->
            <li class="menu-item <?= ($current_url == base_url('admin/system-users')) ? 'active' : '' ?>">
                <a href="<?= base_url('admin/system-users/') ?>" class="menu-link">
                    <i class="ion-icon-person-circle-outline text-success"></i>
                    <div data-i18n="Layouts">Utilisateurs système</div>
                </a>
            </li>
        <?php
        } ?>
    </ul>


</aside>


<!-- /.sidebar -->
<!-- / Menu -->