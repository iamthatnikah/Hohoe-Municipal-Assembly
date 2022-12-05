
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tangible Asset</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar" class="align-text-bottom"></span>
        This week
      </button>
    </div>
  </div>

<!-- Form begining -->
      <div class="col-sm-12">
            <div class="row">
              <div class="col">
                <div class="card card-body">
                  <div class="form-row">
                    <!--  -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Buildings and Other Structures</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Transport Equipment</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Furniture Fixtures and Fittings</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Other Machinery and Equipment</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Infrastructure Assets</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Land</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">

                      <!-- Begining Of First Tab Panel -->
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="col-md-12 order-md-1">
                        <h4 class="mb-3">Buildings &amp; Other Structures</h4>
                        <form class="needs-validation" action="<?php echo site_url('users/add_user') ?>" method="POST" novalidate>
                          <div class="row">
                            <div class="col-md-4 mb-2">
                              <label for="firstName">Asset Type</label>
                              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <label for="lastName">Middle name</label>
                              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <label for="lastName">Last name</label>
                              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="username">Username</label>
                              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="lastName">Email</label>
                              <input type="email" class="form-control" id="email" placeholder="you@example.com" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="username">Department</label>
                              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="lastName">Email</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">@</span>
                                </div>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com" value="" required>
                                <div class="invalid-feedback">
                                  Valid last name is required.
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-md-5 mb-3">
                              <label for="country">Country</label>
                              <select class="form-control custom-select d-block w-100" id="country" required>
                                <option value="">Choose...</option>
                                <option>United States</option>
                              </select>
                              <div class="invalid-feedback">
                                Please select a valid country.
                              </div>
                            </div>
                            <div class="col-md-4 mb-3">
                              <label for="state">State</label>
                              <select class="form-control custom-select d-block w-100" id="state" required>
                                <option value="">Choose...</option>
                                <option>California</option>
                              </select>
                              <div class="invalid-feedback">
                                Please provide a valid state.
                              </div>
                            </div>
                            <div class="col-md-3 mb-3">
                              <label for="zip">Zip</label>
                              <input type="text" class="form-control" id="zip" placeholder="" required>
                              <div class="invalid-feedback">
                                Zip code required.
                              </div>
                            </div>
                          </div>



                          <div class="row">
                            <div class="col-md-4 mb-2">
                              <label for="username">Date</label>
                              <input type="date" class="form-control" id="firstName" placeholder="" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <label for="username">Username</label>
                              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <label for="lastName">Email</label>
                              <input type="email" class="form-control" id="email" placeholder="you@example.com" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                      </form><!-- Form End -->

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
                      <!-- End Of Tab First Panel -->


                      <!-- Begining Of Second Tab Panel -->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="table-responsive">
                            <h3>Section title</h3>
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
                        <!-- End Of Second Tab Pane -->






                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                      </div>
                    </div>
                  
                </div>
              </div>
            </div>
          </div>



    

    