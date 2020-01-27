<?php
require "../Libary/Weblibary.php";

require "header.php";
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="wait-screen align-items-center justify-content-center flex-column" style="display: none;">
            <img src="../../images/spinner.gif" alt="spinner">
            <h2 class="mt-4">Čakajte prosím...</h2>
        </div>

        <section id="profile" style="background-image: url(../../images/komparz-banner.jpg);" class="mt-0">
            <form action="../PHP/addProfile.php" method="post" enctype="multipart/form-data" id="form">
                <div class="container py-7 pt-2 text-center">
                    <div class="row no-gutters">
                        <div class="col-lg-3 col-md-6 mt-3 cropped-image">
                            <label class="mb-0 w-100">
                                <input type="file" name="p001" id="p001" data-section="main" data-unlock="img-container" data-cropimageid="p001" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                <div class="cropped-image-overlay"></div>
                                <img id="cropped_p001" src="../images/540x540.jpg" alt="" class="w-100 border-image">
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h1>Registrácia<br>Kreatívny profesionál</h1>
                        </div>
                        <div class="col-lg-3 col-md-6"></div>
                    </div>
                </div>
                <div class="container py-4">
                    <div class="row pb-4">
                        <div class="col-md-6 pr-md-4 registration-images">
                            <div class="img-container">
                                <div class="cropped-image main-image photos disabled">
                                    <label class="mb-0 w-100">
                                        <input disabled type="file" name="p011" id="p011" data-section="main" data-unlock="photos" data-cropimageid="p011" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                        <div class="cropped-image-overlay"></div>
                                        <img id="cropped_p011" src="../images/540x540.jpg" alt="" class="w-100">
                                    </label>
                                </div>
                                <div class="cropped-image main-image photobooks disabled" style="display: none;">
                                    <label class="mb-0 w-100">
                                        <input disabled type="file" name="p021" id="p021" data-section="main" data-unlock="photobooks" data-cropimageid="p021" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                        <div class="cropped-image-overlay"></div>
                                        <img id="cropped_p021" src="../images/540x540.jpg" alt="" class="w-100">
                                    </label>
                                </div>
                                <div class="cropped-image main-image polaroids disabled" style="display: none;">
                                    <label class="mb-0 w-100">
                                        <input disabled type="file" name="p031" id="p031" data-section="main" data-unlock="polaroids" data-cropimageid="p031" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                        <div class="cropped-image-overlay"></div>
                                        <img id="cropped_p031" src="../images/540x540.jpg" alt="" class="w-100">
                                    </label>
                                </div>
                            </div>
                            <div class="row profile-btns registration">
                                <div class="col-4 pr-0">
                                    <a href="" class="btn w-100 btn-secondary btn-active" data-changetype="photos">fotografie</a>
                                </div>
                                <div class="col-4 px-0">
                                    <a href="" class="btn w-100 btn-secondary" data-changetype="photobooks">fotobooky</a>
                                </div>
                                <div class="col-4 pl-0">
                                    <a href="" class="btn w-100 btn-quaternary" data-changetype="polaroids">polaroidy</a>
                                </div>
                            </div>
                            <div class="row tabs photos">
                                <div class="col-md-3 col-6 order-1 order-md-1 pt-md-0 pt-3 px-1 pb-2 pb-md-0">
                                    <div class="cropped-image mb-2 disabled">
                                        <label class="mb-0 w-100">
                                            <input disabled type="file" name="p012" id="p012" data-section="main" data-unlock="p013" data-cropimageid="p012" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                            <div class="cropped-image-overlay"></div>
                                            <img id="cropped_p012" src="../images/540x540.jpg" alt="" class="w-100">
                                        </label>
                                    </div>
                                    <div class="cropped-image disabled">
                                        <label class="mb-0 w-100">
                                            <input disabled type="file" name="p016" id="p016" data-section="main" data-unlock="p017" data-cropimageid="p016" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                            <div class="cropped-image-overlay"></div>
                                            <img id="cropped_p016" src="../images/540x540.jpg" alt="" class="w-100">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 order-3 order-md-2 px-1">
                                    <div class="cropped-image mb-2 disabled">
                                        <label class="mb-0 w-100">
                                            <input disabled type="file" name="p013" id="p013" data-section="main" data-unlock="p014" data-cropimageid="p013" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                            <div class="cropped-image-overlay"></div>
                                            <img id="cropped_p013" src="../images/540x540.jpg" alt="" class="w-100">
                                        </label>
                                    </div>
                                    <div class="cropped-image disabled">
                                        <label class="mb-0 w-100">
                                            <input disabled type="file" name="p017" id="p017" data-section="main" data-unlock="p018" data-cropimageid="p017" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                            <div class="cropped-image-overlay"></div>
                                            <img id="cropped_p017" src="../images/540x540.jpg" alt="" class="w-100">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 order-2 order-md-3 pt-md-0 pt-3 px-1 pb-2 pb-md-0">
                                    <div class="cropped-image mb-2 disabled">
                                        <label class="mb-0 w-100">
                                            <input disabled type="file" name="p014" id="p014" data-section="main" data-unlock="p015" data-cropimageid="p014" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                            <div class="cropped-image-overlay"></div>
                                            <img id="cropped_p014" src="../images/540x540.jpg" alt="" class="w-100">
                                        </label>
                                    </div>
                                    <div class="cropped-image disabled">
                                        <label class="mb-0 w-100">
                                            <input disabled type="file" name="p018" id="p018" data-section="main" data-unlock="p019" data-cropimageid="p018" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                            <div class="cropped-image-overlay"></div>
                                            <img id="cropped_p018" src="../images/540x540.jpg" alt="" class="w-100">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 order-4 order-md-4 px-1">
                                    <div class="cropped-image mb-2 disabled">
                                        <label class="mb-0 w-100">
                                            <input disabled type="file" name="p015" id="p015" data-section="main" data-unlock="p016" data-cropimageid="p015" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                            <div class="cropped-image-overlay"></div>
                                            <img id="cropped_p015" src="../images/540x540.jpg" alt="" class="w-100">
                                        </label>
                                    </div>
                                    <div class="cropped-image disabled">
                                        <label class="mb-0 w-100">
                                            <input disabled type="file" name="p019" id="p019" data-section="main" data-unlock="p021" data-cropimageid="p019" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                            <div class="cropped-image-overlay"></div>
                                            <img id="cropped_p019" src="../images/540x540.jpg" alt="" class="w-100">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 form-group order-5 mt-3 px-1">
                                    <h6 class="m-0 font-weight-bold text-primary cs-input-label">Pridať ďalšie fotofrafie do Fotografie</h6>
                                    <div class="form-control form-control-user overflowHidden">
                                        <input name="photos[]" type="file" class="cs-input-type-mf" multiple="" placeholder="Pridať ďalšie fotografie">
                                        <div class="cs-input-type-f-erase" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters tabs photobooks" style="display: none">
                                <div class="col-12 form-group order-5 mt-3 px-1">
                                    <h6 class="m-0 font-weight-bold text-primary cs-input-label">Pridať ďalšie fotofrafie do Fotobooky</h6>
                                    <div class="form-control form-control-user overflowHidden">
                                        <input name="photobooks[]" type="file" class="cs-input-type-mf" multiple="" placeholder="Pridať ďalšie fotografie">
                                        <div class="cs-input-type-f-erase" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters tabs polaroids" style="display: none">
                                <div class="col-12 form-group order-5 mt-3 px-1">
                                    <h6 class="m-0 font-weight-bold text-primary cs-input-label">Pridať ďalšie fotofrafie do Polaroidy</h6>
                                    <div class="form-control form-control-user overflowHidden">
                                        <input name="polaroids[]" type="file" class="cs-input-type-mf" multiple="" placeholder="Pridať ďalšie fotografie">
                                        <div class="cs-input-type-f-erase" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" id="form">
                            <div class="">
                                <h3>Informácie o Kreatívnom profesionálovi</h3>
                                <div class="row pt-4">
                                    <div class="col-6">
                                        <label for="name" class="mb-0 mt-3"><strong>Meno</strong> *</label>
                                        <input type="text" class="registration-input" name="name" data-necessary="text"/>
                                        <input type="hidden" class="registration-input" name="type" value="creative"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="surname" class="mb-0 mt-3"><strong>Priezvisko</strong> *</label>
                                        <input type="text" class="registration-input" name="surname" data-necessary="text"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="gender" class="mb-0 mt-3"><strong>Pohlavie </strong> *</label>
                                        <select name="gender" id="gender" class="filter" data-placeholder="Pohlavie" data-necessary="text">
                                            <option value=""></option>
                                            <option value="Muž">Muž</option>
                                            <option value="Žena">Žena</option>
                                            <option value="Iné">Iné</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="category" class="mb-0 mt-3"><strong>Kategória</strong> *</label>
                                        <select name="category" id="category" class="filter" data-placeholder="Kategória" data-necessary="text">
                                            <option value=""></option>
                                            <option value="barber">Barber</option>
                                            <option value="hair_stylist">Vlasový stylista</option>
                                            <option value="make_up">Make-up Artist</option>
                                            <option value="fashion_stylist">Módny stylista</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="mb-0 mt-3"><strong>E-mail</strong> *</label>
                                        <input id="email" type="text" class="registration-input" name="mail" data-necessary="text"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="password" class="mb-0 mt-3"><strong>Heslo</strong> *</label>
                                        <input id="pass1" type="password" class="registration-input" name="password" data-necessary="text"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="password_confirm" class="mb-0 mt-3"><strong>Potvrďte heslo</strong> *</label>
                                        <input id="pass2" type="password" class="registration-input" name="password_confirm" data-necessary="text"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="phone" class="mb-0 mt-3"><strong>Telefón</strong> *</label>
                                        <input type="text" class="registration-input" name="phone" data-necessary="text"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="facebook" class="mb-0 mt-3"><strong>Facebook</strong> *</label>
                                        <input type="text" class="registration-input" name="fb" data-necessary="text"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="instagram" class="mb-0 mt-3"><strong>Instagram</strong> *</label>
                                        <input type="text" class="registration-input" name="ig" data-necessary="text"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="web" class="mb-0 mt-3"><strong>Web</strong></label>
                                        <input type="text" class="registration-input" name="web"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="street" class="mb-0 mt-3"><strong>Ulica</strong> *</label>
                                        <input type="text" class="registration-input" name="street" data-necessary="text"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="city" class="mb-0 mt-3"><strong>Mesto</strong *></label>
                                        <input type="text" class="registration-input" name="city" data-necessary="text"/>
                                    </div>
                                    <div class="col-6">
                                        <label for="region" class="mb-0 mt-3"><strong>Kraj</strong> *</label>
                                        <select name="region" id="region" class="filter" data-placeholder="Kraj" data-necessary="text">
                                            <option value=""></option>
                                            <option value="Bratislavský">Bratislavský</option>
                                            <option value="Trnavský">Trnavský</option>
                                            <option value="Trenčianský">Trenčianský</option>
                                            <option value="Nitrianský">Nitrianský</option>
                                            <option value="Žilinský">Žilinský</option>
                                            <option value="Bánskobystrický">Bánskobystrický</option>
                                            <option value="Prešovský">Prešovský</option>
                                            <option value="Košický">Košický</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="zip_code" class="mb-0 mt-3"><strong>PSČ</strong> *</label>
                                        <input type="text" class="registration-input" name="postcode" data-necessary="text"/>
                                    </div>
                                    <div class="col-12">
                                        <label class="d-block mb-0 mt-3"><strong>Informácie o mne</strong></label>
                                        <textarea name="bio" id="about" rows="7" maxlength="255"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p>
                                Súhlasím so spracovaním a so zverejnením osobných údajov na webovej stránke www.komparz.tv a oboznámil
                                som sa s podmienkami spracúvania osobných údajov. Podmienky nájdete <a href="privacy.php" target="_blank">tu</a>.
                            </p>
                        </div>
                        <div class="col-md-12 text-center">
                            <input type="checkbox" class="text-center" id="acceptation">
                        </div>
                        <div class="col-md-12 text-center">
                            <input type="hidden" id="croppedImages" name="croppedImages">
                            <input type="submit" class="btn btn-primary w-50 my-4" value="registovať sa" />
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <div class="overlay-crop js">
            <div class="modal-crop" id="modal-crop">
                <div class="content">
                    <div class="image_container">
                        <img id="crop" src="#" alt="your image"/>
                    </div>
                    <button id="crop_button" class="btn btn-primary w-100">Crop</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../js/app.js?v=11"></script>
<script src="../js/jQuery.js"></script>
<script src="../js/customScript.js?v=11"></script>

</body>

</html>
