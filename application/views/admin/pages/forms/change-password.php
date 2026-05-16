<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content-header">
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <!-- form start -->
                        <form class="form-submit-event" action="<?= base_url('admin/login/update_user') ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="username" class="col-sm-2 col-form-label">Nom d'utilisateur *</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="username" placeholder="Type Mot de passe here" name="username" value="<?= $users->username ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">E-mail *</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email" placeholder="Type Mot de passe here" name="email" value="<?= $users->email ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="old" class="col-sm-2 col-form-label">Old Mot de passe</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="old" placeholder="Type Mot de passe here" name="old">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="new" class="col-sm-2 col-form-label">New Mot de passe</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="new" placeholder="Type Mot de passe here" name="new">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="new_confirm" class="col-sm-2 col-form-label">Confirm New Mot de passe</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="new_confirm" placeholder="Type Confirmer le mot de passe here" name="new_confirm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="reset" class="btn btn-warning">Réinitialiser</button>
                                    <button type="submit" class="btn btn-success" id="submit_btn">Mettre à jour Profil</button>
                                </div>

                            </div>
                           

                            <!-- /.card-footer -->
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