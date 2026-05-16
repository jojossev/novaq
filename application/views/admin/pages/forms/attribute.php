<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content-header mt-4">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h4>Attribut</h4>
                </div>
                <div class="col-sm-4 d-flex justify-content-end">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Accueil</a></li>
                        <li class="breadcrumb-item active">Attribut</li>
                    </ol>
                </div>
            </div>
        </div> <!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="card card-info">
                        <!-- form start -->
                        <form class="form-horizontal form-submit-event" action="<?= base_url('admin/attributes/add_attributes'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="card-body">
                                    <?php if (isset($fetched_data[0]['id'])) { ?>
                                        <input type="hidden" name="edit_attribute" value="<?= @$fetched_data[0]['id'] ?>">
                                    <?php } ?>
                                    <div class="d-flex flex-wrap form-group gap-2">
                                        <label for="attribute_set" class="col-sm-3 col-form-label">Select Attribut Set <span class='text-danger text-sm'>*</span></label>
                                        <div class="col-sm-5">
                                            <select class="form-control" id="attribute_set" name="attribute_set">
                                                <option value=""> None </option>
                                                <?php foreach ($attribute_set as $row) { ?>
                                                    <option value="<?= $row['id'] ?>" <?= (isset($fetched_data[0]['attribute_set_id']) && $fetched_data[0]['attribute_set_id'] == $row['id']) ? 'selected' : '' ?>> <?= $row['name'] ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <?php if (empty($fetched_data[0]['id'])) { ?>
                                            <div class="col-md-3">
                                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#attributeSet_add"><i class="fas fa-plus"></i></a>
                                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#attributeSet_list"><i class="fas fa-list"></i></a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <label for="name" class="col-sm-3 col-form-label">Attribut Nom <span class='text-danger text-sm'>*</span></label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="name" placeholder="Nom" name="name" value="<?= @$fetched_data[0]['name'] ?>">
                                        </div>
                                    </div> <!-- attribute value  -->
                                    <div class="form-group row mb-3">
                                        <label for="name" class="col-sm-3 col-form-label mt-2">Attribut Values <span class='text-danger text-sm'>*</span></label>
                                        <div class="col-md-4 mt-3">
                                            <button type="button" id="add_attribute_value" class="btn btn-sm btn-primary">Attribut Values</button>
                                        </div>
                                    </div>
                                    <div id="attribute_section"></div>
                                    <br>

                                    <div class="form-group">
                                        <button type="reset" class="btn btn-warning">Réinitialiser</button>
                                        <button type="submit" class="btn btn-success update_attri" id="submit_btn"><?= (isset($fetched_data[0]['id'])) ? 'Mettre à jour Attribut' : 'Ajouter Attribut' ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> <!--/.card-->
                </div>
                <div class="col-md-7">
                    <div class="card content-area p-4">
                        <div class="card-header border-0">
                        </div>
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Attributs</h4>
                            </div>
                            <div class="gaps-1-5x"></div>
                            <table class='table-striped' id='category_table' data-toggle="table" data-url="<?= base_url('admin/attribute_value/attribute_value_list') ?>" data-click-to-select="true" data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-show-columns="true" data-show-refresh="true" data-trim-on-search="false" data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true" data-toolbar="" data-show-export="true" data-maintain-selected="true" data-export-types='["txt","excel","csv"]' data-export-options='{
                                "fileNom": "attributes-list",
                                "ignoreColumn": ["operate"] 
                            }' data-query-params="queryParams">
                                <thead>
                                    <tr>
                                        <th data-field="id" data-sortable="true">ID</th>
                                        <th data-field="attributes" data-sortable="false">Attributs</th>
                                        <th data-field="name" data-sortable="true">Nom</th>
                                        <th data-field="status" data-sortable="false">Statut</th>
                                        <th data-field="operate" data-sortable="false">Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div> <!-- .card-innr -->
                    </div> <!-- .card -->
                </div> <!--/.col-md-12-->
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->

        <!-- Modifier Attribut Modal -->
        <div class="modal fade edit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="UpdateAttributModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ss">Modifier Attribut here</h5>
                        <button type="button" id="attribute_modal_close" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /.content -->
</div>

<?php if (empty($fetched_data[0]['id'])) { ?>

    <!-- Attribut Set Ajouter Modal -->
    <div class="modal fade" id="attributeSet_add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitre">Ajouter Attribut Set</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- form start -->
                                    <form class="form-horizontal form-submit-event" action="<?= base_url('admin/attribute_set/add_attribute_set'); ?>" method="POST" enctype="multipart/form-data">
                                        <div class="">
                                            <?php if (isset($fetched_data[0]['id'])) { ?>
                                                <input type="hidden" name="edit_attribute_set" value="<?= @$fetched_data[0]['id'] ?>">
                                            <?php } ?>
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">Nom <span class='text-danger text-sm'>*</span></label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="name" placeholder="Nom" name="name" value="<?= @$fetched_data[0]['name'] ?>">
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap form-group gap-2 mt-4">
                                                <button type="reset" class="btn btn-warning">Réinitialiser</button>
                                                <button type="submit" class="btn btn-success" id="submit_btn"><?= (isset($fetched_data[0]['id'])) ? 'Mettre à jour Attribut Set' : 'Ajouter Attribut Set' ?></button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!--/.col-md-12-->
                            </div> <!-- /.row -->
                        </div> <!-- /.container-fluid -->
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- Attribut Set List Modal -->
    <div class="modal fade" id="attributeSet_list" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitre">List Of Attribut Set</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body content-area">
                                        <div class="card-innr">
                                            <div class="card-head">
                                                <h4 class="card-title">Attribut Set</h4>
                                            </div>
                                            <div class="gaps-1-5x"></div>
                                            <table class='table-striped' id='category_table' data-toggle="table" data-url="<?= base_url('admin/attribute_set/attribute_set_list') ?>" data-click-to-select="true" data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-show-columns="true" data-show-refresh="true" data-trim-on-search="false" data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true" data-toolbar="" data-show-export="true" data-maintain-selected="true" data-export-types='["txt","excel","csv"]' data-export-options='{
                                                "fileNom": "attribute-set-list", 
                                                "ignoreColumn": ["state"]  
                                            }' data-query-params="queryParams">
                                                <thead>
                                                    <tr>
                                                        <th data-field="id" data-sortable="true">ID</th>
                                                        <th data-field="name" data-sortable="false">Nom</th>
                                                        <th data-field="status" data-sortable="false">Statut</th>
                                                        <th data-field="operate" data-sortable="false">Action</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div> <!-- .card-innr -->
                                    </div> <!-- .card-body -->
                                </div> <!-- /.col-md-12 -->
                            </div> <!-- /.row -->
                        </div> <!-- /.container-fluid -->
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- New Modifier Attribut Set Modal -->
    <div class="modal fade" id="editAttributSetModal" tabindex="-1" role="dialog" aria-labelledby="editAttributSetLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAttributSetLabel">Modifier Attribut Set</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                </div>
            </div>
        </div>
    </div>

<?php } ?>