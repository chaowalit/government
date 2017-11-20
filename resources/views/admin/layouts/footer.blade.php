<!-- jQuery 3 -->
<script src="{{ asset('admin/assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('admin/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/assets/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/assets/dist/js/demo.js') }}"></script>


<?php if($menu_nav == 'online_electronic_data'){ ?>
	<!-- DataTables -->
	<script src="{{ asset('admin/assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('admin/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
 	<script>
      	$(function () {
        	$('#example1').DataTable();
        	$('#example2').DataTable();
        	$('#example3').DataTable();
        	$('#example4').DataTable();
        	$('#example5').DataTable();
      	})
    </script>

<?php } ?>

<?php if($menu_nav == 'history_detail'){ ?>
    <!-- CK Editor -->
    <script src="{{ asset('admin/assets/bower_components/ckeditor/ckeditor.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('admin/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('detail1', {
            height: 500
        })
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
      })
    </script>
<?php } ?>

<?php if($menu_nav == 'mission_vision'){ ?>

    <!-- CK Editor -->
    <script src="{{ asset('admin/assets/bower_components/ckeditor/ckeditor.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('admin/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('detail1', {
            height: 500
        })
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
      })
    </script>

<?php } ?>


<?php if($menu_nav == 'executive_messages'){ ?>

    <!-- CK Editor -->
    <script src="{{ asset('admin/assets/bower_components/ckeditor/ckeditor.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('admin/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('detail1', {
            height: 500
        })
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
      })
    </script>

<?php } ?>

<?php if($menu_nav == 'information'){ ?>

    <!-- CK Editor -->
    <script src="{{ asset('admin/assets/bower_components/ckeditor/ckeditor.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('admin/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('admin/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <!-- bootstrap datepicker -->
    <script src="{{ asset('admin/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('detail1', {
            height: 500
        })
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()

            //Date picker
            $('#datepicker').datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true
            })
      })
    </script>

<?php } ?>

<?php if($menu_nav == 'staff_structure'){ ?>

    <!-- CK Editor -->
    <script src="{{ asset('admin/assets/bower_components/ckeditor/ckeditor.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('admin/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('role', {
            height: 500
        })
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()

      })
    </script>

<?php } ?>