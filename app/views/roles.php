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
      <div class="card recent-sales overflow-auto col-md-6 mb-6">
        <div class="card-body">
        </br>
        <form action="<?php echo site_url('roles/add_role') ?>" method="POST">
          <div class="row">
            <div class="">
              <label for="role">Role</label>
              <div class="input-group">
                <input type="text" class="form-control" id="role" placeholder="Role" name="role" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
          </div>
          </br>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Add Role</button>
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
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($all_roles as $all_roles): ?>
                      <tr>
                        <td><?php echo $all_roles['role'] ?></td>
                        <td><a href="<?php echo site_url(); ?>users/edit/<?php echo $all_roles['id']; ?>" class="btn-warning"><i class="fas fa-edit"></i></a> 
                          <a href="<?php echo site_url(); ?>users/delete/<?php echo $all_roles['id']; ?>" onclick="return confirm('Do you want delete this record')" class="btn-danger"><i class="fas fa-trash"></i></a> 
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