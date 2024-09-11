
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col">
                  <div class="card card-body">
                    <form action="<?php echo site_url('admin/users/update/'. $user['id']) ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                      <div class="form-row">
                      <div class="form-group col-md-4">
                          <label for="">First Name</label>
                          <input type="text" class="form-control" name="firstname" value="<?php echo $user['firstname']?>">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="">Last Name</label>
                          <input type="text" class="form-control" name="lastname" value="<?php echo $user['lastname']?>">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="">Email Address</label>
                          <input type="email" class="form-control" name="email" value="<?php echo $user['email']?>">
                        </div>
                      <div class="form-group col-md-4">
                        <label for="inputAddress">Department</label>
                          <label for="inputAddress">Department</label>
                          <select class="form-control select2bs4" name="department">
                          <option value="<?php echo $user['department'] ?>"><?php echo $user['department'] ?></option>
                            <option value="">Select Ref. No./File Title</option>
                            <option value="<?php foreach ($all_departments as $all_department): ?>"></option>
                              <option value="<?php echo $all_department['name'] .' | '. $all_department['office']?>"><?php echo $all_department['name'] .' | '. $all_department['office']?></option>
                            <?php endforeach; ?>
                            <option value="">Central Administration, 01</option>
                            <option value="">Human Resource Mgt, 02</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputAddress">User Role</label>
                          <input type="text" class="form-control" name="role" value="<?php echo $user['role'] ?>">
                          <!-- <select class="form-control select2bs4" name="role" multiple>
                            <option value="">Select Ref. No./File Title</option>
                            <option value="">Central Administration, 01</option>
                            <option value="">Human Resource Mgt, 02</option>
                          </select> -->
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputAddress">Status</label>
                          <input type="text" class="form-control" name="status" value="<?php echo $user['status'] ?>">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                  </div>
              </div>
            </div>
          </div>

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 