<h1>User Page</h1>
<?php if($this->session->flashdata('status')) : ?>
  <div class="alert alert-success">
    <?= $this->session->flashdata('status'); ?>
  </div>
<?php endif; ?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">User Page</h5>
    <h6 class="card-subtitle mb-2 text-muted">First Name:<?= $this->session->userdata('auth_user')['first_name']; ?></h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="employee" class="card-link">table</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>