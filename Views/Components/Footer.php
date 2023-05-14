
<!-- Default JS -->
<script src="<?= __ROOT__ . 'Vendor/Jquery/jquery-3.5.1.js' ?>"></script>
<script src="<?= __ROOT__ . 'Vendor/Bootstrap/bootstrap.bundle.min.js' ?>"></script>
<script src="<?= __ROOT__ . 'Vendor/DataTables/jquery.dataTables.min.js' ?>"></script>
<script src="<?= __ROOT__ . 'Vendor/DataTables/dataTables.bootstrap5.min.js' ?>"></script>

<!-- Main JS -->
<script>
    $(document).ready(function () {
        $('.table').DataTable();
    });
</script>
</body>
</html>