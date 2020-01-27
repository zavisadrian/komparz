<?php
require "../Libary/Weblibary.php";

require "header.php";
?>

    <!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar static-top cs-navbar-expand" style="height: 1.375rem; background-color: #f8f9fc;"></nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!--Success window-->
            <div class="card shadow mb-4" style="text-align: center; display: block; transition: all 0.35s cubic-bezier(0.25, 0.1, 0.28, 1.29); height: 170px;" id="loading">
                <h5 style="margin: 30px"><?php echo $_REQUEST['message']; ?></h5>
                <div class="cs-lds-circle-slowly"><i class="far far fa-check-circle" style="color: #56d2a2c2;"></i></div>
            </div>
        </div>
    </div>
</div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
