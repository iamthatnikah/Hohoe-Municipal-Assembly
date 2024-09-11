  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url() ?>dashboard">Home</a></li>
          <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $title ?></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
              <?php if($this->session->flashdata('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <?php echo $this->session->flashdata('error'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php endif; ?>
              <?php if($this->session->flashdata('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <?php echo $this->session->flashdata('success'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php endif; ?>
              <?php if(validation_errors()): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <?php echo validation_errors(); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php endif; ?>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="section dashboard">
      <div class="card recent-sales overflow-auto">
        <div class="card-body">
</br>
        <form action="" method="post">
        <div class="row">
            <div class="col-md-4 mb-3">
              <label for="admin_acc_name">First Name</label>
              <input type="text" class="form-control" id="admin_acc_name" placeholder="First Name" name="admin_acc_name" value="" required>
              <div class="invalid-feedback">
                Valid First Name is required.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="password">Last Name</label>
              <input type="text" class="form-control" id="password" placeholder="Last Name" name="password" value="" required>
              <div class="invalid-feedback">
                Valid Last Name is required.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="processor">Official Email</label>
              <input type="email" class="form-control" id="processor" placeholder="Official Email" name="processor" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-2">
              <label for="os_edition">Department</label>
              <select type="text" class="form-control" id="os_edition" placeholder="Department" name="os_edition" value="" required>
                <option><?php foreach ($all_departments as $all_department): ?>Choose...</option>
                    <option value="<?php echo $all_department['department_name'] .' | '. $all_department['office']?>"><?php echo $all_department['department_name'] .' | '. $all_department['office']?></option>
                  <?php endforeach; ?>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="system_rating">Role</label>
              <div class="input-group">
                <input type="text" class="form-control" id="system_rating" placeholder="Role" name="system_rating" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="installed_memory">Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="installed_memory" name="installed_memory" placeholder="Password" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="processor_speed">Confirm Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="processor" placeholder="Confirm Password" name="processor_speed" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Add User</button>
          </div>
        </form>
        </div>
        
      </div>



      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Department</th>
                        <th scope="col">User Role</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($all_users as $all_user): ?>
                      <tr>
                        <td><?php echo $all_user['firstname'] . ' ' . $all_user['lastname'] ?></td>
                        <td><?php echo $all_user['email'] ?></td>
                        <td><?php echo $all_user['department'] ?></td>
                        <td><?php echo $all_user['role'] ?></td>
                        <td><?php echo $all_user['status'] ?></td>
                        <td><a href="<?php echo site_url(); ?>users/edit/<?php echo $all_user['id']; ?>" class="btn-warning"><i class="fas fa-edit"></i></a> 
                          <a href="<?php echo site_url(); ?>users/delete/<?php echo $all_user['id']; ?>" onclick="return confirm('Do you want delete this record')" class="btn-danger"><i class="fas fa-trash"></i></a> 
                        </td>
                      </tr>
                    </tbody>
                    <?php endforeach; ?>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
          </div>
        </div><!-- End Left side columns -->
      </div>
    </section>

  </main><!-- End #main -->