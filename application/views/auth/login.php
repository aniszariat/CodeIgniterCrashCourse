<?php if($this->session->set_flashdata('status')) : ?>
  <div class="alert alert-success">
    <?= $this->session->set_flashdata('status'); ?>
  </div>
<?php endif; ?>
<form class="row g-3" action="<?= base_url('login') ?>" method="POST">
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="email" name="email_id" class="form-control" id="staticEmail2" placeholder="example@email.com">
    <small><?= form_error('email_id')?></small>
</div>
<div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password">
    <small><?= form_error('password')?></small>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-success mb-3">login now</button>
  </div>
</form>