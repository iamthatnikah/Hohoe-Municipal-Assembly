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
      <button class="nav-link active" id="desktop-tab" data-bs-toggle="tab" data-bs-target="#desktop" type="button" role="tab" aria-controls="desktop" aria-selected="true">Log</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="laptop-tab" data-bs-toggle="tab" data-bs-target="#laptop" type="button" role="tab" aria-controls="laptop" aria-selected="false">Diognostics</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="printer-tab" data-bs-toggle="tab" data-bs-target="#printer" type="button" role="tab" aria-controls="printer" aria-selected="false">Dispatched</button>
    </li>
    <!-- <li class="nav-item" role="presentation">
      <button class="nav-link" id="others-tab" data-bs-toggle="tab" data-bs-target="#others" type="button" role="tab" aria-controls="others" aria-selected="false">Others</button>
    </li> -->
  </ul>
  <div class="tab-content" id="myTabContent">
    <!-- Beginning of First Nav Tab -->
    <div class="tab-pane fade show active" id="desktop" role="tabpanel" aria-labelledby="desktop-tab">
      <div class="tab-pane fade show active" id="desktop" role="tabpanel" aria-labelledby="desktop-tab">
    <div class="col-md-12 order-md-1">
      <br/>
    <h4 class="mb-3">Logs</h4>
    <form class="needs-validation" action="<?php echo site_url('mis/add_desktop') ?>" method="POST" novalidate>
      <div class="row">
        <div class="col-md-4 mb-2">
          <label for="computer_location">Device Type</label>
          <input type="text" class="form-control" id="computer_location" name="computer_location" placeholder="Laptop / Desktop" value="" required>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>
        <div class="col-md-4 mb-2">
          <label for="owner">Owner</label>
          <select type="text" class="form-control" id="owner" placeholder="Owner" name="owner" value="" required>
            <option>Choose...</option>
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
              <option value="<?php echo $all_department['department_name']?>"><?php echo $all_department['department_name']?></option>
            <?php endforeach; ?>
          </select>
          </div>
      </div>
        
    </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="admin_acc_name">Embosed ID</label>
          <input type="text" class="form-control" id="admin_acc_name" placeholder="HHMA/LPT/MPCU" name="admin_acc_name" value="" required>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="password">Device User</label>
          <input type="text" class="form-control" id="password" placeholder="Name of Superior / Subornidate" name="password" value="" required>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="processor">Officer Returning</label>
          <input type="text" class="form-control" id="processor" placeholder="Name of Officer Logging" name="processor" value="" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-12">
          <label for="date_purchased">Device Issue</label>
          <textarea class="form-control" name="date_purchased" id="date_purchased" cols="30" rows="10" required></textarea>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>
      </div>
      <br/>
      <button type="submit" class="btn btn-primary">Add Log</button>
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
    <h4 class="mb-3">Diagnostics</h4>
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
      <br/>
      <button type="submit" class="btn btn-primary">Add Diagnose</button>
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
    <h4 class="mb-3">Dispatch</h4>
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
      <button type="submit" class="btn btn-primary">Dispatch</button>
    </form>
    <br/>
  </div>

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
    
</div>
    <!-- End of Third Nav Tab -->


</div>
<!-- End of Nav-Tabs -->
  
</div>

</section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->