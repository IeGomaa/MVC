<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <?= PROJECT; ?>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0-rc
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= PUBLIC_PATH; ?>/back/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= PUBLIC_PATH; ?>/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?= PUBLIC_PATH; ?>/back/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?= PUBLIC_PATH; ?>/back/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= PUBLIC_PATH; ?>/back/dist/js/pages/dashboard3.js"></script>


<!-- Summernote -->
<script src="<?= PUBLIC_PATH; ?>/back/plugins/summernote/summernote-bs4.min.js"></script>
<!-- CodeMirror -->
<script src="<?= PUBLIC_PATH; ?>/back/plugins/codemirror/codemirror.js"></script>
<script src="<?= PUBLIC_PATH; ?>/back/plugins/codemirror/mode/css/css.js"></script>
<script src="<?= PUBLIC_PATH; ?>/back/plugins/codemirror/mode/xml/xml.js"></script>
<script src="<?= PUBLIC_PATH; ?>/back/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- Page specific script -->
<script>
    $(function () {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
</script>
</body>
</html>
