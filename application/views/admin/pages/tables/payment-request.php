<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content-header mt-4">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <h4>Demandes de paiement</h4>
                </div>
                <div class="col-sm-8 d-flex justify-content-end">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Accueil</a></li>
                        <li class="breadcrumb-item active">Demandes de paiement</li>
                    </ol>
                </div>

            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">

                <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="payment_request_modal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Mettre à jour la demande de paiement</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal form-submit-event"
                                    action="<?= base_url('admin/payment-request/update-payment-request'); ?>"
                                    method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="payment_request_id" id="payment_request_id">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Statut <span
                                                class='text-danger text-sm'>*</span></label>
                                        <div class="col-md-7 col-sm-6 col-xs-12">
                                            <div id="status" class="btn-group">
                                                <label class="btn btn-warning pending-label"
                                                    data-toggle-class="btn-primary"
                                                    data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="status" value="0" class='pending'> En attente
                                                </label>
                                                <label class="btn btn-primary approved-label"
                                                    data-toggle-class="btn-primary"
                                                    data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="status" value="1" class='approved'>
                                                    Approved
                                                </label>
                                                <label class="btn btn-danger rejected-label"
                                                    data-toggle-class="btn-primary"
                                                    data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="status" value="2" class='rejected'>
                                                    Rejected
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="">Remarque</label>
                                        <textarea id="update_remarks" name="update_remarks"
                                            class="form-control col-12 "></textarea>
                                    </div>
                                    <input type="hidden" id="id" name="id">
                                    <div class="ln_solid"></div>
                                    <div class="form-group mt-3">
                                        <button type="reset" class="btn btn-warning">Réinitialiser</button>
                                        <button type="submit" class="btn btn-success" id="submit_btn">Mettre à jour</button>
                                    </div>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 main-content">
                    <div class="card-innr">
                        <div class="card content-area p-4">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label>Statut</label>
                                    <select id="status_filter" class="form-control">
                                        <option value="">Tout</option>
                                        <option value="0">En attente</option>
                                        <option value="1">Approuvé</option>
                                        <option value="2">Rejeté</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Type d'utilisateur</label>
                                    <select id="type_filter" class="form-control">
                                        <option value="">Tout</option>
                                        <option value="customer">Client</option>
                                        <option value="delivery_boy">Livreur</option>
                                    </select>
                                </div>

                                <div class="col-md-2 align-self-end">
                                    <button type="button" id="reset_filters" class="btn btn-secondary w-100">
                                        Réinitialiser
                                    </button>
                                </div>
                            </div>

                            <div class="gaps-1-5x"></div>
                            <table class="table-striped" id="payment_request_table" data-toggle="table"
                                data-url="<?= base_url('admin/payment-request/view-payment-request-list') ?>"
                                data-side-pagination="server" data-pagination="true" data-search="true"
                                data-sort-name="pr.id" data-sort-order="desc" data-page-list="[5,10,20,50,100,200]"
                                data-show-columns="true" data-show-refresh="true" data-mobile-responsive="true"
                                data-show-export="true" data-maintain-selected="true"
                                data-query-params="paymentRequestQueryParams">

                                <thead>
                                    <tr>
                                        <th data-field="id" data-sortable="true">ID</th>
                                        <th data-field="user_name" data-sortable="false">Nom d'utilisateur</th>
                                        <th data-field="payment_type" data-sortable="true">Type</th>
                                        <th data-field="payment_address" data-sortable="false">Adresse de paiement</th>
                                        <th data-field="amount_requested" data-sortable="false">Montant demandé</th>
                                        <th data-field="remarks" data-sortable="false">Remarques</th>
                                        <th data-field="status" data-sortable="false">Statut</th>
                                        <th data-field="date_created" data-sortable="false">Date de création</th>
                                        <th data-field="operate" data-sortable="false">Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>