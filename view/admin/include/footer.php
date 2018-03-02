<footer>
    <div class="pull-right">
        Simple - Bootstrap Admin Template by Abdullah-Al-Noman
    </div>
    <div class="clearfix"></div>
</footer>

<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="../../../../assets/admin/vendors/jquery/dist/jquery.min.js"></script>


<!-- Bootstrap -->
<script src="../../../../assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>


<!-- FastClick -->
<script src="../../../../assets/admin/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../../../../assets/admin/vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="../../../../assets/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../../../../assets/admin/vendors/iCheck/icheck.min.js"></script>


<!-- bootstrap-daterangepicker -->
<script src="../../../../assets/admin/vendors/moment/min/moment.min.js"></script>
<script src="../../../../assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="../../../../assets/admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="../../../../assets/admin/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="../../../../assets/admin/vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="../../../../assets/admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="../../../../assets/admin/vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="../../../../assets/admin/vendors/select2/dist/js/select2.full.min.js"></script>

<!-- Parsley -->
<script src="../../../../assets/admin/vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="../../../../assets/admin/vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="../../../../assets/admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="../../../../assets/admin/vendors/starrr/dist/starrr.js"></script>



<!-- Datatables -->
<script src="../../../../assets/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../../../assets/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../../../../assets/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../../assets/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../../../../assets/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../../../../assets/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../../../../assets/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../../../../assets/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../../../../assets/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../../../../assets/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../../assets/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../../../../assets/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../../../../assets/admin/vendors/jszip/dist/jszip.min.js"></script>
<script src="../../../../assets/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../../../../assets/admin/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="../../../../assets/admin/build/js/custom.min.js"></script>
<!-- This Scripts for modal decoration -->
<script src="../../../../assets/admin/build/js/sb-admin-2.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
        $('#dataTables-student').DataTable({
            responsive: true
        });

    });

    $(document).ready(function () {
        $('.alert').delay(2000).fadeOut(500,function () {
            $(this).alert('close');
        });
    });
    $(document).on('click','.delete',function () {
        var id = $(this);
        $('#delete').val(id.data('id'));
    });


</script>

</body>
</html>
