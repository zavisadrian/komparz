<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>
<?php include 'Libary/Weblibary.php';?>
<?php include 'PHP/initializeProfileToEdit.php';?>

<div class="wait-screen align-items-center justify-content-center flex-column" style="display: none;">
    <img src="../images/spinner.gif" alt="spinner">
    <h2 class="mt-4">Čakajte prosím...</h2>
</div>

<section id="profile" style="background-image: url(../images/komparz-banner.jpg);">
    <form action="PHP/editProfile.php" method="post" enctype="multipart/form-data" id="edit_acter">
        <div class="container py-7 pt-2 text-center">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6 mt-3 cropped-image">
                    <label class="mb-0 w-100">
                        <input type="file" name="p001" id="p001" data-section="main" data-unlock="img-container" data-cropimageid="p001" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                        <div class="cropped-image-overlay delete"></div>
                        <img id="cropped_p001" src="Profiles/<?php echo $ID; ?>/images/min/p001.jpg" alt="" class="w-100 border-image">
                    </label>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h1>Registrácia<br>Modeling & Fotomodeling</h1>
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
                                <div class="cropped-image-overlay delete"></div>
                                <img id="cropped_p011" src="Profiles/<?php echo $ID; ?>/images/min/p011.jpg" alt="" class="w-100">
                            </label>
                        </div>
                        <div class="cropped-image main-image photobooks disabled" style="display: none;">
                            <label class="mb-0 w-100">
                                <input disabled type="file" name="p021" id="p021" data-section="main" data-unlock="photobooks" data-cropimageid="p021" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                <div class="cropped-image-overlay delete"></div>
                                <img id="cropped_p021" src="Profiles/<?php echo $ID; ?>/images/min/p021.jpg" alt="" class="w-100">
                            </label>
                        </div>
                        <div class="cropped-image main-image polaroids disabled" style="display: none;">
                            <label class="mb-0 w-100">
                                <input disabled type="file" name="p031" id="p031" data-section="main" data-unlock="polaroids" data-cropimageid="p031" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                                <div class="cropped-image-overlay delete"></div>
                                <img id="cropped_p031" src="Profiles/<?php echo $ID; ?>/images/min/p031.jpg" alt="" class="w-100">
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
                            <div class="cropped-image mb-2">
                                <?php
                                if (file_exists("Profiles/".$ID."/images/p012.jpg")) {
                                    echo "
                                <label class=\"mb-0 w-100\">
								    <input type=\"file\" name=\"p012\" id=\"p012\" data-section=\"main\" data-edit=\"true\" data-unlock=\"p013\" data-cropimageid=\"p012\" data-aspectratio=\"1\" class=\"image-upload-input\"/>
								    <div class=\"cropped-image-overlay delete\"></div>
								    <img id=\"cropped_p012\" src=\"Profiles/".$ID."/images/min/p012.jpg\" alt=\"\" class=\"w-100\">
							    </label>
                                ";
                                } else echo "
                                 <label class=\"mb-0 w-100\">
                                 	<input type=\"file\" name=\"p012\" id=\"p012\" data-section=\"main\" data-edit=\"true\" data-unlock=\"p013\" data-cropimageid=\"p012\" data-aspectratio=\"1\" class=\"image-upload-input\"/>
                            <div class=\"cropped-image-overlay\"></div>
                                    <img id=\"cropped_p012\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                                </label>
                            ";
                                ?>
                            </div>
                            <div class="cropped-image mb-2">
                                <?php
                                if (file_exists("Profiles/".$ID."/images/p016.jpg")) {
                                    echo "
                                <label class=\"mb-0 w-100\">
								    <input type=\"file\" name=\"p016\" id=\"p016\" data-section=\"main\" data-edit=\"true\" data-unlock=\"p013\" data-cropimageid=\"p016\" data-aspectratio=\"1\" class=\"image-upload-input\"/>
								    <div class=\"cropped-image-overlay delete\"></div>
								    <img id=\"cropped_p016\" src=\"Profiles/".$ID."/images/min/p016.jpg\" alt=\"\" class=\"w-100\">
							    </label>
                                ";
                                } else echo "
                                 <label class=\"mb-0 w-100\">
                                 	<input type=\"file\" name=\"p016\" id=\"p016\" data-section=\"main\" data-edit=\"true\" data-unlock=\"p013\" data-cropimageid=\"p016\" data-aspectratio=\"1\" class=\"image-upload-input\"/>
                            <div class=\"cropped-image-overlay\"></div>
                                    <img id=\"cropped_p016\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                                </label>
                            ";
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 order-3 order-md-2 px-1">
                            <div class="cropped-image mb-2">
                                <?php
                                if (file_exists("Profiles/".$ID."/images/p013.jpg")) {
                                    echo "
                                <label class=\"mb-0 w-100\">
								    <input type=\"file\" name=\"p013\" id=\"p013\" data-section=\"main\" data-edit=\"true\" data-unlock=\"p013\" data-cropimageid=\"p013\" data-aspectratio=\"1\" class=\"image-upload-input\"/>
								    <div class=\"cropped-image-overlay delete\"></div>
								    <img id=\"cropped_p013\" src=\"Profiles/".$ID."/images/min/p013.jpg\" alt=\"\" class=\"w-100\">
							    </label>
                                ";
                                } else echo "
                                 <label class=\"mb-0 w-100\">
                                 	<input type=\"file\" name=\"p013\" id=\"p013\" data-section=\"main\" data-edit=\"true\" data-unlock=\"p013\" data-cropimageid=\"p013\" data-aspectratio=\"1\" class=\"image-upload-input\"/>
                            <div class=\"cropped-image-overlay\"></div>
                                    <img id=\"cropped_p013\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                                </label>
                            ";
                                ?>
                            </div>
                            <div class="cropped-image mb-2">
                                <?php
                                if (file_exists("Profiles/".$ID."/images/p017.jpg")) {
                                    echo "
                                <label class=\"mb-0 w-100\">
								    <input type=\"file\" name=\"p017\" id=\"p017\" data-section=\"main\" data-edit=\"true\" data-unlock=\"p013\" data-cropimageid=\"p017\" data-aspectratio=\"1\" class=\"image-upload-input\"/>
								    <div class=\"cropped-image-overlay delete\"></div>
								    <img id=\"cropped_p017\" src=\"Profiles/".$ID."/images/min/p017.jpg\" alt=\"\" class=\"w-100\">
							    </label>
                                ";
                                } else echo "
                                 <label class=\"mb-0 w-100\">
                                 	<input type=\"file\" name=\"p017\" id=\"p017\" data-section=\"main\" data-edit=\"true\" data-unlock=\"p013\" data-cropimageid=\"p017\" data-aspectratio=\"1\" class=\"image-upload-input\"/>
                            <div class=\"cropped-image-overlay\"></div>
                                    <img id=\"cropped_p017\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                                </label>
                            ";
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 order-2 order-md-3 pt-md-0 pt-3 px-1 pb-2 pb-md-0">
                            <div class="cropped-image mb-2">
                                <?php
                                if (file_exists("Profiles/".$ID."/images/p014.jpg")) {
                                    echo "
                                <label class=\"mb-0 w-100\">
								    <input type=\"file\" name=\"p014\" id=\"p014\" data-section=\"main\" data-edit=\"true\" data-unlock=\"p014\" data-cropimageid=\"p014\" data-aspectratio=\"1\" class=\"image-upload-input\"/>
								    <div class=\"cropped-image-overlay delete\"></div>
								    <img id=\"cropped_p014\" src=\"Profiles/".$ID."/images/min/p014.jpg\" alt=\"\" class=\"w-100\">
							    </label>
                                ";
                                } else echo "
                                 <label class=\"mb-0 w-100\">
                                 	<input type=\"file\" name=\"p014\" id=\"p014\" data-section=\"main\" data-edit=\"true\" data-unlock=\"p014\" data-cropimageid=\"p014\" data-aspectratio=\"1\" class=\"image-upload-input\"/>
                            <div class=\"cropped-image-overlay\"></div>
                                    <img id=\"cropped_p014\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                                </label>
                            ";
                                ?>
                            </div>
                            <div class="cropped-image mb-2">
                                <?php
                                if (file_exists("Profiles/".$ID."/images/p018.jpg")) {
                                    echo "
                                <label class=\"mb-0 w-100\">
								    <input type=\"file\" name=\"p018\" id=\"p018\" data-section=\"main\" data-edit=\"true\" data-unlock=\"p018\" data-cropimageid=\"p018\" data-aspectratio=\"1\" class=\"image-upload-input\"/>
								    <div class=\"cropped-image-overlay delete\"></div>
								    <img id=\"cropped_p018\" src=\"Profiles/".$ID."/images/min/p018.jpg\" alt=\"\" class=\"w-100\">
							    </label>
                                ";
                                } else echo "
                                 <label class=\"mb-0 w-100\">
                                 	<input type=\"file\" name=\"p018\" id=\"p018\" data-section=\"main\" data-edit=\"true\" data-unlock=\"p018\" data-cropimageid=\"p018\" data-aspectratio=\"1\" class=\"image-upload-input\"/>
                            <div class=\"cropped-image-overlay\"></div>
                                    <img id=\"cropped_p018\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                                </label>
                            ";
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 order-4 order-md-4 px-1">
                            <div class="cropped-image mb-2">
                                <?php
                                if (file_exists("Profiles/".$ID."/images/p015.jpg")) {
                                    echo "
                                <label class=\"mb-0 w-100\">
								    <input type=\"file\" name=\"p015\" id=\"p015\" data-section=\"main\" data-edit=\"true\" data-unlock=\"p015\" data-cropimageid=\"p015\" data-aspectratio=\"1\" class=\"image-upload-input\"/>
								    <div class=\"cropped-image-overlay delete\"></div>
								    <img id=\"cropped_p015\" src=\"Profiles/".$ID."/images/min/p015.jpg\" alt=\"\" class=\"w-100\">
							    </label>
                                ";
                                } else echo "
                                 <label class=\"mb-0 w-100\">
                                 	<input type=\"file\" name=\"p015\" id=\"p015\" data-section=\"main\" data-edit=\"true\" data-unlock=\"p015\" data-cropimageid=\"p015\" data-aspectratio=\"1\" class=\"image-upload-input\"/>
                            <div class=\"cropped-image-overlay\"></div>
                                    <img id=\"cropped_p015\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                                </label>
                            ";
                                ?>
                            </div>
                            <div class="cropped-image mb-2">
                                <?php
                                if (file_exists("Profiles/".$ID."/images/p019.jpg")) {
                                    echo "
                                <label class=\"mb-0 w-100\">
								    <input type=\"file\" name=\"p019\" id=\"p019\" data-section=\"main\" data-edit=\"true\" data-unlock=\"p019\" data-cropimageid=\"p019\" data-aspectratio=\"1\" class=\"image-upload-input\"/>
								    <div class=\"cropped-image-overlay delete\"></div>
								    <img id=\"cropped_p019\" src=\"Profiles/".$ID."/images/min/p019.jpg\" alt=\"\" class=\"w-100\">
							    </label>
                                ";
                                } else echo "
                                 <label class=\"mb-0 w-100\">
                                 	<input type=\"file\" name=\"p019\" id=\"p019\" data-section=\"main\" data-edit=\"true\" data-unlock=\"p019\" data-cropimageid=\"p019\" data-aspectratio=\"1\" class=\"image-upload-input\"/>
                            <div class=\"cropped-image-overlay\"></div>
                                    <img id=\"cropped_p019\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                                </label>
                            ";
                                ?>
                            </div>
                        </div>
                        <div class="col-12 form-group order-5 mt-3 px-1">
                            <h6 class="m-0 font-weight-bold text-primary cs-input-label">Pridať ďalšie fotofrafie do Fotografie</h6>
                            <div class="form-control form-control-user overflowHidden">
                                <input name="photos[]" type="file" class="cs-input-type-mf" multiple="" placeholder="Pridať ďalšie fotografie">
                                <div class="cs-input-type-f-erase" style="display: none;"></div>
                            </div>
                        </div>
                        <?php
                        for ($i = 0; $i < count($photos); $i++) {
                            echo "
					    <div class=\"col-md-3 col-6 order-last order-md-last px-1\" data-section=\"photos\" data-deleteid=\"".$photos[$i]."\">
					    	<div class=\"cropped-image mb-2\">
					    		<img src=\"Profiles/".$ID."/images/photos/".$photos[$i]."\" alt=\"\" class=\"w-100\">
					    		<div class=\"cropped-image-overlay delete\"></div>
					    	</div>
					    </div>                        
                        ";
                        }
                        ?>
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
                        <a style="all: unset;" href="change-password-2.php?ID=<?php echo $ID; ?>"><input type="button" class="btn btn-primary w-50 mt-4" value="Zmeniť heslo" style="margin: 0 0 30px 0 !important; width: 100% !important; float: left"/></a>
                        <h3>Informácie o Komparzistovi / hercovi</h3>
                        <div class="row pt-4">
                            <div class="col-6">
                                <label for="name" class="mb-0 mt-3"><strong>Meno</strong></label>
                                <input type="text" class="registration-input" name="name" value="<?php echo $name; ?>" data-necessary="text"/>
                            </div>
                            <div class="col-6">
                                <label for="surname" class="mb-0 mt-3"><strong>Priezvisko</strong></label>
                                <input type="text" class="registration-input" name="surname" value="<?php echo $surname; ?>" data-necessary="text"/>
                            </div>
                            <div class="col-6">
                                <label for="gender" class="mb-0 mt-3"><strong>Pohlavie</strong></label>
                                <select name="gender" id="gender" class="filter" data-placeholder="Pohlavie" data-necessary="text">
                                    <option value=""></option>
                                    <option value="Muž" <?php if ($gender == "Muž") echo "selected"; ?>>Muž</option>
                                    <option value="Žena" <?php if ($gender == "Žena") echo "selected"; ?>>Žena</option>
                                    <option value="Iné" <?php if ($gender == "Iné") echo "selected"; ?>>Iné</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="phone" class="mb-0 mt-3"><strong>Telefón</strong></label>
                                <input type="text" class="registration-input" name="phone" value="<?php echo $phone; ?>" data-necessary="text"/>
                            </div>
                            <div class="col-6">
                                <label for="street" class="mb-0 mt-3"><strong>Ulica</strong></label>
                                <input type="text" class="registration-input" name="street" value="<?php echo $street; ?>" data-necessary="text"/>
                            </div>
                            <div class="col-6">
                                <label for="city" class="mb-0 mt-3"><strong>Mesto</strong></label>
                                <input type="text" class="registration-input" name="city" value="<?php echo $city; ?>" data-necessary="text"/>
                            </div>
                            <div class="col-6">
                                <label for="region" class="mb-0 mt-3"><strong>Kraj</strong></label>
                                <select name="region" id="region" class="filter" data-placeholder="Kraj" data-necessary="text">
                                    <option value=""></option>
                                    <option value="Bratislavský" <?php if ($region == "Bratislavský") echo "selected";  ?>>Bratislavský</option>
                                    <option value="Trnavský" <?php if ($region == "Trnavský") echo "selected";  ?>>Trnavský</option>
                                    <option value="Trenčianský" <?php if ($region == "Trenčianský")  echo "selected"; ?>>Trenčianský</option>
                                    <option value="Nitrianský" <?php if ($region == "Nitrianský")  echo "selected"; ?>>Nitrianský</option>
                                    <option value="Žilinský" <?php if ($region == "Žilinský")  echo "selected"; ?>>Žilinský</option>
                                    <option value="Bánskobystrický" <?php if ($region == "Bánskobystrický")  echo "selected"; ?>>Bánskobystrický</option>
                                    <option value="Prešovský" <?php if ($region == "Prešovský")  echo "selected"; ?>>Prešovský</option>
                                    <option value="Košický" <?php if ($region == "Košický")  echo "selected"; ?>>Košický</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="postcode" class="mb-0 mt-3"><strong>PSČ</strong></label>
                                <input type="text" class="registration-input" name="postcode" value="<?php echo $postcode; ?>" data-necessary="text"/>
                            </div>
                            <div class="col-6">
                                <label for="nationality" class="mb-0 mt-3"><strong>Národnosť</strong></label>
                                <select name="nationality" id="nationality" class="filter" data-placeholder="Národnosť" onchange="realTimeResultCount()">
                                    <option value=""></option>
                                    <option value="Slovenská" <?php if ($nationality == "Slovenská")  echo "selected"; ?>>Slovenská</option>
                                    <option value="Česká" <?php if ($nationality == "Česká")  echo "selected"; ?>>Česká</option>
                                    <option value="Polská" <?php if ($nationality == "Polská")  echo "selected"; ?>>Polská</option>
                                    <option value="Maďarská" <?php if ($nationality == "Maďarská")  echo "selected"; ?>>Maďarská</option>
                                    <option value="Iná" <?php if ($nationality == "Iná")  echo "selected"; ?>>Iná</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="work" class="mb-0 mt-3"><strong>Zamestnanie / Škola</strong></label>
                                <input type="text" class="registration-input" name="work" value="<?php echo $work; ?>" data-necessary="text"/>
                            </div>
                            <div class="col-6">
                                <label for="date_of_birth" class="mb-0 mt-3"><strong>Dátum narodenia</strong></label>
                                <input name="date_of_birth" type="text" placeholder="Dátum narodenia" class="correctDate" value="<?php echo $date_of_birth; ?>" data-necessary="date">
                            </div>
                            <div class="col-6">
                                <label for="height" class="mb-0 mt-3"><strong>Výška</strong></label>
                                <select name="height" id="height" class="filter " data-placeholder="od" data-necessary="text">
                                    <option value=""></option>
                                    <option value="140" <?php if ($height == "140")  echo "selected"; ?> >140cm</option>
                                    <option value="145" <?php if ($height == "145")  echo "selected"; ?> >145cm</option>
                                    <option value="150" <?php if ($height == "150")  echo "selected"; ?> >150cm</option>
                                    <option value="155" <?php if ($height == "155")  echo "selected"; ?> >155cm</option>
                                    <option value="160" <?php if ($height == "160")  echo "selected"; ?> >160cm</option>
                                    <option value="165" <?php if ($height == "165")  echo "selected"; ?> >165cm</option>
                                    <option value="170" <?php if ($height == "170")  echo "selected"; ?> >170cm</option>
                                    <option value="175" <?php if ($height == "175")  echo "selected"; ?> >175cm</option>
                                    <option value="180" <?php if ($height == "180")  echo "selected"; ?> >180cm</option>
                                    <option value="185" <?php if ($height == "185")  echo "selected"; ?> >185cm</option>
                                    <option value="190" <?php if ($height == "190")  echo "selected"; ?> >190cm</option>
                                    <option value="195" <?php if ($height == "195")  echo "selected"; ?> >195cm</option>
                                    <option value="200" <?php if ($height == "200")  echo "selected"; ?> >200cm</option>
                                    <option value="205" <?php if ($height == "205")  echo "selected"; ?> >205cm</option>
                                    <option value="210" <?php if ($height == "210")  echo "selected"; ?> >210cm</option>
                                    <option value="215" <?php if ($height == "215")  echo "selected"; ?> >215cm</option>
                                    <option value="220" <?php if ($height == "220")  echo "selected"; ?> >220cm</option>
                                    <option value="225" <?php if ($height == "225")  echo "selected"; ?> >225cm</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="confection" class="mb-0 mt-3"><strong>Konfekcia</strong> *</label>
                                <select name="confection" id="confection" class="filter " data-placeholder="Konfekcia" data-necessary="text">
                                    <option value="" <?php if ($clothes_size == "")  echo "selected"; ?> ></option>
                                    <option value="XS" <?php if ($clothes_size == "XS")  echo "selected"; ?> >XS</option>
                                    <option value="S" <?php if ($clothes_size == "S")  echo "selected"; ?> >S</option>
                                    <option value="M" <?php if ($clothes_size == "M")  echo "selected"; ?> >M</option>
                                    <option value="L" <?php if ($clothes_size == "L")  echo "selected"; ?> >L</option>
                                    <option value="XL" <?php if ($clothes_size == "XL")  echo "selected"; ?> >XL</option>
                                    <option value="XXL" <?php if ($clothes_size == "XXL")  echo "selected"; ?> >XXL</option>
                                    <option value="XXXL" <?php if ($clothes_size == "XXXL")  echo "selected"; ?> >XXXL</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="foot_size" class="mb-0 mt-3"><strong>Číslo topánok</strong> *</label>
                                <select name="foot_size" id="foot_size" class="filter " data-placeholder="Číslo topánok" data-necessary="text">
                                    <option value=""></option>
                                    <option value="33" <?php if ($shoes_size == "33")  echo "selected"; ?> >33</option>
                                    <option value="34" <?php if ($shoes_size == "34")  echo "selected"; ?> >34</option>
                                    <option value="35" <?php if ($shoes_size == "35")  echo "selected"; ?> >35</option>
                                    <option value="36" <?php if ($shoes_size == "36")  echo "selected"; ?> >36</option>
                                    <option value="37" <?php if ($shoes_size == "37")  echo "selected"; ?> >37</option>
                                    <option value="38" <?php if ($shoes_size == "38")  echo "selected"; ?> >38</option>
                                    <option value="39" <?php if ($shoes_size == "39")  echo "selected"; ?> >39</option>
                                    <option value="40" <?php if ($shoes_size == "40")  echo "selected"; ?> >40</option>
                                    <option value="41" <?php if ($shoes_size == "41")  echo "selected"; ?> >41</option>
                                    <option value="42" <?php if ($shoes_size == "42")  echo "selected"; ?> >42</option>
                                    <option value="43" <?php if ($shoes_size == "43")  echo "selected"; ?> >43</option>
                                    <option value="44" <?php if ($shoes_size == "44")  echo "selected"; ?> >44</option>
                                    <option value="45" <?php if ($shoes_size == "45")  echo "selected"; ?> >45</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="brest_size" class="mb-0 mt-3"><strong>Miery prsia</strong> *</label>
                                <select name="pr1" id="brest_size" class="filter " data-placeholder="Miery prsia" data-necessary="text">
                                    <option value=""></option>
                                    <option value="75" <?php if ($proportions_breast == "75")  echo "selected"; ?> >75</option>
                                    <option value="79" <?php if ($proportions_breast == "79")  echo "selected"; ?> >79</option>
                                    <option value="83" <?php if ($proportions_breast == "83")  echo "selected"; ?> >83</option>
                                    <option value="87" <?php if ($proportions_breast == "87")  echo "selected"; ?> >87</option>
                                    <option value="91" <?php if ($proportions_breast == "91")  echo "selected"; ?> >91</option>
                                    <option value="95" <?php if ($proportions_breast == "95")  echo "selected"; ?> >95</option>
                                    <option value="99" <?php if ($proportions_breast == "99")  echo "selected"; ?> >99</option>
                                    <option value="103" <?php if ($proportions_breast == "103")  echo "selected"; ?> >103</option>
                                    <option value="107" <?php if ($proportions_breast == "107")  echo "selected"; ?> >107</option>
                                    <option value="111" <?php if ($proportions_breast == "111")  echo "selected"; ?> >111</option>
                                    <option value="115" <?php if ($proportions_breast == "115")  echo "selected"; ?> >115</option>
                                    <option value="120" <?php if ($proportions_breast == "120")  echo "selected"; ?> >120</option>
                                    <option value="125" <?php if ($proportions_breast == "125")  echo "selected"; ?> >125</option>
                                    <option value="130" <?php if ($proportions_breast == "130")  echo "selected"; ?> >130</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="belt_size" class="mb-0 mt-3"><strong>Miery pás</strong> *</label>
                                <select name="pr2" id="belt_size" class="filter " data-placeholder="Miery pás" data-necessary="text">
                                    <option value=""></option>
                                    <option value="51" <?php if ($proportions_waist == "51")  echo "selected"; ?> >51</option>
                                    <option value="56" <?php if ($proportions_waist == "56")  echo "selected"; ?> >56</option>
                                    <option value="60" <?php if ($proportions_waist == "60")  echo "selected"; ?> >60</option>
                                    <option value="63" <?php if ($proportions_waist == "63")  echo "selected"; ?> >63</option>
                                    <option value="67" <?php if ($proportions_waist == "67")  echo "selected"; ?> >67</option>
                                    <option value="71" <?php if ($proportions_waist == "71")  echo "selected"; ?> >71</option>
                                    <option value="75" <?php if ($proportions_waist == "75")  echo "selected"; ?> >75</option>
                                    <option value="79" <?php if ($proportions_waist == "79")  echo "selected"; ?> >79</option>
                                    <option value="83" <?php if ($proportions_waist == "83")  echo "selected"; ?> >83</option>
                                    <option value="87" <?php if ($proportions_waist == "87")  echo "selected"; ?> >87</option>
                                    <option value="91" <?php if ($proportions_waist == "91")  echo "selected"; ?> >91</option>
                                    <option value="95" <?php if ($proportions_waist == "95")  echo "selected"; ?> >95</option>
                                    <option value="99" <?php if ($proportions_waist == "99")  echo "selected"; ?> >99</option>
                                    <option value="103" <?php if ($proportions_waist == "103")  echo "selected"; ?> >103</option>
                                    <option value="107" <?php if ($proportions_waist == "107")  echo "selected"; ?> >107</option>
                                    <option value="110" <?php if ($proportions_waist == "110")  echo "selected"; ?> >110</option>
                                    <option value="115" <?php if ($proportions_waist == "115")  echo "selected"; ?> >115</option>
                                    <option value="120" <?php if ($proportions_waist == "120")  echo "selected"; ?> >120</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="bottom_size" class="mb-0 mt-3"><strong>Miery bok</strong> *</label>
                                <select name="pr3" id="bottom_size" class="filter " data-placeholder="Miery bok" data-necessary="text">
                                    <option value=""></option>
                                    <option value="75" <?php if ($proportions_hips == "75")  echo "selected"; ?> >75</option>
                                    <option value="79" <?php if ($proportions_hips == "79")  echo "selected"; ?> >79</option>
                                    <option value="83" <?php if ($proportions_hips == "83")  echo "selected"; ?> >83</option>
                                    <option value="87" <?php if ($proportions_hips == "87")  echo "selected"; ?> >87</option>
                                    <option value="91" <?php if ($proportions_hips == "91")  echo "selected"; ?> >91</option>
                                    <option value="95" <?php if ($proportions_hips == "95")  echo "selected"; ?> >95</option>
                                    <option value="99" <?php if ($proportions_hips == "99")  echo "selected"; ?> >99</option>
                                    <option value="103" <?php if ($proportions_hips == "103")  echo "selected"; ?> >103</option>
                                    <option value="107" <?php if ($proportions_hips == "107")  echo "selected"; ?> >107</option>
                                    <option value="111" <?php if ($proportions_hips == "111")  echo "selected"; ?> >111</option>
                                    <option value="115" <?php if ($proportions_hips == "115")  echo "selected"; ?> >115</option>
                                    <option value="119" <?php if ($proportions_hips == "119")  echo "selected"; ?> >119</option>
                                    <option value="125" <?php if ($proportions_hips == "125")  echo "selected"; ?> >125</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="eyes" class="mb-0 mt-3"><strong>Farba očí</strong></label>
                                <select name="eyes" id="eyes" class="filter" data-placeholder="Farba očí" data-necessary="text">
                                    <option value=""></option>
                                    <option value="modrá" <?php if ($eyes == "modrá")  echo "selected"; ?>>Modrá</option>
                                    <option value="zelená" <?php if ($eyes == "zelená")  echo "selected"; ?>>Zelená</option>
                                    <option value="hnedá" <?php if ($eyes == "hnedá")  echo "selected"; ?>>Hnedá</option>
                                    <option value="šedá" <?php if ($eyes == "šedá")  echo "selected"; ?>>Šedá</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="hair" class="mb-0 mt-3"><strong>Farba vlasov</strong></label>
                                <select name="hair" id="hair" class="filter " data-placeholder="Farba vlasov" data-necessary="text">
                                    <option value="" <?php if ($hair == "")  echo "selected"; ?> ></option>
                                    <option value="albín" <?php if ($hair == "albín")  echo "selected"; ?> >Albín</option>
                                    <option value="blond" <?php if ($hair == "blond")  echo "selected"; ?> >Blond</option>
                                    <option value="červená" <?php if ($hair == "červená")  echo "selected"; ?> >Červená</option>
                                    <option value="čierna" <?php if ($hair == "čierna")  echo "selected"; ?> >Čierna</option>
                                    <option value="hnedá" <?php if ($hair == "hnedá")  echo "selected"; ?> >Hnedá</option>
                                    <option value="hrdzavá" <?php if ($hair == "hrdzavá")  echo "selected"; ?> >Hrdzavá</option>
                                    <option value="prešedivelá" <?php if ($hair == "prešedivelá")  echo "selected"; ?> >Prešedivelá</option>
                                    <option value="svetlo hnedá" <?php if ($hair == "svetlo hnedá")  echo "selected"; ?> >Svetlo hnedá</option>
                                    <option value="špinavý blond" <?php if ($hair == "špinavý blond")  echo "selected"; ?> >Špinavý blond</option>
                                    <option value="šedivá" <?php if ($hair == "šedivá")  echo "selected"; ?> >Šedivá</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label class="d-block mb-0 mt-3"><strong>Zaujímam sa o</strong></label>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="modeling" value="modeling, " name="in1" <?php if (strpos($interests, 'modeling') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="modeling">Modeling</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="fotomodeling" value="fotomodeling, " name="in2" <?php if (strpos($interests, 'fotomodeling') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="fotomodeling">Fotomodeling</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hairmodeling" value="vlasový modeling, " name="in3" <?php if (strpos($interests, 'vlasový modeling') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="hairmodeling">Vlasový modeling</label>
                    </div>
                    <label class="d-block mb-0 mt-3"><strong>Zvláštne znamenia</strong></label>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="tatto" value="tetovanie, " name="ao1" <?php if (strpos($add_ons, 'tetovanie') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="tatto">Tetovanie</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="piercing" value="piercing, " name="ao2" <?php if (strpos($add_ons, 'piercing') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="piercing">Piercing</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="scar" value="jazva, " name="ao3" <?php if (strpos($add_ons, 'jazva') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="scar">Jazva</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="braces" value="strojček na zuby, " name="ao4" <?php if (strpos($add_ons, 'strojček na zuby') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="braces">Strojček na zuby</label>
                    </div>
                    <label class="d-block mb-0 mt-3"><strong>Umelecké schopnosti</strong></label>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="ballet" value="balet, " name="cr1" <?php if (strpos($talent_creative, 'balet') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="ballet">Balet</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="breakdance" value="breakdance, " name="cr2" <?php if (strpos($talent_creative, 'breakdance') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="breakdance">Breakdance</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="actingm" value="herectvo, " name="cr3" <?php if (strpos($talent_creative, 'herectvo') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="actingm">Herectvo</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="music_instrument" value="hra na hudobný nástroj, " name="cr4" <?php if (strpos($talent_creative, 'hra na hudobný nástroj') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="music_instrument">Hra na hudobný nástroj</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="singing" value="spev, " name="cr5" <?php if (strpos($talent_creative, 'spev') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="singing">Spev</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="dancing_ballroom" value="spoločenský tanec, " name="cr6" <?php if (strpos($talent_creative, 'spoločenský tanec') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="dancing_ballroom">Spoločenský tanec</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="dancing_folk" value="ľudový tanec, " name="cr7" <?php if (strpos($talent_creative, 'ľudový tanec') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="dancing_folk">Ľudový tanec</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="dancing_modern" value="moderný tanec, " name="cr8" <?php if (strpos($talent_creative, 'moderný tanec') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="dancing_modern">Moderný tanec</label>
                    </div>
                    <label class="d-block mb-0 mt-3"><strong>Jazykové znalosti</strong></label>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="english" name="l1" value="angličtina, " <?php if (strpos($talent_languages, 'angličtina') !== false) echo "checked"; ?> >
                        <label class="custom-control-label " for="english">Angličtina</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="czech" name="l2" value="čeština, " <?php if (strpos($talent_languages, 'čeština') !== false) echo "checked"; ?> >
                        <label class="custom-control-label " for="czech">Čeština</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="france" name="l3" value="francúzština, " <?php if (strpos($talent_languages, 'francúzština') !== false) echo "checked"; ?> >
                        <label class="custom-control-label " for="france">Francúzština</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hungarian" name="l4" value="maďarčina, " <?php if (strpos($talent_languages, 'maďarčina') !== false) echo "checked"; ?> >
                        <label class="custom-control-label " for="hungarian">Maďarčina</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="german" name="l5" value="nemčina, " <?php if (strpos($talent_languages, 'nemčina') !== false) echo "checked"; ?> >
                        <label class="custom-control-label " for="german">Nemčina</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="russian" name="l6" value="ruština, " <?php if (strpos($talent_languages, 'ruština') !== false) echo "checked"; ?> >
                        <label class="custom-control-label " for="russian">Ruština</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="slovak" name="l7" value="slovenčina, " <?php if (strpos($talent_languages, 'slovenčina') !== false) echo "checked"; ?> >
                        <label class="custom-control-label " for="slovak">Slovenčina</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="spain" name="l8" value="španielčina, " <?php if (strpos($talent_languages, 'španielčina') !== false) echo "checked"; ?> >
                        <label class="custom-control-label " for="spain">Španielčina</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="ital" name="l9" value="taliančina, " <?php if (strpos($talent_languages, 'taliančina') !== false) echo "checked"; ?> >
                        <label class="custom-control-label " for="ital">Taliančina</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="d-block mb-0 mt-3"><strong>Pohybové schopnosti</strong></label>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="basketball" name="mv1" value="basketball, " <?php if (strpos($talent_movement, 'basketball') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="basketball">Basketbal</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="bike" name="mv2" value="cyklistyka, " <?php if (strpos($talent_movement, 'cyklistyka') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="bike">Cyklistyka</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="fitness" name="mv3" value="fitness, " <?php if (strpos($talent_movement, 'fitness') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="fitness">Fitness</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="footbal" name="mv4" value="futbal, " <?php if (strpos($talent_movement, 'futbal') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="footbal">Futbal</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="gymnastics" name="mv5" value="gymnastika, " <?php if (strpos($talent_movement, 'gymnastika') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="gymnastics">Gymnsatika</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="handball" name="mv6" value="hádzaná, " <?php if (strpos($talent_movement, 'hádzaná') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="handball">Hádzaná</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="horse_riding" name="mv7" value="jazda na koni, " <?php if (strpos($talent_movement, 'jazda na koni') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="horse_riding">Jazda na koni</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="roller_skating" name="mv8" value="korčulovanie, " <?php if (strpos($talent_movement, 'korčulovanie') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="roller_skating">Korčuľovanie</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="ski" name="mv9" value="lyžovanie, " <?php if (strpos($talent_movement, 'lyžovanie') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="ski">Lyžovanie</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="swimming" name="mv10" value="plávanie, " <?php if (strpos($talent_movement, 'plávanie') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="swimming">Plávanie</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="skate" name="mv11" value="skateboard, " <?php if (strpos($talent_movement, 'skateboard') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="skate">Skateboard</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="snowboard" name="mv12" value="snowboard, " <?php if (strpos($talent_movement, 'snowboard') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="snowboard">Snowboard</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="tennis" name="mv13" value="tennis, " <?php if (strpos($talent_movement, 'tennis') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="tennis">Tenis</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="water_sports" name="mv14" value="vodné športy, " <?php if (strpos($talent_movement, 'vodné športy') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="water_sports">Vodné športy</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="volleyball" name="mv15" value="volleyball, " <?php if (strpos($talent_movement, 'volleyball') !== false) echo "checked"; ?>>
                        <label class="custom-control-label " for="volleyball">Volejbal</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="workout" name="mv16" value="workout, "  <?php if (strpos($talent_movement, 'workout') !== false) echo "checked"; ?> >
                        <label class="custom-control-label " for="workout">Workout</label>
                    </div>
                    <div class="about-me">
                        <label class="d-block mb-0 mt-3"><strong>Informácie o mne</strong></label>
                        <textarea name="bio" id="bio" rows="8" maxlength="555"><?php echo $bio; ?></textarea>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <input type="hidden" id="croppedImages" name="croppedImages">
                    <input type="submit" class="btn btn-primary w-50 my-4" value="Uložiť zmeny" />
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

<?php include 'components/footer.php';?>
<?php include 'components/bottom.php';?>
