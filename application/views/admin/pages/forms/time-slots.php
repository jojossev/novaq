<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content-header mt-4">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h4>Créneaux horaires</h4>
                </div>
                <div class="col-sm-4 d-flex justify-content-end">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Accueil</a></li>
                        <li class="breadcrumb-item active">Créneaux horaires</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <?php if (!isset($fetched_data[0]['id'])) { ?>
                    <div class="col-md-12 my-3">
                        <div class="card card-info my-2">
                            <!-- form start -->
                            <form class="form-horizontal form-submit-event" action="<?= base_url('admin/Time_slots/update_time_slots_config'); ?>" method="POST" enctype="multipart/form-data">
                                <input type="hidden" id="time_slot_config" name="time_slot_config" required="" value="1" aria-required="true">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="">Enable / Disable Créneaux horaires</label>
                                        </div>
                                        <div class="form-group col-md-8 mb-2">
                                            <input type="checkbox" name="is_time_slots_enabled" <?= (@$time_slot_config['is_time_slots_enabled']) == '1' ? 'Checked' : '' ?> data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="">Livraison Starts From ?</label>
                                        </div>
                                        <div class="form-group col-md-8 mb-2">
                                            <select class="form-control" name="delivery_starts_from">
                                                <option value="">Select</option>
                                                <option value="1" <?= (isset($time_slot_config['delivery_starts_from']) && $time_slot_config['delivery_starts_from'] == '1') ? 'selected' : '' ?>>Aujourd'hui</option>
                                                <option value="2" <?= (isset($time_slot_config['delivery_starts_from']) && $time_slot_config['delivery_starts_from'] == '2') ? 'selected' : '' ?>>Tomorrow</option>
                                                <option value="3" <?= (isset($time_slot_config['delivery_starts_from']) && $time_slot_config['delivery_starts_from'] == '3') ? 'selected' : '' ?>>Third Jour</option>
                                                <option value="4" <?= (isset($time_slot_config['delivery_starts_from']) && $time_slot_config['delivery_starts_from'] == '4') ? 'selected' : '' ?>>Fourth Jour</option>
                                                <option value="5" <?= (isset($time_slot_config['delivery_starts_from']) && $time_slot_config['delivery_starts_from'] == '5') ? 'selected' : '' ?>>Fifth Jour</option>
                                                <option value="6" <?= (isset($time_slot_config['delivery_starts_from']) && $time_slot_config['delivery_starts_from'] == '6') ? 'selected' : '' ?>>Sixth Jour</option>
                                                <option value="7" <?= (isset($time_slot_config['delivery_starts_from']) && $time_slot_config['delivery_starts_from'] == '7') ? 'selected' : '' ?>>Seventh Jour</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="">Combien de jours souhaitez-vous autoriser ?</label>
                                        </div>
                                        <div class="form-group col-md-8 mb-2">
                                            <select class="form-control" name="allowed_days">
                                                <option value="">Select</option>
                                                <option value="1" <?= (isset($time_slot_config['allowed_days']) && $time_slot_config['allowed_days'] == '1') ? 'selected' : '' ?>>1</option>
                                                <option value="7" <?= (isset($time_slot_config['allowed_days']) && $time_slot_config['allowed_days'] == '7') ? 'selected' : '' ?>>7</option>
                                                <option value="15" <?= (isset($time_slot_config['allowed_days']) && $time_slot_config['allowed_days'] == '15') ? 'selected' : '' ?>>15</option>
                                                <option value="30" <?= (isset($time_slot_config['allowed_days']) && $time_slot_config['allowed_days'] == '30') ? 'selected' : '' ?>>30</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="reset" class="btn btn-warning">Réinitialiser</button>
                                        <button type="submit" class="btn btn-success time_slot" id="submit_btn">Enregistrer</button>
                                    </div>
                                </div><!-- /.box-body -->
                            </form>
                        </div>
                        <!--/.card-->
                    </div>
                <?php } ?>
                <!--/.col-md-12-->
                <div class="col-md-12">
                    <div class="card card-info">
                        <!-- form start -->
                        <form class="form-horizontal mt-4 form-submit-event" action="<?= base_url('admin/Time_slots/update_time_slots'); ?>" method="POST" enctype="multipart/form-data">
                            <?php if (isset($fetched_data[0]['id'])) { ?>
                                <input type="hidden" name="edit_time_slot" value="<?= $fetched_data[0]['id'] ?>">
                                <input type="hidden" name="id" value="<?= $fetched_data[0]['id'] ?>">
                                <input type="hidden" name="update_id" id="update_id" value="1">
                            <?php } else { ?>
                                <input type="hidden" id="add_time_slot" name="add_time_slot" required="" value="1" aria-required="true">
                            <?php } ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="title"></i> Titre</label>
                                        <input type="text" class="form-control" name="title" id="title" value="<?= (isset($fetched_data[0]['title']) ? $fetched_data[0]['title'] : '') ?>" placeholder="ex. Matin 09:00 à 12:00">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="from_time"> Heure de début</label>
                                        <input type="time" class="form-control" id="from_time" name="from_time" value="<?= (isset($fetched_data[0]['from_time']) ? $fetched_data[0]['from_time'] : '') ?>">
                                        <small class="form-text text-danger d-none" id="from_time_error">From time is required</small>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="to_time"> Heure de fin</label>
                                        <input type="time" class="form-control" id="to_time" name="to_time" value="<?= (isset($fetched_data[0]['to_time']) ? $fetched_data[0]['to_time'] : '') ?>">
                                        <small class="form-text text-danger d-none" id="to_time_error">To time must be greater than from time</small>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="last_order_time"> Dernière heure de commande</label>
                                        <input type="time" class="form-control" id="last_order_time" name="last_order_time" value="<?= (isset($fetched_data[0]['last_order_time']) ? $fetched_data[0]['last_order_time'] : '') ?>">
                                        <small class="form-text text-danger d-none" id="last_order_time_error">Must be between from/to time</small>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="status"> Statut</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="">Sélectionner le statut</option>
                                            <option value="1" <?= (isset($fetched_data[0]['status']) && $fetched_data[0]['status'] == 1) ? 'Selected' : '' ?>>Actif</option>
                                            <option value="0" <?= (isset($fetched_data[0]['status']) && $fetched_data[0]['status'] == 0) ? 'Selected' : '' ?>>Inactif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="reset" class="btn btn-warning">Réinitialiser</button>
                                    <button type="submit" class="btn btn-success time_slot" id="submit_btn"><?= (isset($fetched_data[0]['id'])) ? 'Mettre à jour Time Slot' : 'Enregistrer Time Slot' ?></button>
                                </div>
                        </form>
                    </div>
                    <!--/.card-->
                    <div class="modal fade edit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitre">Modifier la section en vedette</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.col-md-12-->
            </div>
            <!-- /.row -->
            <div class="row"> 
                <div class="col-md-12 main-content my-3">
                    <div class="card content-area p-4">
                        <div class="card-innr">
                            <div class="gaps-1-5x"></div>
                            <table class='table-striped' data-toggle="table" data-url="<?= base_url('admin/Time_slots/view_time_slots') ?>" data-click-to-select="true" data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-show-columns="true" data-show-refresh="true" data-trim-on-search="false" data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true" data-toolbar="" data-show-export="true" data-maintain-selected="true" data-export-types='["txt","excel"]' data-query-params="queryParams">
                                <thead>
                                    <tr>
                                        <th data-field="id" data-sortable="true">ID</th>
                                        <th data-field="title" data-sortable="false">Titre</th>
                                        <th data-field="from_time" data-sortable="true">Heure de début</th>
                                        <th data-field="to_time" data-sortable="true">Heure de fin</th>
                                        <th data-field="last_order_time" data-sortable="true">Dernière heure de commande</th>
                                        <th data-field="status" data-sortable="true">Statut</th>
                                        <th data-field="operate" data-sortable="false">Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                </div>
            </div> <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
