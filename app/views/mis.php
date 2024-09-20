  <main id="main" class="main">

    <div class="pagetitle">
      <h1><?php echo $title ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url() ?>dashboard">Home</a></li>
          <li class="breadcrumb-item active"><?php echo $title ?></li>
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
      
      <!-- Beginning of Nav Tab -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="desktop-tab" data-bs-toggle="tab" data-bs-target="#desktop" type="button" role="tab" aria-controls="desktop" aria-selected="true">Desktop</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="laptop-tab" data-bs-toggle="tab" data-bs-target="#laptop" type="button" role="tab" aria-controls="laptop" aria-selected="false">Laptop</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="printer-tab" data-bs-toggle="tab" data-bs-target="#printer" type="button" role="tab" aria-controls="printer" aria-selected="false">Printers</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="others-tab" data-bs-toggle="tab" data-bs-target="#others" type="button" role="tab" aria-controls="others" aria-selected="false">Others</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <!-- Beginning of First Nav Tab -->
        <div class="tab-pane fade show active" id="desktop" role="tabpanel" aria-labelledby="desktop-tab">
          <div class="tab-pane fade show active" id="desktop" role="tabpanel" aria-labelledby="desktop-tab">
        <div class="col-md-12 order-md-1">
          <br/>
        <h4 class="mb-3">Desktops</h4>
        <form class="needs-validation" action="<?php echo site_url('mis/add_desktop') ?>" method="POST" novalidate>
          <div class="row">
            <div class="col-md-4 mb-2">
              <label for="computer_location">Computer Location</label>
              <input type="text" class="form-control" id="computer_location" name="computer_location" placeholder="HHMA-[Department]" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <label for="owner">Owner</label>
              <select type="text" class="form-control" id="owner" placeholder="Owner" name="owner" value="" required>
                <option>Assembly</option>
                <option>Individual</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
              </div>
              <div class="col-md-4 mb-2">
              <label for="department">Department</label>
              <select class="form-control custom-select d-block w-100" id="department" name="department" required>
                <option value="">Choose...</option>
                <!-- <option value="<?php foreach ($all_departments as $all_department): ?>"></option> -->
                  <option value="<?php echo $all_department['department_name'] ?>"><?php echo $all_department['department_name'] ?></option>
                <?php endforeach; ?>
              </select>
              </div>
          </div>
            
        </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="admin_acc_name">Administrator Account Name</label>
              <input type="text" class="form-control" id="admin_acc_name" placeholder="Administrator" name="admin_acc_name" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-5 mb-3">
              <label for="password">Password</label>
              <input type="text" class="form-control" id="password" placeholder="Password" name="password" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <label for="processor">Processor</label>
              <input type="text" class="form-control" id="processor" placeholder="Intel(R) Core(TM)" name="processor" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-2">
              <label for="os_edition">OS Edition</label>
              <select type="text" class="form-control" id="os_edition" placeholder="OS Edition" name="os_edition" value="" required>
                <option>Choose...</option>
                <option>Win7 Pro</option>
                <option>Win7 Ent</option>
                <option>Win8 Pro</option>
                <option>Win10 Pro</option>
                <option>Win11 Pro</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="system_rating">System Rating</label>
              <div class="input-group">
                <input type="text" class="form-control" id="system_rating" placeholder="System Rating" name="system_rating" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="installed_memory">Installed Memory (RAM)</label>
              <div class="input-group">
                <input type="text" class="form-control" id="installed_memory" name="installed_memory" placeholder="Installed Memory (RAM)" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="processor_speed">Processor Speed</label>
              <div class="input-group">
                <input type="text" class="form-control" id="processor" placeholder="Processor Speed" name="processor_speed" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="system_type">System Type</label>
              <div class="input-group">
                <input type="text" class="form-control" id="system_type" placeholder="System Type" name="system_type" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="computer_name">Computer Name</label>
              <input type="text" class="form-control" id="computer_name" name="computer_name" placeholder="Computer Name" required>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <label for="workgroup">WorkGroup</label>
              <select class="form-control custom-select d-block w-100" name="workgroup" id="workgroup" required>
                <option value="">Choose...</option>
                <option>WorkGroup</option>
                <option>Domain</option>
              </select>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="product_id">Win Product ID</label>
              <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Product ID" required>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mb-2">
              <label for="date_purchased">Date Purchased</label>
              <input type="date" class="form-control" id="date_purchased" name="date_purchased" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <label for="update_schedule">Update Schedule</label>
              <input type="text" class="form-control" id="update_schedule" name="update_schedule" placeholder="Update Schedule" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <label for="user_acc">User Account</label>
              <select class="form-control custom-select d-block w-100" name="user_acc" id="user_acc" required>
                <option value="">Choose...</option>
                <option>Administrator</option>
                <option>Standard</option>
              </select>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-2">
              <label for="system_manufacturer">System Manufacturer</label>
              <input type="text" class="form-control" id="system_manufacturer" name="system_manufacturer" placeholder="Hewllett Packard (Hp)" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="system_model">System Model</label>
              <input type="text" class="form-control" id="system_model" name="system_model" placeholder="Pavilion" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="office_version">MS Office Version</label>
              <input type="text" class="form-control" id="office_version" name="office_version" placeholder="MS Office 2016" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="antivirus">Antivirus Software</label>
              <input type="text" class="form-control" id="antivirus" name="antivirus" placeholder="Defender" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-2">
              <label for="browsers">Browsers</label>
              <input type="text" class="form-control" id="browsers" name="browsers" placeholder="Google Chrome" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="hdd_capacity">HDD Capacity</label>
              <input type="text" class="form-control" id="hdd_capacity" name="hdd_capacity" placeholder="1 TB" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="monitor_brand">Monitor Brand</label>
              <input type="text" class="form-control" id="monitor_brand" name="monitor_brand" placeholder="Dell" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="monitor_model">Monitor Model</label>
              <input type="text" class="form-control" id="monitor_model" name="monitor_model" placeholder="Pavilion" name="monitor_model" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          <br/>
          <button type="submit" class="btn btn-primary">Add Desktop</button>
        </div>
      </form>
      <br/>
      
        <!-- Desktop Table -->
        <div class="table-responsive col-12">
          <div class="card recent-sales overflow-auto">
            <div class="card-body">
              <br/>
              <table class="table table-borderless table-striped datatable table-sm">
                <thead>
                  <tr>
                    <th scope="col">Computer Loc</th>
                    <th scope="col">Department</th>
                    <th scope="col">OS Edition</th>
                    <th scope="col">Memory (RAM)</th>
                    <th scope="col">Acc Type</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                  <tbody>
                    <?php foreach($all_hhma_desktops as $all_desktops): ?>
                      <tr>
                        <td><?php echo $all_desktops['computer_location']?></td>
                        <td><?php echo $all_desktops['department'] ?></td>
                        <td><?php echo $all_desktops['os_edition'] ?></td>
                        <td><?php echo $all_desktops['installed_memory'] ?></td>
                        <td><?php echo $all_desktops['user_acc'] ?></td>
                        <td>
                          <a href="<?php echo site_url(); ?>/mis/edit/<?php echo $all_desktops['id']; ?>" class="btn btn-primary btn-sm" title="Edit Desktop"><i class="bi bi-pen"></i></a>
                          <a href="<?php echo site_url(); ?>/mis/edit/<?php echo $all_desktops['id']; ?>" onclick="return confirm('Do you want delete this record')" class="btn btn-danger btn-sm" title="Remove Desktop"><i class="bi bi-trash"></i></a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                    <!-- End of table -->
                  </tbody>
              </table>

            </div>

          </div>
        </div>
    </div>
    <!-- End of First Nav Tab -->

    





    <!-- Beginning of Second Nav Tab -->
    <div class="tab-pane fade" id="laptop" role="tabpanel" aria-labelledby="laptop-tab">
      <div class="tab-content" id="myTabContent">
        <div class="col-md-12 order-md-1">
          <br/>
        <h4 class="mb-3">Laptops</h4>
        <form class="needs-validation" action="<?php echo site_url('mis/add_laptop') ?>" method="POST" novalidate>
          <div class="row">
            <div class="col-md-4 mb-2">
              <label for="computer_location">Computer Location</label>
              <input type="text" class="form-control" id="computer_location" name="computer_location" placeholder="HHMA-[Department]" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <label for="owner">Owner</label>
              <select type="text" class="form-control" id="owner" placeholder="Owner" name="owner" value="" required>
                <option>Assembly</option>
                <option>Individual</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
              </div>
              <div class="col-md-4 mb-2">
              <label for="department">Department</label>
              <select class="form-control custom-select d-block w-100" id="department" name="department" required>
                <option value="">Choose...</option>
                <!-- <option value="<?php foreach ($all_departments as $all_department): ?>"></option> -->
                  <option value="<?php echo $all_department['department_name'] .' | '. $all_department['office']?>"><?php echo $all_department['department_name'] .' | '. $all_department['office']?></option>
                <?php endforeach; ?>
              </select>
              </div>
          </div>
            
        </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="admin_acc_name">Administrator Account Name</label>
              <input type="text" class="form-control" id="admin_acc_name" placeholder="Administrator" name="admin_acc_name" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-5 mb-3">
              <label for="password">Password</label>
              <input type="text" class="form-control" id="password" placeholder="Password" name="password" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <label for="processor">Processor</label>
              <input type="text" class="form-control" id="processor" placeholder="Processor" name="processor" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-2">
              <label for="os_edition">OS Edition</label>
              <select type="text" class="form-control" id="os_edition" placeholder="OS Edition" name="os_edition" value="" required>
                <option>Choose...</option>  
                <option>Win7 Pro</option>
                <option>Win7 Ent</option>
                <option>Win8 Pro</option>
                <option>Win10 Pro</option>
                <option>Win11 Pro</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="system_rating">System Rating</label>
              <div class="input-group">
                <input type="text" class="form-control" id="system_rating" placeholder="System Rating" name="system_rating" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="installed_memory">Installed Memory (RAM)</label>
              <div class="input-group">
                <input type="text" class="form-control" id="installed_memory" name="installed_memory" placeholder="Installed Memory (RAM)" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="processor_speed">Processor Speed</label>
              <div class="input-group">
                <input type="text" class="form-control" id="processor" placeholder="Processor Speed" name="processor_speed" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="system_type">System Type</label>
              <div class="input-group">
                <input type="text" class="form-control" id="system_type" placeholder="System Type" name="system_type" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="computer_name">Computer Name</label>
              <input type="text" class="form-control" id="computer_name" name="computer_name" placeholder="Computer Name" required>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <label for="workgroup">WorkGroup</label>
              <select class="form-control custom-select d-block w-100" name="workgroup" id="workgroup" required>
                <option value="">Choose...</option>
                <option>WorkGroup</option>
                <option>Domain</option>
              </select>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="product_id">Win Product ID</label>
              <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Product ID" required>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mb-2">
              <label for="date_purchased">Date Purchased</label>
              <input type="date" class="form-control" id="date_purchased" name="date_purchased" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <label for="update_schedule">Update Schedule</label>
              <input type="text" class="form-control" id="update_schedule" name="update_schedule" placeholder="Update Schedule" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <label for="user_acc">User Account</label>
              <select class="form-control custom-select d-block w-100" name="user_acc" id="user_acc" required>
                <option value="">Choose...</option>
                <option>Administrator</option>
                <option>Standard</option>
              </select>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-2">
              <label for="system_manufacturer">System Manufacturer</label>
              <input type="text" class="form-control" id="system_manufacturer" name="system_manufacturer" placeholder="Hewllett Packard (Hp)" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="system_model">System Model</label>
              <input type="text" class="form-control" id="system_model" name="system_model" placeholder="Pavilion" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="office_version">MS Office Version</label>
              <input type="text" class="form-control" id="office_version" name="office_version" placeholder="MS Office 2016" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="antivirus">Antivirus Software</label>
              <input type="text" class="form-control" id="antivirus" name="antivirus" placeholder="Defender" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-2">
              <label for="browsers">Browsers</label>
              <input type="text" class="form-control" id="browsers" name="browsers" placeholder="Google Chrome" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="hdd_capacity">HDD Capacity</label>
              <input type="text" class="form-control" id="hdd_capacity" name="hdd_capacity" placeholder="1 TB" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          <br/>
          <button type="submit" class="btn btn-primary">Add Laptop</button>
        </div>
      </form>
        <br/>
        <!-- Laptop Table -->
        <div class="table-responsive col-12">
          <div class="card recent-sales overflow-auto">
            <div class="card-body">
              <br/>
              <table class="table table-borderless table-striped datatable table-sm">
                <thead>
                  <tr>
                    <th scope="col">Computer Loc</th>
                    <th scope="col">Department</th>
                    <th scope="col">OS Edition</th>
                    <th scope="col">Memory (RAM)</th>
                    <th scope="col">Acc Type</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($all_hhma_laptops as $all_laptops): ?>
                  <tr>
                    <td><?php echo $all_laptops['computer_location']?></td>
                    <td><?php echo $all_laptops['department'] ?></td>
                    <td><?php echo $all_laptops['os_edition'] ?></td>
                    <td><?php echo $all_laptops['installed_memory'] ?></td>
                    <td><?php echo $all_laptops['user_acc'] ?></td>
                    <td>
                      <a href="<?php echo site_url(); ?>/mis/edit_laptop/<?php echo $all_laptops['id']; ?>" class="btn btn-primary btn-sm" title="Edit Laptop"><i class="bi bi-pen"></i></a>
                      <a href="<?php echo site_url(); ?>/mis/delete_laptop/<?php echo $all_laptops['id']; ?>" onclick="return confirm('Do you want delete this record')" class="btn btn-danger btn-sm" title="Remove Laptop"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                  <!-- End of table -->
                </tbody>
              </table>

            </div>

          </div>
        </div>
        <!-- End Laptop Table -->
    </div>
