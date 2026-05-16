<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content-header mt-4">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-8">
                    <h4>E-mail SMTP Paramètres</h4>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Accueil</a></li>
                        <li class="breadcrumb-item active">Paramètres e-mails</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <!-- form start -->
                        <form class="form-horizontal form-submit-event" action="<?= base_url('admin/email_settings/set_email_settings   '); ?>" method="POST" id="add_product_form" enctype="multipart/form-data">
                            <!-- card -->
                            <div class="card-body">
                                <p class="text-muted text-bold">Paramètres SMTP e-mail, notifications et autres éléments liés aux e-mails.</p>


                                <div class="form-group row align-items-center">
                                    <label for="email-set" class="control-label">E-mail <span class="text-danger text-sm">*</span></label>
                                    <div class="col-sm-12 col-md-12">
                                        <input type="text" name="email" class="form-control" id="email-set" value="<?= (isset($email_settings)) ? $email_settings['email'] : '' ?>" required="" dir="ltr">
                                        <div class="form-text text-muted">Il s'agit de l'adresse e-mail à laquelle les e-mails de contact et de rapport seront envoyés, ainsi que l'adresse d'expédition dans les e-mails d'inscription et de notification.</div>
                                    </div>

                                </div>

                                <div class="form-group row align-items-center">
                                    <label for="password" class="col-form-label">Mot de passe <span class="text-danger text-sm">*</span></label>
                                    <div class="col-sm-6 col-md-12">
                                        <input type="text" name="password" class="form-control" id="password" value="<?= (isset($email_settings)) ? $email_settings['password'] : '' ?>" required="">
                                        <div class="form-text text-muted">Mot de passe de l'e-mail ci-dessus.</div>
                                    </div>
                                </div>


                                <div class="form-group row align-items-center">
                                    <label for="smtp_host" class="col-form-label ">SMTP Host <span class="text-danger text-sm">*</span></label>
                                    <div class="col-sm-6 col-md-12">
                                        <input type="text" name="smtp_host" class="form-control" id="smtp_host" value="<?= (isset($email_settings)) ? $email_settings['smtp_host'] : '' ?>" required="">
                                        <div class="form-text text-muted">Il s'agit de l'adresse hôte de votre serveur SMTP, ceci n'est nécessaire que si vous utilisez SMTP comme type d'envoi d'e-mail.</div>
                                    </div>
                                </div>


                                <div class="form-group row align-items-center">
                                    <label for="smtp_port" class="col-form-label ">SMTP Port <span class="text-danger text-sm">*</span></label>
                                    <div class="col-sm-6 col-md-12">
                                        <input type="text" name="smtp_port" class="form-control" id="smtp_port" value="<?= (isset($email_settings)) ? $email_settings['smtp_port'] : '' ?>" required="">
                                        <div class="form-text text-muted">Port SMTP que votre fournisseur de services vous fournira.</div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label">E-mail Content Type <span class="text-danger text-sm">*</span></label>
                                    <div class="col-sm-6 col-md-12">

                                        <select class="form-control" name="mail_content_type" id="mail_content_type">
                                            <option value="text" <?= (isset($email_settings) && $email_settings['mail_content_type'] == 'text') ? 'selected' : '' ?>>Text</option>
                                            <option value="html" <?= (isset($email_settings) && $email_settings['mail_content_type'] == 'html') ? 'selected' : '' ?>>HTML</option>
                                        </select>
                                        <div class="form-text text-muted">Sélecteur de contenu Texte brut ou HTML.</div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label">SMTP Encryption <span class="text-danger text-sm">*</span></label>
                                    <div class="col-sm-6 col-md-12">

                                        <select class="form-control" name="smtp_encryption" id="smtp_encryption">
                                            <option value="off" <?= (isset($email_settings) && $email_settings['smtp_encryption'] == 'off') ? 'selected' : '' ?>>off</option>
                                            <option value="ssl" <?= (isset($email_settings) && $email_settings['smtp_encryption'] == 'ssl') ? 'selected' : '' ?>>SSL</option>
                                            <option value="tls" <?= (isset($email_settings) && $email_settings['smtp_encryption'] == 'tls') ? 'selected' : '' ?>>TLS</option>
                                        </select>
                                        <div class="form-text text-muted">Si votre fournisseur de services e-mail prend en charge les connexions sécurisées, vous pouvez choisir la méthode de sécurité dans la liste.</div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="reset" class="btn btn-warning">Réinitialiser</button>
                                    <button type="submit" class="btn btn-success update_email_setting" id="submit_btn"><?= (isset($email_settings)) ? 'Mettre à jour E-mail Paramètres' : 'Ajouter E-mail Paramètres' ?></button>
                                </div>

                                <!-- /.card-body -->
                            </div>
                        </form>
                    </div>
                    <!--/.card-->
                </div>
                <!--/.col-md-12-->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>