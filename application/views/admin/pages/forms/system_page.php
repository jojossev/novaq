<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content-header mt-4">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h4>Paramètres système</h4>
                </div>
                <div class="col-sm-4 d-flex justify-content-end">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Accueil</a>
                        </li>
                        <li class="breadcrumb-item active">Paramètres système</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row col-12 d-flex">
                        <?php if (has_permissions('read', 'store_settings')) { ?>
                            <div class="col-md-3">
                                <a href="<?= base_url('admin/setting') ?>">
                                    <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                        <div class="card-body card-hover">
                                            <div
                                                class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                                <i
                                                    class="fas fa-store nav-icon  link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                            </div>
                                            <div class="d-flex flex-column ">
                                                <span class="fw-semibold d-block col-md-12 h7 mt-4">Paramètres boutique <i
                                                        class='bx bxs-right-arrow-circle'></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                        <div class="col-md-3">
                            <a href="<?= base_url('admin/system-health') ?>">
                                <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                    <div class="card-body card-hover">
                                        <div
                                            class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                            <i
                                                class="fas fa-heartbeat nav-icon  link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                        </div>
                                        <div class="d-flex flex-column ">
                                            <span class="fw-semibold d-block col-md-12 h7 mt-4">Santé système <i
                                                    class='bx bxs-right-arrow-circle'></i></span>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>

                        <?php if (has_permissions('read', 'email_settings')) { ?>
                            <div class="col-md-3">
                                <a href="<?= base_url('admin/email-settings') ?>">
                                    <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                        <div class="card-body card-hover">
                                            <div
                                                class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                                <i
                                                    class="fas fa-envelope-open-text link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                            </div>

                                            <div class="d-flex flex-column ">
                                                <span class="fw-semibold d-block col-md-12 h7 mt-4">Paramètres e-mail <i
                                                        class='bx bxs-right-arrow-circle'></i></span>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                        <?php if (has_permissions('read', 'payment_methods_settings')) { ?>
                            <div class="col-md-3">
                                <a href="<?= base_url('admin/payment-settings') ?>">
                                    <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                        <div class="card-body card-hover">
                                            <div
                                                class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                                <i
                                                    class="fas fa-rupee-sign link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                            </div>

                                            <div class="d-flex flex-column ">
                                                <span class="fw-semibold d-block col-md-12 h7 mt-4">Méthodes de paiement <i
                                                        class='bx bxs-right-arrow-circle'></i></span>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                        <?php if (has_permissions('read', 'shipping_settings')) { ?>
                            <div class="col-md-3">
                                <a href="<?= base_url('admin/shipping-settings') ?>">
                                    <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                        <div class="card-body card-hover">
                                            <div
                                                class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                                <i
                                                    class="fas fa-rocket  link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                            </div>

                                            <div class="d-flex flex-column ">
                                                <span class="fw-semibold d-block col-md-12 h7 mt-4">Méthodes de livraison <i
                                                        class='bx bxs-right-arrow-circle'></i></span>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                        <?php if (has_permissions('read', 'time_slot_settings')) { ?>
                            <div class="col-md-3">
                                <a href="<?= base_url('admin/time-slots') ?>">
                                    <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                        <div class="card-body card-hover">
                                            <div
                                                class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                                <i
                                                    class="fas fa-calendar-alt link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                            </div>

                                            <div class="d-flex flex-column ">
                                                <span class="fw-semibold d-block col-md-12 h7 mt-4">Créneaux horaires <i
                                                        class='bx bxs-right-arrow-circle'></i></span>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                        <?php if (has_permissions('read', 'notification_setting')) { ?>
                            <div class="col-md-3">
                                <a href="<?= base_url('admin/notification-settings') ?>">
                                    <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                        <div class="card-body card-hover">
                                            <div
                                                class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                                <i
                                                    class="fa fa-bell link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                            </div>

                                            <div class="d-flex flex-column ">
                                                <span class="fw-semibold d-block col-md-12 h7 mt-4">Paramètres de notification <i
                                                        class='bx bxs-right-arrow-circle'></i></span>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                        <?php if (has_permissions('read', 'authentication_settings')) { ?>
                            <div class="col-md-3">
                                <a href="<?= base_url('admin/authentication-settings') ?>">
                                    <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                        <div class="card-body card-hover">
                                            <div
                                                class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                                <i
                                                    class="fa fa-cogs link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                            </div>

                                            <div class="d-flex flex-column ">
                                                <span class="fw-semibold d-block col-md-12 h7 mt-4">Paramètres d'authentification
                                                    <i class='bx bxs-right-arrow-circle'></i></span>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                        <?php if (has_permissions('read', 'sms_gateway_settings')) { ?>
                            <div class="col-md-3">
                                <a href="<?= base_url('admin/sms-gateway-settings') ?>">
                                    <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                        <div class="card-body card-hover">
                                            <div
                                                class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                                <i
                                                    class="fa fa-sms link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                            </div>

                                            <div class="d-flex flex-column ">
                                                <span class="fw-semibold d-block col-md-12 h7 mt-4">Paramètres passerelle SMS <i
                                                        class='bx bxs-right-arrow-circle'></i></span>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>


                        <div class="col-md-3">
                            <a href="<?= base_url('admin/contact-us') ?>">
                                <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                    <div class="card-body card-hover">
                                        <div
                                            class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                            <i
                                                class="fa fa-phone-alt link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                        </div>

                                        <div class="d-flex flex-column ">
                                            <span class="fw-semibold d-block col-md-12 h7 mt-4">Nous contacter <i
                                                    class='bx bxs-right-arrow-circle'></i></span>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="<?= base_url('admin/about-us') ?>">
                                <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                    <div class="card-body card-hover">
                                        <div
                                            class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                            <i
                                                class="fas fa-info-circle link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                        </div>

                                        <div class="d-flex flex-column ">
                                            <span class="fw-semibold d-block col-md-12 h7 mt-4">À propos <i
                                                    class='bx bxs-right-arrow-circle'></i></span>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>

                        <?php if (has_permissions('read', 'privacy_policy')) { ?>
                            <div class="col-md-3">
                                <a href="<?= base_url('admin/privacy-policy') ?>">
                                    <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                        <div class="card-body card-hover">
                                            <div
                                                class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                                <i
                                                    class="fa fa-user-secret link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                            </div>

                                            <div class="d-flex flex-column ">
                                                <span class="fw-semibold d-block col-md-12 h7 mt-4">Politique de confidentialité <i
                                                        class='bx bxs-right-arrow-circle'></i></span>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                        <?php if (has_permissions('read', 'return_policy')) { ?>
                            <div class="col-md-3">
                                <a href="<?= base_url('admin/privacy-policy/return-policy') ?>">
                                    <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                        <div class="card-body card-hover">
                                            <div
                                                class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                                <i
                                                    class="fa fa-undo link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                            </div>

                                            <div class="d-flex flex-column ">
                                                <span class="fw-semibold d-block col-md-12 h7 mt-4">Politique de retour <i
                                                        class='bx bxs-right-arrow-circle'></i></span>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                        <?php if (has_permissions('read', 'shipping_policy')) { ?>
                            <div class="col-md-3">
                                <a href="<?= base_url('admin/privacy-policy/shipping-policy') ?>">
                                    <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                        <div class="card-body card-hover">
                                            <div
                                                class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                                <i
                                                    class="fa fa-shipping-fast link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                            </div>

                                            <div class="d-flex flex-column ">
                                                <span class="fw-semibold d-block col-md-12 h7 mt-4">Politique de livraison <i
                                                        class='bx bxs-right-arrow-circle'></i></span>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>


                        <?php if (has_permissions('read', 'admin_policies')) { ?>
                            <div class="col-md-3">
                                <a href="<?= base_url('admin/admin-privacy-policy') ?>">
                                    <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                        <div class="card-body card-hover">
                                            <div
                                                class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                                <i
                                                    class="fa fa-user link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                            </div>

                                            <div class="d-flex flex-column ">
                                                <span class="fw-semibold d-block col-md-12 h7 mt-4">Politiques administrateur <i
                                                        class='bx bxs-right-arrow-circle'></i></span>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                        <?php if (has_permissions('read', 'delivery_boy_policies')) { ?>
                            <div class="col-md-3">
                                <a href="<?= base_url('admin/delivery-boy-privacy-policy') ?>">
                                    <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                        <div class="card-body card-hover">
                                            <div
                                                class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                                <i
                                                    class="fas fa-motorcycle link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                            </div>

                                            <div class="d-flex flex-column ">
                                                <span class="fw-semibold d-block col-md-12 h7 mt-4">Politiques livreur<i
                                                        class='bx bxs-right-arrow-circle'></i></span>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                        <?php if (has_permissions('read', 'client_api_keys')) { ?>
                            <div class="col-md-3">
                                <a href="<?= base_url('admin/client-api-keys/') ?>">
                                    <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                        <div class="card-body card-hover">
                                            <div
                                                class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                                <i
                                                    class="fa fa-key link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                            </div>

                                            <div class="d-flex flex-column ">
                                                <span class="fw-semibold d-block col-md-12 h7 mt-4">Clés API client <i
                                                        class='bx bxs-right-arrow-circle'></i></span>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                        <?php if (has_permissions('read', 'system_update')) { ?>
                        <div class="col-md-3">
                            <a href="<?= base_url('admin/updater') ?>">
                                <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                    <div class="card-body card-hover">
                                        <div
                                            class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                            <i
                                                class="fas fa-sync link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                        </div>

                                        <div class="d-flex flex-column ">
                                            <span class="fw-semibold d-block col-md-12 h7 mt-4">Mise à jour système <i
                                                    class='bx bxs-right-arrow-circle'></i></span>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php } ?>

                        <div class="col-md-3">
                            <a href="<?= base_url('admin/purchase-code') ?>">
                                <div class="card border border-secondary-secondary-secondary-secondary mt-4">
                                    <div class="card-body card-hover">
                                        <div
                                            class="d-flex flex-column justify-content-center rounded bg-secondary circle">
                                            <i
                                                class="fas fa-check link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                        </div>

                                        <div class="d-flex flex-column ">
                                            <span class="fw-semibold d-block col-md-12 h7 mt-4">Enregistrement système <i
                                                    class='bx bxs-right-arrow-circle'></i></span>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>




                    </div>

                    <!--/.card-->
                </div>
                <!--/.col-md-12-->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>