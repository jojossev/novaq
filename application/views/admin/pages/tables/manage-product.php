<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content-header mt-4">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h4>Gérer les produits</h4>
                </div>
                <div class="col-sm-4 d-flex justify-content-end">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Accueil</a></li>
                        <li class="breadcrumb-item active">Produits</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="modal fade " tabindex="-1" role="dialog" aria-hidden="true" id='product-faqs-modal'>
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">View Produits Faqs</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="row">
                                    <div class="col-md-12 main-content">
                                        <div class="card content-area p-4">
                                            <div class="card-innr">
                                                <div class="gaps-1-5x"></div>
                                                <table class='table-striped' id='product-faqs-table' data-toggle="table"
                                                    data-url="<?= base_url('admin/product/get_faqs_list') ?>"
                                                    data-click-to-select="true" data-side-pagination="server"
                                                    data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]"
                                                    data-search="true" data-show-columns="true" data-show-refresh="true"
                                                    data-trim-on-search="false" data-sort-name="id"
                                                    data-sort-order="desc" data-mobile-responsive="true" data-toolbar=""
                                                    data-show-export="true" data-maintain-selected="true"
                                                    data-export-types='["txt","excel"]' data-export-options='{
                        "fileNom": "product-faqs-list",
                        "ignoreColumn": ["operate"] 
                        }' data-query-params="queryParams">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="id" data-sortable="true">ID</th>
                                                            <th data-field="user_id" data-sortable="false">ID utilisateur</th>
                                                            <th data-field="product_id" data-sortable="false">Product Id
                                                            </th>
                                                            <th data-field="question" data-sortable="false">Question
                                                            </th>
                                                            <th data-field="answer" data-sortable="false">Answer</th>
                                                            <th data-field="answered_by" data-sortable="false">Answered
                                                                by</th>
                                                            <th data-field="username" data-width='500'
                                                                data-sortable="false" class="col-md-6">Nom d'utilisateur</th>
                                                            <th data-field="date_added" data-sortable="false">Date added
                                                            </th>
                                                            <th data-field="operate" data-sortable="false">Operate</th>
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

                <div id="product_faq_value_id" class="modal fade edit-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitre">Modifier FAQ des produits</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>

                            <div class="modal-body p-0">
                                <form class="form-horizontal form-submit-event" id="product_edit_faq_form"
                                    action="<?= base_url('admin/product/edit_product_faqs'); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="card-body">
                                        <?php
                                        if (isset($fetched_data[0]['id'])) { ?>
                                            <input type="hidden" name="edit_product_faq"
                                                value="<?= @$fetched_data[0]['id'] ?>">
                                        <?php } ?>
                                        <div class="form-group row">
                                            <label for="question" class="col-sm-2 col-form-label">Question </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="question"
                                                    placeholder="question" name="question"
                                                    value="<?= @$fetched_data[0]['question'] ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-3">
                                            <label for="answer" class="col-sm-2 col-form-label">Answer <span
                                                    class='text-danger text-sm'>*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="answer" placeholder="Answer"
                                                    name="answer" value="<?= @$fetched_data[0]['answer'] ?>">
                                            </div>
                                        </div>


                                        <div class="form-group mt-3">
                                            <button type="reset" class="btn btn-warning">Réinitialiser</button>
                                            <button type="submit" class="btn btn-success"
                                                id="submit_btn"><?= (isset($fetched_data[0]['id'])) ? 'Mettre à jour Product Faq' : 'Ajouter un produit FAQ' ?></button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="product-rating-modal" tabindex="1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">View Product Rating</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="tab-pane " role="tabpanel" aria-labelledby="product-rating-tab">
                                    <table class='table-striped' id="product-rating-table" data-toggle="table"
                                        data-url="<?= base_url('admin/product/get_rating_list') ?>"
                                        data-click-to-select="true" data-side-pagination="server" data-pagination="true"
                                        data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                                        data-show-columns="true" data-show-refresh="true" data-trim-on-search="false"
                                        data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true"
                                        data-toolbar="" data-show-export="true" data-maintain-selected="true"
                                        data-export-types='["txt","excel"]' data-export-options='{
                                         "fileNom": "products-rating-list",
                                         "ignoreColumn": ["operate"] 
                                         }' data-query-params="ratingParams">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="product-checkbox"
                                                        value="<?= $row['id'] ?>">
                                                </td>

                                                <th data-field="id" data-sortable="true">ID</th>
                                                <th data-field="username" data-width='500' data-sortable="false"
                                                    class="col-md-6">Nom d'utilisateur</th>
                                                <th data-field="rating" data-sortable="false">Rating</th>
                                                <th data-field="comment" data-sortable="false">Comment</th>
                                                <th data-field="images" data-sortable="true">Images</th>
                                                <th data-field="data_added" data-sortable="false">Data added</th>
                                                <th data-field="operate" data-sortable="false">Operate</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 main-content">
                    <div class="card content-area p-4">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title mb-0">Produits</h3>

                                <div class="card-tools d-flex gap-2">
                                    <button id="bulk_delete_products" class="btn btn-outline-danger btn-sm">
                                        <i class="fa fa-trash"></i> Supprimer Selected
                                    </button>

                                    <a href="<?= base_url('admin/product/create_product') ?>"
                                        class="btn btn-outline-primary btn-sm">
                                        Ajouter un produit
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-innr">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="category_parent" class="col-form-label fs-6">Filter By Product
                                        Catégorie</label>
                                    <select id="category_parent" name="category_parent">
                                        <option value="">
                                            <?= (isset($categories) && empty($categories)) ? 'No Catégories Exist' : 'Sélectionner une catégorie' ?>
                                        </option>
                                        <?php echo get_categories_option_html($categories); ?>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="product_type_filter" class="col-form-label fs-6">Filter Product By Type
                                    </label>
                                    <select id="product_type_filter" name="product_type_filter"
                                        placeholder="Sélectionner le type" required="" class="form-control">
                                        <option value="">Tout</option>
                                        <option value="simple_product">Simple Product</option>
                                        <option value="variable_product">Variable Product</option>
                                        <option value="digital_product">Produit numérique</option>
                                    </select>
                                </div>
                            </div>

                            <div class="gaps-1-5x"></div>
                            <table class="table-striped" id="products_table" data-toggle="table" data-id-field="id"
                                data-url="<?= isset($_GET['flag'])
                                    ? base_url('admin/product/get_product_data?flag=') . $_GET['flag']
                                    : base_url('admin/product/get_product_data') ?>" data-click-to-select="true" data-maintain-selected="true"
                                data-side-pagination="server" data-pagination="true"
                                data-page-list="[5,10,20,50,100,200]" data-search="true" data-show-columns="true"
                                data-show-refresh="true" data-trim-on-search="false" data-sort-name="id"
                                data-sort-order="desc" data-mobile-responsive="true" data-show-export="true"
                                data-export-types='["txt","excel","csv"]' data-export-options='{
        "fileNom": "products-list",
        "ignoreColumn": ["state"]
    }' data-query-params="product_query_params">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id" data-visible="false">ID</th>
                                        <th data-field="image">Image</th>
                                        <th data-field="name">Nom</th>
                                        <th data-field="rating">Rating</th>
                                        <th data-field="status">Actif</th>
                                        <th data-field="variations" data-visible="false">Variations</th>
                                        <th data-field="operate">Action</th>
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