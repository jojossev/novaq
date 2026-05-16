<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4> Ajouter popup offer </h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Accueil</a></li>
                        <li class="breadcrumb-item active">Offres</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <form class="form-horizontal form-submit-event" action="<?= base_url('admin/popup-offer/add_offer'); ?>" method="POST" id="payment_setting_form" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <?php if (isset($fetched_data[0]['id'])) {
                                    ?>
                                        <input type="hidden" name="edit_offer" value="<?= $fetched_data[0]['id'] ?>">
                                    <?php } ?>
                                    <label for="offer_type">Type <span class='text-danger text-sm'>*</span> </label>
                                    <select name="offer_type" id="offer_type" class="form-control type_event_trigger" required="">
                                        <option value="">Sélectionner le type</option>
                                        <option value="default" <?= (@$fetched_data[0]['type'] == "default") ? 'selected' : ' ' ?>>Défaut</option>
                                        <option value="categories" <?= (@$fetched_data[0]['type'] == "categories") ? 'selected' : ' ' ?>>Catégorie</option>
                                        <option value="all_products" <?= (@$fetched_data[0]['type'] == "all_products") ? 'selected' : ' ' ?>> Tous les produits</option>
                                        <option value="products" <?= (@$fetched_data[0]['type'] == "products") ? 'selected' : ' ' ?>>Produit spécifique</option>
                                        <option value="brand" <?= (@$fetched_data[0]['type'] == "brand") ? 'selected' : ' ' ?>>Marque</option>
                                    </select>
                                </div>
                                <?php
                                $min_discount = @$fetched_data[0]['min_discount'];
                                $max_discount = @$fetched_data[0]['max_discount'];
                                ?>
                                <div id="type_add_html">
                                    <?php $hiddenStatut = (isset($fetched_data[0]['id']) && $fetched_data[0]['type']  == 'categories') ? '' : 'd-none' ?>
                                    <div class="form-group slider-categories <?= $hiddenStatut ?> ">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="category_id"> Catégories <span class='text-danger text-sm'>*</span></label>
                                                <select id="category_parent" name="category_id">
                                                    <option value=""><?= (isset($categories) && empty($categories)) ? 'No Catégories Exist' : 'Sélectionner une catégorie' ?>
                                                    </option>
                                                    <?php
                                                    $selected_val = (isset($fetched_data[0]['id']) &&  !empty($fetched_data[0]['id'])) ? $fetched_data[0]['type_id'] : '';
                                                    $selected_vals = explode(',', $selected_val ?? '');
                                                    echo get_categories_option_html($categories, $selected_vals);

                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $hiddenStatut = (isset($fetched_data[0]['id']) && $fetched_data[0]['type']  == 'products') ? '' : 'd-none' ?>
                                    <div class="form-group row slider-products <?= $hiddenStatut ?>">
                                        <label for="product_id" class="control-label">Produits <span class='text-danger text-sm'>*</span></label>
                                        <div class="col-md-12">
                                            <select name="product_id" class="search_offer_product w-100" data-placeholder=" Tapez pour rechercher et sélectionner un produits">
                                                <?php
                                                if (isset($fetched_data[0]['id']) && $fetched_data[0]['type']  == 'products') {
                                                    $product_details = fetch_details('products', ['id' => $fetched_data[0]['type_id']], 'id,name');
                                                    if (!empty($product_details)) {
                                                ?>
                                                        <option value="<?= $product_details[0]['id'] ?>" selected> <?= $product_details[0]['name'] ?></option>
                                                <?php
                                                    }
                                                }

                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php $hiddenStatut = (isset($fetched_data[0]['id']) && $fetched_data[0]['type']  == 'brand') ? '' : 'd-none' ?>
                                    <div class="form-group row slider-brand <?= $hiddenStatut ?>">
                                        <label for="brand_id" class="control-label">Brand <span class='text-danger text-sm'>*</span></label>
                                        <div class="col-md-12">
                                            <select name="brand_id" class="offer_brand_list w-100" data-placeholder=" Tapez pour rechercher et sélectionner une marque">
                                                <?php
                                                if (isset($fetched_data[0]['id']) && $fetched_data[0]['type']  == 'brand') {
                                                    $product_details = fetch_details('brands', ['id' => $fetched_data[0]['type_id']], 'id,name');
                                                    if (!empty($product_details)) {
                                                ?>
                                                        <option value="<?= $product_details[0]['id'] ?>" selected> <?= $product_details[0]['name'] ?></option>
                                                <?php
                                                    }
                                                }

                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php $hiddenStatut = (isset($fetched_data[0]['id']) && $fetched_data[0]['type']  == 'all_products') ? '' : 'd-none' ?>
                                    <div class="form-group all_products <?= $hiddenStatut ?> ">
                                    </div>
                                </div>

                                <div class="form-group row offer_discount d-none" id="min_max_section">
                                    <div class="form-group col-md-6">
                                        <label for="">Minimum offer Remise(%) <span class='text-danger text-sm'>*</span></label>
                                        <input type="number" class="form-control" name="min_discount" id="min_discount" min=1 max=100 value="<?= $min_discount ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Maximum offer Remise(%) <span class='text-danger text-sm'>*</span></label>
                                        <input type="number" class="form-control" name="max_discount" max=100 id="max_discount" min=1 max=100 value="<?= $max_discount ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div><label for="image">Image de l'offre <span class='text-danger text-sm'>*</span><small>(Taille recommandée for offers : 1648 x 342 pixels) (Taille recommandée for popup offers : 1000 x 1500 pixels)</small></label></div>
                                    <div class="col-sm-10">
                                        <div class='col-md-3'><a class="uploadFile img btn btn-primary text-white btn-sm" data-input='image' data-isremovable='0' data-is-multiple-uploads-allowed='0' data-toggle="modal" data-target="#media-upload-modal" value="Téléverser une photo"><i class='fa fa-upload'></i> Upload</a></div>
                                        <?php
                                        if (file_exists(FCPATH  . @$fetched_data[0]['image']) && !empty(@$fetched_data[0]['image'])) { ?>
                                            <input type="hidden" name="image" value='<?= $fetched_data[0]['image'] ?>'>

                                            <?php $fetched_data[0]['image'] = get_image_url($fetched_data[0]['image'], 'thumb', 'sm');
                                            ?>
                                            <label class="text-danger mt-3">*Choisir uniquement lorsque la mise à jour est nécessaire</label>
                                            <div class="container-fluid row image-upload-section">
                                                <div class="col-md-3 col-sm-12 shadow p-3 mb-5 bg-white rounded m-4 text-center grow image">
                                                    <div class='image-upload-div'><img class="img-fluid mb-2" src="<?= $fetched_data[0]['image'] ?>" alt="Image non trouvée"></div>
                                                </div>
                                            </div>
                                        <?php
                                        } else { ?>
                                            <div class="container-fluid row image-upload-section">
                                                <div class="col-md-3 col-sm-12 shadow p-3 mb-5 bg-white rounded m-4 text-center grow image d-none">
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="reset" class="btn btn-warning">Réinitialiser</button>
                                    <button type="submit" class="btn btn-success" id="submit_btn"><?= (isset($fetched_data[0]['id'])) ? 'Mettre à jour Offre' : 'Ajouter Offre' ?></button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                    <!--/.card-->
                </div>
                <!--/.col-md-12-->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <div class="col-md-12 main-content">
            <div class="card content-area p-4">
                <div class="card-head">
                    <h4 class="card-title">Popup Offre Section</h4>
                </div>
                <div class="card-innr">
                    <div class="gaps-1-5x"></div>
                    <table class='table-striped' data-toggle="table" data-url="<?= base_url('admin/popup_offer/view_offers') ?>" data-click-to-select="true" data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-show-columns="true" data-show-refresh="true" data-trim-on-search="false" data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true" data-toolbar="" data-show-export="true" data-maintain-selected="true" data-export-types='["txt","excel"]' data-query-params="queryParams">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="type" data-sortable="false">Type</th>
                                <th data-field="type_id" data-sortable="true">ID du type</th>
                                <th data-field="min_discount" data-sortable="true">Min discount</th>
                                <th data-field="max_discount" data-sortable="true">Max discount</th>
                                <th data-field="link" data-sortable="true">URL</th>
                                <th data-field="image" data-sortable="true">Image</th>
                                <th data-field="status" data-sortable="true">Statut</th>
                                <th data-field="operate">Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div><!-- .card-innr -->
            </div><!-- .card -->
        </div>
    </section>
    <!-- /.content -->
</div>