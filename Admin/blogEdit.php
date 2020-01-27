<?php
require "../Libary/Weblibary.php";

require "header.php";
?>

    <!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <style>
        .pd-0 { padding: 0 !important; }
    </style>

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar static-top cs-navbar-expand" style="height: 1.375rem; background-color: #f8f9fc;"></nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Editácia článkov v blogu</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary cs-header-headline-withinput orangeText">Všetky články</h6>
                    <input class="form-control form-control-user cs-header-input" id="exampleInputPassword" placeholder="Filter keyword" onkeyup="filterTableKeyword(document.getElementById('resultTable'), this.value)">
                    <a class="unset" href="form_addBlog.php"><button class="btn btn-primary cs-header-button desktop" type="button">Create new</button></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="resultTable" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <?php
                            $conn = dbConnect("mysql80.websupport.sk", "komparztvtest", "Prasavlese.9458", "komparztvtest");

                            $sql = "SELECT * FROM `blog`";

                            $result = $conn->query($sql);

                            echo "
                    <tr>
                        <th>ID</th>
                        <th>Nadpis</th>
                        <th>Hlavný text</th>
                        <th>Obrázok</th>
                        <th>Dátum vytvorenia</th>
                        <th>Operácie</th>
                    </tr>
                    ";

                            while($row = $result->fetch_assoc()) {
                                echo " 
                            <tr class='cs-table-row'>
                                <td>".$row['ID']."</td>
                                <td>".$row['headline']."</td>
                                <td>".substr($row['mainText'], 0, 40)."...</td>
                                <td style='text-align: center'><a style='all: unset' href='../Blog/".$row['htmlContent']."/blog.jpg' target='_blank'><img src='../Blog/".$row['htmlContent']."/blog.jpg' style='width: 37px;'></a></td>
                                <td>".$row['createDate']."</td>
                                <td style='padding: 5px;'>
                                
                                    <a href=\"PHP/deleteBlog.php?ID=".$row['htmlContent']."\" class=\"pd-0 btn btn-icon-split\" style='transform: scale(0.8); background-color: #e74a3b; border-color: #e74a3b; float: right;'>
                                    <span class=\"icon text-white-50\" style = 'color: rgba(255, 255, 255, 0.7)!important;'>
                                            <i class=\"fas fa-trash\"></i>
                                        </span>
                                        <span class=\"text\" style = 'color: white;'>Delete</span>
                                    </a>
                                
                                    <a href=\"form_editBlog.php?ID=".$row['htmlContent']."\" class=\"pd-0 btn btn-icon-split\" style='transform: scale(0.8); background-color: #f6c23e; border-color: #f6c23e; float: right;'>
                                        <span class=\"icon text-white-50\" style='color: rgba(255, 255, 255, 0.7)!important;'>
                                            <i class=\"fas fa-arrow-right\"></i>
                                        </span>
                                        <span class=\"text\" style='color: white;'>Edit</span>
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
