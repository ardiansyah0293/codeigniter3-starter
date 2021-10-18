<div class="container">
    <?php if($this->session->flashdata('message_login_error')): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Maaf !</strong> <?= $this->session->flashdata('message_login_error'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <form action="" method="post">
        <div class="row">
            <div class="col-md-8">

            </div>
            <div class="col-md-4">
                <h4>Login</h4>
                <label for="username" class="mt-2">Username / Email</label>
                <input type="text" name="username" id="username" class="form-control <?= form_error('username') ? 'invalid' : '' ?>" placeholder="username or email" value="<?= set_value('username'); ?>" required />
                <div class="invalid-feedback">
                    <?= form_error('username'); ?>
                </div>

                <label for="password" class="mt-1">Password</label>
                <input type="password" name="password" id="password" class="form-control <?= form_error('password') ? 'invalid' : '' ?>" value="<?= set_value('password'); ?>" required />
                <div class="invalid-feedback">
                    <?= form_error('password'); ?>
                </div>

                <input type="submit" value="Login" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>