
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Permanent Staff</h1>
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
            <!-- <p>
              <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Add Staff</a>          
            </p> -->
            <div class="row">
              <div class="col">
                <div class="">
                  <div class="card card-body">
                    <form action="<?php echo site_url('users/add_user') ?>" method="post">
                      <div class="form-row">
                        <!--  -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Staff Details</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                          </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <!--  -->
                            <div class="col-md-12 order-md-1">
                            <h4 class="mb-3">Add Staff</h4>
                            <form class="needs-validation" novalidate>

                              <div class="row">
                                <div class="col-md-3 mb-2">
                                  <label for="firstName">Staff ID</label>
                                  <input type="number" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                  <label for="middleName">Date Of Birth</label>
                                  <input type="date" class="form-control" id="middleName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid last name is required.
                                  </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                  <label for="lastName">Date Of First Appointment</label>
                                  <input type="date" class="form-control" id="lastName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid last name is required.
                                  </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                  <label for="lastName">Date Of Last Appointment</label>
                                  <input type="date" class="form-control" id="lastName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid last name is required.
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-4 mb-2">
                                  <label for="firstName">First name</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                                <div class="col-md-4 mb-2">
                                  <label for="middleName">Middle name</label>
                                  <input type="text" class="form-control" id="middleName" placeholder="" value="" required>
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
                                <div class="col-md-4 mb-2">
                                  <label for="lastName">Official Email Address</label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">@</span>
                                    </div>
                                    <input type="email" class="form-control" id="email" placeholder="you@hhma.gov.gh" value="" required>
                                    <div class="invalid-feedback">
                                      Valid last name is required.
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 mb-2">
                                  <label for="lastName">Personal Email</label>
                                  <input type="email" class="form-control" id="email" placeholder="you@example.com" value="" required>
                                  <div class="invalid-feedback">
                                    Valid last name is required.
                                  </div>
                                </div>
                                <div class="col-md-4 mb-2">
                                  <label for="lastName">Phone No.</label>
                                  <input type="number" class="form-control" id="email" placeholder="+233-0000-0000" value="" required>
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
                                  <input type="email" class="form-control" id="email" placeholder="you@example.com" value="" required>
                                  <div class="invalid-feedback">
                                    Valid last name is required.
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
                       </div>
                        <!--  -->
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                          </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

<!-- Form End -->

  <h2>Section title</h2>
  <div class="table-responsive form-control">
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
          <td>1,001</td>
          <td>random</td>
          <td>data</td>
          <td>placeholder</td>
          <td>text</td>
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

    