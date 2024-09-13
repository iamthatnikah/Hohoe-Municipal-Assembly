  <main id="main" class="main">

    <div class="pagetitle">
      <h1><?php echo $title ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url() ?>dashboard">Home</a></li>
          <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="content-header">
      <div class="container-fluid">
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
        <form action="<?php echo site_url('users/add_user') ?>" method="POST">
        <div class="row">
            <div class="col-md-3 mb-3">
              <label for="firstname">First Name</label>
              <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" value="" required>
              <div class="invalid-feedback">
                Valid First Name is required.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="middlename">Middle Name</label>
              <input type="text" class="form-control" id="firstname" placeholder="Middle Name" name="middlename" value="" required>
              <div class="invalid-feedback">
                Valid First Name is required.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="lastname">Last Name</label>
              <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" value="" required>
              <div class="invalid-feedback">
                Valid Last Name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="department">Department</label>
              <select type="text" class="form-control" id="department" placeholder="Department" name="department" value="" required>
                <option>Choose...</option>
                  <?php foreach ($all_departments as $all_department): ?>
                    <option value="<?php echo $all_department['department_name'] .' | '. $all_department['office']?>"><?php echo $all_department['department_name'] .' | '. $all_department['office']?></option>
                  <?php endforeach; ?>
              </select>
              <div class="invalid-feedback">
                Please select a valid Department.
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-md-5 mb-3">
              <label for="official_email">Official Email Address</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="email" class="form-control" id="official_email" placeholder="name@hhma.gov.gh" name="official_email" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="role">Role</label>
              <select type="text" class="form-control" id="role" placeholder="Role" name="role" value="" required>
                <option>Choose...</option>
                  <?php foreach ($all_roles as $roles): ?>
                    <option value="<?php echo $roles['role'] ?>"><?php echo $roles['role'] ?></option>
                  <?php endforeach; ?>
              </select>
              <div class="invalid-feedback">
                Please select a valid Department.
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <label for="installed_memory">Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <!-- <div class="col-md-3 mb-2">
              <label for="processor_speed">Confirm Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="processor" placeholder="Confirm Password" name="processor_speed" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div> -->
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
                        <td><?php echo $all_user['firstname'] . ' ' . $all_user['middlename'] . ' ' . $all_user['lastname']?></td>
                        <td><?php echo $all_user['official_email'] ?></td>
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