<!-- ======= Main ======= -->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1><?php echo $title ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url() ?>dashboard">Home</a></li>
          <li class="breadcrumb-item active">Permanent Staff</li>
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

                    <!--  -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="building-tab" data-bs-toggle="tab" data-bs-target="#building" type="button" role="tab" aria-controls="building" aria-selected="true">Permanent Staff</button>
                      </li>

                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="transport-tab" data-bs-toggle="tab" data-bs-target="#transport" type="button" role="tab" aria-controls="transport" aria-selected="false">Temporal Staff</button>
                      </li>

                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="furniture-tab" data-bs-toggle="tab" data-bs-target="#furniture" type="button" role="tab" aria-controls="furniture" aria-selected="false">Revenue Collectors</button>
                      </li>

                    </ul>

                    <div class="tab-content" id="myTabContent">

                      <!-- Begining Of First Tab Panel -->
                    <div class="tab-pane fade show active" id="building" role="tabpanel" aria-labelledby="building-tab">
                      <div class="tab-pane fade show active" id="building" role="tabpanel" aria-labelledby="building-tab">
                        <div class="col-md-12 order-md-1">
                          <br/>
                        <h4 class="mb-3">Permanent Staff</h4>
                        <form class="needs-validation" action="<?php echo site_url('staff/add_perm_staff') ?>" method="POST">
                          <div class="row">
                            <div class="col-md-3 mb-2">
                              <label for="staff_id">Staff ID</label>
                              <input type="number" class="form-control" id="staff_id" placeholder="145874" name="staff_id" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="date_of_birth">Date Of Birth</label>
                              <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="01-MAR-2000" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="date_first_appointment">Date Of First Appointment</label>
                              <input type="date" class="form-control" id="date_first_appointment" name="date_first_appointment" placeholder="" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="date_last_promotion">Date Of Last Appointment</label>
                              <input type="date" class="form-control" id="date_last_promotion" placeholder="" name="date_last_promotion" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4 mb-2">
                              <label for="first_name">First name</label>
                              <input type="text" class="form-control" id="first_name" placeholder="" name="first_name" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <label for="middle_name">Middle name</label>
                              <input type="text" class="form-control" id="middle_name" placeholder="" name="middle_name" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <label for="last_name">Last name</label>
                              <input type="text" class="form-control" id="last_name" placeholder="" name="last_name" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-3 mb-2">
                              <label for="official_email">Official Email Address</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">@</span>
                                </div>
                                <input type="email" class="form-control" id="official_email" placeholder="you@hhma.gov.gh" name="official_email" value="" required>
                                <div class="invalid-feedback">
                                  Valid last name is required.
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="personal_email">Personal Email</label>
                              <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">@</span>
                                </div>
                              <input type="email" class="form-control" id="personal_email" name="personal_email" placeholder="you@example.com" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                          </div>
                            <div class="col-md-3 mb-2">
                              <label for="tel">Phone No.</label>
                              <input type="number" class="form-control" id="tel" placeholder="+233-0000-0000" name="tel" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>

                            <div class="col-md-3 mb-2">
                              <label for="mobile">Other Mobile</label>
                              <input type="number" class="form-control custom-select d-block w-100" placeholder="+233-0000-0000" name="mobile" id="mobile" required>
                              <div class="invalid-feedback">
                                Please select a valid mobile.
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4 mb-2">
                              <label for="department">Department</label>
                              <select class="form-control custom-select d-block w-100" id="department" name="department" required>
                                <option value="">Choose...</option>
                                <!-- <option value="<?php foreach ($all_departments as $all_department): ?>"></option> -->
                                  <option value="<?php echo $all_department['department_name'] .' | '. $all_department['office']?>"><?php echo $all_department['department_name'] .' | '. $all_department['office']?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                            <div class="col-md-4 mb-2">
                              <label for="grade">Grade</label>
                              <select class="form-control custom-select d-block w-100" id="grade" name="grade" required>
                                <option value="">Choose...</option>
                                <!-- <option value="<?php foreach ($all_departments as $all_department): ?>"></option> -->
                                  <option value="<?php echo $all_department['office']?>"><?php echo $all_department['office']?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                            <div class="col-md-4 mb-2">
                              <label for="ssn">Socail Security Number</label>
                              <input type="text" class="form-control" id="ssn" placeholder="Social Security Number" name="ssn" required>
                              <div class="invalid-feedback">
                                SSN required.
                              </div>
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-md-4 mb-2">
                              <label for="gender">Gender</label>
                              <select class="form-control custom-select d-block w-100" id="gender" name="gender" required>
                                <option value="">Choose...</option>
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                              <div class="invalid-feedback">
                                Please select a valid country.
                              </div>
                            </div>
                            <div class="col-md-4 mb-3">
                              <label for="class">Class</label>
                              <input type="text" class="form-control" id="class" placeholder="Class" name="class" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            <div class="col-md-4 mb-3">
                              <label for="salary_level">Salary Level</label>
                              <input  type="text" class="form-control custom-select d-block w-100" id="salary_level" placeholder="" name="salary_level" required>
                              <div class="invalid-feedback">
                                Please provide a valid state.
                              </div>
                            </div>
                            
                          </div>

                          <br/>
                          <button type="submit" class="btn btn-primary">Add Staff</button>
                        </form><!-- Form End -->
                      </div>
                    </div>
                    <!-- End Of First Nav Tab -->
                      

                    <!--  -->
                    <div class="table-responsive">
                      <table class="table table-striped table-sm">
                        <thead>
                          <tr>
                            <th scope="col">Full Name</th>
                            <th scope="col">official_email</th>
                            <th scope="col">department</th>
                            <th scope="col">tel</th>
                            <th scope="col">gender</th> 
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($all_perm_staff as $perm_staff): ?>
                            <tr>
                              <td><?php echo $perm_staff['first_name'] . " " . $perm_staff['middle_name'] . " " . $perm_staff['last_name'] ?></td>
                              <td><?php echo $perm_staff['official_email'] ?></td>
                              <td><?php echo $perm_staff['department'] ?></td>
                              <td><?php echo $perm_staff['tel'] ?></td>
                              <td><?php echo $perm_staff['gender'] ?></td>
                              <td>
                                <a href="<?php echo site_url(); ?>/staff/edit/<?php echo $perm_staff['id']; ?>" class="btn btn-primary btn-sm" title="Edit Desktop"><i class="bi bi-pen"></i></a>
                                <a href="<?php echo site_url(); ?>/staff/delete/<?php echo $perm_staff['id']; ?>" onclick="return confirm('Do you want delete this record')" class="btn btn-danger btn-sm" title="Remove Desktop"><i class="bi bi-trash"></i></a>
                              </td>
                            </tr>
                          <?php endforeach; ?>
                          <!-- End of table -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                      <!-- End Of Tab First Panel -->


                      <!-- Begining Of Second Tab Panel -->
                        <div class="tab-pane fade" id="transport" role="tabpanel" aria-labelledby="transport-tab">
                          <div class="tab-content" id="myTabContent">
                            <br/>
                            <h3>Transport</h3>
                            <form class="needs-validation" action="<?php echo site_url('staff/add_temp_staff') ?>" method="POST">
                            <div class="row">
                              <div class="col-md-4 mb-2">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-control" id="first_name" placeholder="" name="first_name" value="" required>
                                <div class="invalid-feedback">
                                  Valid first name is required.
                                </div>
                              </div>
                              <div class="col-md-4 mb-2">
                                <label for="middle_name">Middle name</label>
                                <input type="text" class="form-control" id="middle_name" placeholder="" name="middle_name" value="" required>
                                <div class="invalid-feedback">
                                  Valid last name is required.
                                </div>
                              </div>
                              <div class="col-md-4 mb-2">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" id="last_name" placeholder="" name="last_name" value="" required>
                                <div class="invalid-feedback">
                                  Valid last name is required.
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-3 mb-2">
                                <label for="date_of_birth">Date Of Birth</label>
                                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                  Valid last name is required.
                                </div>
                              </div>
                              <div class="col-md-3 mb-2">
                                <label for="date_first_appointment">Date Of First Appointment</label>
                                <input type="date" class="form-control" id="date_first_appointment" name="date_first_appointment" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                  Valid last name is required.
                                </div>
                              </div>

                              <div class="col-md-3 mb-2">
                                <label for="gender">Gender</label>
                                <select class="form-control custom-select d-block w-100" id="gender" name="gender" required>
                                  <option value="">Choose...</option>
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                                <div class="invalid-feedback">
                                  Please select a valid country.
                                </div>
                              </div>
                              <div class="col-md-3 mb-2">
                                <label for="class">Class</label>
                                <input type="text" class="form-control" id="class" placeholder="Class" name="class" value="" required>
                                <div class="invalid-feedback">
                                  Valid first name is required.
                                </div>
                              </div>
                            </div>

                          <div class="row">
                            <div class="col-md-5 mb-2">
                              <label for="personal_email">Personal Email</label>
                              <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">@</span>
                                </div>
                              <input type="email" class="form-control" id="personal_email" name="personal_email" placeholder="you@example.com" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                          </div>
                            <div class="col-md-3 mb-2">
                              <label for="tel">Phone No.</label>
                              <input type="number" class="form-control" id="tel" placeholder="+233-0000-0000" name="tel" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>

                            <div class="col-md-4 mb-2">
                              <label for="mobile">Other Mobile</label>
                              <input type="number" class="form-control custom-select d-block w-100" placeholder="+233-0000-0000" name="mobile" id="mobile" required>
                              <div class="invalid-feedback">
                                Please select a valid mobile.
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4 mb-2">
                              <label for="department">Department</label>
                              <select class="form-control custom-select d-block w-100" id="department" name="department" required>
                                <option value="">Choose...</option>
                                <!-- <option value="<?php foreach ($all_departments as $all_department): ?>"></option> -->
                                  <option value="<?php echo $all_department['department_name'] .' | '. $all_department['office']?>"><?php echo $all_department['department_name'] .' | '. $all_department['office']?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                            <div class="col-md-4 mb-2">
                              <label for="grade">Grade</label>
                              <select class="form-control custom-select d-block w-100" id="grade" name="grade" required>
                                <option value="">Choose...</option>
                                <!-- <option value="<?php foreach ($all_departments as $all_department): ?>"></option> -->
                                  <option value="<?php echo $all_department['office']?>"><?php echo $all_department['office']?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                            <div class="col-md-4 mb-2">
                              <label for="ssn">Socail Security Number</label>
                              <input type="text" class="form-control" id="ssn" placeholder="Social Security Number" name="ssn" required>
                              <div class="invalid-feedback">
                                SSN required.
                              </div>
                            </div>
                          </div>

                          <br/>
                          <button type="submit" class="btn btn-primary">Add Staff</button>
                        </form><!-- Form End -->
                        <br/>
                        
                          <table class="table table-striped table-sm">
                            <div class="table-responsive">
                              <thead>
                                <tr>
                                  <th scope="col">Full Name</th>
                                  <th scope="col">Personal Email</th>
                                  <th scope="col">Grade</th>
                                  <th scope="col">Date First Appointment</th>
                                  <th scope="col">department</th>
                                  <th scope="col">tel</th>
                                  <th scope="col">gender</th> 
                                  <th scope="col">Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach($all_temp_staff as $temp_staff): ?>
                                  <tr>
                                    <td><?php echo $temp_staff['first_name'] . " " . $temp_staff['middle_name'] . " " . $temp_staff['last_name'] ?></td>
                                    <td><?php echo $temp_staff['personal_email'] ?></td>
                                    <td><?php echo $temp_staff['grade'] ?></td>
                                    <td><?php echo $temp_staff['date_first_appointment'] ?></td>
                                    <td><?php echo $temp_staff['department'] ?></td>
                                    <td><?php echo $temp_staff['tel'] ?></td>
                                    <td><?php echo $temp_staff['gender'] ?></td>
                                    <td><a href="<?php echo site_url(); ?>mis/edit/<?php echo $temp_staff['id']; ?>" class="btn-warning"><i class="fa fa-edit"></i></a> 
                                      <a href="<?php echo site_url(); ?>mis/delete/<?php echo $temp_staff['id']; ?>" onclick="return confirm('Do you want delete this record')" class="btn-danger"><i class="fa fa-trash"></i></a> 
                                    </td>
                                  </tr>
                                <?php endforeach; ?>
                                <!-- End of table -->
                              </tbody>
                            </div>
                          </table>
                          
                        </div>
                      </div>
                        <!-- End Of Second Tab Pane -->





                      <!-- Beginning of  -->
                        <div class="tab-pane fade" id="furniture" role="tabpanel" aria-labelledby="furniture-tab">
                          <div class="tab-content" id="myTabContent">
                          <br/>
                          <h3>Transport</h3>
                            <div class="table-responsive">
                              <table class="table table-striped table-sm">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Header</th>
                                  <th scope="col">Header</th>
                                  <th scope="col">Header</th>
                                  <th scope="col">Header</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <a href="#">
                                    <td>1,001</td>
                                    <td>random</td>
                                    <td>data</td>
                                    <td>placeholder</td>
                                    <td>text</td>
                                  </a>
                                </tr>
                                <tr>
                                  <td>1,002</td>
                                  <td>placeholder</td>
                                  <td>irrelevant</td>
                                  <td>visual</td>
                                  <td>layout</td>
                                </tr>
                                <tr>
                                  <td>1,003</td>
                                  <td>data</td>
                                  <td>rich</td>
                                  <td>dashboard</td>
                                  <td>tabular</td>
                                </tr>
                                <tr>
                                  <td>1,003</td>
                                  <td>information</td>
                                  <td>placeholder</td>
                                  <td>illustrative</td>
                                  <td>data</td>
                                </tr>
                                <!-- End of table -->
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <!-- End of Third Nav-Tab -->


                      </div>
                    <!-- </div> -->

              <!-- End  -->
              

            <!-- </div> -->
          <!-- </div> -->
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->