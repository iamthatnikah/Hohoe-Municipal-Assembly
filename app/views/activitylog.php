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
  
  <br/>
  
    <!-- Desktop Table -->
    <div class="table-responsive col-12">
      <div class="card recent-sales overflow-auto">
        <div class="card-body">
          <br/>
          <table class="table table-borderless table-striped datatable table-sm">
            <thead>
              <tr>
                <th scope="col">Activity</th>
                <th scope="col">Department</th>
                <th scope="col">OS Edition</th>
                <th scope="col">Memory (RAM)</th>
                <th scope="col">Acc Type</th>
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

</div>
<!-- End of Nav-Tabs -->
  
</div>

</section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->