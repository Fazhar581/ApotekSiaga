<?php

  $ds = DIRECTORY_SEPARATOR;
  $base_dir = realpath(dirname(__FILE__)  . $ds . '../../../') . $ds;
  require_once("{$base_dir}pages{$ds}core{$ds}header.php");

?>
  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Start Ngoding Disini -->
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary  mb-3">Penjualan Anda Hari Ini</div>
                      <?php // if ($_SESSION['level']=='Admin') {
                         //$sql = $connect->query("SELECT SUM(total_harga) AS total FROM penjualan WHERE tgl=CURDATE()");
                      //} else {
                        // $sql = $connect->query("SELECT SUM(total_harga) AS total FROM penjualan WHERE kasir = '$user' AND tgl=CURDATE()");
                      //}
                        //    $dt  = $sql->fetch_object(); { echo ' 
                      //<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. '.number_format($dt->total).' </div>'; } ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary mb-3">Penjualan Anda Bulan Ini</div>
                      <?php 
                       // if ($_SESSION['level']=='Admin') {
                      //$sql = $connect->query("SELECT CONCAT(YEAR(tgl),'/',MONTH(tgl)) AS tahun_bulan, SUM(total_harga) AS total FROM penjualan WHERE CONCAT(YEAR(tgl),'/',MONTH(tgl))=CONCAT(YEAR(NOW()),'/',MONTH(NOW())) GROUP BY YEAR(tgl),MONTH(tgl)");

                        //} else {
                          # code...
                      //$sql = $connect->query("SELECT CONCAT(YEAR(tgl),'/',MONTH(tgl)) AS tahun_bulan, SUM(total_harga) AS total FROM penjualan WHERE CONCAT(YEAR(tgl),'/',MONTH(tgl))=CONCAT(YEAR(NOW()),'/',MONTH(NOW())) AND kasir = '$user' GROUP BY YEAR(tgl),MONTH(tgl)");
                        //}
                        //$data = $sql->fetch_object();
                      
                      //{ echo '
                      //<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. '.number_format($data->total).'</div>'; } ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary mb-3">Kadaluarsa Bulan Ini</div>
                      <?php //$tgl = date('m'); $thn = date('Y'); 
                            //$sql  = $connect->query("SELECT COUNT(kode) AS total FROM tb_obat WHERE MONTH(expired) = '$tgl' AND YEAR(expired)='$thn' ");
                            //$data = $sql->fetch_object(); { echo '
                      //<div class="h5 mb-0 font-weight-bold text-gray-800">'. number_format($data->total).' Data</div>'; } ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning mb-3">Total Supplier</div>
                      <?php // $sql = $connect->query("SELECT COUNT(kode) AS total FROM suplier"); 
                            //$data = $sql->fetch_object(); { echo '
                      //<div class="h5 mb-0 font-weight-bold text-gray-800">'.$data->total.' Suplier</div>'; } ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- End Ngoding Disini -->

      </div>
    </section>

  </main><!-- End #main -->


<?php
  require_once("{$base_dir}pages{$ds}core{$ds}footer.php");
?> 