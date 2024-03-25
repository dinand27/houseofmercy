<div class="container-fluid">
    <div class="text-center h3">STATISTIK IBADAH RAYA JEMAAT ELIM PALU</div>
    
    <?php foreach($detail as $p): ?>
        <div class="row mt-3">
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
                    <td><strong>Sektor Konpokator</strong> &nbsp;</td>
                    <td>: <strong><?php echo $p->konpokator ?></strong></td>
                </tr>
                <tr>
                    <td><strong>Tempat Kebaktian</strong> &nbsp;</td>
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
                <tr>
                    <td><strong>Pembacaan Alkitab</strong> &nbsp;</td>
                    <td>: <strong><?php echo $p->ayat ?></strong></td>
                </tr>
            </table>
        </div>    
        
        <hr>
        <div class="h5"><u>Persembahan/Pundi</u></div>
        <div class=" row mt-1">
            <div class="col-6">
            <table class="table table-sm table-bordered">
        <tr>
            <th>Pundi I</th>
            <td>Rp.<strong><?php echo $p->pundi1 ?></strong></TD>
        </tr>
        <tr>
            <th>Pundi II</th>
            <td>Rp.<strong><?php echo $p->pundi2 ?></strong></TD>
        </tr>
        <tr>
            <th>Pundi III</th>
            <td>Rp.<strong><?php echo $p->pundi3 ?></strong></TD>
        </tr>
        <tr>
            <th>Pundi IV</th>
            <td>Rp.<strong><?php echo $p->pundi1 ?></strong></TD>
        </tr>
        <tr>
            <th>Persembahan Syukur Bulanan</th>
            <td>Rp.<strong><?php echo $p->psb ?></strong></TD>
        </tr>
        <tr>
            <th>Persembahan Syukur Pembangunan</th>
            <td>Rp.<strong><?php echo $p->psp?></strong></TD>
        </tr>
        <tr>
            <th>Kotak Mutasi Pendeta</th>
            <td>Rp.<strong><?php echo $p->kotak_mutasipendeta ?></strong></TD>
        </tr>
        <tr>
            <th>Persembahan Syukur HUT</th>
            <td>Rp.<strong><?php echo $p->pers_hut ?></strong></TD>
        </tr>
        <tr>
            <th>Perpuluhan</th>
            <td>Rp.<strong><?php echo $p->perpuluhan ?></strong></TD>
        </tr>
        <tr>
            <th>Persembahan Perjamuan Kudus</th>
            <td>Rp.<strong><?php echo $p->pers_perjamuankudus?></strong></TD>
        </tr>
        <tr>
            <th>Aksi Pangiu</th>
            <td>Rp.<strong><?php echo $p->aksi_pangiu ?></strong></TD>
        </tr>
        <tr>
            <th>Amplop Diakonia JEP</th>
            <td>Rp.<strong><?php echo $p->amplop_diakonia ?></strong></TD>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>Rp.<strong><?php   $jumlah = $p->pundi1 + $p->pundi2 + $p->pundi3 + $p->pundi4 + $p->psp + $p->psb +
            $p->kotak_mutasipendeta + $p->pers_hut + $p->perpuluhan + $p->pers_perjamuankudus + 
            $p->aksi_pangiu + $p->amplop_diakonia;

            echo number_format($jumlah,0,',','.') ; ?></strong>
            </TD>
        </tr>
        



    </table>

            </div>
        </div>
<br><br><br>
<hr>

        <div class="row">



                <div class="col text-center">
                PPA
                </div>
                <div class="col">
                    
                </div>
                <div class="col text-center">
                    Pelayan Firman
                </div>
                <div class="col text-center">
            
            </div>
            <div class="col">
                
            </div>

        </div>
<br>
<br><br><br>

</div>
        
        <div class="row">


                <div class="col text-center">
                <strong><?php echo $p->notulis ?></strong>
                </div>
                <div class="col">
                    
                </div>
                <div class="col text-center">
                <strong><?php echo $p->pelayan_firman ?></strong>
                </div>
                
            <div class="col text-center">
            <strong</strong>
                </div>
                <div class="col">
                    &nbsp;
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

