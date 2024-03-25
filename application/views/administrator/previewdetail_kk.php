<div class="container-fluid">
<DIV>    <h3>CETAK KARTU KELUARGA</h3> </DIV>
<table class="table table-bordered table-striped table-hover">
    <?php foreach ($detail as $dt): ?>
        <tr>
            <th>Sektor</th>
            <th><?php echo $dt->sektor ?></th>
        </tr>

        <?php endforeach; ?>
</table>

</div>