<!-- End of Second Nav Tab -->


  <!-- Beginning of Third Nav Tab -->
    <div class="tab-pane fade" id="printer" role="tabpanel" aria-labelledby="printer-tab">
      <div class="tab-content" id="myTabContent">
        <div class="col-md-12 order-md-1">
          <br/>
        <h4 class="mb-3">Printers</h4>
        <form class="needs-validation" action="<?php echo site_url('mis/add_printer') ?>" method="POST" novalidate>
          <div class="row">
            <div class="col-md-4 mb-2">
              <label for="owner">Printer Owner</label>
              <div>
                <select type="text" class="form-control" id="owner" name="owner" placeholder="Computer Location" value="" required>
                  <option>Choose....</option>
                  <option>Assembly</option>
                  <option>Individual</option>
                </select>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <label for="department">Department</label>
              <select type="text" class="form-control" id="department" name="department" value="" required>
                <option value="">Choose...</option>
                <!-- <option value="<?php foreach ($all_departments as $all_department): ?>"></option> -->
                  <option value="<?php echo $all_department['department_name'] .' | '. $all_department['office']?>"><?php echo $all_department['department_name'] .' | '. $all_department['office']?></option>
                <?php endforeach; ?>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <label for="printer_manufacturer">Printer Manufacturer</label>
              <input type="text" class="form-control" id="printer_manufacturer" name="printer_manufacturer" placeholder="Printer Manufacturer" value="" required>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
          </div>
            
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cartridge_installed">Cartridge Installed</label>
              <input type="text" class="form-control" id="cartridge_installed" name="cartridge_installed" placeholder="Cartridge Installed" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="printer_model">Printer Model</label>
              <input type="text" class="form-control" id="printer_model" name="printer_model" placeholder="MS Office 2016" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="date_purchased">Date Purchased</label>
              <input type="date" class="form-control" id="date_purchased" name="date_purchased" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          <br/>
          <button type="submit" class="btn btn-primary">Add Printer</button>
        </form>
      </div>
    </div>
    <br/>
        <!-- Printer Table -->
        <div class="table-responsive col-12">
          <div class="card recent-sales overflow-auto">
            <div class="card-body">
              <br/>
              <table class="table table-borderless table-striped datatable table-sm">
                <thead>
                  <tr>
                    <th scope="col">Owner</th>
                    <th scope="col">Department</th>
                    <th scope="col">Manufacturer</th>
                    <th scope="col">Cartridge Installed</th>
                    <th scope="col">Model</th>
                    <th scope="col">Date Purchased</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach($all_hhma_printers as $all_printers): ?>
                    <tr>
                      <td><?php echo $all_printers['owner']?></td>
                      <td><?php echo $all_printers['department'] ?></td>
                      <td><?php echo $all_printers['printer_manufacturer'] ?></td>
                      <td><?php echo $all_printers['cartridge_installed'] ?></td>
                      <td><?php echo $all_printers['printer_model'] ?></td>
                      <td><?php echo $all_printers['date_purchased'] ?></td>
                      <td>
                        <a href="<?php echo site_url(); ?>/mis/edit_printer/<?php echo $all_printers['id']; ?>" class="btn btn-primary btn-sm" title="Edit Printer"><i class="bi bi-pen"></i></a>
                        <a href="<?php echo site_url(); ?>/mis/delete_printer/<?php echo $all_printers['id']; ?>" onclick="return confirm('Do you want delete this record')" class="btn btn-danger btn-sm" title="Remove Printer"><i class="bi bi-trash"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  <!-- End of table -->
                </tbody>
              </table>

            </div>

          </div>
        </div>
        <!-- End Printer Table -->
  </div>
                        <!-- End of Third Nav Tab -->


 <!-- Beginning of Fourth Nav Tab -->
    <div class="tab-pane fade" id="others" role="tabpanel" aria-labelledby="others-tab">
      <div class="tab-content" id="myTabContent">
        <div class="col-md-12 order-md-1">
          <br/>
        <h4 class="mb-3">Others</h4>
        <form class="needs-validation" action="<?php echo site_url('users/add_user') ?>" method="POST" novalidate>
          <div class="row">
            <div class="col-md-4 mb-2">
              <label for="firstName">Computer Location</label>
              <input type="text" class="form-control" id="firstName" placeholder="Computer Location" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <label for="lastName">Owner</label>
              <select type="text" class="form-control" id="lastName" placeholder="Owner" value="" required>
                <option>Assembly</option>
                <option>Individual</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
              </div>
              <div class="col-md-4 mb-2">
              <label for="lastName">Department</label>
              <select type="text" class="form-control" id="lastName" placeholder="Department" value="" required>
                <option>M.I.S</option>
                <option>Central Administration</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
              </div>
          </div>
            
        </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="username">Administrator Account Name</label>
              <input type="text" class="form-control" id="firstName" placeholder="Administrator" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-5 mb-3">
              <label for="username">Password</label>
              <input type="text" class="form-control" id="firstName" placeholder="Administrator" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <label for="lastName">Processor</label>
              <input type="email" class="form-control" id="email" placeholder="Password" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-2">
              <label for="lastName">OS Edition</label>
              <select type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <option>Win10 Pro</option>
                <option>Win11 Pro</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="lastName">System Rating</label>
              <div class="input-group">
                <input type="text" class="form-control" id="email" placeholder="System Rating" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="lastName">Installed Memory (RAM)</label>
              <div class="input-group">
                <input type="text" class="form-control" id="ram" placeholder="Installed Memory (RAM)" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="lastName">Processor</label>
              <div class="input-group">
                <input type="text" class="form-control" id="processor" placeholder="Processor" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="country">System Type</label>
              <select class="form-control custom-select d-block w-100" id="country" required>
                <option value="">Choose...</option>
                <option>United States</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="country">Computer Name</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <label for="zip">WorkGroup</label>
              <select class="form-control custom-select d-block w-100" id="country" required>
                <option value="">Choose...</option>
                <option>United States</option>
              </select>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="state">Win Product ID</label>
              <input type="text" class="form-control" id="zip" placeholder="Product ID" required>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mb-2">
              <label for="username">Date Purchased</label>
              <input type="date" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <label for="username">Update Schedule</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <label for="lastName">User Account</label>
              <select class="form-control custom-select d-block w-100" id="country" required>
                <option value="">Choose...</option>
                <option>Administrator</option>
                <option>Standard</option>
              </select>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-2">
              <label for="lastName">System Manufacturer</label>
              <input type="text" class="form-control" id="email" placeholder="Hewllett Packard (Hp)" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="lastName">System Model</label>
              <input type="text" class="form-control" id="email" placeholder="Pavilion" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="lastName">MS Office Version</label>
              <input type="text" class="form-control" id="email" placeholder="MS Office 2016" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="lastName">Antivirus Software</label>
              <input type="text" class="form-control" id="email" placeholder="Defender" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-2">
              <label for="lastName">Browsers</label>
              <input type="text" class="form-control" id="email" placeholder="Google Chrome" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="lastName">HDD Capacity</label>
              <input type="text" class="form-control" id="email" placeholder="Pavilion" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="lastName">Monitor Brand</label>
              <input type="text" class="form-control" id="email" placeholder="Pavilion" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="lastName">Monitor Model</label>
              <input type="text" class="form-control" id="email" placeholder="Pavilion" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
        <!-- Desktop Table -->
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
                        <!-- End of Fourth Nav Tab -->











    </div>
    <!-- End of Nav-Tabs -->
      
    </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->