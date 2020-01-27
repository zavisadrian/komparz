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
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Fotoautorizácia</h1></div>

            <?php
            $IDs = scandir("../Profiles");
            $profiles = [];
            $profilesID = [];

            for($i = 0; $i < count($IDs); $i++) {
                if (file_exists("../Profiles/".$IDs[$i]."/images/polaroidsX")) {
                    $temp = scandir("../Profiles/".$IDs[$i]."/images/polaroidsX");
                    for ($n = 0; $n < count($temp); $n++) {
                        if (strlen($temp[$n]) < 5) unset($temp[$n]);
                    }
                    $temp = array_values($temp);
                    if (strlen($temp[0]) > 0) {
                        array_push($profiles, $temp);
                        array_push($profilesID, $IDs[$i]);
                    }
                }
            }

            for ($n = 0; $n < count($profiles); $n++) {

                if (count($profiles[$n]) <= 1) continue;

                switch (substr($profilesID[$n], 0, 2)){
                    case "01":
                        $prefix = "pr_actor";
                        $kind = "Herci a komparzisti";
                        $kind1 = " hercovi / komparzistovi";
                        break;
                    case "02":
                        $prefix = "pr_creative";
                        $kind = "Kreatívni profesionáli";
                        $kind1 = " kreatívnom profesionálovi";
                        break;
                    case "03":
                        $prefix = "pr_hostess";
                        $kind = "Hostesky / promotéri";
                        $kind1 = " hosteske / promotérovi";
                        break;
                    case "04":
                        $prefix = "pr_model";
                        $kind = "Modelka / model";
                        $kind1 = " modelovi / modelke";
                        break;
                    case "05":
                        $prefix = "pr_foto";
                        $kind = "Fotograf";
                        $kind1 = " fotografovi";
                        break;
                    case "06":
                        $prefix = "pr_agentures";
                        $kind = "Agentúra";
                        $kind1 = " agentúre";
                        break;
                    default:
                        echo "Invalid type of user. You were kicked";
                        die();
                }

                $conn = dbConnect();
                $sql = "SELECT * FROM `".$prefix."` WHERE `ID` = '".$profilesID[$n]."'";
                $res = $conn->query($sql);

                if ($res->num_rows > 0)
                    while ($pr = $res->fetch_assoc())
                        $name = $pr['name']. " " .$pr['surname'];

                echo "<div class=\"container-fluid\"><div class=\"card shadow mb-4\" style='transition: all 0.2s ease;'>
                        <!-- Card Header - Accordion -->
                         <h6 style='padding: 15px 15px 0; box-sizing: border-box;' class=\"m-0 font-weight-bold text-primary\">".$name."</h6>
                              <div class='cs-admin-polaroid-button-main-delete' onclick='disagreeAllPolaroids(this, \"".$profilesID[$n]."\")'><i class=\"fas fa-ban\"></i></div>
                              <div class='cs-admin-polaroid-button-main-show' style='float: right;' onclick='agreeAllPolaroids(this, \"".$profilesID[$n]."\")'><i class=\"fas fa-check\"></i></div>
                        <!-- Card Content - Collapse -->
                        <div class=\"collapse show\" id=\"collapseCardExample\" style=\"width: 100% !important;\">
                            <div class=\"card-body form-group row\" style='padding: 1rem; padding-bottom: 0;'>";
                for ($m = 0; $m < count($profiles[$n]); $m++) {
                    if ($profiles[$n][$m] !== "min")
                    echo "<div class=\"col-sm-1 awaitPhoto\" style='transition: all 0.2s ease; min-width: 8.3333333333%%'>
                              <a style='all: unset;' href='../Profiles/".$profilesID[$n]."/images/polaroidsX/".$profiles[$n][$m]."' target='_blank'><img class=\"cs-card-image\" src=\"../Profiles/".$profilesID[$n]."/images/polaroidsX/min/".$profiles[$n][$m]."\"></a>
                              <div class='cs-admin-polaroid-button-show' onclick=\"agreePolaroid(this, '".$profilesID[$n]."', '".$profiles[$n][$m]."')\"><i class=\"fas fa-check\"></i></div>
                              <div class='cs-admin-polaroid-button-delete' onclick=\"disagreePolaroid(this, '../Profiles/".$profilesID[$n]."/images/polaroidsX/', '".$profiles[$n][$m]."')\"><i class=\"fas fa-ban\"></i></div>
                           </div>";
                }
                echo "</div></div></div></div>";
            }

            ?>
            <!-- DataTales Example -->
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
  <script src="js/customScripts.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
