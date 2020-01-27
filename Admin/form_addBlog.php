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
            <h1 class="h3 mb-2 text-gray-800">Pridať nový blog</h1>
            <!-- DataTales Example -->
            <form class="card shadow mb-4" action="PHP/saveBlog.php" method="post" enctype="multipart/form-data">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary cs-input-label">Nadpis</h6>
                    <input name="headline" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="AKO NA TO?!...">

                    <h6 class="m-0 font-weight-bold text-primary cs-input-label">Hlavný text</h6>
                    <input name="mainText" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Tento článok slúži na pochopenie ako na...">

                    <h6 class="m-0 font-weight-bold text-primary cs-input-label">Obrázok</h6>
                    <div class="custom-file text-center cropped-image">
                        <label class="custom-file-label text-left" for="file">
                            <span>Fotografia</span>
                            <input type="file" data-section="main" name="castingImage" id="file" data-unlock="p011" data-cropimageid="file" data-aspectratio="<?= 16/9 ?>" class="image-upload-input custom-file-input"/>
                        </label>
                        <input type="hidden" id="croppedImages" name="croppedImages">
                    </div>

                    <h6 class="m-0 font-weight-bold text-primary cs-input-label">Obsah</h6>
                    <textarea data-editor="true" name="html" class="w-100"></textarea>
                    <button type="submit" class="btn btn-success btn-icon-split" style="float: right; transform: scale(0.8); margin: 10px -18px 0 0;">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Publikovať článok</span>
                    </button>
                    <button onclick="history.go(-1)" class="btn btn-warning btn-icon-split" style="float: left; transform: scale(0.8); margin: 10px 0 0 -13px;">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">Naspäť</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="overlay-crop js" style="z-index: 2000 !important;">
    <div class="modal-crop" id="modal-crop">
        <div class="content">
            <div class="image_container">
                <img id="crop" src="#" alt="your image"/>
            </div>
            <button id="crop_button" class="btn btn-primary w-100">Crop</button>
        </div>
    </div>
</div>
<script src="js/app.js?v=11"></script>
</body>

</html>
