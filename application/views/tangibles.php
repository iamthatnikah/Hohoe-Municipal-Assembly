<!-- ======= Main ======= -->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1><?php echo $title ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Tangible-Assets</li>
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
                        <button class="nav-link active" id="building-tab" data-bs-toggle="tab" data-bs-target="#building" type="button" role="tab" aria-controls="building" aria-selected="true">Buildings and Other Structures</button>
                      </li>

                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="transport-tab" data-bs-toggle="tab" data-bs-target="#transport" type="button" role="tab" aria-controls="transport" aria-selected="false">Transport Equipment</button>
                      </li>

                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="furniture-tab" data-bs-toggle="tab" data-bs-target="#furniture" type="button" role="tab" aria-controls="furniture" aria-selected="false">Furniture Fixtures and Fittings</button>
                      </li>

                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="others-tab" data-bs-toggle="tab" data-bs-target="#others" type="button" role="tab" aria-controls="others" aria-selected="false">Other Machinery and Equipment</button>
                      </li>

                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="infrastructure-tab" data-bs-toggle="tab" data-bs-target="#infrastructure" type="button" role="tab" aria-controls="infrastructure" aria-selected="false">Infrastructure Assets</button>
                      </li>

                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="land-tab" data-bs-toggle="tab" data-bs-target="#land" type="button" role="tab" aria-controls="land" aria-selected="false">Land</button>
                      </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">

                      <!-- Begining Of First Tab Panel -->
                    <div class="tab-pane fade show active" id="building" role="tabpanel" aria-labelledby="building-tab">
                      <div class="tab-pane fade show active" id="building" role="tabpanel" aria-labelledby="building-tab">
                        <div class="col-md-12 order-md-1">
                          <br/>
                        <h4 class="mb-3">Buildings &amp; Other Structures</h4>
                        <form class="needs-validation" action="<?php echo site_url('tangibles/add_asset') ?>" method="POST">
                          <div class="row">
                            <div class="col-md-4 mb-2">
                              <label for="name">Asset Name</label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="Asset Name" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <label for="asset_type">Asset Type</label>
                              <input type="text" class="form-control" id="asset_type" name="asset_type" placeholder="Asset Type" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <label for="depreciate">Depreciate..?</label>
                              <select class="form-control custom-select d-block w-100" id="depreciate" name="depreciate" required>
                                <option value="">Choose...</option>
                                <option>Yes</option>
                                <option>No</option>
                              </select>
                              <div class="invalid-feedback">
                                Valid depreciates is required.
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="category">Category</label>
                              <input type="text" class="form-control" id="category" name="category" placeholder="Category" value="" required>
                              <div class="invalid-feedback">
                                Valid Category is required.
                              </div>
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="unit">Unit</label>
                              <input type="number" class="form-control" id="unit" name="unit" placeholder="Unit" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="location_code">Location Code</label>
                              <input type="text" class="form-control" id="location_code" name="location_code" placeholder="Location Code" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="date_plcace_in_service">Date Place in Service</label>
                              <div class="input-group">
                                <input type="date" class="form-control" id="date_place_in_service" name="date_place_in_service" placeholder="Date Place in Service" value="" required>
                                <div class="invalid-feedback">
                                  Valid last name is required.
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-md-5 mb-3">
                              <label for="cost">Cost</label>
                              <input class="form-control custom-select d-block w-100" id="cost" name="cost" required>
                              <div class="invalid-feedback">
                                Please provide a valid Cost.
                              </div>
                            </div>
                            <div class="col-md-4 mb-3">
                              <label for="usage_type">Usage Type</label>
                              <select class="form-control custom-select d-block w-100" id="usage_type" name="usage_type" required>
                                <option value="">Choose...</option>
                                <option>California</option>
                              </select>
                              <div class="invalid-feedback">
                                Please provide a valid state.
                              </div>
                            </div>
                            <div class="col-md-3 mb-3">
                              <label for="registration_no">Registration No</label>
                              <input type="text" class="form-control" id="registration_no" name="registration_no" placeholder="HHMA-1234-5678/910" required>
                              <div class="invalid-feedback">
                                Registration No required.
                              </div>
                            </div>
                          </div>



                          <div class="row">
                            <div class="col-md-4 mb-2">
                              <label for="acc_cost_center">Account Cost Center</label>
                              <input type="text" class="form-control" id="acc_cost_center" name="acc_cost_center" placeholder="Account Cost Center" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <label for="cost_center_using_asset">Cost Center Using Asset</label>
                              <input type="text" class="form-control" id="cost_center_using_asset" name="cost_center_using_asset" placeholder="Cost Center Using Asset" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <label for="staff_id">Staff ID</label>
                              <input type="number" class="form-control" id="staff_id" name="staff_id" placeholder="102214" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4 mb-2">
                              <label for="staff_fullname">Staff Fullname</label>
                              <input type="fullname" class="form-control" id="staff_fullname" name="staff_fullname" placeholder="Staff Fullname" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <label for="grade">Grade</label>
                              <input type="text" class="form-control" id="grade" name="grade" placeholder="Cost Center Using Asset(24/9)" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <label for="method_of_aquisition">Method Of Aquisition</label>
                              <input type="text" class="form-control" id="method_of_aquisition" name="method_of_aquisition" placeholder="Method Of Aquisition" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-3 mb-2">
                              <label for="dept/unit">Department / Unit</label>
                              <input type="text" class="form-control" id="dept/unit" placeholder="Department / Unit" name="dept/unit" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="current_status">Current Status</label>
                              <input type="text" class="form-control" id="current_status" name="current_status" placeholder="Current Status" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            <div class="col-md-3 mb-2">
                              <label for="investment_property">Investment Property</label>
                              <input type="text" class="form-control" id="investment_property" name="investment_property" placeholder="Investment Property" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>

                            <div class="col-md-3 mb-2">
                              <label for="condition">Condition</label>
                              <input type="text" class="form-control" id="condition" name="condition" placeholder="Condition" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                          </div>
                          <br/>
                          <button type="submit" class="btn btn-primary">Add Asset</button>
                        </form><!-- Form End -->
                      </div>
                    </div>
                      

                      <!--  -->
                    <div class="table-responsive">
                      <table class="table table-striped table-sm">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Header</th>
                            <th scope="col">Header</th>
                            <th scope="col">Header</th>
                            <th scope="col">Header</th>
                            <th scope="col">Actions</th>
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
                              <td>text</td>
                            </a>
                          </tr>
                          <tr>
                            <td>1,002</td>
                            <td>placeholder</td>
                            <td>irrelevant</td>
                            <td>visual</td>
                            <td>layout</td>
                            <td>visual</td>
                          </tr>
                          <tr>
                            <td>1,003</td>
                            <td>data</td>
                            <td>rich</td>
                            <td>dashboard</td>
                            <td>tabular</td>
                            <td>visual</td>
                          </tr>
                          <tr>
                            <td>1,003</td>
                            <td>information</td>
                            <td>placeholder</td>
                            <td>illustrative</td>
                            <td>data</td>
                            <td>visual</td>
                          </tr>
                          <!-- End of table -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                      <!-- End Of Tab First Panel -->


                      <!-- Begining Of Second Tab Panel -->
                        <div class="tab-pane fade" id="transport" role="tabpanel" aria-labelledby="transport-tab">
                          <div class="tab-content" id="myTabContent">
                          <div class="table-responsive">
                            <br/>
                            <h3>Transport</h3>
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
                        <!-- End Of Second Tab Pane -->





                      <!-- Beginning of  -->
                        <div class="tab-pane fade" id="furniture" role="tabpanel" aria-labelledby="furniture-tab">
                          <div class="tab-content" id="myTabContent">
                            <div class="table-responsive">
                            <br/>
                            <h3>Transport</h3>
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