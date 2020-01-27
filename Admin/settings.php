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
                <div class="form-group row">
                    <h2 class="text-primary">Pozadie na homepage slider.</h2>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <h6 class="m-0 cs-input-label">Pozadie 1</h6>
                        <img class="admin-picture-sm-12" style="background-image: url('../images/homepage1.jpg');">
                        <form action="PHP/changeHomepageBackground.php" method="post" enctype="multipart/form-data" id="homepage1">
                            <input name="bcg1" type="file" class="form-control form-control-user" onchange="changeHomepageBackground(1)">
                            <input name="index" type="hidden" value="1">
                        </form>
                    </div>
                    <div class="col-sm-2">
                        <h6 class="m-0 cs-input-label">Pozadie 2</h6>
                        <img class="admin-picture-sm-12" style="background-image: url('../images/homepage2.jpg');">
                        <form action="PHP/changeHomepageBackground.php" method="post" enctype="multipart/form-data" id="homepage2">
                            <input name="bcg1" type="file" class="form-control form-control-user" onchange="changeHomepageBackground(2)">
                            <input name="index" type="hidden" value="2">
                        </form>
                    </div>
                    <div class="col-sm-2">
                        <h6 class="m-0 cs-input-label">Pozadie 3</h6>
                        <img class="admin-picture-sm-12" style="background-image: url('../images/homepage3.jpg');">
                        <form action="PHP/changeHomepageBackground.php" method="post" enctype="multipart/form-data" id="homepage3">
                            <input name="bcg1" type="file" class="form-control form-control-user" onchange="changeHomepageBackground(3)">
                            <input name="index" type="hidden" value="3">
                        </form>
                    </div>
                    <div class="col-sm-2">
                        <h6 class="m-0 cs-input-label">Pozadie 4</h6>
                        <img class="admin-picture-sm-12" style="background-image: url('../images/homepage4.jpg');">
                        <form action="PHP/changeHomepageBackground.php" method="post" enctype="multipart/form-data" id="homepage4">
                            <input name="bcg1" type="file" class="form-control form-control-user" onchange="changeHomepageBackground(4)">
                            <input name="index" type="hidden" value="4">
                        </form>
                    </div>
                    <div class="col-sm-2">
                        <h6 class="m-0 cs-input-label">Pozadie 5</h6>
                        <img class="admin-picture-sm-12" style="background-image: url('../images/homepage5.jpg');">
                        <form action="PHP/changeHomepageBackground.php" method="post" enctype="multipart/form-data" id="homepage5">
                            <input name="bcg1" type="file" class="form-control form-control-user" onchange="changeHomepageBackground(5)">
                            <input name="index" type="hidden" value="5">
                        </form>
                    </div>
                    <div class="col-sm-2">
                        <h6 class="m-0 cs-input-label">Pozadie 6</h6>
                        <img class="admin-picture-sm-12" style="background-image: url('../images/homepage6.jpg');">
                        <form action="PHP/changeHomepageBackground.php" method="post" enctype="multipart/form-data" id="homepage6">
                            <input name="bcg1" type="file" class="form-control form-control-user" onchange="changeHomepageBackground(6)">
                            <input name="index" type="hidden" value="6">
                        </form>
                    </div>
                </div>
                <div class="form-group row">
                    <h2 class="text-primary" style="margin-top: 2rem;">Reklamná plocha</h2>
                </div>
                <form class="form-group row" action="PHP/changeAddBackground.php" method="post" enctype="multipart/form-data">
                    <div class="col-sm-2"><label>Odkaz<input name="url" class="form-control form-control-user" type="text"></label></div>
                    <div class="col-sm-4"><label>Obrázok (formátu 2:1)<input name="addbcg" class="form-control form-control-user" type="file"></label></div>
                    <div class="col-sm-1"><button style="margin-top: 25px;" type="submit" class="btn btn-primary cs-header-button desktop">Uložiť</button></div>
                </form>
                <div class="form-group row">
                    <h2 class="text-primary" style="margin-top: 2rem;">Obrázky sponzorov</h2>
                </div>
                <div class="form-group row">
                    <form class="col-sm-6" action="PHP/addSponsors.php" method="post" enctype="multipart/form-data">
                        <label style="width: calc(100% - 110px); float:left;">Pridať sponzorov<input name="photos[]" class="form-control form-control-user" type="file" multiple></label>
                        <button style="margin-top: 25px;" type="submit" class="btn btn-primary cs-header-button desktop">Uložiť</button>
                    </form>
                </div>
                <label>Aktuálny sponzori</label>
                <div class="form-group row">
                    <?php
                    $photos = scandir("sponsors");

                    for ($i = 0; $i < count($photos); $i++) {
                        if (strlen($photos[$i]) > 8)
                            echo "<div onclick=\"deleteSponsor(this, '".$photos[$i]."')\" class='col-sm-2 pb-2'><img style='width:100%;' class=\"\" src=\"sponsors/".$photos[$i]."\"><div class='del'></div></div>";
                    }
                    ?>
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
  <script src="js/customScripts.js"></script>

</body>

</html>
