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
            <img src="../images/spinner.gif" alt="spinner">
            <h2 class="mt-4">Čakajte prosím...</h2>
        </div>

        <section id="profile" style="background-image: url(../images/komparz-banner.jpg);" class="mt-0">
            <form action="../PHP/addProfile.php" method="post" enctype="multipart/form-data" id="edit_acter">
                <div class="container py-7 pt-2 text-center">
                    <div class="row no-gutters">
                        <div class="col-lg-4 col-md-6 mt-3 cropped-image">
                            <label class="mb-0 w-100">
                                <input type="file" name="p001" id="p001" data-section="main" data-unlock="img-container" data-cropimageid="p001" data-aspectratio="<?= 16/9 ?>" class="image-upload-input"/>
                                <div class="cropped-image-overlay"></div>
                                <img id="cropped_p001" src="../images/16x9.jpg" alt="" class="w-100 border-image">
                            </label>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h1>Registrácia<br>Agentúra - Premium účet</h1>
                        </div>
                        <div class="col-lg-3 col-md-6"></div>
                    </div>
                </div>
                <div class="container py-4">
                    <div class="row pb-4" id="form">
                        <div class="col-md-6 pr-md-4 registration-images">
                            <h3>Základné údaje</h3>
                            <div class="row pb-5">
                                <div class="col-6">
                                    <label for="name" class="mb-0 mt-3"><strong>Názov spoločnosti</strong></label>
                                    <input type="text" class="registration-input" name="name" data-necessary="text"/>
                                    <input type="hidden" class="registration-input" name="type" value="agenture"/>
                                </div>
                                <div class="col-6">
                                    <label for="ico" class="mb-0 mt-3"><strong>IČO</strong></label>
                                    <input type="text" class="registration-input" name="ico" data-necessary="text"/>
                                </div>
                                <div class="col-6">
                                    <label for="dic" class="mb-0 mt-3"><strong>DIČ</strong></label>
                                    <input type="text" class="registration-input" name="dic" data-necessary="text"/>
                                </div>
                                <div class="col-6">
                                    <label for="icdph" class="mb-0 mt-3"><strong>IČ DPH</strong></label>
                                    <input type="text" class="registration-input" name="icdph"/>
                                </div>
                                <div class="col-6">
                                    <label for="password" class="mb-0 mt-3"><strong>Heslo</strong></label>
                                    <input id="pass1" type="password" class="registration-input" name="password" data-necessary="text"/>
                                </div>
                                <div class="col-6">
                                    <label for="password_confirm" class="mb-0 mt-3"><strong>Potvrďte heslo</strong></label>
                                    <input id="pass2" type="password" class="registration-input" name="password_confirm" data-necessary="text"/>
                                </div>
                            </div>
                            <h3>Kategória</h3>
                            <div class="row pb-5">
                                <div class="col-12">
                                    <label for="category" class="mb-0 mt-3"><strong>Prosím vyberte jednu z možností</strong></label>
                                    <select name="category" id="category" class="filter" data-placeholder="Prosím vyberte jednu z možností" data-necessary="text">
                                        <option value=""></option>
                                        <option value="modeling_agency">Modelingové agentúry</option>
                                        <option value="casting">Castingove a eventové agentúry</option>
                                        <option value="tv">Reklamné produkcie, TV produkcie, TV Média a iné...</option>
                                    </select>
                                </div>
                            </div>
                            <h3>Kontakt</h3>
                            <div class="row pb-5">
                                <div class="col-6">
                                    <label for="email" class="mb-0 mt-3"><strong>E-mail</strong></label>
                                    <input id="email" type="text" class="registration-input" name="email" data-necessary="text"/>
                                </div>
                                <div class="col-6">
                                    <label for="phone" class="mb-0 mt-3"><strong>Telefón</strong></label>
                                    <input type="text" class="registration-input" name="phone" data-necessary="text"/>
                                </div>
                                <div class="col-6">
                                    <label for="web" class="mb-0 mt-3"><strong>Web</strong></label>
                                    <input type="text" class="registration-input" name="web"/>
                                </div>
                                <div class="col-6">
                                    <label for="conemail" class="mb-0 mt-3"><strong>Kontaktný e-mail pre správy</strong></label>
                                    <input type="text" class="registration-input" name="conemail" data-necessary="text"/>
                                </div>
                            </div>
                            <h3>Logo</h3>
                            <div class="row pb-5 mt-3 no-gutters">
                                <div class="col-md-6 col-12 cropped-image">
                                    <label class="mb-0 w-100">
                                        <input type="file" name="logo" id="logo" data-section="main" data-unlock="img-container" data-cropimageid="logo" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                        <div class="cropped-image-overlay"></div>
                                        <img id="cropped_logo" src="../images/540x540.jpg" alt="" class="w-100 border-image">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>Adresa</h3>
                            <div class="row pb-5">
                                <div class="col-6">
                                    <label for="street" class="mb-0 mt-3"><strong>Ulica</strong></label>
                                    <input type="text" class="registration-input" name="street" data-necessary="text"/>
                                </div>
                                <div class="col-6">
                                    <label for="city" class="mb-0 mt-3"><strong>Mesto</strong></label>
                                    <input type="text" class="registration-input" name="city" data-necessary="text"/>
                                </div>
                                <div class="col-6">
                                    <label for="region" class="mb-0 mt-3"><strong>Kraj</strong></label>
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
                                    <label for="zip_code" class="mb-0 mt-3"><strong>PSČ</strong></label>
                                    <input type="text" class="registration-input" name="postcode" data-necessary="text"/>
                                </div>
                            </div>
                            <h3>Sociálne siete</h3>
                            <div class="row pb-5">
                                <div class="col-12">
                                    <label for="fb" class="mb-0 mt-3"><strong>Facebook</strong></label>
                                    <input type="text" class="registration-input" name="fb"/>
                                </div>
                                <div class="col-12">
                                    <label for="ig" class="mb-0 mt-3"><strong>Instagram</strong></label>
                                    <input type="text" class="registration-input" name="ig"/>
                                </div>
                            </div>
                            <h3>Otváracie hodiny</h3>
                            <div class="row pb-5">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox pb-1">
                                        <input type="checkbox" class="custom-control-input" id="monday" value="Pondelok" name="op1">
                                        <label class="custom-control-label " for="monday">Pondelok</label>
                                    </div>
                                    <input type="text" class="registration-input" name="op1t"/>
                                </div>
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox pb-1">
                                        <input type="checkbox" class="custom-control-input" id="tuesday" value="Utorok" name="op2">
                                        <label class="custom-control-label " for="tuesday">Utorok</label>
                                    </div>
                                    <input type="text" class="registration-input" name="op2t"/>
                                </div>
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox pb-1">
                                        <input type="checkbox" class="custom-control-input" id="wednesday" value="Streda" name="op3">
                                        <label class="custom-control-label " for="wednesday">Streda</label>
                                    </div>
                                    <input type="text" class="registration-input" name="op3t"/>
                                </div>
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox pb-1">
                                        <input type="checkbox" class="custom-control-input" id="thursday" value="Štvrtok" name="op4">
                                        <label class="custom-control-label " for="thursday">Štvrtok</label>
                                    </div>
                                    <input type="text" class="registration-input" name="op4t"/>
                                </div>
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox pb-1">
                                        <input type="checkbox" class="custom-control-input" id="friday" value="Piatok" name="op5">
                                        <label class="custom-control-label " for="friday">Piatok</label>
                                    </div>
                                    <input type="text" class="registration-input" name="op5t"/>
                                </div>
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox pb-1">
                                        <input type="checkbox" class="custom-control-input" id="saturday" value="Sobota" name="op6">
                                        <label class="custom-control-label " for="saturday">Sobota</label>
                                    </div>
                                    <input type="text" class="registration-input" name="op6t"/>
                                </div>
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox pb-1">
                                        <input type="checkbox" class="custom-control-input" id="sunday" value="Nedeľa" name="op7">
                                        <label class="custom-control-label " for="sunday">Nedeľa</label>
                                    </div>
                                    <input type="text" class="registration-input" name="op7t"/>
                                </div>
                            </div>
                            <h3>Biografia</h3>
                            <div class="row pb-5">
                                <div class="col-md-12 text-center">
                                    <textarea name="bio" id="about" rows="7" maxlength="255"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Úspechy</h3>
                    <div class="row mt-3 tabs photos">
                        <div class="col-md col-6 order-1 order-md-1 pt-md-0 pt-3 px-1 pb-2 pb-md-0">

                            <div class="cropped-image mb-2">
                                <label class="mb-0 w-100">
                                    <input type="file" name="suc1" id="suc1" data-section="main" data-unlock="p013" data-cropimageid="suc1" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_suc1" src="../images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                            <textarea rows="2" class="registration-input mt-0" name="suc1_text" placeholder="Popis" maxlength="50"></textarea>
                            <input type="text" class="registration-input mb-4 mt-0" name="suc1_link" placeholder="Link" />

                            <div class="cropped-image">
                                <label class="mb-0 w-100">
                                    <input type="file" name="suc2" id="suc2" data-section="main" data-cropimageid="suc2" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_suc2" src="../images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                            <textarea rows="2" class="registration-input mt-2" name="suc2_text" placeholder="Popis" maxlength="50"></textarea>
                            <input type="text" class="registration-input mb-4 mt-0" name="suc2_link" placeholder="Link"/>

                        </div>
                        <div class="col-md col-6 order-3 order-md-2 px-1">

                            <div class="cropped-image mb-2">
                                <label class="mb-0 w-100">
                                    <input type="file" name="suc3" id="suc3" data-section="main" data-unlock="p014" data-cropimageid="suc3" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_suc3" src="../images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                            <textarea rows="2" class="registration-input mt-0" name="suc3_text" placeholder="Popis" maxlength="50"></textarea>
                            <input type="text" class="registration-input mb-4 mt-0" name="suc3_link" placeholder="Link" />

                            <div class="cropped-image">
                                <label class="mb-0 w-100">
                                    <input type="file" name="suc4" id="suc4" data-section="main" data-unlock="p018" data-cropimageid="suc4" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_suc4" src="../images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                            <textarea rows="2" class="registration-input mt-2" name="suc4_text" placeholder="Popis" maxlength="50"></textarea>
                            <input type="text" class="registration-input mb-4 mt-0" name="suc4_link" placeholder="Link" />

                        </div>
                        <div class="col-md col-6 order-2 order-md-3 pt-md-0 pt-3 px-1 pb-2 pb-md-0">

                            <div class="cropped-image mb-2">
                                <label class="mb-0 w-100">
                                    <input type="file" name="suc5" id="suc5" data-section="main" data-unlock="p015" data-cropimageid="suc5" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_suc5" src="../images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                            <textarea rows="2" class="registration-input mt-0" name="suc5_text" placeholder="Popis" maxlength="50"></textarea>
                            <input type="text" class="registration-input mb-4 mt-0" name="suc5_link" placeholder="Link" />

                            <div class="cropped-image">
                                <label class="mb-0 w-100">
                                    <input type="file" name="suc6" id="suc6" data-section="main" data-unlock="suc8" data-cropimageid="suc6" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_suc6" src="../images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                            <textarea rows="2" class="registration-input mt-2" name="suc6_text" placeholder="Popis" maxlength="50"></textarea>
                            <input type="text" class="registration-input mb-4 mt-0" name="suc6_link" placeholder="Link" />

                        </div>
                        <div class="col-md col-6 order-2 order-md-3 pt-md-0 pt-3 px-1 pb-2 pb-md-0">
                            <div class="cropped-image mb-2">
                                <label class="mb-0 w-100">
                                    <input type="file" name="suc7" id="suc7" data-section="main" data-unlock="suc7" data-cropimageid="suc7" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_suc7" src="../images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                            <textarea rows="2" class="registration-input mt-0" name="suc7_text" placeholder="Popis" maxlength="50"></textarea>
                            <input type="text" class="registration-input mb-4 mt-0" name="suc7_link" placeholder="Link" />

                            <div class="cropped-image">
                                <label class="mb-0 w-100">
                                    <input type="file" name="suc8" id="suc8" data-section="main" data-unlock="suc8" data-cropimageid="suc8" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_suc8" src="../images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                            <textarea rows="2" class="registration-input mt-2" name="suc8_text" placeholder="Popis" maxlength="50"></textarea>
                            <input type="text" class="registration-input mb-4 mt-0" name="suc8_link" placeholder="Link" />

                        </div>
                        <div class="col-md col-6 order-4 order-md-4 px-1">

                            <div class="cropped-image mb-2">
                                <label class="mb-0 w-100">
                                    <input type="file" name="suc9" id="suc9" data-section="main" data-unlock="suc9" data-cropimageid="suc9" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_suc9" src="../images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                            <textarea rows="2" class="registration-input mt-0" name="suc9_text" placeholder="Popis" maxlength="50"></textarea>
                            <input type="text" class="registration-input mb-4 mt-0" name="suc9_link" placeholder="Link" />

                            <div class="cropped-image">
                                <label class="mb-0 w-100">
                                    <input type="file" name="suc10" id="suc10" data-section="main" data-unlock="p021" data-cropimageid="suc10" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                    <div class="cropped-image-overlay"></div>
                                    <img id="cropped_suc10" src="../images/540x540.jpg" alt="" class="w-100">
                                </label>
                            </div>
                            <textarea rows="2" class="registration-input mt-2" name="suc10_text" placeholder="Popis" maxlength="50"></textarea>
                            <input type="text" class="registration-input mb-4 mt-0" name="suc10_link" placeholder="Link" />
                        </div>
                    </div>
                    <div class="row pb-5">
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
