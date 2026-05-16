<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg">
            <div class="card-body">
                <div class="text-center mb-4">
                    <a href="<?= base_url('admin/login/forgot_password') ?>">
                        <img src="<?= base_url() . $logo ?>" class="img-fluid" alt="Logo">
                    </a>
                </div>

                <h4 class="text-center">Réinitialiser Your Mot de passe</h4>
                <p class="text-muted text-center">
                    You are only one step away from your new password. Recover your password now.
                </p>

                <form action="<?= base_url('auth/reset_password/'.$code) ?>" method="POST">
                    <!-- CSRF Token -->
                    <input type="hidden" name="csrf_token" value="$csrf_token()"/>
                    
                    <!-- ID utilisateur -->
                    <input type="hidden" name="user_id" value="<?= $user->id ?>">

                    <!-- New Mot de passe -->
                    <div class="form-group">
                        <label for="new_password">New Mot de passe</label>
                        <div class="input-group">
                            <input type="password" name="new" id="new_password" class="form-control" placeholder="Enter new password" required>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary toggle-password" data-target="#new_password">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        <small class="text-danger"><?= isset($validation_errors['new']) ? $validation_errors['new'] : '' ?></small>
                    </div>

                    <!-- Confirmer le mot de passe -->
                    <div class="form-group">
                        <label for="confirm_password">Confirmer le mot de passe</label>
                        <div class="input-group">
                            <input type="password" name="new_confirm" id="confirm_password" class="form-control" placeholder="Confirm new password" required>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary toggle-password" data-target="#confirm_password">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        <small class="text-danger"><?= isset($validation_errors['new_confirm']) ? $validation_errors['new_confirm'] : '' ?></small>
                    </div>

                    <!-- Soumettre Button -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Change Mot de passe</button>
                    </div>
                </form>

                <div class="text-center mt-3">
                    <a href="https://adminlte.io/themes/v3/pages/examples/login.html">Back to Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.querySelectorAll('.toggle-password').forEach(button => {
    button.addEventListener('click', function() {
        let target = document.querySelector(this.getAttribut('data-target'));
        if (target.type === "password") {
            target.type = "text";
            this.innerHTML = '<i class="fas fa-eye-slash"></i>';
        } else {
            target.type = "password";
            this.innerHTML = '<i class="fas fa-eye"></i>';
        }
    });
});
</script>