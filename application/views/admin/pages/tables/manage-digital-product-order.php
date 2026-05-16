<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Gérer Commandes</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Accueil</a></li>
                        <li class="breadcrumb-item active">Commandes</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div id="product_faq_value_id" class="modal fade edit-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-m ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitre">Gérer Produit numérique</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">

                                </button>
                            </div>

                            <div class="modal-body ">
                                <form class="form-horizontal form-submit-event" action="<?= base_url('admin/orders/send_digital_product'); ?>" method="POST" enctype="multipart/form-data">

                                    <div class="card-body">
                                        <input type="hidden" name="order_id" value="<?= $this->input->get('edit_id') ?>">
                                        <div class="row form-group">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="product_name">Client E-mail-ID </label>
                                                    <input type="text" class="form-control" id="email" name="email" value="<?= $fetched[0]['email'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="product_name">Message </label>
                                                    <input type="text" class="form-control" id="message" placeholder="Enter Message for email" name="message" value="">
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2" id="digital_media_container">
                                                <label for="image" class="ml-2">File <span class='text-danger text-sm'>*</span></label>
                                                <div class='col-md-6'><a class="uploadFile img btn btn-primary text-white btn-sm" data-input='pro_input_file' data-isremovable='1' data-media_type='archive,document' data-is-multiple-uploads-allowed='0' data-toggle="modal" data-target="#media-upload-modal" value="Téléverser une photo"><i class='fa fa-upload'></i> Upload</a></div>
                                                <div class="container-fluid row image-upload-section">
                                                    <div class="col-md-6 col-12 shadow p-3 mb-5 bg-white rounded m-4 text-center grow image d-none">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success mt-3" id="submit_btn" value="Enregistrer"><?= labels('send_mail', "Envoyer l'e-mail") ?></button>
                                    </div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div>

                <div class="col-md-12 main-content">
                    <div class="card content-area p-4">
                        <div class="card-innr">
                            <div class="gaps-1-5x row d-flex adjust-items-center">
                                <h5 class="col">Aperçu des commandes</h5>

                                <div class="row col-md-12">
                                    <div class="form-group col-md-4">
                                        <label>Plage de dates:</label>
                                        <div class="input-group col-md-12">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>
                                            <input type="text" class="form-control float-right" id="datepicker">
                                            <input type="hidden" id="start_date" class="form-control float-right">
                                            <input type="hidden" id="end_date" class="form-control float-right">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- Filter By payment  -->
                                    <div class="form-group col-md-4">
                                        <div>
                                            <label>Filter By Méthode de paiement</label>
                                            <select id="payment_method" name="payment_method" placeholder="Select Méthode de paiement" required="" class="form-control">
                                                <option value="">Toutes les méthodes de paiement</option>
                                                <option value="Paypal">Paypal</option>
                                                <option value="RazorPay">RazorPay</option>
                                                <option value="Paystack">Paystack</option>
                                                <option value="Flutterwave">Flutterwave</option>
                                                <option value="Paytm">Paytm</option>
                                                <option value="Stripe">Stripe</option>
                                                <option value="bank_transfer">Virement bancaire directs</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 d-flex align-items-center pt-4">
                                        <button type="button" class="btn btn-outline-primary btn-sm text-primary" onclick="status_date_wise_search()">Filter</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <input type='hidden' id='order_user_id' value='<?= (isset($_GET['user_id']) && !empty($_GET['user_id'])) ? $_GET['user_id'] : '' ?>'>
                        <input type='hidden' id='order_seller_id' value='<?= (isset($_GET['seller_id']) && !empty($_GET['seller_id'])) ? $_GET['seller_id'] : '' ?>'>
                        <div class="row col-md-6">
                            <div class="row col-md-4 pull-right">
                                <a href="#" class="btn btn-primary btn-sm add_promo_code_discount" title="If you found Code promo Discount not crediting using cron job you can update Code promo Discount from here!">Settle Code promo Discount</a>
                            </div>
                        </div>
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
                                <table class='table-striped' data-toggle="table" data-url="<?= base_url('admin/orders/view_digital_product_orders') ?>" data-click-to-select="true" data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-show-columns="true" data-show-refresh="true" data-trim-on-search="false" data-sort-name="o.id" data-sort-order="desc" data-mobile-responsive="true" data-toolbar="" data-show-export="true" data-maintain-selected="true" data-export-types='["txt","excel","csv"]' data-export-options='{"fileNom": "orders-list","ignoreColumn": ["state"] }' data-query-params="orders_query_params">
                                    <thead>
                                        <tr>
                                            <th data-field="id" data-sortable='true' data-footer-formatter="totalFormatter">ID Commande</th>
                                            <th data-field="user_id" data-sortable='true' data-visible="false">ID utilisateur</th>
                                            <th data-field="qty" data-sortable='true' data-visible="false">Qté</th>
                                            <th data-field="name" data-sortable='true'>Nom utilisateur</th>
                                            <th data-field="sellers" data-sortable='true'>Vendeurs</th>
                                            <th data-field="mobile" data-sortable='true' data-visible='false'>Mobile</th>
                                            <th data-field="notes" data-sortable='false' data-visible='false'>Notes cmd.</th>
                                            <th data-field="items" data-sortable='true' data-visible="false">Items</th>
                                            <th data-field="total" data-sortable='true' data-visible="true">Total(<?= $curreny ?>)</th>
                                            <th data-field="delivery_charge" data-sortable='true' data-footer-formatter="delivery_chargeFormatter">Frais livr.</th>
                                            <th data-field="wallet_balance" data-sortable='true' data-visible="true">Portefeuille utilisé(<?= $curreny ?>)</th>
                                            <th data-field="promo_code" data-sortable='true' data-visible="false">Code promo</th>
                                            <th data-field="promo_discount" data-sortable='true' data-visible="true">Remise promo(<?= $curreny ?>)</th>
                                            <th data-field="final_total" data-sortable='true'>Total final(<?= $curreny ?>)</th>
                                            <th data-field="payment_method" data-sortable='true' data-visible="true">Méthode de paiement</th>
                                            <th data-field="address" data-sortable='true' data-visible='false'>Adresse</th>
                                            <th data-field="delivery_date" data-sortable='true' data-visible='false'>Livraison Date</th>
                                            <th data-field="delivery_time" data-sortable='true' data-visible='false'>Livraison Time</th>
                                            <th data-field="date_added" data-sortable='true'>Date de commande</th>
                                            <th data-field="operate">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div id="order_items_table" class="tab-pane fade"><br>
                                <table class='table-striped' data-toggle="table" data-url="<?= base_url('admin/orders/view_digital_product_order_items') ?>" data-click-to-select="true" data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-show-columns="true" data-show-refresh="true" data-trim-on-search="false" data-sort-name="oi.id" data-sort-order="desc" data-mobile-responsive="true" data-toolbar="" data-show-export="true" data-maintain-selected="true" data-export-types='["txt","excel","csv"]' data-export-options='{"fileNom": "order-item-list","ignoreColumn": ["state"] }' data-query-params="orders_query_params">
                                    <thead>
                                        <tr>
                                            <th data-field="id" data-sortable='true' data-footer-formatter="totalFormatter">ID</th>
                                            <th data-field="order_item_id" data-sortable='true'>ID de l'article commandé</th>
                                            <th data-field="order_id" data-sortable='true'>ID Commande</th>
                                            <th data-field="user_id" data-sortable='true' data-visible="false">ID utilisateur</th>
                                            <th data-field="seller_id" data-sortable='true' data-visible="false">Seller ID</th>
                                            <th data-field="is_credited" data-sortable='true' data-visible="false">Commission</th>
                                            <th data-field="quantity" data-sortable='true' data-visible="false">Quantité</th>
                                            <th data-field="username" data-sortable='true'>Nom utilisateur</th>
                                            <th data-field="seller_name" data-sortable='true'>Seller Nom</th>
                                            <th data-field="product_name" data-sortable='true'>Nom du produit</th>
                                            <th data-field="mobile" data-sortable='true' data-visible='false'>Mobile</th>
                                            <th data-field="sub_total" data-sortable='true' data-visible="true">Total(<?= $curreny ?>)</th>
                                            <th data-field="delivery_boy" data-sortable='true' data-visible='false'>Livré par</th>
                                            <th data-field="delivery_boy_id" data-sortable='true' data-visible='false'>ID livreur</th>
                                            <th data-field="product_variant_id" data-sortable='true' data-visible='false'>ID variante produit</th>
                                            <th data-field="delivery_date" data-sortable='true' data-visible='false'>Livraison Date</th>
                                            <th data-field="delivery_time" data-sortable='true' data-visible='false'>Livraison Time</th>
                                            <th data-field="updated_by" data-sortable='true' data-visible="true">Mis à jour par</th>
                                            <th data-field="status" data-sortable='true' data-visible='false'>Statut</th>
                                            <th data-field="active_status" data-sortable='true' data-visible='true'>Statut actif</th>
                                            <th data-field="date_added" data-sortable='true'>Date de commande</th>
                                            <th data-field="operate">Action</th>
                                            <th data-field="send_mail">Envoyer l'e-mail</th>
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