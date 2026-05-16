<div class="content-wrapper">
    <section class="content-header mt-4">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h4>Adresses clients</h4>
                </div>
                <div class="col-sm-4 d-flex justify-content-end">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Accueil</a></li>
                        <li class="breadcrumb-item active">Adresses clients</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 main-content">
                    <div class="card content-area p-4">
                        <div class="card-innr">
                            <div class="gaps-1-5x"></div>
                            <input type='hidden' id='address_user_id' value='<?= (isset($view_id) && !empty($view_id)) ? $view_id : '' ?>'>
                            <table class='table-striped' id='customer-address-table' data-toggle="table" data-url="<?= base_url('admin/customer/get_address') ?>" data-click-to-select="true" data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-show-columns="true" data-show-refresh="true" data-trim-on-search="false" data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true" data-toolbar="" data-show-export="true" data-export-types='["txt","excel"]' data-export-options='{
                        "fileNom": "address-list",
                        "ignoreColumn": ["operate"] 
                        }' data-maintain-selected="true" data-query-params="address_query_params">
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
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>