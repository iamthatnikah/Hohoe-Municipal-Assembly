  <main id="main" class="main">

    <div class="pagetitle">
      <h1>ECharts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Charts</li>
          <li class="breadcrumb-item active">ECharts</li>
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

        <div class="col-md-6">
          <div class="card" style="min-height: 400px;">
            <div class="card-body">
              <h5 class="card-title">Departments</h5>
              <form class="needs-validation" action="<?php echo site_url('department/add_department') ?>" method="POST" novalidate>
                <div class="" style="margin: 30px 10px;">
                  <label for="department_name">Department</label>
                  <input type="text" class="form-control" id="department_name" placeholder="Department Name" name="department_name" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="" style="margin: 30px 10px;">
                  <label for="office">Abbreviation</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="office" placeholder="Admin | HR | IT | MIS" name="office" value="" required>
                    <div class="invalid-feedback">
                      Valid last name is required.
                    </div>
                  </div>
                </div>

                <div class="" style="margin: 30px 10px;">
                  <label for="inter_exten">Intercom Extension</label>
                  <input type="number" class="form-control" id="inter_exten" placeholder="1001 | 1002 | 1003" name="inter_exten" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="" style="margin: 30px 10px;">
                  <label for="hod">Head Of Department</label>
                  <input type="text" class="form-control" id="hod" placeholder="HOD" name="hod" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <button type="submit" class="btn btn-primary" align="right">Add Depart</button>
              </form>
              <!-- End Line Chart -->

          </div>
        </div>
      </div>


        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Donut Chart</h5>

              <!-- Donut Chart -->
              <div id="donutChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#donutChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script>
              <!-- End Donut Chart -->

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
                <td><a href="<?php echo site_url(); ?>mis/edit/<?php echo $all_departments['id']; ?>" class="btn-warning"><i class="fa fa-edit"></i></a> 
                  <a href="<?php echo site_url(); ?>mis/delete/<?php echo $all_departments['id']; ?>" onclick="return confirm('Do you want delete this record')" class="btn-danger"><i class="fa fa-trash"></i></a> 
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