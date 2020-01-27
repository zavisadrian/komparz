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
            <h1 class="h3 mb-2 text-gray-800">Pridať herca/ komparzistu</h1>
            <!-- DataTales Example -->
            <form class="card shadow mb-4" action="PHP/addProfile.php" method="post" enctype="multipart/form-data" style="transform: scale(1); transform-origin: top; transition: all 0.35s cubic-bezier(0.25, 0.1, 0.28, 1.29);" onsubmit="checkData(this)">
                <div class="card-header py-3">

                    <input name="type" type="hidden" value="hostess">
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
                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Zamestnanie / Škola</h6>
                            <input name="work" type="text" class="form-control form-control-user" placeholder="FEI STU Bratislava - API" pattern=".{4,}" value="<?php echo $work; ?>">
                        </div>

                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Národnosť</h6>
                            <select name="nationality" class="form-control form-control-user">
                                <option <?php if ($nationality == "Slovenská") echo "selected"; ?>>Slovenská</option>
                                <option <?php if ($nationality == "Česká") echo "selected"; ?>>Česká</option>
                                <option <?php if ($nationality == "Maďarská") echo "selected"; ?>>Maďarská</option>
                                <option <?php if ($nationality == "Polská") echo "selected"; ?>>Polská</option>
                                <option <?php if ($nationality == "Nemecká") echo "selected"; ?>>Nemecká</option>
                                <option <?php if ($nationality == "Slovinská") echo "selected"; ?>>Slovinská</option>
                                <option <?php if ($nationality == "Francúzska") echo "selected"; ?>>Francúzska</option>
                                <option <?php if ($nationality == "Talianská") echo "selected"; ?>>Talianská</option>
                                <option <?php if ($nationality == "Španielská") echo "selected"; ?>>Španielská</option>
                                <option <?php if ($nationality == "Chorvátská") echo "selected"; ?>>Chorvátská</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Dátum narodenia</h6>
                            <input name="date_of_birth" type="date" class="form-control form-control-user" placeholder="Bratislavský" value="<?php echo $date_of_birth; ?>">
                        </div>

                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Výška</h6>
                            <input name="height" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="178" pattern=".{3,}" value="<?php echo $height; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Konferenčná veľkosť</h6>
                            <select name="clothes_size" class="form-control form-control-user">
                                <option <?php if ($clothes_size == "Slovenská") echo "selected"; ?>>XXS</option>
                                <option <?php if ($clothes_size == "Slovenská") echo "selected"; ?>>XS</option>
                                <option <?php if ($clothes_size == "Slovenská") echo "selected"; ?>>S</option>
                                <option <?php if ($clothes_size == "Slovenská") echo "selected"; ?>>M</option>
                                <option <?php if ($clothes_size == "Slovenská") echo "selected"; ?>>L</option>
                                <option <?php if ($clothes_size == "Slovenská") echo "selected"; ?>>XL</option>
                                <option <?php if ($clothes_size == "Slovenská") echo "selected"; ?>>XXL</option>
                                <option <?php if ($clothes_size == "Slovenská") echo "selected"; ?>>XXXL</option>
                                <option <?php if ($clothes_size == "Slovenská") echo "selected"; ?>>4XL</option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Číslo topánok</h6>
                            <input name="shoes_size" type="text" class="form-control form-control-user" placeholder="38" pattern=".{2,}" value="<?php echo $shoes_size; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Miery (prsia)</h6>
                            <input name="pr1" type="text" class="form-control form-control-user" placeholder="110" pattern=".{2,3}" value="<?php echo $proportions_breast; ?>">
                        </div>

                        <div class="col-sm-4">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Miery (pás)</h6>
                            <input name="pr2" type="text" class="form-control form-control-user" placeholder="60" pattern=".{2,3}" value="<?php echo $proportions_waist; ?>">
                        </div>

                        <div class="col-sm-4">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Miery (boky)</h6>
                            <input name="pr3" type="text" class="form-control form-control-user" placeholder="100" pattern=".{2,3}" value="<?php echo $proportions_hips; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Farba očí</h6>
                            <select name="eyes" class="form-control form-control-user">
                                <option <?php if ($eyes == "Modrá") echo "selected"; ?>>Modrá</option>
                                <option <?php if ($eyes == "Hnedá") echo "selected"; ?>>Hnedá</option>
                                <option <?php if ($eyes == "Zelená") echo "selected"; ?>>Zelená</option>
                                <option <?php if ($eyes == "Šedá") echo "selected"; ?>>Šedá</option>
                                <option <?php if ($eyes == "Iné") echo "selected"; ?>>Iné</option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Farba vlasov</h6>
                            <select name="hair" class="form-control form-control-user">
                                <option <?php if ($hair == "Hnedá") echo "selected"; ?>>Hnedá</option>
                                <option <?php if ($hair == "Biela") echo "selected"; ?>>Biela</option>
                                <option <?php if ($hair == "Blond") echo "selected"; ?>>Blond</option>
                                <option <?php if ($hair == "Ryšavá") echo "selected"; ?>>Ryšavá</option>
                                <option <?php if ($hair == "Červená") echo "selected"; ?>>Červená</option>
                                <option <?php if ($hair == "Šedivá") echo "selected"; ?>>Šedivá</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">

                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Zaujímam sa o</h6>

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <input type="hidden" name="in1" value="">
                                    <input type="checkbox" name="in1" value="herectvo, " <?php if (strpos($interests, 'herectvo') !== false) echo "checked"; ?>>
                                    <label>Herectvo</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="in2" value="">
                                    <input type="checkbox" name="in2" value="komparz, " <?php if (strpos($interests, 'komparz') !== false) echo "checked"; ?>>
                                    <label>Komparz</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="in3" value="">
                                    <input type="checkbox" name="in3" value="komparz + text, " <?php if (strpos($interests, 'text') !== false) echo "checked"; ?>>
                                    <label>Komparz + text</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="in4" value="">
                                    <input type="checkbox" name="in4" value="dabing, " <?php if (strpos($interests, 'dabing') !== false) echo "checked"; ?>>
                                    <label>Dabing</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">

                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Zvláštne znamenia</h6>

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <input type="hidden" name="ao1" value="">
                                    <input type="checkbox" name="ao1" value="tetovanie, " <?php if (strpos($add_ons, 'tetovanie') !== false) echo "checked"; ?>>
                                    <label>Tetovanie</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="ao2" value="">
                                    <input type="checkbox" name="ao2" value="piercing, " <?php if (strpos($add_ons, 'piercing') !== false) echo "checked"; ?>>
                                    <label>Piercing</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="ao3" value="">
                                    <input type="checkbox" name="ao3" value="jazva, " <?php if (strpos($add_ons, 'jazva') !== false) echo "checked"; ?>>
                                    <label>Jazva</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="ao4" value="">
                                    <input type="checkbox" name="ao4" value="strojček na zuby, " <?php if (strpos($add_ons, 'zuby') !== false) echo "checked"; ?>>
                                    <label>Strojček na zuby</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">

                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Umelecké schopnosti</h6>

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <input type="hidden" name="cr1" value="">
                                    <input type="checkbox" name="cr1" value="balet, " <?php if (strpos($talent_creative, 'balet') !== false) echo "checked"; ?>>
                                    <label>Balet</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="cr2" value="">
                                    <input type="checkbox" name="cr2" value="breakdance, " <?php if (strpos($talent_creative, 'breakdance') !== false) echo "checked"; ?>>
                                    <label>Breakdance</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="cr3" value="">
                                    <input type="checkbox" name="cr3" value="herectvo, " <?php if (strpos($talent_creative, 'herectvo') !== false) echo "checked"; ?>>
                                    <label>Herectvo</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="cr4" value="">
                                    <input type="checkbox" name="cr4" value="hra na hudobný nástroj, " <?php if (strpos($talent_creative, 'hudobný') !== false) echo "checked"; ?>>
                                    <label>Hra na hudobný nástroj</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <input type="hidden" name="cr5" value="">
                                    <input type="checkbox" name="cr5" value="spev, " <?php if (strpos($talent_creative, 'spev') !== false) echo "checked"; ?>>
                                    <label>Spev</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="cr6" value="">
                                    <input type="checkbox" name="cr6" value="spoločenský tanec, " <?php if (strpos($talent_creative, 'spoločenský') !== false) echo "checked"; ?>>
                                    <label>Spoločenský tanec</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="cr7" value="">
                                    <input type="checkbox" name="cr7" value="ľudový tanec, " <?php if (strpos($talent_creative, 'ľudový') !== false) echo "checked"; ?>>
                                    <label>Ľudový tanec</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="cr8" value="">
                                    <input type="checkbox" name="cr8" value="moderný tanec, " <?php if (strpos($talent_creative, 'moderný') !== false) echo "checked"; ?>>
                                    <label>Moderný tanec</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">

                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Pohybové schopnosti</h6>

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <input type="hidden" name="mv1" value="">
                                    <input type="checkbox" name="mv1" value="basketbal, " <?php if (strpos($talent_movement, 'basketbal') !== false) echo "checked"; ?>>
                                    <label>Basketbal</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="mv2" value="">
                                    <input type="checkbox" name="mv2" value="cyklistyka, " <?php if (strpos($talent_movement, 'cyklistyka') !== false) echo "checked"; ?>>
                                    <label>Cyklistyka</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="mv3" value="">
                                    <input type="checkbox" name="mv3" value="fitness, " <?php if (strpos($talent_movement, 'fitness') !== false) echo "checked"; ?>>
                                    <label>Fitness</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="mv4" value="">
                                    <input type="checkbox" name="mv4" value="futbal, " <?php if (strpos($talent_movement, 'futbal') !== false) echo "checked"; ?>>
                                    <label>Futbal</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <input type="hidden" name="mv5" value="">
                                    <input type="checkbox" name="mv5" value="gymnastika, " <?php if (strpos($talent_movement, 'gymnastika') !== false) echo "checked"; ?>>
                                    <label>Gymnsatika</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="mv6" value="">
                                    <input type="checkbox" name="mv6" value="hádzaná, " <?php if (strpos($talent_movement, 'hádzaná') !== false) echo "checked"; ?>>
                                    <label>Hádzaná</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="mv7" value="">
                                    <input type="checkbox" name="mv7" value="jazda na koni, " <?php if (strpos($talent_movement, 'jazda') !== false) echo "checked"; ?>>
                                    <label>Jazda na koni</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="mv8" value="">
                                    <input type="checkbox" name="mv8" value="korčuľovanie, " <?php if (strpos($talent_movement, 'korčuľovanie') !== false) echo "checked"; ?>>
                                    <label>Korčuľovanie</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <input type="hidden" name="mv9" value="">
                                    <input type="checkbox" name="mv9" value="lyžovanie, " <?php if (strpos($talent_movement, 'lyžovanie') !== false) echo "checked"; ?>>
                                    <label>Lyžovanie</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="mv10" value="">
                                    <input type="checkbox" name="mv10" value="plávanie, " <?php if (strpos($talent_movement, 'plávanie') !== false) echo "checked"; ?>>
                                    <label>Plávanie</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="mv11" value="">
                                    <input type="checkbox" name="mv11" value="skateboard, " <?php if (strpos($talent_movement, 'skateboard') !== false) echo "checked"; ?>>
                                    <label>Skateboard</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="mv12" value="">
                                    <input type="checkbox" name="mv12" value="snowboard, " <?php if (strpos($talent_movement, 'snowboard') !== false) echo "checked"; ?>>
                                    <label>Snowboard</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <input type="hidden" name="mv13" value="">
                                    <input type="checkbox" name="mv13" value="tenis, " <?php if (strpos($talent_movement, 'tenis') !== false) echo "checked"; ?>>
                                    <label>Tenis</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="mv14" value="">
                                    <input type="checkbox" name="mv14" value="vodné športy, " <?php if (strpos($talent_movement, 'vodné') !== false) echo "checked"; ?>>
                                    <label>Vodné športy</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="mv15" value="">
                                    <input type="checkbox" name="mv15" value="volejbal, " <?php if (strpos($talent_movement, 'volejbal') !== false) echo "checked"; ?>>
                                    <label>Volejbal</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="mv16" value="">
                                    <input type="checkbox" name="mv16" value="workout, " <?php if (strpos($talent_movement, 'workout') !== false) echo "checked"; ?>>
                                    <label>Workout</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">

                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Jazyky</h6>

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <input type="hidden" name="l1" value="">
                                    <input type="checkbox" name="l1" value="angličtina, " <?php if (strpos($talent_languages, 'angličtina') !== false) echo "checked"; ?>>
                                    <label>Angličtina</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="l2" value="">
                                    <input type="checkbox" name="l2" value="čeština, " <?php if (strpos($talent_languages, 'čeština') !== false) echo "checked"; ?>>
                                    <label>Čeština</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="l3" value="">
                                    <input type="checkbox" name="l3" value="francúzština, " <?php if (strpos($talent_languages, 'francúzština') !== false) echo "checked"; ?>>
                                    <label>Francúzština</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="l4" value="">
                                    <input type="checkbox" name="l4" value="maďarčina, " <?php if (strpos($talent_languages, 'maďarčina') !== false) echo "checked"; ?>>
                                    <label>Maďarčina</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <input type="hidden" name="l5" value="">
                                    <input type="checkbox" name="l5" value="nemčina, " <?php if (strpos($talent_languages, 'nemčina') !== false) echo "checked"; ?>>
                                    <label>Nemčina</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="l6" value="">
                                    <input type="checkbox" name="l6" value="ruština, " <?php if (strpos($talent_languages, 'ruština') !== false) echo "checked"; ?>>
                                    <label>Ruština</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="l7" value="">
                                    <input type="checkbox" name="l7" value="slovenčina, " <?php if (strpos($talent_languages, 'slovenčina') !== false) echo "checked"; ?>>
                                    <label>Slovenčina</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="hidden" name="l8" value="">
                                    <input type="checkbox" name="l8" value="španielčina, " <?php if (strpos($talent_languages, 'španielčina') !== false) echo "checked"; ?>>
                                    <label>Španielčina</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <input type="hidden" name="l9" value="">
                                    <input type="checkbox" name="l9" value="taliančina, " <?php if (strpos($talent_languages, 'taliančina') !== false) echo "checked"; ?>>
                                    <label>Taliančina</label>
                                </div>
                            </div>
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
