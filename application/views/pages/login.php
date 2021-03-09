

<?php if($this->session->flashdata('user_loggedout')) : ?>
            <?= '<p class="alert alert-secondary">'.$this->session->flashdata('user_loggedout').'</p>' ?>
<?php endif; ?>


<?= form_open('login'); ?>

<div class="login-body">

    <div class="panel">
        <?php if($this->session->flashdata('failed_login')) : ?>
                <?= '<p class="alert alert-danger">'.$this->session->flashdata('failed_login').'</p>' ?>
        <?php endif; ?>
        <?= validation_errors(); ?>
        <span class="user-icon"></span>
        <h3><center><?= $title; ?></center></h3>
        <hr>
        <div class="userpw-box">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?= set_value('email');?>" class="form-control" autocomplete="off" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-secondary login-btn">Log In</button>
        </div>
    </div>
</div>
