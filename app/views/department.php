  <main id="main" class="main">

    <div class="pagetitle">
      <h1><?php echo $title ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url() ?>dashboard">Home</a></li>
          <li class="breadcrumb-item active">department</li>
        </ol>
      </nav>
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
    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">

        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Departments</h5>
              <form class="needs-validation" action="<?php echo site_url('department/add_department') ?>" method="POST" novalidate>
              <div class="row">
                <div class="col-md-3 mb-3">
                <label for="department_name">Department</label>
                  <input type="text" class="form-control" id="department_name" placeholder="Department Name" name="department_name" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                <label for="office">Abbreviation</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="office" placeholder="Admin | HR | IT | MIS" name="office" value="" required>
                    <div class="invalid-feedback">
                      Valid last name is required.
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                <label for="inter_exten">Intercom Extension</label>
                  <input type="number" class="form-control" id="inter_exten" placeholder="1001 | 1002 | 1003" name="inter_exten" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="hod">Head Of Department</label>
                  <input type="text" class="form-control" id="hod" placeholder="HOD" name="hod" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
              </div>

                <button type="submit" class="btn btn-primary" align="right">Add Depart</button>
              </form>
              <!-- End Line Chart -->

          </div>
        </div>
      </div>


          <!-- Desktop Table -->
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Department Name</th>
              <th scope="col">Office</th>
              <th scope="col">intercom Extension</th>
              <th scope="col">HOD</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($departments as $all_departments): ?>
              <tr>
                <td><?php echo $all_departments['department_name']?></td>
                <td><?php echo $all_departments['office'] ?></td>
                <td><?php echo $all_departments['inter_exten'] ?></td>
                <td><?php echo $all_departments['hod'] ?></td>
                <td>
                  <a href="<?php echo site_url(); ?>/department/edit/<?php echo $all_departments['id']; ?>" class="btn btn-primary btn-sm" title="Edit Department"><i class="bi bi-pen"></i></a>
                  <a href="<?php echo site_url(); ?>/department/delete/<?php echo $all_departments['id']; ?>" onclick="return confirm('Do you want delete this record')" class="btn btn-danger btn-sm" title="Remove Department"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
            <!-- End of table -->
          </tbody>
        </table>
      </div>

        

      </div>
    </section>

  </main><!-- End #main -->