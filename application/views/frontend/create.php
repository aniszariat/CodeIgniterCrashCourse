<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Employee data</h5>
                    <a href="<?= base_url('employee'); ?>" class="btn btn-danger">BACK</a>

                    <div class="card-body">
                        <form action="<?= base_url('employee/store')?>" method="POST">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" class="form-control">
                                <small><?= form_error('first_name') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" class="form-control">
                                <small><?= form_error('last_name') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" name="phone" class="form-control">
                                <small><?= form_error('phone') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="">Email ID</label>
                                <input type="email" name="email" class="form-control">
                                <small><?= form_error('email') ?></small>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>