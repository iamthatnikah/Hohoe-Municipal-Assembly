<main id="main" class="main">
  <div class="pagetitle">
    <h1><?php echo $title ?></h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>dashboard">Home</a></li>
        <li class="breadcrumb-item active"></li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <!-- First Row -->

      <div class="row">
        <!-- Printers Card -->
        <div class="col-xxl-4 col-md-3">
          <div class="card info-card revenue-card">
            <?php //foreach($desktops as $all_desktops): ?>
            <div class="card-body">
              <h5 class="card-title"> <span>Total </span>| <?php // echo $all_desktops['id'] ?></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-printer"></i>
                </div>
                <div class="ps-3">
                  <h6>Printers</h6>
                  <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
              </div>
            </div>
            <?php //endforeach ?>

          </div>
        </div>
        <!-- End Revenue Card -->

        <!-- Desktop Card -->
        <div class="col-xxl-4 col-md-3">

          <div class="card info-card customers-card">
            <div class="card-body">
              <h5 class="card-title"> <span>Total </span>| 1244</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-server"></i>
                </div>
                <div class="ps-3">
                  <h6>Desktop</h6>
                  <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- End Desktop Card -->
        
        <!-- Laptop Card -->
        <div class="col-xxl-4 col-md-3">
          <div class="card info-card customers-card">
            <div class="card-body">
              <h5 class="card-title"> <span>Total </span>| 1244</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-laptop"></i>
                </div>
                <div class="ps-3">
                  <h6>Laptop</h6>
                  <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- End Laptop Card -->
        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-3">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title"> <span>Total |</span> 145</h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>Others</h6>
                  <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- End Sales Card -->

      </div>
      <!-- End First Row -->
      
      <!-- Second Row -->

      <div class="row">
        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card sales-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title"> <span>Total |</span> 145</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>Users</h6>
                  <span class="text-success pt-1 fw-bold">12%</span> <span class="text-muted pt-2 ps-1">increase</span>

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- End Sales Card -->

        <!-- Printers Card -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card revenue-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>
            <?php //foreach($desktops as $all_desktops): ?>
            <div class="card-body">
              <h5 class="card-title"> <span>Total </span>| <?php // echo $all_desktops['id'] ?></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-printer"></i>
                </div>
                <div class="ps-3">
                  <h6>Memos</h6>
                  <span class="text-success fw-bold">8%</span> <span class="text-muted  ps-1">increase</span>

                </div>
              </div>
            </div>
            <?php //endforeach ?>

          </div>
        </div>
        <!-- End Revenue Card -->

        <!-- Desktop Card -->
        <div class="col-xxl-4 col-md-4">

          <div class="card info-card customers-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title"> <span>Total </span>| 1244</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-server"></i>
                </div>
                <div class="ps-3">
                  <h6>E-Logs</h6>
                  <span class="text-danger pt-1 fw-bold">12%</span> <span class="text-muted pt-2 ps-1">decrease</span>

                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- End Desktop Card -->
        
        <!-- End of second row -->
        
        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title"><span></span> Permanent Staff</h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">Staff ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Official Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Dept.</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($all_perm_staff as $all_staff): ?>
                    <tr>
                      <th scope="row"><a href="#"><?php echo $all_staff['staff_id'] ?></a></th>
                      <td><?php echo $all_staff['first_name'] . " " . $all_staff['middle_name'] . " " . $all_staff['last_name'] ?></td>
                      <td><a href="#" class="text-primary"><?php echo $all_staff['official_email'] ?></a></td>
                      <td><?php echo $all_staff['class'] ?></td>
                      <td><?php echo $all_staff['grade'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

            </div>

          </div>
        </div>
        <!-- End Recent Sales -->

      </div>
      <!-- End Second Row -->

      <div class="row">
        <!-- End Right side columns -->
        
        <!-- Top Selling -->
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
        </div><!-- End Top Selling -->
        <!-- News & Updates Traffic -->
        <div class="card col-md-6">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

            <div class="news">
              <div class="post-item clearfix">
                <img src="assets/img/news-1.jpg" alt="">
                <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/news-2.jpg" alt="">
                <h4><a href="#">Quidem autem et impedit</a></h4>
                <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/news-3.jpg" alt="">
                <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/news-4.jpg" alt="">
                <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/news-5.jpg" alt="">
                <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
              </div>

            </div><!-- End sidebar recent posts-->

          </div>
        </div>
        <!-- End News & Updates -->
      </div>

    </div>
  </section>
</main><!-- End #main -->