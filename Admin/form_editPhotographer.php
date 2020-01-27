<?php
require "../Libary/Weblibary.php";

require "header.php";

$_POST['ID'] = $_REQUEST['ID'];
require "../PHP/initializeProfile.php";
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
            <h1 class="h3 mb-2 text-gray-800">Pridať fotografa</h1>
            <!-- DataTales Example -->
            <form class="card shadow mb-4" action="PHP/addProfile.php" method="post" enctype="multipart/form-data" style="transform: scale(1); transform-origin: top; transition: all 0.35s cubic-bezier(0.25, 0.1, 0.28, 1.29);" onsubmit="checkData(this)">
                <div class="card-header py-3">

                    <input name="type" type="hidden" value="photographer">
                    <input name="RURL" type="hidden" value="../successMessage.php?message=dáta%20úspešne%20uploadované"> <!--RURL-->

                    <div class="form-group row">
                        <div class="col-sm-5">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Meno</h6>
                            <input name="pr_name" type="text" class="form-control form-control-user" placeholder="Peter" pattern=".{3,}" value="<?php echo $name; ?>">
                        </div>

                        <div class="col-sm-5">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Priezvisko</h6>
                            <input name="pr_surname" type="text" class="form-control form-control-user" placeholder="Krajsky" pattern=".{3,}" value="<?php echo $surname; ?>">
                        </div>

                        <div class="col-sm-2">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Pohlavie</h6>
                            <select name="gender" class="form-control form-control-user">
                                <option value="Muž" <?php if ($gender == "Muž") echo "selected"; ?>>Muž</option>
                                <option value="Žena" <?php if ($gender == "Žena") echo "selected"; ?>>Žena</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">E-mail</h6>
                            <input name="mail" type="email" class="form-control form-control-user" placeholder="krajskypeter@gmail.com" pattern="[@.A-Za-z0-9]*" value="<?php echo $mail; ?>">
                        </div>

                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Heslo</h6>
                            <input name="password" type="password" class="form-control form-control-user" placeholder="" pattern=".{8,}" title="Heslo nemôžeš meniť v tomto prostredí" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Telefón</h6>
                            <input name="phone" type="text" class="form-control form-control-user" placeholder="+421 999 000 999" pattern=".{9, 14}" value="<?php echo $phone; ?>">
                        </div>

                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Ulica</h6>
                            <input name="street" type="text" class="form-control form-control-user" placeholder="Kremická 22" pattern=".{5,}" value="<?php echo $street; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Mesto</h6>
                            <input name="city" type="text" class="form-control form-control-user" placeholder="Stupava" pattern=".{5,}" value="<?php echo $city; ?>">
                        </div>

                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">PSČ</h6>
                            <input name="postcode" type="text" class="form-control form-control-user" placeholder="90833" pattern=".{5,5}" value="<?php echo $postcode; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Kraj</h6>
                            <select name="region" class="form-control form-control-user">
                                <option <?php if ($region == "Bratislavský") echo "selected"; ?>>Bratislavský</option>
                                <option <?php if ($region == "Nitrianský") echo "selected"; ?>>Nitrianský</option>
                                <option <?php if ($region == "Trnavský") echo "selected"; ?>>Trnavský</option>
                                <option <?php if ($region == "Trenčiansky") echo "selected"; ?>>Trenčiansky</option>
                                <option <?php if ($region == "Košický") echo "selected"; ?>>Košický</option>
                                <option <?php if ($region == "Bánskobystrický") echo "selected"; ?>>Bánskobystrický</option>
                                <option <?php if ($region == "Prešovský") echo "selected"; ?>>Prešovský</option>
                                <option <?php if ($region == "Žilinský") echo "selected"; ?>>Žilinský</option>
                                <option <?php if ($region == "Iný") echo "selected"; ?>>Iný</option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Profilová fotografia</h6>
                            <div class="form-control form-control-user overflowHidden">
                                <input name="profilePhoto" type="file" class="cs-input-type-f" title="Fotku nemôžeš meniť v tomto prostredí" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Štúdio - ulica</h6>
                            <input name="studio_street" type="text" class="form-control form-control-user" placeholder="Kremská 21" pattern=".{4,}" value="<?php echo $studio_street; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Štúdio - mesto</h6>
                            <input name="studio_city" type="text" class="form-control form-control-user" placeholder="Stupava" pattern=".{4,}" value="<?php echo $studio_city; ?>">
                        </div>

                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Štúdio - PSČ</h6>
                            <input name="studio_postcode" type="text" class="form-control form-control-user" placeholder="90221" pattern=".{5,5}" value="<?php echo $studio_postcode; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Štúdio - kraj</h6>
                            <select name="region" class="form-control form-control-user">
                                <option <?php if ($region == "Bratislavský") echo "selected"; ?>>Bratislavský</option>
                                <option <?php if ($region == "Nitrianský") echo "selected"; ?>>Nitrianský</option>
                                <option <?php if ($region == "Trnavský") echo "selected"; ?>>Trnavský</option>
                                <option <?php if ($region == "Trenčiansky") echo "selected"; ?>>Trenčiansky</option>
                                <option <?php if ($region == "Košický") echo "selected"; ?>>Košický</option>
                                <option <?php if ($region == "Bánskobystrický") echo "selected"; ?>>Bánskobystrický</option>
                                <option <?php if ($region == "Prešovský") echo "selected"; ?>>Prešovský</option>
                                <option <?php if ($region == "Žilinský") echo "selected"; ?>>Žilinský</option>
                                <option <?php if ($region == "Iný") echo "selected"; ?>>Iný</option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Webstránka</h6>
                            <input name="web" type="text" class="form-control form-control-user" placeholder="www.example.com" value="<?php echo $web; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Facebook link</h6>
                            <input name="fb" type="text" class="form-control form-control-user" placeholder="facebook.com/example" value="<?php echo $fb; ?>">
                        </div>

                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Instagram link</h6>
                            <input name="ig" type="text" class="form-control form-control-user" placeholder="instagram.com/example" value="<?php echo $ig; ?>">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <h6 class="m-0 font-weight-bold text-primary cs-input-label">Bio</h6>
                        <textarea name="bio" class="form-control form-control-user" placeholder="Čo chceš o sebe verejne napísať?"><?php echo $bio; ?></textarea>
                    </div>

                    <button class="btn btn-success btn-icon-split" style="float: right; transform: scale(0.8); margin: 10px -18px 0 0;" type="submit">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Pridať člena</span>
                    </button>

                    <button onclick="history.go(-1)" class="btn btn-warning btn-icon-split" style="float: left; transform: scale(0.8); margin: 10px 0 0 -13px;">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">Naspäť</span>
                    </button>
                </div>
            </form>
            <!--Uploading window-->
            <div class="card shadow mb-4" style="text-align: center; display: none; transition: all 0.35s cubic-bezier(0.25, 0.1, 0.28, 1.29); height: 170px;" id="loading">
                <h5 style="margin: 30px">Prebieha upload dát</h5>
                <div class="cs-lds-circle"><i class="far fa-arrow-alt-circle-up" style="color: #e18b1cb0;"></i></div>
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
