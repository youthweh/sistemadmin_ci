<?php $this->load->view('partials/header.php');  ?>
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
                  <h1><?php echo $nasabah['nama'];?></h1>
                    <p><?php echo $nasabah['alamat'];?></p>
                    <p><?php echo $nasabah['telp'];?></p> 
                    <p><?php echo $nasabah['jenis_kelamin'];?></p>
                    <p><?php echo $nasabah['tempat_lahir'];?></p>
                    <p><?php echo $nasabah['tgl_lahir'];?></p>
                    <p><?php echo $nasabah['kode_group1'];?></p>
                    <p><?php echo $nasabah['kode_group2'];?></p>
                    <p><?php echo $nasabah['kode_group3'];?></p>
                    <p><?php echo $nasabah['kode_agama'];?></p>
                    <p><?php echo $nasabah['hp'];?></p>
                    <p><?php echo $nasabah['tgl_register'];?></p>
                    <p><?php echo $nasabah['kode_kantor'];?></p>
                    <p><?php echo $nasabah['email'];?></p>
                    <p><?php echo $nasabah['nasabah_alternatif'];?></p>
                    <p><?php echo $nasabah['no_rekening_bank'];?></p>
                    <p><?php echo $nasabah['potongan_sp'];?></p>
                    <p><?php echo $nasabah['potongan_sw'];?></p>
                    <p><?php echo $nasabah['bunga_tabungan'];?></p>
                    <p><?php echo $nasabah['bunga_deposito'];?></p>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php $this->load->view('partials/footer.php');  ?>