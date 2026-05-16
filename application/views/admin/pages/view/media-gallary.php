<div class="content-wrapper">
    <section class="content-header mt-4">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h4>Gérer Médias</h4>
                </div>
                <div class="col-sm-2">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Accueil</a></li>
                        <li class="breadcrumb-item active">Médias</li>
                    </ol>
                </div>
                <div class="col-md-12 mt-3 mb-3">
                    <!-- Change /upload-target to your upload address -->
                    <div id="dropzone" class="dropzone"></div>
                    <br>
                    <a href="" id="upload-files-btn" class="btn btn-success float-right ml-2">Téléverser</a>
                </div>
                <div class="col-12 border-bottom">
                    <div class="col-lg-9 col-md-8">
                        <div class="section-title">
                            <h4 class="title mb-2">Galerie de médias</h4>
                        </div>
                    </div>
                    <div class="row">

                        <div class="form-group col-md-4">
                            <label>Plage de dates:</label>
                            <div class="input-group">

                                <input type="text" class="form-control float-right" autocomplete="off" id="datepicker">
                                <input type="hidden" id="start_date" class="form-control float-right">
                                <input type="hidden" id="end_date" class="form-control float-right">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group col-md-4">
                            <label>Médias Type</label>
                            <div class="input-group">
                                <select class="form-control" id="media-type">
                                    <option value="">Tous les médias</option>
                                    <option value="image">Images</option>
                                    <option value="video">Vidéo</option>
                                    <option value="archive">Archive</option>
                                    <option value="documents">Documents</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="row mt-2">
                                <div class="col-md-4 d-flex align-items-center pt-3">
                                    <button type="button" class="btn btn-outline-primary btn m-1" onclick="status_date_wise_search()">Rechercher</button>
                                    <button type="button" class="btn btn-outline-danger btn m-1" onclick="resetfilters()">Réinitialiser</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 main-content mt-3">
                            <div class="card content-area p-4">
                                <div class="card-head">
                                    <h4 class="card-title">Détails des médias</h4>
                                    <div id="mediaToolbar">
                                        <button id="media_remove" class="btn btn-danger"><i class="fa fa-trash me-2"></i>Supprimer</button>
                                    </div>
                                </div>
                                <div class="card-innr">
                                    <div class="gaps-1-5x"></div>
                                    <table class='table-striped' id='media-table' data-click-to-select="true" data-single-select='false' data-page-size="5" data-toggle="table" data-url="<?= base_url('admin/media/fetch') ?>" data-click-to-select="true" data-single-select='true' data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-show-columns="true" data-show-refresh="true" data-trim-on-search="false" data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true" data-toolbar="" data-show-export="true" data-query-params="mediaUploadParams">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id" data-sortable="true" data-visible='false'>ID</th>
                                                <th data-field="name" data-sortable="false">Nom</th>
                                                <th data-field="image" data-sortable="false">Image</th>
                                                <th data-field="extension" data-sortable="false">Extension</th>
                                                <th data-field="sub_directory" data-sortable="false">Sous-dossier</th>
                                                <th data-field="size" data-sortable="true">Taille</th>
                                                <th data-field="operate" data-sortable="false">Actions</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div><!-- .card-innr -->
                            </div><!-- .card -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
</div>