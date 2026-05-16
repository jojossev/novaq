<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content-header mt-4">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h4>Voir les clients</h4>
                </div>
                <div class="col-sm-4 d-flex justify-content-end">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Accueil</a></li>
                        <li class="breadcrumb-item active">Clients</li>
                    </ol>
                </div>
            </div>
            <div class="modal fade " tabindex="-1" role="dialog" aria-hidden="true" id='customer-address-modal'>
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">View Adresse Details</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">

                            </button>
                        </div>
                        <div class="modal-body p-0">

                            <div class="row">
                                <div class="col-md-12 main-content">
                                    <div class="card content-area p-4">
                                        <div class="card-innr">
                                            <div class="gaps-1-5x"></div>
                                            <table class='table-striped' id='customer-address-table' data-toggle="table" data-url="<?= base_url('admin/customer/get_address') ?>" data-click-to-select="true" data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-show-columns="true" data-show-refresh="true" data-trim-on-search="false" data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true" data-toolbar="" data-show-export="true" data-maintain-selected="true" data-export-types='["txt","excel"]' data-export-options='{
                        "fileNom": "customer-list",
                        "ignoreColumn": ["operate"] 
                        }' data-query-params="queryParams">
                                                <thead>
                                                    <tr>
                                                        <th data-field="id" data-sortable="true">Id</th>
                                                        <th data-field="name" data-sortable="false">Nom utilisateur</th>
                                                        <th data-field="type" data-sortable="false">Type</th>
                                                        <th data-field="mobile" data-sortable="false">Téléphone</th>
                                                        <th data-field="alternate_mobile" data-sortable="false">Téléphone alternatif</th>
                                                        <th data-field="address" data-sortable="false" data-visible="false">Adresse</th>
                                                        <th data-field="landmark" data-sortable="false">Point de repère</th>
                                                        <th data-field="area" data-sortable="false">Zone</th>
                                                        <th data-field="city" data-sortable="false">Ville</th>
                                                        <th data-field="state" data-sortable="false">État</th>
                                                        <th data-field="pincode" data-sortable="false">Code postal</th>
                                                        <th data-field="country" data-sortable="false">Pays</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div><!-- .card-innr -->
                                    </div><!-- .card -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 main-content">
                    <div class="card content-area p-4">
                        <div class="card-innr">
                            <table class='table-striped' data-toggle="table" data-url="<?= base_url('admin/customer/view_customer') ?>" data-side-pagination="server" data-click-to-select="true" data-pagination="true" data-id-field="id" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-show-columns="true" data-show-refresh="true" data-trim-on-search="false" data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true" data-toolbar="#toolbar" data-show-export="true" data-maintain-selected="true" data-export-types='["txt","excel"]' data-query-params="queryParams">
                                <thead>
                                    <tr>
                                        <th data-field="id" data-sortable="true">ID</th>
                                        <th data-field="name" data-sortable="false">Nom</th>
                                        <th data-field="email" data-sortable="true">E-mail</th>
                                        <th data-field="mobile" data-sortable="true">N° mobile</th>
                                        <th data-field="image" data-sortable="false" data-visible="true">image</th>
                                        <th data-field="balance" data-sortable="true">Solde</th>
                                        <th data-field="street" data-sortable="true">Street</th>
                                        <th data-field="area" data-sortable="true">Zone</th>
                                        <th data-field="city" data-sortable="true">Ville</th>
                                        <th data-field="date" data-sortable="false">Date</th>
                                        <th data-field="status" data-sortable="true">Statut</th>
                                        <th data-field="actions" data-sortable="false">Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>