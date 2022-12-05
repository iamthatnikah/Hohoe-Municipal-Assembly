<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="<?php echo site_url('#') ?>">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar ">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo site_url('dashboard') ?>">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('assets') ?>">
              <span data-feather="layers" class="align-text-bottom"></span>
              Tangible Assets
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('intangible-assets') ?>">
              <span data-feather="layers" class="align-text-bottom"></span>
              Intangible Assets
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('users') ?>">
              <span data-feather="layers" class="align-text-bottom"></span>
              Permanent Staff
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('contract-staff') ?>">
              <span data-feather="layers" class="align-text-bottom"></span>
              Contract Staff
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('department') ?>">
              <span data-feather="users" class="align-text-bottom"></span>
              Departments
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('sms') ?>">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              SMS
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/mails') ?>">
              <span data-feather="layers" class="align-text-bottom"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>