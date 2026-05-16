<div class="content-wrapper">
    <section class="content-header mt-4">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h4>Paramètres généraux du site Web</h4>
                </div>
                <div class="col-sm-4 d-flex justify-content-end">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Accueil</a>
                        </li>
                        <li class="breadcrumb-item active">Paramètres généraux du site Web</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <form class="form-horizontal form-submit-event" action="<?= base_url('admin/setting/update_web_settings') ?>" method="POST" id="system_setting_form" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="mb-2" for="site_title">Titre du site <span class='text-danger text-xs'>*</span></label>
                                        <input type="text" class="form-control mb-2" name="site_title" value="<?= (isset($web_settings['site_title'])) ? output_escaping($web_settings['site_title']) : '' ?>" placeholder="Titre préfixe du site Web. " />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2" for="support_number">Numéro de support <span class='text-danger text-xs'>*</span></label>
                                        <input type="number" class="form-control mb-2" min="0" name="support_number" value="<?= (isset($web_settings['support_number'])) ? output_escaping($web_settings['support_number']) : '' ?>" placeholder="Numéro de mobile du support client" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2" for="support_email">E-mail de support <span class='text-danger text-xs'>*</span></label>
                                        <input type="text" class="form-control mb-2" name="support_email" value="<?= (isset($web_settings['support_email'])) ? output_escaping($web_settings['support_email']) : '' ?>" placeholder="E-mail du support client" />
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="mb-2" for="address">Détails du droit d'auteur <span class='text-danger text-xs'>*</span></label>
                                        <textarea name="copyright_details" id="copyright_details" class="form-control mb-2" cols="30" lignes="3"><?= (isset($web_settings['copyright_details'])) ? output_escaping($web_settings['copyright_details']) : '' ?></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="mb-2" for="address">Adresse <span class='text-danger text-xs'>*</span></label>
                                        <textarea name="address" id="address" class="form-control mb-2" cols="30" lignes="5"><?= (isset($web_settings['address'])) ? output_escaping($web_settings['address']) : '' ?></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="mb-2" for="app_short_description">Description courte <span class='text-danger text-xs'>*</span></label>
                                        <textarea name="app_short_description" id="app_short_description" class="form-control mb-2" cols="30" lignes="5"><?= (isset($web_settings['app_short_description'])) ? output_escaping($web_settings['app_short_description']) : '' ?></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="mb-2" for="map_iframe">Iframe de la carte <span class='text-danger text-xs'>*</span></label>
                                        <textarea name="map_iframe" id="map_iframe" class="form-control mb-2" cols="30" lignes="5"><?= (isset($web_settings['map_iframe'])) ? output_escaping($web_settings['map_iframe']) : '' ?></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="mb-2" for="logo">Logo <span class='text-danger text-xs'>*</span><small>(Taille recommandée : larger than 120 x 120 & smaller than 150 x 150 pixels.)</small></label>
                                                <div class="col-sm-10">
                                                    <div class='col-md-3'><a class="uploadFile img btn btn-primary text-white btn-sm" data-input='logo' data-isremovable='0' data-is-multiple-uploads-allowed='0' data-toggle="modal" data-target="#media-upload-modal" value="Téléverser une photo"><i class='fa fa-upload'></i> Upload</a></div>
                                                    <?php
                                                    if (!empty($logo)) {
                                                    ?>
                                                        <label class="mb-2" class="text-danger mt-3">*Choisir uniquement lorsque la mise à jour est nécessaire</label>
                                                        <div class="container-fluid row image-upload-section">
                                                            <div class="col-md-3 col-sm-12 shadow p-3 mb-5 bg-white rounded m-4 text-center grow image">
                                                                <div class=''>
                                                                    <div class='upload-media-div'><img class="img-fluid mb-2" src="<?= BASE_URL() . $logo ?>" alt="Image non trouvée"></div>
                                                                    <input type="hidden" name="logo" id='logo' value='<?= $logo ?>'>
                                                                </div>
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
                                            <div class="col-md-6 form-group">
                                                <label class="mb-2" for="favicon">Favicon <span class='text-danger text-xs'>*</span></label>
                                                <div class="col-sm-10">
                                                    <div class='col-md-3'><a class="uploadFile img btn btn-primary text-white btn-sm" data-input='favicon' data-isremovable='0' data-is-multiple-uploads-allowed='0' data-toggle="modal" data-target="#media-upload-modal" value="Téléverser une photo"><i class='fa fa-upload'></i> Upload</a></div>
                                                    <?php
                                                    if (!empty($favicon)) {
                                                    ?>
                                                        <label class="mb-2" class="text-danger mt-3">*Choisir uniquement lorsque la mise à jour est nécessaire</label>
                                                        <div class="container-fluid row image-upload-section">
                                                            <div class="col-md-3 col-sm-12 shadow p-3 mb-5 bg-white rounded m-4 text-center grow image">
                                                                <img class="img-fluid mb-2" src="<?= BASE_URL() . $favicon ?>" alt="Image non trouvée">
                                                                <input type="hidden" name="favicon" id='favicon' value='<?= $favicon ?>'>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    } else { ?>
                                                        <div class="container-fluid row image-upload-section">
                                                            <div class="col-md-3 col-sm-12 shadow p-3 mb-5 bg-white rounded text-center grow image d-none">
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="mb-2" for="support_email">Mots-clés Meta <span class='text-danger text-xs'>*</span></label>
                                        <textarea name="meta_keywords" id="meta_keywords" class="form-control mb-2" cols="30" lignes="5"><?= (isset($web_settings['meta_keywords'])) ? $web_settings['meta_keywords'] : '' ?></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="mb-2" for="support_email">Description Meta <span class='text-danger text-xs'>*</span></label>
                                        <textarea name="meta_description" id="meta_description" class="form-control mb-2" cols="30" lignes="5"><?= (isset($web_settings['meta_description'])) ? $web_settings['meta_description'] : '' ?></textarea>
                                    </div>
                                </div>
                                <hr>
                                <h4>Mode développeur</h4>
                                <div class="row">
                                    <div class="form-group col-md-12 col-sm-12">
                                        <label class="mb-2" for="is_delivery_boy_otp_setting_on"> Enable / Disable <small>(Keep it OFF in Production, only turn it on when you require eShop Support.) </small> </label>
                                        <div class="card-body">
                                            <a class="toggle form-switch mr-1 mb-1" title="Deactivate" href="javascript:void(0)">
                                                <input type="checkbox" class="form-check-input" role="switch" name="developer_mode" <?= (isset($web_settings['developer_mode']) && $web_settings['developer_mode'] == 'on') ? 'Checked' : '' ?> />
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <hr>
                                <h4>Section de téléchargement de l'application</h4>
                                <div class="row">
                                    <div class="form-group col-md-12 col-sm-12">
                                        <label class="mb-2" for="is_delivery_boy_otp_setting_on"> Enable / Disable</label>
                                        <div class="card-body">
                                            <a class="toggle form-switch mr-1 mb-1" title="Deactivate" href="javascript:void(0)">
                                                <input type="checkbox" class="form-check-input" role="switch" name="app_download_section" <?= (isset($web_settings['app_download_section']) && $web_settings['app_download_section'] == '1') ? 'Checked' : '' ?> />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="mb-2" for="app_download_section_title">Titre <span class='text-danger text-xs'>*</span></label>
                                        <input type="text" class="form-control mb-2" name="app_download_section_title" value="<?= (isset($web_settings['app_download_section_title'])) ? output_escaping($web_settings['app_download_section_title']) : '' ?>" placeholder="Titre de la section de téléchargement de l'application. " />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="mb-2" for="app_download_section_tagline">Slogan<span class='text-danger text-xs'>*</span></label>
                                        <input type="text" class="form-control mb-2" name="app_download_section_tagline" value="<?= (isset($web_settings['app_download_section_tagline'])) ? output_escaping($web_settings['app_download_section_tagline']) : '' ?>" placeholder="Slogan de la section de téléchargement de l'application." />
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="mb-2" for="app_download_section_short_description">Description courte <span class='text-danger text-xs'>*</span></label>
                                        <textarea name="app_download_section_short_description" id="app_download_section_short_description" class="form-control" cols="30" lignes="5"><?= (isset($web_settings['app_download_section_short_description'])) ? output_escaping($web_settings['app_download_section_short_description']) : '' ?></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="mb-2" for="promo_head_description">Description de l'en-tête promotionnel<span class='text-danger text-xs'>*</span></label>
                                        <input type="text" class="form-control mb-2" name="promo_head_description" value="<?= (isset($web_settings['promo_head_description'])) ? output_escaping($web_settings['promo_head_description']) : '' ?>" placeholder="Description de l'en-tête promotionnel." />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="mb-2" for="app_download_section_title">URL Playstore <span class='text-danger text-xs'>*</span></label>
                                        <input type="text" class="form-control mb-2" name="app_download_section_playstore_url" value="<?= (isset($web_settings['app_download_section_playstore_url'])) ? output_escaping($web_settings['app_download_section_playstore_url']) : '' ?>" placeholder="URL Playstore. " />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="mb-2" for="app_download_section_tagline">URL Appstore<span class='text-danger text-xs'>*</span></label>
                                        <input type="text" class="form-control mb-2" name="app_download_section_appstore_url" value="<?= (isset($web_settings['app_download_section_appstore_url'])) ? output_escaping($web_settings['app_download_section_appstore_url']) : '' ?>" placeholder="Appstore URL." />
                                    </div>
                                </div>
                                <hr>
                                <h4>Liens des réseaux sociaux</h4>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="mb-2" for="twitter_link">Twitter</label>
                                        <input type="text" class="form-control mb-2 url-link" name="twitter_link" value="<?= (isset($web_settings['twitter_link'])) ? output_escaping($web_settings['twitter_link']) : '' ?>" placeholder="Twitter Link" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="mb-2" for="instagram_link">Instagram</label>
                                        <input type="text" class="form-control mb-2 url-link" name="instagram_link" value="<?= (isset($web_settings['instagram_link'])) ? output_escaping($web_settings['instagram_link']) : '' ?>" placeholder="Instagram Link" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="mb-2" for="youtube_link">Youtube</label>
                                        <input type="text" class="form-control mb-2 url-link" name="youtube_link" value="<?= (isset($web_settings['youtube_link'])) ? output_escaping($web_settings['youtube_link']) : '' ?>" placeholder="Youtube Link" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="mb-2" for="whatsapp_link">WhatsApp</label>
                                        <input type="text" class="form-control mb-2 url-link" name="whatsapp_link" value="<?= (isset($web_settings['whatsapp_link'])) ? output_escaping($web_settings['whatsapp_link']) : '' ?>" placeholder="WhatsApp Link" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="mb-2" for="linkedin_link">Linkedin</label>
                                        <input type="text" class="form-control mb-2 url-link" name="linkedin_link" value="<?= (isset($web_settings['linkedin_link'])) ? output_escaping($web_settings['linkedin_link']) : '' ?>" placeholder="Linkedin Link" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="mb-2" for="tiktok_link">Tiktok</label>
                                        <input type="text" class="form-control mb-2" name="tiktok_link" value="<?= (isset($web_settings['tiktok_link'])) ? output_escaping($web_settings['tiktok_link']) : '' ?>" placeholder="Tiktok Link" />
                                    </div>
                                </div>
                                <hr>
                                <h4>Section fonctionnalités</h4>
                                <div class="row">
                                    <h4 class="h4 col-md-12">Livraison</h4>
                                    <div class="form-group col-md-2 col-sm-4">
                                        <label class="mb-2" for="shipping_mode"> Enable / Disable</label>
                                        <div class="card-body">
                                            <a class="toggle form-switch mr-1 mb-1" title="Deactivate" href="javascript:void(0)">
                                                <input type="checkbox" class="form-check-input" role="switch" name="shipping_mode" <?= (isset($web_settings['shipping_mode']) && $web_settings['shipping_mode'] == '1') ? 'Checked' : '' ?> />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2" for="shipping_title">Titre</label>
                                        <input type="text" class="form-control mb-2" name="shipping_title" value="<?= (isset($web_settings['shipping_title'])) ? output_escaping($web_settings['shipping_title']) : '' ?>" placeholder="Titre Livraison" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2" for="shipping_description">Description</label>
                                        <textarea name="shipping_description" class="form-control mb-2" id="shipping_description" cols="30" lignes="4" placeholder="Description Livraison"><?= (isset($web_settings['shipping_description'])) ? output_escaping($web_settings['shipping_description']) : '' ?></textarea>
                                    </div>

                                    <h4 class="h4 col-md-12">Returns</h4>
                                    <div class="form-group col-md-2 col-sm-4">
                                        <label class="mb-2" for="return_mode"> Enable / Disable</label>
                                        <div class="card-body">
                                            <a class="toggle form-switch mr-1 mb-1" title="Deactivate" href="javascript:void(0)">
                                                <input type="checkbox" class="form-check-input" role="switch" name="return_mode" <?= (isset($web_settings['return_mode']) && $web_settings['return_mode'] == '1') ? 'Checked' : '' ?> />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2" for="return_title">Titre</label>
                                        <input type="text" class="form-control mb-2" name="return_title" value="<?= (isset($web_settings['return_title'])) ? output_escaping($web_settings['return_title']) : '' ?>" placeholder="Titre Retour" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2" for="return_description">Description</label>
                                        <textarea name="return_description" class="form-control mb-2" id="return_description" cols="30" lignes="4" placeholder="Description Retour"><?= (isset($web_settings['return_description'])) ? output_escaping($web_settings['return_description']) : '' ?></textarea>
                                    </div>

                                    <h4 class="h4 col-md-12">Support</h4>
                                    <div class="form-group col-md-2 col-sm-4">
                                        <label class="mb-2" for="support_mode"> Enable / Disable</label>
                                        <div class="card-body">
                                            <a class="toggle form-switch mr-1 mb-1" title="Deactivate" href="javascript:void(0)">
                                                <input type="checkbox" class="form-check-input" role="switch" name="support_mode" <?= (isset($web_settings['support_mode']) && $web_settings['support_mode'] == '1') ? 'Checked' : '' ?> />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2" for="support_title">Titre</label>
                                        <input type="text" class="form-control mb-2" name="support_title" value="<?= (isset($web_settings['support_title'])) ? output_escaping($web_settings['support_title']) : '' ?>" placeholder="Titre Support" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="shipping_description">Description</label>
                                        <textarea name="support_description" class="form-control mb-2" id="support_description" cols="30" lignes="4" placeholder="Description Support"><?= (isset($web_settings['support_description'])) ? output_escaping($web_settings['support_description']) : '' ?></textarea>
                                    </div>

                                    <h4 class="h4 col-md-12">Sécurité et sûreté</h4>
                                    <div class="form-group col-md-2 col-sm-4">
                                        <label class="mb-2" for="safety_security_mode"> Enable / Disable</label>
                                        <div class="card-body">
                                            <a class="toggle form-switch mr-1 mb-1" title="Deactivate" href="javascript:void(0)">
                                                <input type="checkbox" class="form-check-input" role="switch" name="safety_security_mode" <?= (isset($web_settings['safety_security_mode']) && $web_settings['safety_security_mode'] == '1') ? 'Checked' : '' ?> />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2" for="safety_security_title">Titre</label>
                                        <input type="text" class="form-control mb-2" name="safety_security_title" value="<?= (isset($web_settings['safety_security_title'])) ? output_escaping($web_settings['safety_security_title']) : '' ?>" placeholder="Sécurité et sûreté Titre" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2" for="safety_security_description">Description</label>
                                        <textarea name="safety_security_description" class="form-control mb-2" id="safety_security_description" cols="30" lignes="4" placeholder="Sécurité et sûreté Description"><?= (isset($web_settings['safety_security_description'])) ? output_escaping($web_settings['safety_security_description']) : '' ?></textarea>
                                    </div>
                                </div>
                                <h4 class="h4 col-md-12">Paramètres du thème classique</h4>
                                <div class="d-flex gap-5">
                                    <div class="form-group col-md-2 col-sm-4">
                                        <label for="primary_color"> Couleur primaire</label>
                                        <input type="text" class="coloris form-control" name="primary_color" id="primary_color" value="<?= (isset($web_settings['primary_color'])) ? output_escaping($web_settings['primary_color']) : '' ?>" />
                                    </div>
                                    <div class="form-group col-md-2 col-sm-4">
                                        <label for="secondary_color"> Couleur secondaire</label>
                                        <input type="text" class="coloris form-control" name="secondary_color" id="secondary_color" value="<?= (isset($web_settings['secondary_color'])) ? output_escaping($web_settings['secondary_color']) : '' ?>" />
                                    </div>
                                    <div class="form-group col-md-2 col-sm-4">
                                        <label for="font_color"> Couleur de la police</label>
                                        <input type="text" class="coloris form-control" name="font_color" id="font_color" value="<?= (isset($web_settings['font_color'])) ? output_escaping($web_settings['font_color']) : '' ?>" />
                                    </div>
                                </div>

                                <div class="form-group col-md-7 pl-0 mt-4">
                                    
                                    <h4>Paramètres du thème moderne</h4>
                                    <label for="modern_theme_color">Couleur du thème</label>
                                    <select id="modern_theme_color" name="modern_theme_color" class="form-control col-md-5">
                                        <option value="default" <?= (isset($web_settings['modern_theme_color']) && $web_settings['modern_theme_color'] == 'default') ? 'selected' : "" ?>>défaut</option>
                                        <option value="blue" <?= (isset($web_settings['modern_theme_color']) && $web_settings['modern_theme_color'] == 'blue') ? 'selected' : "" ?>>bleu</option>
                                        <option value="cyan-dark" <?= (isset($web_settings['modern_theme_color']) && $web_settings['modern_theme_color'] == 'cyan-dark') ? 'selected' : "" ?>>Cyan foncé</option>
                                        <option value="dark-blue" <?= (isset($web_settings['modern_theme_color']) && $web_settings['modern_theme_color'] == 'dark-blue') ? 'selected' : "" ?>>Bleu foncé</option>
                                        <option value="dark-purple" <?= (isset($web_settings['modern_theme_color']) && $web_settings['modern_theme_color'] == 'dark-purple') ? 'selected' : "" ?>>Violet foncé</option>
                                        <option value="green" <?= (isset($web_settings['modern_theme_color']) && $web_settings['modern_theme_color'] == 'green') ? 'selected' : "" ?>>Vert</option>
                                        <option value="indigo" <?= (isset($web_settings['modern_theme_color']) && $web_settings['modern_theme_color'] == 'indigo') ? 'selected' : "" ?>>Indigo</option>
                                        <option value="orange" <?= (isset($web_settings['modern_theme_color']) && $web_settings['modern_theme_color'] == 'orange') ? 'selected' : "" ?>>Orange</option>
                                        <option value="peach" <?= (isset($web_settings['modern_theme_color']) && $web_settings['modern_theme_color'] == 'peach') ? 'selected' : "" ?>>Pêche</option>
                                        <option value="pink" <?= (isset($web_settings['modern_theme_color']) && $web_settings['modern_theme_color'] == 'pink') ? 'selected' : "" ?>>Rose</option>
                                        <option value="purple" <?= (isset($web_settings['modern_theme_color']) && $web_settings['modern_theme_color'] == 'purple') ? 'selected' : "" ?>>Violet</option>
                                        <option value="red" <?= (isset($web_settings['modern_theme_color']) && $web_settings['modern_theme_color'] == 'red') ? 'selected' : "" ?>>Rouge</option>
                                    </select>
                                </div>
                                <div class="form-group mt-4">
                                    <button type="reset" class="btn btn-warning" id="web-form-rest">Réinitialiser</button>
                                    <button type="submit" class="btn btn-success update_setting" id="submit_btn">Mettre à jour les paramètres</button>
                                </div>
                                

                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>