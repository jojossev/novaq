<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid p-3">
            <div class="row">
                <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="transaction_modal"
                    data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="user_name">Suivi de commande</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">

                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-info">
                                            <!-- form start -->
                                            <form class="form-horizontal " id="order_tracking_form"
                                                action="<?= base_url('admin/orders/update-order-tracking/'); ?>"
                                                method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="order_id" id="order_id">
                                                <div class="card-body pad">
                                                    <div class="form-group mt-2">
                                                        <label for="courier_agency">Agence de transport</label>
                                                        <input type="text" class="form-control mt-2"
                                                            name="courier_agency" id="courier_agency"
                                                            placeholder="Agence de transport" />
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <label for="tracking_id">ID de suivi</label>
                                                        <input type="text" class="form-control mt-2" name="tracking_id"
                                                            id="tracking_id" placeholder="ID de suivi" />
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <label for="url">URL</label>
                                                        <input type="text" class="form-control mt-2" name="url" id="url"
                                                            placeholder="URL" />
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <button type="reset" class="btn btn-warning">Réinitialiser</button>
                                                        <button type="submit" class="btn btn-success"
                                                            id="submit_btn">Enregistrer</button>
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->
                                            </form>
                                        </div>
                                        <!--/.card-->
                                    </div>
                                    <!--/.col-md-12-->
                                </div>
                                <!-- /.row -->

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">

                    <a href="<?= base_url('admin/orders/') ?>" class="text-decoration-none">
                        <div class="card card-style">
                            <div class="card-body">
                                <div class="media d-flex align-items-center justify-content-md-between">
                                    <div class="align-self-center text-primary card-icon-div">
                                        <i class="ion-icon-cart4-outline display-4"></i>
                                    </div>
                                    <div class="media-body text-end <?= ($current_url == base_url('admin/orders')) ?>">
                                        <span class="text-muted text-bold-500 card-h5-style mx-2">Commandes</span>
                                        <h3 class="text-bold-600 m-4 card-h3-style"><?= $order_counter ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>


                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <a href="<?= base_url('admin/system-users/') ?>" class="text-decoration-none">
                        <div class="card card-style">
                            <div class="card-body">
                                <div class="media d-flex align-items-center justify-content-md-between">

                                    <div class="align-self-center text-primary card-icon-div">
                                        <i class="ion-ios-personadd-outline display-4"></i>
                                    </div>

                                    <div
                                        class="media-body text-end <?= ($current_url == base_url('admin/system-users')) ?>">
                                        <span class="text-muted text-bold-500 card-h5-style mx-2">Nouvelles inscriptions</span>
                                        <h3 class="text-bold-600 m-4 card-h3-style"><?= $user_counter ?></h3>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <a href="<?= base_url('admin/delivery-boys/manage-delivery-boy') ?>" class="text-decoration-none">
                        <div class="card card-style">
                            <div class="card-body">
                                <div class="media d-flex align-items-center justify-content-md-between">

                                    <div class="align-self-center text-primary card-icon-div">
                                        <i class="ion-ios-people-outline display-4"></i>
                                    </div>

                                    <div
                                        class="media-body text-end <?= ($current_url == base_url('admin/system-users')) ?>">
                                        <span class="text-muted text-bold-500 card-h5-style mx-2">Livreurs</span>
                                        <h3 class="text-bold-600 m-4 card-h3-style"><?= $delivery_boy_counter ?></h3>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <a href="<?= base_url('admin/product/') ?>" class="text-decoration-none">
                        <div class="card card-style">
                            <div class="card-body">
                                <div class="media d-flex align-items-center justify-content-md-between">

                                    <div class="align-self-center text-primary card-icon-div">
                                        <i class="ion-ios-albums-outline display-4"></i>
                                    </div>

                                    <div
                                        class="media-body text-end <?= ($current_url == base_url('admin/system-users')) ?>">
                                        <span class="text-muted text-bold-500 card-h5-style mx-2">Produits</span>
                                        <h3 class="text-bold-600 m-4 card-h3-style"><?= $product_counter ?></h3>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-6 col-12" id="ecommerceChartView">
                    <div class="card chart-height mt-3 h-100">
                        <h3 class="card-title m-3 mb-0">Ventes de produits</h3>
                        <div class="card-header card-header-transparent py-20 border-0 p-2">
                            <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                        href="#scoreLineToJour">Jour</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                        href="#scoreLineToSemaine">Semaine</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                        href="#scoreLineToMois">Mois</a></li>
                            </ul>
                        </div>
                        <div class="widget-content tab-content bg-white p-20">
                            <div class="ct-chart tab-pane active scoreLine" id="scoreLineToJour"></div>
                            <div class="ct-chart tab-pane scoreLine" id="scoreLineToSemaine"></div>
                            <div class="ct-chart tab-pane scoreLine" id="scoreLineToMois"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Catégorie Wise Product's Sales -->
                    <div class="card mt-3 h-100">
                        <h3 class="card-title m-3">Produits par catégorie</h3>
                        <div class="card-body">
                            <div id="piechart_3d" class='piechat_height'></div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6 col-xs-12 mt-4">
                    <div class="alert alert-danger alert-dismissible">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn-close" data-dismiss="alert" aria-hidden="true"></button>
                        </div>
                        <h6><i class="icon fa fa-info"></i> <?= $count_products_availability_status ?> Product(s) sold
                            out!</h6>
                        <a href="<?= base_url('admin/product/?flag=sold') ?>"
                            class="text-decoration-none small-box-footer">Plus d'infos <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <?php $settings = get_settings('system_settings', true); ?>
                <div class="col-md-6 col-xs-12 mt-4">
                    <div class="alert alert-primary alert-dismissible">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn-close" data-dismiss="alert" aria-hidden="true"></button>
                        </div>
                        <h6><i class="icon fa fa-info"></i> <?= $count_products_low_status ?> Product(s) low in
                            stock!<small> (Limite de stock bas
                                <?= isset($settings['low_stock_limit']) ? $settings['low_stock_limit'] : '5' ?>)</small>
                        </h6>
                        <a href="<?= base_url('admin/product/?flag=low') ?>"
                            class="text-decoration-none small-box-footer">Plus d'infos <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <h5 class="fw-bold">Aperçu des commandes</h5>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="card border border-secondary mt-4">
                                <div
                                    class="card-body  d-flex align-items-center justify-content-between order-outline-card">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold d-block mb-1 col-md-12 h7">En attente</span>

                                        <h3 class="card-title mb-2 h8"><?= $status_counts['draft'] ?></h3>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center rounded-circle bg-secondary circle">
                                        <i
                                            class="fa fa-xs fa-history link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="card border border-secondary mt-4">
                                <div
                                    class="card-body  d-flex align-items-center justify-content-between order-outline-card">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold d-block mb-1 col-md-12 h7">Prêt à être retiré</span>
                                        <h3 class="card-title mb-2 h8"><?= $status_counts['ready_to_pickup'] ?></h3>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center rounded-circle bg-secondary circle">
                                        <i
                                            class="fa fa-xs fa-history link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="card border border-secondary mt-4">
                                <div
                                    class="card-body  d-flex align-items-center justify-content-between order-outline-card">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold d-block mb-1 col-md-12 h7">Return Request
                                            En attente</span>
                                        <h3 class="card-title mb-2 h8"><?= $status_counts['return_request_pending'] ?>
                                        </h3>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center rounded-circle bg-secondary circle">
                                        <i
                                            class="fa fa-xs fa-history link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="card border border-secondary mt-4">
                                <div
                                    class="card-body  d-flex align-items-center justify-content-between order-outline-card">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold d-block mb-1 col-md-12 h7">En attente</span>
                                        <h3 class="card-title mb-2 h8"><?= $status_counts['awaiting'] ?></h3>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center rounded-circle bg-secondary circle">
                                        <i
                                            class="fa fa-xs fa-history link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="card border border-primary mt-4 ">
                                <div
                                    class="card-body  d-flex align-items-center justify-content-between order-outline-card">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold d-block mb-1 col-md-12 h7">Reçu</span>
                                        <h3 class="card-title mb-2 h8"><?= $status_counts['received'] ?></h3>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center rounded-circle bg-secondary circle">
                                        <i
                                            class="fa fa-xs fa-level-down-alt link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="card border border-primary mt-4">
                                <div
                                    class="card-body  d-flex align-items-center justify-content-between order-outline-card">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold d-block mb-1 col-md-12 h7">Traité</span>
                                        <h3 class="card-title mb-2 h8"><?= $status_counts['processed'] ?></h3>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center rounded-circle bg-secondary circle">
                                        <i
                                            class="fa fa-xs fa-people-carry link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="card border border-primary mt-4">
                                <div
                                    class="card-body  d-flex align-items-center justify-content-between order-outline-card">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold d-block mb-1 col-md-12 h7">Expédié</span>
                                        <h3 class="card-title mb-2 h8"><?= $status_counts['shipped'] ?></h3>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center rounded-circle bg-secondary circle">
                                        <i
                                            class="fa fa-xs fa-shipping-fast link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="card border border-primary mt-4 ">
                                <div
                                    class="card-body  d-flex align-items-center justify-content-between order-outline-card">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold d-block mb-1 col-md-12 h7">Livré</span>
                                        <h3 class="card-title mb-2 h8"><?= $status_counts['delivered'] ?></h3>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center rounded-circle bg-secondary circle">
                                        <i
                                            class="fa fa-xs fa-user-check link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="card border border-primary mt-4">
                                <div
                                    class="card-body  d-flex align-items-center justify-content-between order-outline-card">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold d-block mb-1 col-md-12 h7">Annulé</span>
                                        <h3 class="card-title mb-2 h8"><?= $status_counts['cancelled'] ?></h3>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center rounded-circle bg-secondary circle">
                                        <i
                                            class="fa fa-xs fa-times-circle link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="card border border-primary mt-4">
                                <div
                                    class="card-body  d-flex align-items-center justify-content-between order-outline-card">
                                    <div class="d-flex flex-column">
                                        <span class="fw-semibold d-block mb-1 col-md-12 h7">Retourné</span>
                                        <h3 class="card-title mb-2 h8"><?= $status_counts['returned'] ?></h3>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center rounded-circle bg-secondary circle">
                                        <i
                                            class="fa fa-xs fa-level-up-alt link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 main-content mt-3">
                    <div class="card content-area p-4">
                        <h5 class="col">Détails de la commande</h5>
                        <div class="card-innr">
                            <div class="gaps-1-5x row d-flex adjust-items-center">
                                <div class="row col-md-12 mt-4">
                                    <div class="form-group col-md-3">
                                        <label>Plage de dates:</label>
                                        <div class="input-group col-md-12">

                                            <input type="text" class="form-control float-right" id="datepicker">
                                            <input type="hidden" id="start_date" class="form-control float-right">
                                            <input type="hidden" id="end_date" class="form-control float-right">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group col-md-2">
                                        <div>
                                            <label>Statut</label>
                                            <select id="order_status" name="order_status" placeholder="Sélectionner le statut"
                                                required="" class="form-control">
                                                <option value="">Toutes les commandes</option>
                                                <option value="awaiting">En attente</option>
                                                <option value="received">Reçu</option>
                                                <option value="processed">Traité</option>
                                                <option value="shipped">Expédié</option>
                                                <option value="delivered">Livré</option>
                                                <option value="cancelled">Annulé</option>
                                                <option value="returned">Retourné</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Filter By payment  -->
                                    <div class="form-group col-md-2">
                                        <div>
                                            <label>Livreur</label>
                                            <select id="delivery_boy" class="form-control">
                                                <option value="">Tous les livreurs</option>
                                                <?php

                                                foreach ($delivery_res as $row) {
                                                    ?>
                                                    <option value="<?= $row['user_id'] ?>" <?= $selected ?>>
                                                        <?= $row['username'] ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <div>
                                            <label>Méthode de paiement</label>
                                            <select id="payment_method" name="payment_method"
                                                placeholder="Select Méthode de paiement" required="" class="form-control">
                                                <option value="">Toutes les méthodes de paiement</option>
                                                <option value="COD">Paiement à la livraison</option>
                                                <option value="Paypal">Paypal</option>
                                                <option value="RazorPay">RazorPay</option>
                                                <option value="Paystack">Paystack</option>
                                                <option value="Flutterwave">Flutterwave</option>
                                                <option value="Paytm">Paytm</option>
                                                <option value="Stripe">Stripe</option>
                                                <option value="Téléphonepe">TéléphonePe</option>
                                                <option value="bank_transfer">Virement bancaire directs</option>
                                                <option value="midtrans">Midtrans</option>
                                                <option value="instamojo">Instamojo</option>
                                                <option value="my_fatoorah">My Fatoorah</option>
                                                <option value="wallet">Wallet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <div>
                                            <label>Type de produit</label>
                                            <select id="order_type" name="order_type" placeholder="Select Type de commande"
                                                required="" class="form-control">
                                                <option value="">Toutes les commandes</option>
                                                <option value="physical_order">Commandes physiques</option>
                                                <option value="digital_order">Commandes numériques</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- FILTER BUTTON -->
                                    <div class="form-group col-md-2 d-flex align-items-center mt-4">

                                        <button type="button" class="btn btn-outline-primary btn-sm me-2"
                                            onclick="status_date_wise_search()">Filter</button>

                                        <button type="button" class="btn btn-outline-danger btn-sm"
                                            onclick="reset_filters()">Réinitialiser</button>

                                    </div>

                                </div>
                            </div>
                            <table class='table-striped' data-toggle="table"
                                data-url="<?= base_url('admin/orders/view_orders') ?>" data-click-to-select="true"
                                data-side-pagination="server" data-pagination="true"
                                data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-show-columns="true"
                                data-show-refresh="true" data-trim-on-search="false" data-sort-name="id"
                                data-sort-order="desc" data-mobile-responsive="true" data-toolbar=""
                                data-show-export="true" data-maintain-selected="true"
                                data-export-types='["txt","excel"]' data-export-options='{
                        "fileNom": "orders-list",
                        "ignoreColumn": ["operate"] 
                        }' data-query-params="home_query_params">
                                <thead>
                                    <tr>
                                        <th data-field="id" data-sortable='true' data-footer-formatter="totalFormatter">
                                            ID Commande</th>
                                        <th data-field="user_id" data-sortable='true' data-visible="false">ID utilisateur</th>
                                        <th data-field="qty" data-sortable='true' data-visible="false">Qté</th>
                                        <th data-field="name" data-sortable='true'>Nom utilisateur</th>
                                        <th data-field="mobile" data-sortable='true' data-visible="false">Mobile</th>
                                        <th data-field="items" data-sortable='true' data-visible="false">Items</th>
                                        <th data-field="total" data-sortable='true' data-visible="true">
                                            Total(<?= $curreny ?>)</th>
                                        <th data-field="delivery_charge" data-sortable='true'
                                            data-footer-formatter="delivery_chargeFormatter" data-visible="true">
                                            Frais livr.</th>
                                        <th data-field="wallet_balance" data-sortable='true' data-visible="true">Wallet
                                            Used(<?= $curreny ?>)</th>
                                        <th data-field="promo_code" data-sortable='true' data-visible="false">Code promo
                                        </th>
                                        <th data-field="promo_discount" data-sortable='true' data-visible="true">Promo
                                            disc.(<?= $curreny ?>)</th>
                                        <th data-field="discount" data-sortable='true' data-visible="false">Discount
                                            <?= $curreny ?>(%)
                                        </th>
                                        <th data-field="final_total" data-sortable='true'>Total final(<?= $curreny ?>)
                                        </th>
                                        <th data-field="deliver_by" data-sortable='true' data-visible='false'>Livré par
                                        </th>
                                        <th data-field="payment_method" data-sortable='true' data-visible="true">Paiement
                                            Method</th>
                                        <th data-field="address" data-sortable='true'>Adresse</th>
                                        <th data-field="notes" data-sortable='false' data-visible='false'>Notes cmd.</th>
                                        <th data-field="delivery_date" data-sortable='true' data-visible='false'>
                                            Livraison Date</th>
                                        <th data-field="delivery_time" data-sortable='true' data-visible='false'>
                                            Livraison Time</th>
                                        <th data-field="status" data-sortable='true' data-visible='false'>Statut</th>
                                        <th data-field="active_status" data-sortable='true' data-visible='true'>Active
                                            Statut</th>
                                        <th data-field="local_pickup" data-sortable='true' data-visible='true'>Retrait
                                        </th>
                                        <th data-field="date_added" data-sortable='true'>Date de commande</th>
                                        <th data-field="operate">Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                </div>
            </div>
        </div>
    </section>
</div>