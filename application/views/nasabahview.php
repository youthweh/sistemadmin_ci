
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SISTEM ADMIN</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/images/favicon.png">
</head>
<body>
  <?php if(isset($_SESSION['username'])):?>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo base_url(); ?>/assets/images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url(); ?>/assets/images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
          <form>
              <input type="text" placeholder="Cari Data Nasabah"  style="width:80%" name="find">
              <button type="submit" class="btn btn-primary mr-2">Cari</button>
          </form>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?php echo base_url(); ?>/assets/images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name">Louis Barnett</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="<?php echo site_url('nasabah/logout');?>"> 
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('nasabah');?>">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('kodekantor');?>"> Data Kode Kantor </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('kodegrup1');?>">Data Kode Grup 1 </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('kodegrup2');?>"> Data Kode Grup 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('kodegrup3');?>"> Data Kode Grup 3 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Profil</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <?php echo $this->session->flashdata('message');?>
                    <h2>Selamat datang,</h2>
                    <p class="mb-md-0">Dashboard Halaman Beranda.</p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                  </button>
                  <a href="<?php echo site_url('nasabah/add');?>" class="btn btn-primary mr-2">Tambah Nasabah </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Jumlah Nasabah</small>
                            <h5 class="mr-2 mb-0">$577545</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Jumlah Grup 1</small>
                            <h5 class="mr-2 mb-0">9833550</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Jumlah Kantor</small>
                            <h5 class="mr-2 mb-0">2233783</h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Flagged</small>
                            <h5 class="mr-2 mb-0">3497843</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Data Nasabah</p>
              
                  <div class="table-responsive">
                    <table id="tabelnasabah" class="table">
                      <thead>
                        <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Tangga Lahir</th>
                        <th>Jenis Group1</th>
                        <th>Jenis Group2</th>
                        <th>Jenis Group3</th>
                        <th>Tanggal Register</th>
                        <th>Jenis Kantor</th>
                        <th>Potongan Simpanan Pokok</th>
                        <th>Potongan Simpanan Wajib</th>
                        <th style="text-align: center;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($nasabahs as $key => $nasabah):?>
                        <tr>
                            <td><?php echo $nasabah['id']; ?></td>
                            <td><a href="<?php echo site_url('nasabah/detail/' .$nasabah['id']);?>">
                                  <?php echo $nasabah['nama']; ?>      
                                </a>
                               
                            </td>
                            <td><?php echo $nasabah['tgl_lahir']; ?></td>
                            <td><?php echo $nasabah['kode_group1']; ?></td>
                            <td><?php echo $nasabah['kode_group2']; ?></td>
                            <td><?php echo $nasabah['kode_group3']; ?></td>
                            <td><?php echo $nasabah['tgl_register']; ?></td>
                            <td><?php echo $nasabah['kode_kantor']; ?></td>
                            <td><?php echo $nasabah['potongan_sp']; ?></td>
                            <td><?php echo $nasabah['potongan_sw']; ?></td>
                            <td>
                                <a href="<?php echo site_url('nasabah/edit/'.$nasabah['id']); ?>"> Edit</a>
                                <a href="<?php echo site_url('nasabah/delete/'.$nasabah['id']); ?>" onclick="return confirm('Apa anda yakin akan menghapus')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach ;?>
                      </tbody>
                    </table>
                  </div>
          
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <?php else:?>
    <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?php echo base_url(); ?>/assets/images/logo.svg" alt="logo">
              </div>
              <?php echo $this->session->flashdata('message');?>
              <h4>Maaf, Anda belum login</h4>
              <h6 class="font-weight-light">Silahkan login.</h6>
              <a href="<?php echo site_url('nasabah/login');?>" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</a>
            </div> 
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
    

  <?php endif; ?>        
  <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo base_url(); ?>assets/vendors/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/data-table.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap4.js"></script>
  <script>
      $('#tabelnasabah').dataTable( {
        
      } );

  </script>
  <!-- End custom js for this page-->
</body>

</html>

  <!-- Dasar tampilan data nasabah-->
<!--html>
    <head>
    <style>

</style>
    </head>
    <body>
        <h1>Data Nasabah</h1>
        <a href="<?php echo site_url('nasabah/add');?>">+ Tambah Nasabah </a>
        <form>
            <input type="text" name="find">
            <button type="submit">Cari</button>
        </form>
        <?php foreach ($nasabahs as $key => $nasabah):?>
        <div class="box-body">
            <table id="list-data" class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tangga Lahir</th>
                <th>Jenis Group1</th>
                <th>Jenis Group2</th>
                <th>Jenis Group3</th>
                <th>Tanggal Register</th>
                <th>Jenis Kantor</th>
                <th>Potongan Simpanan Pokok</th>
                <th>Potongan Simpanan Wajib</th>
                <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody id="data-nasabah">
                <tr>
                    <td><?php echo $nasabah['id']; ?></td>
                    <td><a href="<?php echo site_url('nasabah/detail/' .$nasabah['id']);?>">
                        <?php echo $nasabah['nama']; ?>
                        </a>
                    </td>
                    <td><?php echo $nasabah['tgl_lahir']; ?></td>
                    <td><?php echo $nasabah['kode_group1']; ?></td>
                    <td><?php echo $nasabah['kode_group2']; ?></td>
                    <td><?php echo $nasabah['kode_group3']; ?></td>
                    <td><?php echo $nasabah['tgl_register']; ?></td>
                    <td><?php echo $nasabah['kode_kantor']; ?></td>
                    <td><?php echo $nasabah['potongan_sp']; ?></td>
                    <td><?php echo $nasabah['potongan_sw']; ?></td>
                    <td>
                        <a href="<?php echo site_url('nasabah/edit/'.$nasabah['id']); ?>"> Edit</a>
                        <a href="<?php echo site_url('nasabah/delete/'.$nasabah['id']); ?>">Delete</a>

                    </td>
                </tr>
            </tbody>
            </table>
        </div>
        
        <?php endforeach ;?>
    </body>
</html-->

