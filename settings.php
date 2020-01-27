<?php
require "../Libary/Weblibary.php";

require "header.php";
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar static-top cs-navbar-expand" style="height: 1.375rem; background-color: #f8f9fc;">

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Nastavenia</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
                <div calss="form-group row">
                    <h5>Pozadie na homepage slider.</h5>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <h6 class="m-0 font-weight-bold text-primary cs-input-label">Pozadie 1</h6>
                        <img style="width: 100%; padding-top: 100%; background-image('../Images/slide1.jpg');">
                        <input name="bcg1" type="file" class="form-control form-control-user">
                    </div>
                    <div class="col-sm-2">
                        <h6 class="m-0 font-weight-bold text-primary cs-input-label">Pozadie 2</h6>
                        <input name="bcg1" type="file" class="form-control form-control-user">
                    </div>
                    <div class="col-sm-2">
                        <h6 class="m-0 font-weight-bold text-primary cs-input-label">Pozadie 3</h6>
                        <input name="bcg1" type="file" class="form-control form-control-user">
                    </div>
                    <div class="col-sm-2">
                        <h6 class="m-0 font-weight-bold text-primary cs-input-label">Pozadie 4</h6>
                        <input name="bcg1" type="file" class="form-control form-control-user">
                    </div>
                    <div class="col-sm-2">
                        <h6 class="m-0 font-weight-bold text-primary cs-input-label">Pozadie 5</h6>
                        <input name="bcg1" type="file" class="form-control form-control-user">
                    </div>
                    <div class="col-sm-2">
                        <h6 class="m-0 font-weight-bold text-primary cs-input-label">Pozadie 6</h6>
                        <input name="bcg1" type="file" class="form-control form-control-user">
                    </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Studio Copenhagen 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
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
