<?php
defined('BASEPATH') or exit('No direct script access allowed');
$mm = get_novaq_mobile_money_settings();
?>
<div id="mobile_money" class="tab-pane">
    <div class="d-flex justify-content-between">
        <h5>Mobile Money (RDC)</h5>
        <div class="form-group col-md-8 mb-2 d-flex justify-content-end">
            <a class="toggle form-switch mr-1 mb-1" title="Activer" href="javascript:void(0)">
                <input type="checkbox" class="form-check-input" role="switch" name="mobile_money_method"
                    <?= (@$settings['mobile_money_method'] ?: @$mm['mobile_money_method']) == '1' ? 'Checked' : '' ?> />
            </a>
        </div>
    </div>
    <hr>
    <p class="text-muted small">Numéros marchands, codes USSD et liens. Remplacez les exemples par vos comptes réels.</p>
    <div class="row mb-3">
        <div class="col-md-4">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="mobile_money_show_footer" value="1"
                    <?= (@$settings['mobile_money_show_footer'] ?: '1') == '1' ? 'checked' : '' ?>> Pied de page
            </label>
        </div>
        <div class="col-md-4">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="mobile_money_show_contact" value="1"
                    <?= (@$settings['mobile_money_show_contact'] ?: '1') == '1' ? 'checked' : '' ?>> Contact
            </label>
        </div>
        <div class="col-md-4">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="mobile_money_show_checkout" value="1"
                    <?= (@$settings['mobile_money_show_checkout'] ?: '1') == '1' ? 'checked' : '' ?>> Checkout
            </label>
        </div>
    </div>
    <div class="form-check mb-4">
        <input type="checkbox" class="form-check-input" name="mobile_money_checkout_as_payment" value="1"
            id="mobile_money_checkout_as_payment"
            <?= (@$settings['mobile_money_checkout_as_payment'] ?: '1') == '1' ? 'checked' : '' ?>>
        <label class="form-check-label" for="mobile_money_checkout_as_payment">
            Mode de paiement au checkout (preuve de paiement comme virement bancaire)
        </label>
    </div>
    <div class="form-group mb-4">
        <label for="mobile_money_instructions">Instructions clients</label>
        <textarea name="mobile_money_instructions" id="mobile_money_instructions" class="form-control" rows="3"><?= output_escaping(@$settings['mobile_money_instructions'] ?: @$mm['mobile_money_instructions']) ?></textarea>
    </div>
    <?php
    foreach (
        [
            ['mpesa', 'M-Pesa (Vodacom)'],
            ['orange_money', 'Orange Money'],
            ['airtel_money', 'Airtel Money'],
        ] as $op
    ) {
        $p = $op[0];
        ?>
        <div class="card mb-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                <strong><?= $op[1] ?></strong>
                <input type="checkbox" class="form-check-input" name="<?= $p ?>_enabled" value="1"
                    <?= (@$settings[$p . '_enabled'] ?: @$mm[$p . '_enabled']) == '1' ? 'checked' : '' ?>>
            </div>
            <div class="card-body row">
                <div class="col-md-6 mb-2">
                    <label>Libellé</label>
                    <input type="text" class="form-control" name="<?= $p ?>_label"
                        value="<?= html_escape(@$settings[$p . '_label'] ?: @$mm[$p . '_label']) ?>">
                </div>
                <div class="col-md-6 mb-2">
                    <label>Numéro marchand</label>
                    <input type="text" class="form-control" name="<?= $p ?>_number"
                        value="<?= html_escape(@$settings[$p . '_number'] ?: @$mm[$p . '_number']) ?>">
                </div>
                <div class="col-md-6 mb-2">
                    <label>Code USSD</label>
                    <input type="text" class="form-control" name="<?= $p ?>_ussd"
                        value="<?= html_escape(@$settings[$p . '_ussd'] ?: @$mm[$p . '_ussd']) ?>">
                </div>
                <div class="col-md-6 mb-2">
                    <label>Lien (site / app)</label>
                    <input type="url" class="form-control" name="<?= $p ?>_url"
                        value="<?= html_escape(@$settings[$p . '_url'] ?: @$mm[$p . '_url']) ?>">
                </div>
            </div>
        </div>
    <?php } ?>
</div>
