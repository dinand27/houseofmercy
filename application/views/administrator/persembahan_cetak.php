<div class="container-fluid">
    <div class="text-center h3">STATISTIK JEMAAT ELIM PALU</div>
    
    <?php foreach($detail as $p): ?>
        <div class="row mt-5">
            <table>
                <tr>
                    <td><strong>Ibadah</strong> &nbsp;</td>
                    <td>: <strong><?php echo $p->jenis_kebaktian ?></strong></td>
                </tr>
                <tr>
                    <td><strong>Hari, Tanggal</strong> &nbsp;</td>
                    <td>: <strong><?php echo date('l,d-m-Y', strtotime($p->tgl_persembahan)) ?></strong></td>
                </tr>
                <tr>
                    <td><strong>Pukul</strong> &nbsp;</td>
                    <td>: <strong><?php echo $p->pukul ?></strong></td>
                </tr>
                <tr>
                    <td><strong>Keluarga</strong> &nbsp;</td>
                    <td>: <strong><?php echo $p->kk ?></strong></td>
                </tr>
                <tr>
                    <td><strong>Jumlah Kehadiran</strong></td>
                    <td>: Laki-laki-<strong><?php echo $p->hadir_laki ?></strong>,</td>
                    <td>Perempuan-<strong><?php echo $p->hadir_perempuan ?></strong></td>
                </tr>
                <tr>
                    <td><strong>Pelayan Firman</strong> &nbsp;</td>
                    <td>: <strong><?php echo $p->pelayan_firman ?></strong></td>
                </tr>
            </table>
        </div>    
        
        <hr>
        <div class="h4"><u>Persembahan/Pundi</u></div>
        <div class=" row mt-5">

            <div class="col h5">
                <strong>Pundi 1: &nbsp;</strong>Rp. <?php echo $p->pundi1 ?> 
            </div>
            <div class="col h5">
                <strong>Pundi 2:&nbsp;</strong>Rp. <?php echo $p->pundi2 ?>
            </div>
            <div class="col h5">
                <strong>Pundi 3:&nbsp;</strong>Rp. <?php echo $p->pundi3 ?>
            </div>
            <div class="col h5">
                <strong>Pundi Lelang:&nbsp;</strong>Rp.  <?php echo $p->lelang ?>
            </div>

        </div>
<br><br><br>
<hr>

        <div class="row">
            <div class="col text-center">
            Mengetahui
                </div>
                <div class="col">
                    
                </div>


                <div class="col text-center">
                Bendahara I
                </div>
                <div class="col">
                    
                </div>
                <div class="col text-center">
                    Bendahara II
                </div>

        </div>
<br>
<br><br><br>

</div>
        
        <div class="row">
            <div class="col text-center">
            Bpk. Kepala Keluarga
                </div>
                <div class="col">
                    &nbsp;
                </div>


                <div class="col text-center">
                Ibu Bendahara I
                </div>
                <div class="col">
                    
                </div>
                <div class="col text-center">
                    Bpk. Bendahara II
                </div>

        </div>




        <?php endforeach; ?>

        
<style type="text/css" media="print">
  @page { size: auto; }
</style>
<script type="text/javascript">
            window.print();
        </script>

</div>

