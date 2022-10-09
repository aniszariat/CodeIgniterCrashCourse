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
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td><a href="<?= base_url('employee/:id/edit') ?>" class="btn btn-warning">edit emplyee data</a></td>
                  <td><button class="btn btn-danger">delete this employee</button></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td><a href="<?= base_url('employee/:id/edit') ?>" class="btn btn-warning">edit emplyee data</a></td>
                  <td><button class="btn btn-danger">delete this employee</button></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                  <td><a href="<?= base_url('employee/:id/edit') ?>" class="btn btn-warning">edit emplyee data</a></td>
                  <td><button class="btn btn-danger">delete this employee</button></td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>