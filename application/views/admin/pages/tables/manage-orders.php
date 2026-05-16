<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content-header">
        <div class="container-fluid mt-4">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h4>Gérer Commandes</h4>
                </div>
                <div class="col-sm-4 d-flex justify-content-end">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Accueil</a></li>
                        <li class="breadcrumb-item active">Commandes</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">

                <!-- modal for show digital order mails -->

                <div id="digital-order-mails" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitre">E-mails des commandes numériques</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">

                                </button>
                            </div>

                            <div class="modal-body ">
                                <input type="hidden" name="order_id" id="order_id">
                                <input type="hidden" name="order_item_id" id="order_item_id">
                                <table class='table-striped' id="digital_order_mail_table" data-toggle="table"
                                    data-url="<?= base_url('admin/orders/get-digital-order-mails') ?>"
                                    data-click-to-select="true" data-side-pagination="server" data-pagination="true"
                                    data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                                    data-show-columns="true" data-show-refresh="true" data-trim-on-search="false"
                                    data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true"
                                    data-toolbar="" data-show-export="true" data-maintain-selected="true"
                                    data-query-params="digital_order_mails_query_params">
                                    <thead>
                                        <tr>
                                            <th data-field="id" data-sortable='true'
                                                data-footer-formatter="totalFormatter">ID</th>
                                            <th data-field="order_id" data-sortable='true'>ID Commande</th>
                                            <th data-field="order_item_id" data-sortable='true'>ID de l'article commandé</th>
                                            <th data-field="subject" data-sortable='true' data-visible="true">Subject
                                            </th>
                                            <th data-field="message" data-sortable='true' data-visible="false">Message
                                            </th>
                                            <th data-field="file_url" data-sortable='true' data-visible="true">URL du fichier
                                            </th>
                                            <th data-field="mail_date" data-sortable='true' data-visible="false">Mail
                                                Sent Date</th>

                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal for send mail for digital orders -->

                <div id="product_faq_value_id" class="modal fade edit-modal-lg " tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitre">Gérer Produit numérique</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">

                                </button>
                            </div>

                            <div class="modal-body ">
                                <form class="form-horizontal form-submit-event"
                                    action="<?= base_url('admin/orders/send_digital_product'); ?>" method="POST"
                                    enctype="multipart/form-data">

                                    <div class="card-body">
                                        <input type="hidden" name="order_id"
                                            value="<?= $order_item_data[0]['order_id'] ?>">
                                        <input type="hidden" name="order_item_id"
                                            value="<?= $this->input->get('edit_id') ?>">
                                        <input type="hidden" name="username" value="<?= $user_data['username'] ?>">
                                        <div class="row form-group">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="product_name">Client E-mail-ID </label>
                                                    <input type="text" class="form-control" id="email" name="email"
                                                        value="<?= $fetched[0]['email'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="product_name">Subject </label>
                                                    <input type="text" class="form-control" id="subject"
                                                        placeholder="Saisir le sujet de l'e-mail" name="subject" value="">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="product_name">Message </label>
                                                    <textarea type="text" class="form-control textarea addr_editor"
                                                        lignes="6" placeholder="Message pour l'e-mail"
                                                        name="message"><?= isset($product_details[0]['short_description']) ? output_escaping(str_replace('\r\n', '&#13;&#10;', $product_details[0]['short_description'])) : ""; ?></textarea>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-2" id="digital_media_container">
                                                <label for="image" class="ml-2">File <span
                                                        class='text-danger text-sm'>*</span></label>
                                                <div class='col-md-6'><a
                                                        class="uploadFile img btn btn-primary text-white btn-sm"
                                                        data-input='pro_input_file' data-isremovable='1'
                                                        data-media_type='archive,document'
                                                        data-is-multiple-uploads-allowed='0' data-toggle="modal"
                                                        data-target="#media-upload-modal" value="Téléverser une photo"><i
                                                            class='fa fa-upload'></i> Upload</a></div>
                                                <div class="container-fluid row image-upload-section">
                                                    <div
                                                        class="col-md-6 col-12 shadow p-3 mb-5 bg-white rounded m-4 text-center grow image d-none">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success mt-3" id="submit_btn"
                                            value="Enregistrer"><?= labels('send_mail', "Envoyer l'e-mail") ?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal for assign tracking data for order -->
                <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="transaction_modal"
                    data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="user_name">Suivi de commande</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">

                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal " id="order_tracking_form"
                                            action="<?= base_url('admin/orders/update-order-tracking/'); ?>"
                                            method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="order_id" id="order_id">
                                            <input type="hidden" name="order_item_id" id="order_item_id">
                                            <div class="card-body pad p-0">
                                                <div class="form-group mt-2 ">
                                                    <label for="courier_agency">Agence de transport</label>
                                                    <input type="text" class="form-control mt-2" name="courier_agency"
                                                        id="courier_agency" placeholder="Agence de transport" />
                                                </div>
                                                <div class="form-group mt-2 ">
                                                    <label for="tracking_id">ID de suivi</label>
                                                    <input type="text" class="form-control mt-2" name="tracking_id"
                                                        id="tracking_id" placeholder="ID de suivi" />
                                                </div>
                                                <div class="form-group mt-2 ">
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
                <div class="modal fade" id="order-tracking-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Voir le suivi de commande</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">

                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="tab-pane " role="tabpanel" aria-labelledby="product-rating-tab">
                                    <input type="hidden" name="order_id" id="order_id">
                                    <table class='table-striped' id="order_tracking_table" data-toggle="table"
                                        data-url="<?= base_url('admin/orders/get-order-tracking') ?>"
                                        data-click-to-select="true" data-side-pagination="server" data-pagination="true"
                                        data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                                        data-show-columns="true" data-show-refresh="true" data-trim-on-search="false"
                                        data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true"
                                        data-toolbar="" data-show-export="true" data-maintain-selected="true"
                                        data-query-params="order_tracking_query_params">
                                        <thead>
                                            <tr>
                                                <th data-field="id" data-sortable="true">ID</th>
                                                <th data-field="order_id" data-sortable="true">ID Commande</th>
                                                <th data-field="order_item_id" data-sortable="false">ID de l'article commandé</th>
                                                <th data-field="courier_agency" data-sortable="false">Agence de transport
                                                </th>
                                                <th data-field="tracking_id" data-sortable="false">ID de suivi</th>
                                                <th data-field="url" data-sortable="false">URL</th>
                                                <th data-field="date" data-sortable="false">Date</th>
                                                <th data-field="operate" data-sortable="true">Actions</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 main-content">
                    <div class="card content-area p-4">
                        <div class="card-innr">
                            <div class="gaps-1-5x row d-flex adjust-items-center">
                                <h5 class="col">Aperçu des commandes</h5>
                                <div class="row col-12 d-flex">
                                    <div class="col-md-3">
                                        <div class="card border border-secondary mt-4">
                                            <div class="card-body  d-flex align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <span class="fw-semibold d-block mb-1 col-md-12 h7">En attente</span>
                                                    <h3 class="card-title mb-2 h8"><?= $status_counts['awaiting'] ?>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="d-flex flex-column justify-content-center rounded-circle bg-primary circle">
                                                    <i
                                                        class="fa fa-xs fa-history link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card border border-secondary mt-4">
                                            <div class="card-body  d-flex align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <span class="fw-semibold d-block mb-1 col-md-12 h7">Reçu</span>
                                                    <h3 class="card-title mb-2 h8"><?= $status_counts['received'] ?>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="d-flex flex-column justify-content-center rounded-circle bg-primary circle">
                                                    <i
                                                        class="fa fa-xs fa-level-down-alt link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card border border-secondary mt-4">
                                            <div class="card-body  d-flex align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <span class="fw-semibold d-block mb-1 col-md-12 h7">Traité</span>
                                                    <h3 class="card-title mb-2 h8"><?= $status_counts['processed'] ?>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="d-flex flex-column justify-content-center rounded-circle bg-primary circle">
                                                    <i
                                                        class="fa fa-xs fa-people-carry link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-3">
                                        <div class="card border border-secondary mt-4">
                                            <div class="card-body  d-flex align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <span class="fw-semibold d-block mb-1 col-md-12 h7">Expédié</span>
                                                    <h3 class="card-title mb-2 h8"><?= $status_counts['shipped'] ?></h3>
                                                </div>
                                                <div
                                                    class="d-flex flex-column justify-content-center rounded-circle bg-primary circle">
                                                    <i
                                                        class="fa fa-xs fa-shipping-fast link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card border border-secondary mt-4 ">
                                            <div class="card-body  d-flex align-items-center justify-content-between ">
                                                <div class="d-flex flex-column">
                                                    <span class="fw-semibold d-block mb-1 col-md-12 h7">Livré</span>
                                                    <h3 class="card-title mb-2 h8"><?= $status_counts['delivered'] ?>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="d-flex flex-column justify-content-center rounded-circle bg-primary circle">
                                                    <i
                                                        class="fa fa-xs fa-user-check link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card border border-secondary mt-4">
                                            <div class="card-body  d-flex align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <span class="fw-semibold d-block mb-1 col-md-12 h7">Annulé</span>
                                                    <h3 class="card-title mb-2 h8"><?= $status_counts['cancelled'] ?>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="d-flex flex-column justify-content-center rounded-circle bg-primary circle">
                                                    <i
                                                        class="fa fa-xs fa-times-circle link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card border border-secondary mt-4">
                                            <div class="card-body  d-flex align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <span class="fw-semibold d-block mb-1 col-md-12 h7">Retourné</span>
                                                    <h3 class="card-title mb-2 h8"><?= $status_counts['returned'] ?>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="d-flex flex-column justify-content-center rounded-circle bg-primary circle">
                                                    <i
                                                        class="fa fa-xs fa-level-up-alt link-color fa-lg d-flex justify-content-center text-white circle-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                <input type='hidden' id='order_user_id'
                                    value='<?= (isset($_GET['user_id']) && !empty($_GET['user_id'])) ? $_GET['user_id'] : '' ?>'>
                                <?php if (has_permissions('update', 'orders')) { ?>
                                    <div class="row col-md-6">
                                        <div class="row col-md-4 p-4">
                                            <a href="#" class="btn btn-primary btn-sm add_promo_code_discount"
                                                title="If you found Code promo Discount not crediting using cron job you can update Code promo Discount from here!">Settle
                                                Code promo Discount</a>
                                        </div>
                                    </div>
                                <?php } ?>
                                <hr>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#orders_table">Commandes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#order_items_table">Articles commandés</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="orders_table" class="tab-pane active"><br>
                                        <table class='table-striped' data-toggle="table"
                                            data-url="<?= base_url('admin/orders/view_orders') ?>"
                                            data-click-to-select="true" data-side-pagination="server"
                                            data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]"
                                            data-search="true" data-show-columns="true" data-show-refresh="true"
                                            data-trim-on-search="false" data-sort-name="o.id" data-sort-order="desc"
                                            data-mobile-responsive="true" data-toolbar="" data-show-export="true"
                                            data-maintain-selected="true" data-export-types='["txt","excel","csv"]'
                                            data-export-options='{"fileNom": "orders-list","ignoreColumn": ["state"] }'
                                            data-query-params="orders_query_params">
                                            <thead>
                                                <tr>
                                                    <th data-field="id" data-sortable='true'
                                                        data-footer-formatter="totalFormatter">ID Commande</th>
                                                    <th data-field="user_id" data-sortable='true' data-visible="false">
                                                        User
                                                        ID</th>
                                                    <th data-field="qty" data-sortable='true' data-visible="false">Qty
                                                    </th>
                                                    <th data-field="name" data-sortable='true'>Nom utilisateur</th>
                                                    <th data-field="mobile" data-sortable='true'>Mobile</th>
                                                    <th data-field="notes" data-sortable='false' data-visible='true'>O.
                                                        Notes</th>
                                                    <th data-field="items" data-sortable='true' data-visible="false">
                                                        Items
                                                    </th>
                                                    <th data-field="total" data-sortable='true' data-visible="true">
                                                        Total(<?= $curreny ?>)</th>
                                                    <th data-field="delivery_charge" data-sortable='true'
                                                        data-footer-formatter="delivery_chargeFormatter">Frais livr.</th>
                                                    <th data-field="wallet_balance" data-sortable='true'
                                                        data-visible="true">Portefeuille utilisé(<?= $curreny ?>)</th>
                                                    <th data-field="promo_code" data-sortable='true'
                                                        data-visible="false">
                                                        Code promo</th>
                                                    <th data-field="promo_discount" data-sortable='true'
                                                        data-visible="true">Remise promo(<?= $curreny ?>)</th>
                                                    <th data-field="bulk_discount" data-sortable='true'
                                                        data-visible="true">
                                                        Bulk disc.(<?= $curreny ?>)</th>
                                                    <th data-field="final_total" data-sortable='true'>Final
                                                        Total(<?= $curreny ?>)</th>
                                                    <th data-field="payment_method" data-sortable='true'
                                                        data-visible="true">Méthode de paiement</th>
                                                    <th data-field="address" data-sortable='true' data-visible='false'>
                                                        Adresse</th>
                                                    <th data-field="date_added" data-sortable='true'>Date de commande</th>
                                                    <th data-field="operate">Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div id="order_items_table" class="tab-pane fade"><br>
                                        <table class='table-striped' data-toggle="table"
                                            data-url="<?= base_url('admin/orders/view_order_items') ?>"
                                            data-click-to-select="true" data-side-pagination="server"
                                            data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]"
                                            data-search="true" data-show-columns="true" data-show-refresh="true"
                                            data-trim-on-search="false" data-sort-name="oi.id" data-sort-order="desc"
                                            data-mobile-responsive="true" data-toolbar="" data-show-export="true"
                                            data-maintain-selected="true" data-export-types='["txt","excel","csv"]'
                                            data-export-options='{"fileNom": "order-item-list","ignoreColumn": ["state"] }'
                                            data-query-params="orders_query_params">
                                            <thead>
                                                <tr>
                                                    <th data-field="id" data-sortable='true'
                                                        data-footer-formatter="totalFormatter">ID</th>
                                                    <th data-field="order_item_id" data-sortable='true'>ID de l'article commandé
                                                    </th>
                                                    <th data-field="order_id" data-sortable='true'>ID Commande</th>
                                                    <th data-field="user_id" data-sortable='true' data-visible="false">
                                                        User
                                                        ID</th>
                                                    <th data-field="is_credited" data-sortable='true'
                                                        data-visible="false">
                                                        Commission</th>
                                                    <th data-field="quantity" data-sortable='true' data-visible="false">
                                                        Quantité</th>
                                                    <th data-field="username" data-sortable='true'>Nom utilisateur</th>
                                                    <th data-field="product_name" data-sortable='true'>Nom du produit</th>
                                                    <th data-field="mobile" data-sortable='true' data-visible='false'>
                                                        Mobile
                                                    </th>
                                                    <th data-field="sub_total" data-sortable='true' data-visible="true">
                                                        Total(<?= $curreny ?>)</th>
                                                    <th data-field="delivery_boy" data-sortable='true'
                                                        data-visible='false'>
                                                        Livré par</th>
                                                    <th data-field="delivery_boy_id" data-sortable='true'
                                                        data-visible='false'>ID livreur</th>
                                                    <th data-field="product_variant_id" data-sortable='true'
                                                        data-visible='false'>ID variante produit</th>
                                                    <th data-field="updated_by" data-sortable='true'
                                                        data-visible="false">
                                                        Mis à jour par</th>
                                                    <th data-field="status" data-sortable='true' data-visible='false'>
                                                        Statut
                                                    </th>
                                                    <th data-field="active_status" data-sortable='true'
                                                        data-visible='true'>
                                                        Statut actif</th>
                                                    <th data-field="transaction_status" data-sortable='true'
                                                        data-visible='true'>Statut de la transaction</th>
                                                    <th data-field="date_added" data-sortable='true'>Date de commande</th>
                                                    <th data-field="operate">Action</th>
                                                    <th data-field="mail_status">Statut e-mail</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>

                            </div><!-- .card-innr -->
                        </div><!-- .card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>