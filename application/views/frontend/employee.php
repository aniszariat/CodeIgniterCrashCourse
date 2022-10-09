<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5>how to insert into a database </h5>
          <a href="<?= base_url('employee/add'); ?>" class="btn btn-primary">Add new emplyee</a>

          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Email ID</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($employees as $row) :?>
              <tr>
                  <th><?= $row-> id; ?></th>
                  <td><?= $row-> first_name; ?></td>
                  <td><?= $row-> last_name; ?></td>
                  <td><?= $row-> phone; ?></td>
                  <td><?= $row-> email; ?></td>
                  <td><a href="<?= base_url('employee/:id/edit') ?>" class="btn btn-warning">edit emplyee data</a></td>
                  <td><button class="btn btn-danger">delete this employee</button></td>
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>