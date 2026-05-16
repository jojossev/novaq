<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content-header mt-4">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h4>View Sales Invoice</h4>
                </div>
                <div class="col-sm-4 d-flex justify-content-end">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Accueil</a></li>
                        <li class="breadcrumb-item active">Sales Invoice</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 main-content">
                    <div class="card content-area p-4">
                        <div class="card-innr">
                            <div class="gaps-1-5x row d-flex adjust-items-center">
                                <div class="form-group col-md-4">
                                    <label>Plage de dates:</label>
                                    <div class="input-group">
                                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                                        <input type="text" class="form-control float-right" id="datepicker">
                                        <input type="hidden" id="start_date" class="form-control float-right">
                                        <input type="hidden" id="end_date" class="form-control float-right">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Filter By status</label>
                                    <select id="order_status" name="order_status" placeholder="Sélectionner le statut" required="" class="form-control">
                                        <option value="">Toutes les commandes</option>
                                        <option value="awaiting">En attente</option>
                                        <option value="received">Reçu</option>
                                        <option value="processed">Traité</option>
                                        <option value="shipped">Expédié</option>
                                        <option value="delivered">delivered</option>
                                        <option value="cancelled">Annulé</option>
                                        <option value="returned">Retourné</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="row mt-2">
                                        <div class="col-md-4 d-flex align-items-center pt-4">
                                            <button type="button" class="btn btn-outline-primary btn-sm" onclick="status_date_wise_search()">Rechercher</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table class='table-striped' data-toggle="table" data-url="<?= base_url('admin/Invoice/get_sales_list') ?>" data-click-to-select="true" data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-show-columns="true" data-show-refresh="true" data-trim-on-search="false" data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true" data-toolbar="" data-show-export="true" data-maintain-selected="true" data-export-types='["txt","excel"]' data-export-options='{
                        "fileNom": "sales-list",
                        "ignoreColumn": ["operate"] 
                        }' data-query-params="sales_invoice_query_params">
                                <thead>
                                    <tr>
                                        <th data-field="id" data-sortable='true'>ID Commande</th>
                                        <th data-field="name" data-sortable='true'>Nom utilisateur</th>
                                        <th data-field="mobile" data-sortable='true'>Mobile</th>
                                        <th data-field="address" data-sortable='true'>Adresse</th>
                                        <th data-field="final_total" data-sortable='true'>Total final(₹)</th>
                                        <th data-field="status" data-sortable='true'>Statut</th>
                                        <th data-field="date_added" data-sortable='true'>Date de commande</th>
                                        <th data-field="operate" data-sortable='true'>Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section><!-- /.content -->
</div>