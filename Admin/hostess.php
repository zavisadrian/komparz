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
          <h1 class="h3 mb-2 text-gray-800">Zoznam profilov</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary cs-header-headline-withinput orangeText">Hostesky</h6>
                <input class="form-control form-control-user cs-header-input" id="exampleInputPassword" placeholder="Filter keyword" onkeyup="filterTableKeyword(document.getElementById('resultTable'), this.value)">
                <a href="form_addHostess.php" class="unset"><button class="btn btn-primary cs-header-button desktop" type="button">Vytvoriť</button></a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="resultTable" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <?php
                    $conn = dbConnect("mysql80.websupport.sk", "komparztvtest", "Prasavlese.9458", "komparztvtest");

                    $sql = "SELECT * FROM `pr_hostess`";

                    $result = $conn->query($sql);

                    echo "
                    <tr>
                        <th>ID</th>
                        <th>Meno</th>
                        <th>Priezisko</th>
                        <th>Email</th>
                        <th>Telefón</th>
                        <th>Mesto</th>
                        <th>Adresa</th>
                        <th>Operations</th>
                    </tr>
                    ";

                    while($row = $result->fetch_assoc()) {
                        echo "
                            <tr class='cs-table-row'>
                                <td>".$row['ID']."</td>
                                <td>".$row['name']."</td>
                                <td>".$row['surname']."</td>
                                <td>".$row['mail']."</td>
                                <td>".$row['phone']."</td>
                                <td>".$row['city']."</td>
                                <td>".$row['street']."</td>
                                <td style='padding: 5px;'>
                                    <a href=\"#\" class=\"btn btn-icon-split\" style='transform: scale(0.8); background-color: #e18b1e; border-color: #e18b1e;'>
                                    <span class=\"icon text-white-50\" style='color: rgba(255, 255, 255, 0.7)!important;'>
                                        <i class=\"fas fa-external-link-alt\"></i>
                                    </span>
                                    <span class=\"text\" style='color: white;'>Otvoriť</span>
                                    </a>

                                    <a href=\"form_editHostess.php?ID=".$row['ID']."\" class=\"btn btn-icon-split\" style='transform: scale(0.8); background-color: #1F76E0; border-color: #1F76E0;'>
                                    <span class=\"icon text-white-50\" style='color: rgba(255, 255, 255, 0.7)!important;'>
                                        <i class=\"fas fa-edit\"></i>
                                    </span>
                                    <span class=\"text\" style='color: white;'>Upraviť</span>
                                    </a>
                                    
                                    <a href=\"delete.php?ID=".$row['ID']."\" class=\"btn btn-icon-split\" style='transform: scale(0.8); background-color: #DE1F22; border-color: #DE1F22;'>
                                    <span class=\"icon text-white-50\" style='color: rgba(255, 255, 255, 0.7)!important;'>
                                        <i class=\"fas fa-user-times\"></i>
                                    </span>
                                    <span class=\"text\" style='color: white;'>Vymazať</span>
                                    </a>
                                </td>
                            </tr>
                        ";
                    }
                  ?>
                </table>
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
