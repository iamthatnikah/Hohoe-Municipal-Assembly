
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Broadcast Sms</h1>
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
                <div class="">
                  <div class="card card-body">
                      <div class="form-row">
                        <!--  -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Message Details</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Messages</a>
                          </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <!--  -->
                            <div class="col-md-12 order-md-1">
                            <h4 class="mb-3">Add Message</h4>
                            <form class="needs-validation" action="<?php echo site_url('users/add_user') ?>" method="POST" novalidate>

                              <div class="row">
                                <div class="col-md-12 mb-6">
                                  <label for="lastName">Message Head</label>
                                  <input type="text" class="form-control" id="title" placeholder="Title" value="" required>
                                  <div class="invalid-feedback">
                                    Valid last name is required.
                                  </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                  <label for="contact">Contacts</label>
                                  <input type="number" class="form-control" id="contact" placeholder="Contacts" value="" required multiple>
                                  <div class="invalid-feedback">
                                    Valid last name is required.
                                  </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                  <label for="lastName">Date Of First Appointment</label>
                                  <input type="date" class="form-control" id="lastName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid last name is required.
                                  </div>
                                </div>

                                <div class="col-md-12 mb-6">
                                  <label for="firstName">Message Body</label>
                                  <textarea col="15" rows="10" type="number" class="form-control" id="firstName" placeholder="Please Input the Message" value="" required></textarea>
                                </div>
 
                              </div>
                            </form>
                          </div>
                          </div>
                          <button type="submit" class="btn btn-primary">Send</button>
                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                        </div>
                      </div>
                  </div>
                </div>
          </div>

<!-- Form End -->