<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-tachometer-alt"></i> Dashboard <strong><?php echo $id_sessions ?></strong>
    </div>
    <div class="alert alert-success" role="alert">
        <h5 class="alert-heading text-center mb-0">SISTEM INFORMASI GEREJA  </h5>
<!--        <p class="h2 text-center"><strong><?php echo $nama_gereja ?></strong></p> -->
        <hr>

<!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
<i class="fas fa-tools"></i> Control Panel
</button>
</div>

  <!-- Content Row -->
  <div class="row">

<!-- Earnings (Monthly) Card Example -->
<!-- <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jemaat Komitmen</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">2000<?php  ?> orang</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Earnings (Monthly) Card Example -->
<!-- <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Taburan (Annual)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.215,000,000</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Earnings (Monthly) Card Example -->
<!-- <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kehadiran
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar"
                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Pending Requests Card Example -->
<!-- <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Komunitas Sel</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div> -->

<!-- Content Row -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-tools"></i> Control Panel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-3 text-info text-center">
                <a href="<?php echo base_url('master/controlpanel/pekerjaan'); ?>"><p class="nav-link small text-info">  PEKERJAAN</p></a>
                <i class="fas fa-3x fa-user-graduate"></i>
            </div>
            <div class="col-md-3 text-info text-center">
                <a href="<?php echo base_url('master/controlpanel/kebaktian '); ?>"><p class="nav-link small text-info">  IBADAH-IBADAH</p></a>
                <i class="fas fa-3x fa-calendar-alt"></i>
            </div>
            <div class="col-md-3 text-info text-center">
                <a href="<?php echo base_url('master/controlpanel/hobi'); ?>"><p class="nav-link small text-info">  HOBI</p></a>
                <i class="fas fa-3x fa-edit"></i>
            </div>
            <div class="col-md-3 text-info text-center">
                <a href="<?php echo base_url('master/controlpanel/sektor'); ?>"><p class="nav-link small text-info">  WILAYAH</p></a>
                <i class="fas fa-3x fa-file-alt"></i>
            </div>
        </div>
        <hr>
        <div class="row">

            <div class="col-md-3 text-info text-center">
                <a href="<?php echo base_url('master/controlpanel/komsel'); ?>"><p class="nav-link small text-info">  KOMSEL</p></a>
                <i class="fas fa-3x fa-file-alt"></i>
            </div>
            <div class="col-md-3 text-info text-center">
                <a href="<?php echo base_url('master/controlpanel/korpel'); ?>"><p class="nav-link small text-info">  KORD.PELAYANAN</p></a>
                <i class="fas fa-3x fa-file-alt"></i>
            </div>
            <div class="col-md-3 text-info text-center">
                <a href="<?php echo base_url('master/controlpanel/kota'); ?>"><p class="nav-link small text-info">  Daftar Kota</p></a>
                <i class="fas fa-3x fa-file-alt"></i>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-md-3 text-info text-center">
                <a href="<?php echo base_url('master/controlpanel/index_penghasilan'); ?>"><p class="nav-link small text-info">  PENGHASILAN</p></a>
                <i class="fas fa-3x fa-sort-numeric-down"></i>
            </div>
            <div class="col-md-3 text-info text-center">
                <a href="<?php echo base_url('master/controlpanel/index_goldarah'); ?>"><p class="nav-link small text-info">  GOL DARAH</p></a>
                <i class="fas fa-3x fa-print"></i>
            </div>
            <div class="col-md-3 text-info text-center">
                <a href="<?php echo base_url('master/controlpanel/index_status'); ?>"><p class="nav-link small text-info">  STATUS</p></a>
                <i class="fas fa-3x fa-list-ul"></i>
            </div>
            <div class="col-md-3 text-info text-center">
                <a href="<?php echo base_url('master/controlpanel/index_inventaris'); ?>"><p class="nav-link small text-info">  IVENTARIS</p></a>
                <i class="fas fa-3x fa-bullhorn"></i>
            </div>
        </div>
        <hr> -->
        <!--
        <div class="row">
            <div class="col-md-3 text-info text-center">
                <a href="<?php echo base_url(); ?>"><p class="nav-link small text-info">  BIODATA</p></a>
                <i class="fas fa-3x fa-id-card-alt"></i>
            </div>
            <div class="col-md-3 text-info text-center">
                <a href="<?php echo base_url(); ?>"><p class="nav-link small text-info">  TENTANG KAMPUS</p></a>
                <i class="fas fa-3x fa-info-circle"></i>
            </div>
            <div class="col-md-3 text-info text-center">
                <a href="<?php echo base_url(); ?>"><p class="nav-link small text-info">  FASILITAS</p></a>
                <i class="fas fa-3x fa-laptop"></i>
            </div>
            <div class="col-md-3 text-info text-center">
                <a href="<?php echo base_url(); ?>"><p class="nav-link small text-info">  GALLERY</p></a>
                <i class="fas fa-3x fa-images"></i>
            </div>
        </div>-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

 <!-- Content Row -->

 <div class="row">

<!-- Area Chart
<div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
        Card Header - Dropdown --
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tingkat Pertumbuhan </h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body --
        <div class="card-body">
            <div class="chart-area">
                <canvas id="myAreaChart"></canvas>
            </div>
        </div>
    </div>
</div>
-->
<!-- Pie Chart
<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown --
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body MB-0">
        <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Birthday Reminder</h1>
            <p class="lead">Yang Berulang Tahun Hari ini</p>
        </div>
        </div>
        <br>
        </div>
    </div>
</div>
</div>


<?php

$det= date("d");
$mon= date("m");

// echo  '<br>', 'tgl skrg = ', $det,'<br>', 'dan bulan skrg= ',$mon, '<br>';


?>

<?php
$sql= $this->db->query("SELECT * from kepala_keluarga where date_format(tgl_lahir,'%d') =$det AND date_format(tgl_lahir,'%m')= $mon");
foreach($sql->result() as $row)
{$lahir= $row->tgl_lahir;
    $skrg= time();
    $timethnlahir= strtotime($lahir);
    $setahun= 31536000;
    $hitungusia= ($skrg - $timethnlahir) / $setahun;
    // echo floor($hitungusia),' Thn';

    echo '<br> <div class="alert alert-primary" role="alert"><i class="fa fa-bell"></i>
    <strong>Hari ini, Tanggal ',date("d-M",strtotime($row->tgl_lahir)),' , ',$row->nama,'</strong> Berulang Tahun yang Ke <strong> ',floor($hitungusia),'</strong> Thn, HP/Whatsapp: <strong> ',$row->wa,'</strong>
    Mari Ucapkan Selamat kepada yang berulang Tahun sebagai bentuk perhatian Gembala/Majelis Jemaat  </div>';

}




// echo 'tanggal lahirnya = ', date("d-m",strtotime($tgl->tgl_lahir));
?>


</div>
