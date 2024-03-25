<div class="container-fluid">
<div class="alert alert-success" role="alert">
        <i class="fas fa-users"></i> STRUKTUR KOMSEL 
    </div>

<div class="row">
    <?php foreach($komsel as $km): ?>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
            <a href="<?php echo base_url('administrator/wilayah/komsel_detail/'.$km->id) ?>" class="stretched-link"></a>
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            <?php echo $km->gkm ?></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">KM. <?php echo $km->nama_komsel ?> </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php endforeach; ?>
</div>



</div>