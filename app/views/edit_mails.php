
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
                    <form action="<?php echo site_url('admin/mails/update/'. $mails['id']) ?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                    <input type="hidden" name="id" value="<?php echo $mails['id']; ?>">
                      <div class="form-row">
                        <div class="form-group col-md-2">
                          <label for="">Date Received</label>
                          <input type="date" class="form-control" name="date_received" value="<?php echo $mails["date_received"] ?>">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="">Reg. No.</label>
                          <input type="number" class="form-control" name="reg_no" value="<?php echo $mails["reg_no"] ?>">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="">From whom received</label>
                        <input type="text" class="form-control" name="received" value="<?php echo $mails["received"] ?>">
                        </div>
                        <div class="form-group col-md-2">
                        <label for="">Date of Letter</label>
                        <input type="date" class="form-control" name="dol" value="<?php echo $mails["dol"] ?>">
                        </div>
                         <div class="form-group col-md-4">
                          <label for="">Institution Ref No.</label>
                          <input type="text" class="form-control" name="inst_ref" value="<?php echo $mails["inst_ref"] ?>">
                        </div>
                        <div class="form-group col-md-8">
                        <label for="inputAddress">Subject</label>
                        <input type="text" class="form-control" name="subject" value="<?php echo $mails["subject"] ?>">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputAddress">Officer to whom file passed</label>
                          <select class="form-control select2bs4" name="office">
                            <option value="<?php echo $mails['office'] ?>"><?php echo $mails['office'] ?></option>
                            <option value="">Select Ref. No./File Title</option>
                            <?php foreach($all_departments as $all_department): ?>
                            <option value="<?php echo $all_department['name']?>"><?php echo $all_department['name']?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputAddress">File Ref. No.</label>
                          <select class="form-control select2bs4" name="file_ref">
                          <option value="<?php echo $mails['file_ref'] ?>"><?php echo $mails['file_ref'] ?></option>
                          <option value="">Select New Ref. No./File Title</option>                     
                            <?php foreach($all_filelists as $all_filelist): ?>
                            <option value="<?php echo $all_filelist['reference'] ?>"><?php echo $all_filelist['reference'] ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputAddress">Folio No.</label>
                          <input type="text" class="form-control" name="folio" value="<?php echo $mails["folio"] ?>">
                        </div>
                       
                        <div class="form-group col-md-6">
                           <div class="form-group scan-image">
                      <?php if(empty($mails['post_image'])): ?>
                        <label for="">Upload Scan Copy</label>
                        <input class="form-control" type="file" name="userfile">
                      <?php else: ?>
                        <label for="">Uploaded File</label>
                        <div class="uploaded-wrapper-wrapper">
                          <div class="scan-file-name">
                            <a href="<?php echo site_url(); ?>uploads/mails/<?php echo $mails['post_image']; ?>" target="_blank" class="btn btn-info"><?php echo $mails['post_image'] ?></a>
                            <input type="hidden" name="old-scan-name" value="<?php echo $mails['post_image']; ?>">
                          </div>
                          <div class="remove-scan">
                            <a href="<?php echo site_url(); ?>admin/mails/removescan/<?php echo $mails['id']; ?>" class="btn btn-link">Remove uploaded file</a>
                          </div>
                        </div>
                      <?php endif; ?>
                    </div>
                        </div> 
                      </div>
                      <button type="submit" class="btn btn-primary">Update Mail</button>
                    </form>
                  </div>
                
              </div>
            </div>
          </div>

           
              <!-- /.card-body -->
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
 