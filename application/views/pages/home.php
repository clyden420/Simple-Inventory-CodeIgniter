<?php if($this->session->flashdata('user_loggedin')) : ?>
            <?= '<p class="alert alert-secondary">'.$this->session->flashdata('user_loggedin').'</p>' ?>
<?php endif; ?>


<h2><?= $title ?></h2>
<p class="lead">Welcome to the Inventory System!</p> 
