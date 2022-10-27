<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Register</h5>

                    <div class="card-body">
                        <form action="<?= base_url('register')?>" method="POST">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" value="<?= set_value('first_name') ?>" class="form-control">
                                <small><?= form_error('first_name') ?></small>
                                
                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" value="<?= set_value('last_name') ?>" class="form-control">
                                <small><?= form_error('last_name') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control">
                                <small><?= form_error('password') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="">confirm Password</label>
                                <input type="password" name="cpassword" value="<?= set_value('cpassword') ?>" class="form-control">
                                <small><?= form_error('password') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control">
                                <small><?= form_error('email') ?></small>
                            </div>
                            <div class="form-group" style="margin-top:20px ;">
                                <button type="submit" class="btn btn-success">Register</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>