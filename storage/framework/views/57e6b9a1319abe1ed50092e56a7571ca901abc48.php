<!--Start footer-->
<footer class="footer">
    <div class="container">
        <div class="text-center">
            Copyright © 2019 CODENRX
        </div>
    </div>
</footer>
<!--End footer-->

</div><!--End wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="<?php echo e(asset('panel/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('panel/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('panel/js/bootstrap.min.js')); ?>"></script>

<!-- simplebar js -->
<script src="<?php echo e(asset('panel/plugins/simplebar/js/simplebar.js')); ?>"></script>
<!-- waves effect js -->
<script src="<?php echo e(asset('panel/js/waves.js')); ?>"></script>
<!-- sidebar-menu js -->
<script src="<?php echo e(asset('panel/js/sidebar-menu.js')); ?>"></script>
<!-- Custom scripts -->
<script src="<?php echo e(asset('panel/js/app-script.js')); ?>"></script>

<!--Lightbox-->
<script src="<?php echo e(asset('panel/plugins/fancybox/js/jquery.fancybox.min.js')); ?>"></script>

<!--Sweet Alerts -->
<script src="<?php echo e(asset('panel/plugins/alerts-boxes/js/sweetalert.min.js')); ?>"></script>

<!-- Vector map JavaScript -->
<script src="<?php echo e(asset('panel/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
<script src="<?php echo e(asset('panel/plugins/vectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
<!-- Sparkline JS -->
<script src="<?php echo e(asset('panel/plugins/sparkline-charts/jquery.sparkline.min.js')); ?>"></script>
<!-- Chart js -->
<script src="<?php echo e(asset('panel/plugins/Chart.js/Chart.min.js')); ?>"></script>
<!-- Index js -->

<!--Data Tables js-->
<script src="<?php echo e(asset('panel/plugins/bootstrap-datatable/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('panel/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('panel/plugins/bootstrap-datatable/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('panel/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('panel/plugins/bootstrap-datatable/js/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('panel/plugins/bootstrap-datatable/js/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('panel/plugins/bootstrap-datatable/js/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(asset('panel/plugins/bootstrap-datatable/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('panel/plugins/bootstrap-datatable/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('panel/plugins/bootstrap-datatable/js/buttons.colVis.min.js')); ?>"></script>
<script>
    $(document).ready(function() {
        //Default data table
        $('#default-datatable').DataTable();
        var table = $('#example').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
        } );
        table.buttons().container()
            .appendTo( '#example_wrapper .col-md-6:eq(0)' );
    } );
</script>
</body>
</html><?php /**PATH C:\Users\nirab\Documents\Laravel\personal\resources\views/inc/panel-footer.blade.php ENDPATH**/ ?>