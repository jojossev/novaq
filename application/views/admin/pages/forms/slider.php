<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content-header mt-4">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h4>Diaporama pour offres et autres avantages </h4>
                </div>
                <div class="col-sm-4 d-flex justify-content-end">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Accueil</a></li>
                        <li class="breadcrumb-item active">Diaporama</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="modal fade" id='media-upload' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitre">Médias</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-info">
                        <form class="form-horizontal form-submit-event" action="<?= base_url('admin/slider/add_slider'); ?>" method="POST" id="payment_setting_form" enctype="multipart/form-data">
                            <div class="card-body">

                                <div class="form-group">
                                    <?php if (isset($fetched_data[0]['id'])) {
                                    ?>
                                        <input type="hidden" name="edit_slider" value="<?= $fetched_data[0]['id'] ?>">
                                    <?php } ?>
                                    <label for="slider_type" class="mt-2">Type <span class='text-danger text-sm'>*</span> </label>
                                    <select name="slider_type" id="slider_type" class="form-control type_event_trigger" required="">
                                        <option value=" ">Sélectionner le type</option>
                                        <option value="default" <?= (@$fetched_data[0]['type'] == "default") ? 'selected' : ' ' ?>>Défaut</option>
                                        <option value="categories" <?= (@$fetched_data[0]['type'] == "categories") ? 'selected' : ' ' ?>>Catégorie</option>
                                        <option value="brand" <?= (@$fetched_data[0]['type'] == "brand") ? 'selected' : ' ' ?>>Marque</option>
                                        <option value="products" <?= (@$fetched_data[0]['type'] == "products") ? 'selected' : ' ' ?>>Produit</option>
                                        <option value="slider_url" <?= (@$fetched_data[0]['type'] == "slider_url") ? 'selected' : ' ' ?>>URL du diaporama</option>
                                    </select>
                                </div>
                                <div id="type_add_html">
                                    <?php $hiddenStatut = (isset($fetched_data[0]['id']) && $fetched_data[0]['type']  == 'categories') ? '' : 'd-none' ?>
                                    <div class="form-group slider-categories <?= $hiddenStatut ?> ">

                                        <label for="category_id" class="mt-2"> Catégories <span class='text-danger text-sm'>*</span></label>
                                        <select name="category_id" id="slider_category_id" class="form-control slider-select2" data-placeholder="Sélectionner une catégorie">
                                            <option value="">Sélectionner une catégorie </option>
                                            <?php
                                            if (!empty($categories)) {
                                                foreach ($categories as $row) {
                                                    $selected = (isset($fetched_data[0]['type_id']) && $row['id'] == $fetched_data[0]['type_id'] && strtolower($fetched_data[0]['type']) == 'categories') ? 'selected' : '';
                                            ?>
                                                    <option value="<?= $row['id'] ?>" <?= $selected ?>><?= $row['name'] ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <?php $hiddenStatut = (isset($fetched_data[0]['id']) && $fetched_data[0]['type']  == 'brand') ? '' : 'd-none' ?>
                                    <div class="form-group slider-brand <?= $hiddenStatut ?> ">

                                        <label for="brand_id" class="mt-2"> Marques <span class='text-danger text-sm'>*</span></label>
                                        <select name="brand_id" id="slider_brand_id" class="form-control slider-select2" data-placeholder="Sélectionner une marque">
                                            <option value="">Sélectionner une marque </option>
                                            <?php

                                            if (!empty($brands)) {
                                                foreach ($brands as $row) {
                                                    $selected = ($row['brand_id'] == $fetched_data[0]['type_id'] && strtolower($fetched_data[0]['type']) == 'brands') ? 'selected' : '';
                                            ?>
                                                    <option value="<?= $row['brand_id'] ?>" <?= $selected ?>> <?= $row['brand_name'] ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <?php $hiddenStatut = (isset($fetched_data[0]['id']) && $fetched_data[0]['type']  == 'products') ? '' : 'd-none' ?>
                                    <div class="form-group row slider-products <?= $hiddenStatut ?>">
                                        <label for="product_id" class="control-label mt-2">Produits <span class='text-danger text-sm'>*</span></label>
                                        <div class="col-md-12">
                                            <select name="product_id" class="search_product w-100" data-placeholder=" Tapez pour rechercher et sélectionner un produits" onload="multiselect()">
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

                                </div>

                                <?php $hiddenStatut = (isset($fetched_data[0]['id']) && $fetched_data[0]['type']  == 'slider_url') ? '' : 'd-none' ?>
                                <div class="form-group slider-url <?= $hiddenStatut ?> ">

                                    <label for="slider_url" class="mt-2"> Link <span class='text-danger text-sm'>*</span></label>
                                    <input type="text" class="form-control" placeholder="https://example.com" name="link" value="<?= isset($fetched_data[0]['link']) ? output_escaping($fetched_data[0]['link']) : "" ?>">
                                </div>
                                <div class="form-group mt-2">
                                    <div><label for="image" class="mt-2">Image du diaporama <span class='text-danger text-sm'>*</span><small>(Taille recommandée : 1648 x 610 pixels)</small></label></div>
                                    <div class="col-sm-10">
                                        <div class='col-md-3'><a class="uploadFile img btn btn-primary text-white btn-sm" data-input='image' data-isremovable='0' data-is-multiple-uploads-allowed='0' data-toggle="modal" data-target="#media-upload-modal" value="Téléverser une photo"><i class='fa fa-upload'></i> Upload</a></div>
                                        <?php
                                        if (file_exists(FCPATH  . @$fetched_data[0]['image']) && !empty(@$fetched_data[0]['image'])) {  ?>
                                            <input type="hidden" name="image" value='<?= $fetched_data[0]['image'] ?>'>
                                            <?php $fetched_data[0]['image'] = get_image_url($fetched_data[0]['image'], 'thumb', 'sm');
                                            ?>
                                            <label class="text-danger mt-3">*Choisir uniquement lorsque la mise à jour est nécessaire</label>
                                            <div class="container-fluid row image-upload-section col-md-3">
                                                <div class="upload-media-div shadow mx-2 bg-white rounded  text-center grow image">
                                                    <div class='image-upload-div'><img class="img-fluid mb-2" src="<?= $fetched_data[0]['image'] ?>" alt="Image non trouvée"></div>
                                                </div>
                                            </div>
                                        <?php
                                        } else { ?>
                                            <div class="container-fluid row image-upload-section col-md-3">
                                                <div class="upload-media-div shadow mx-2 bg-white rounded  text-center grow imaged-none">
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <button type="button" class="btn btn-warning" id="reset_btn">Réinitialiser</button>
                                    <button type="submit" class="btn btn-success" id="submit_btn"><?= (isset($fetched_data[0]['id'])) ? 'Mettre à jour Diaporama' : 'Ajouter un diaporama' ?></button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!--/.card-->
                </div>
                <!--/.col-md-12-->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- <script>
    $(document).ready(function() {
        // Initialize Select2 for category and brand dropdowns
        $('.slider-select2').select2({
            theme: 'bootstrap4',
            width: '100%',
            placeholder: function() {
                return $(this).data('placeholder');
            },
            allowClear: true
        });
        
        // Reinitialize Select2 when type changes and elements become visible
        $(document).on('change', '#slider_type', function() {
            setTimeout(function() {
                $('.slider-select2').select2({
                    theme: 'bootstrap4',
                    width: '100%',
                    placeholder: function() {
                        return $(this).data('placeholder');
                    },
                    allowClear: true
                });
            }, 100);
        });

        // Custom reset button functionality
        $('#reset_btn').on('click', function() {
            // Réinitialiser the form
            $('#payment_setting_form')[0].reset();
            
            // Réinitialiser slider type dropdown
            $('#slider_type').val(' ').trigger('change');
            
            // Réinitialiser and clear all Select2 dropdowns
            $('#slider_category_id').val('').trigger('change');
            $('#slider_brand_id').val('').trigger('change');
            $('.search_product').val(null).trigger('change');
            
            // Hide all conditional fields
            $('.slider-categories').addClass('d-none');
            $('.slider-brand').addClass('d-none');
            $('.slider-products').addClass('d-none');
            $('.slider-url').addClass('d-none');
            
            // Clear the link input
            $('input[name="link"]').val('');
            
            // Réinitialiser image upload section
            $('input[name="image"]').val('');
            $('.image-upload-section').html('<div class="upload-media-div shadow mx-2 bg-white rounded text-center grow imaged-none"></div>');
            
            // Remove any validation error messages
            $('.error').remove();
            $('.is-invalid').removeClass('is-invalid');
        });
    });
</script> -->