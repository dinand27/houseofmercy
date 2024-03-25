

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>/assets/DataTables/DataTables-1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>/assets/DataTables/DataTables-1.13.4/js/dataTables.bootstrap4.min.js"></script>
    
    <script src="<?php echo base_url()?>/assets/DataTables/Buttons-2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>/assets/DataTables/Buttons-2.3.6/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url()?>/assets/DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="<?php echo base_url()?>/assets/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="<?php echo base_url()?>/assets/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="<?php echo base_url()?>/assets/DataTables/Buttons-2.3.6/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>/assets/DataTables/Buttons-2.3.6/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url()?>/assets/DataTables/Buttons-2.3.6/js/buttons.colVis.min.js"></script>



    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>/assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url()?>/assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url()?>/assets/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url()?>/assets/js/demo/chart-pie-demo.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable( {
                lengthChange: false,
                buttons: [
                    {
                        extend: 'csv',
                        split: [ 'pdf', 'excel'],
                    },
                    'colvis'
                ]
            } );
        
            table.buttons().container()
                .appendTo( '#example_wrapper .col-md-9:eq(0)' );
        } );    
</script>

</body>

</html>