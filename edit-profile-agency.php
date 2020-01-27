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
				<div class="col-lg-4 col-md-6 mt-3 cropped-image">
					<label class="mb-0 w-100">
						<input type="file" name="p001" id="p001" data-section="main" data-unlock="img-container" data-cropimageid="p001" data-aspectratio="<?= 16/9 ?>" class="image-upload-input"/>
						<div class="cropped-image-overlay delete"></div>
						<img id="cropped_p00a1" src="Profiles/<?php echo $ID; ?>/images/p001.jpg" alt="" class="w-100 border-image">
					</label>
				</div>
				<div class="col-lg-6 col-md-6">
					<h1>Editácia<br>Agentúra - Premium účet</h1>
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
							<input type="text" class="registration-input" name="name" data-necessary="text" value="<?php echo $name; ?>"/>
						</div>
						<div class="col-6">
							<label for="ico" class="mb-0 mt-3"><strong>IČO</strong></label>
							<input type="text" class="registration-input" name="ico" data-necessary="text" value="<?php echo $ico; ?>"/>
						</div>
						<div class="col-6">
							<label for="dic" class="mb-0 mt-3"><strong>DIČ</strong></label>
							<input type="text" class="registration-input" name="dic" data-necessary="text" value="<?php echo $dic; ?>"/>
						</div>
						<div class="col-6">
							<label for="icdph" class="mb-0 mt-3"><strong>IČ DPH</strong></label>
							<input type="text" class="registration-input" name="icdph" value="<?php echo $icdph; ?>"/>
						</div>
					</div>
					<h3>Kategória</h3>
					<div class="row pb-5">
						<div class="col-12">
							<label for="category" class="mb-0 mt-3"><strong>Prosím vyberte jednu z možností</strong></label>
							<select name="category" id="category" class="filter" data-placeholder="Prosím vyberte jednu z možností" data-necessary="text">
								<option value=""></option>
								<option value="modeling_agency" <?php if ($category == "modeling_agency") echo "selected"; ?> >Modelingové agentúry</option>
								<option value="casting" <?php if ($category == "casting") echo "selected"; ?> >Castingove a eventové agentúry</option>
								<option value="tv" <?php if ($category == "tv") echo "selected"; ?> >Reklamné produkcie, TV produkcie, TV Média a iné...</option>
							</select>
						</div>
					</div>
					<h3>Kontakt</h3>
					<div class="row pb-5">
						<div class="col-6">
							<label for="phone" class="mb-0 mt-3"><strong>Telefón</strong></label>
							<input type="text" class="registration-input" name="phone" data-necessary="text" value="<?php echo $phone; ?>"/>
						</div>
						<div class="col-6">
							<label for="web" class="mb-0 mt-3"><strong>Web</strong></label>
							<input type="text" class="registration-input" name="web" value="<?php echo $web; ?>"/>
						</div>
						<div class="col-6">
							<label for="conemail" class="mb-0 mt-3"><strong>Kontaktný e-mail pre správy</strong></label>
							<input type="text" class="registration-input" name="conemail" data-necessary="text" value="<?php echo $conemail; ?>"/>
						</div>
					</div>
					<h3>Logo</h3>
					<div class="row pb-5 mt-3 no-gutters">
						<div class="col-md-6 col-12 cropped-image">
							<label class="mb-0 w-100">
								<input type="file" name="logo" id="logo" data-section="main" data-unlock="img-container" data-cropimageid="logo" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_logo" src="Profiles/<?php echo $ID; ?>/images/logo.jpg" alt="" class="w-100 border-image">
							</label>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h3>Adresa</h3>
					<div class="row pb-5">
						<div class="col-6">
							<label for="street" class="mb-0 mt-3"><strong>Ulica</strong></label>
							<input type="text" class="registration-input" name="street" data-necessary="text" value="<?php echo $street; ?>"/>
						</div>
						<div class="col-6">
							<label for="city" class="mb-0 mt-3"><strong>Mesto</strong></label>
							<input type="text" class="registration-input" name="city" data-necessary="text" value="<?php echo $city; ?>"/>
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
							<label for="zip_code" class="mb-0 mt-3"><strong>PSČ</strong></label>
							<input type="text" class="registration-input" name="postcode" data-necessary="text" value="<?php echo $postcode; ?>"/>
						</div>
					</div>
					<h3>Sociálne siete</h3>
					<div class="row pb-5">
						<div class="col-12">
							<label for="fb" class="mb-0 mt-3"><strong>Facebook</strong></label>
							<input type="text" class="registration-input" name="fb" value="<?php echo $fb; ?>"/>
						</div>
						<div class="col-12">
							<label for="ig" class="mb-0 mt-3"><strong>Instagram</strong></label>
							<input type="text" class="registration-input" name="ig" value="<?php echo $ig; ?>"/>
						</div>
					</div>
					<h3>Otváracie hodiny</h3>
					<div class="row pb-5">
						<div class="col-6">
							<div class="custom-control custom-checkbox pb-1">
								<input type="checkbox" class="custom-control-input" id="monday" value="Pondelok" name="op1" <?php if (strpos($opendays, 'Pondelok') !== false) echo "checked"; ?> >
								<label class="custom-control-label " for="monday">Pondelok</label>
							</div>
							<input type="text" class="registration-input" name="op1t" value="<?php echo $openhours[0]->hours; ?>"/>
						</div>
						<div class="col-6">
							<div class="custom-control custom-checkbox pb-1">
								<input type="checkbox" class="custom-control-input" id="tuesday" value="Utorok" name="op2" <?php if (strpos($opendays, 'Utorok') !== false) echo "checked"; ?>>
								<label class="custom-control-label " for="tuesday">Utorok</label>
							</div>
							<input type="text" class="registration-input" name="op2t" value="<?php echo $openhours[1]->hours; ?>"/>
						</div>
						<div class="col-6">
							<div class="custom-control custom-checkbox pb-1">
								<input type="checkbox" class="custom-control-input" id="wednesday" value="Streda" name="op3"  <?php if (strpos($opendays, 'Streda') !== false) echo "checked"; ?>>
								<label class="custom-control-label " for="wednesday">Streda</label>
							</div>
							<input type="text" class="registration-input" name="op3t" value="<?php echo $openhours[2]->hours; ?>"/>
						</div>
						<div class="col-6">
							<div class="custom-control custom-checkbox pb-1">
								<input type="checkbox" class="custom-control-input" id="thursday" value="Štvrtok" name="op4"  <?php if (strpos($opendays, 'Štvrtok') !== false) echo "checked"; ?>>
								<label class="custom-control-label " for="thursday">Štvrtok</label>
							</div>
							<input type="text" class="registration-input" name="op4t" value="<?php echo $openhours[3]->hours; ?>"/>
						</div>
						<div class="col-6">
							<div class="custom-control custom-checkbox pb-1">
								<input type="checkbox" class="custom-control-input" id="friday" value="Piatok" name="op5"  <?php if (strpos($opendays, 'Piatok') !== false) echo "checked"; ?>>
								<label class="custom-control-label " for="friday">Piatok</label>
							</div>
							<input type="text" class="registration-input" name="op5t" value="<?php echo $openhours[4]->hours; ?>"/>
						</div>
						<div class="col-6">
							<div class="custom-control custom-checkbox pb-1">
								<input type="checkbox" class="custom-control-input" id="saturday" value="Sobota" name="op6"  <?php if (strpos($opendays, 'Sobota') !== false) echo "checked"; ?>>
								<label class="custom-control-label " for="saturday">Sobota</label>
							</div>
							<input type="text" class="registration-input" name="op6t" value="<?php echo $openhours[5]->hours; ?>"/>
						</div>
						<div class="col-6">
							<div class="custom-control custom-checkbox pb-1">
								<input type="checkbox" class="custom-control-input" id="sunday" value="Nedeľa" name="op7"  <?php if (strpos($opendays, 'Nedeľa') !== false) echo "checked"; ?>>
								<label class="custom-control-label " for="sunday">Nedeľa</label>
							</div>
							<input type="text" class="registration-input" name="op7t" value="<?php echo $openhours[6]->hours; ?>"/>
						</div>
					</div>
					<h3>Biografia</h3>
					<div class="row pb-5">
						<div class="col-md-12 text-center">
							<textarea name="bio" id="about" rows="7" maxlength="555"><?php echo $bio; ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<h3>Úspechy</h3>
			<div class="row mt-3 tabs photos">
				<div class="col-md col-6 order-1 order-md-1 pt-md-0 pt-3 px-1 pb-2 pb-md-0">

					<div class="cropped-image mb-2">
						<label class="mb-0 w-100">
							<input type="file" name="suc1" id="suc1" data-section="main" data-edit="true" data-unlock="p013" data-cropimageid="suc1" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
							<?
                            if (file_exists("Profiles/".$ID."/images/suc1.jpg")) {
                                echo "
                                <div class=\"cropped-image-overlay delete\"></div>
							    <img id=\"cropped_suc1\" src=\"Profiles/".$ID."/images/suc1.jpg\" alt=\"\" class=\"w-100\">
                                ";
                            } else echo "
                                <div class=\"cropped-image-overlay\"></div>
							    <img id=\"cropped_suc1\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                            ";
                            ?>
						</label>
					</div>
					<textarea rows="2" class="registration-input mt-0" name="suc1_text" placeholder="Popis" maxlength="50"><? echo $successes[0]->text; ?></textarea>
					<input type="text" class="registration-input mb-4 mt-0" name="suc1_link" placeholder="Link" value="<? echo $successes[0]->link; ?>"/>

					<div class="cropped-image">
						<label class="mb-0 w-100">
							<input type="file" name="suc2" id="suc2" data-section="main" data-edit="true" data-cropimageid="suc2" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                            <?
                            if (file_exists("Profiles/".$ID."/images/suc2.jpg")) {
                                echo "
                                <div class=\"cropped-image-overlay delete\"></div>
							    <img id=\"cropped_suc2\" src=\"Profiles/".$ID."/images/suc2.jpg\" alt=\"\" class=\"w-100\">
                                ";
                            } else echo "
                                <div class=\"cropped-image-overlay\"></div>
							    <img id=\"cropped_suc2\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                            ";
                            ?>
						</label>
					</div>
					<textarea rows="2" class="registration-input mt-2" name="suc2_text" placeholder="Popis" maxlength="50"><? echo $successes[1]->text; ?></textarea>
					<input type="text" class="registration-input mb-4 mt-0" name="suc2_link" placeholder="Link"value="<? echo $successes[1]->link; ?>"/>

				</div>
				<div class="col-md col-6 order-3 order-md-2 px-1">

					<div class="cropped-image mb-2">
						<label class="mb-0 w-100">
							<input type="file" name="suc3" id="suc3" data-section="main" data-edit="true" data-unlock="p014" data-cropimageid="suc3" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                            <?
                            if (file_exists("Profiles/".$ID."/images/suc3.jpg")) {
                                echo "
                                <div class=\"cropped-image-overlay delete\"></div>
							    <img id=\"cropped_suc3\" src=\"Profiles/".$ID."/images/suc3.jpg\" alt=\"\" class=\"w-100\">
                                ";
                            } else echo "
                                <div class=\"cropped-image-overlay\"></div>
							    <img id=\"cropped_suc3\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                            ";
                            ?>
						</label>
					</div>
					<textarea rows="2" class="registration-input mt-0" name="suc3_text" placeholder="Popis" maxlength="50"><? echo $successes[2]->text; ?></textarea>
					<input type="text" class="registration-input mb-4 mt-0" name="suc3_link" placeholder="Link" value="<? echo $successes[2]->link; ?>"/>

					<div class="cropped-image">
						<label class="mb-0 w-100">
							<input type="file" name="suc4" id="suc4" data-section="main" data-edit="true" data-unlock="p018" data-cropimageid="suc4" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                            <?
                            if (file_exists("Profiles/".$ID."/images/suc4.jpg")) {
                                echo "
                                <div class=\"cropped-image-overlay delete\"></div>
							    <img id=\"cropped_suc4\" src=\"Profiles/".$ID."/images/suc4.jpg\" alt=\"\" class=\"w-100\">
                                ";
                            } else echo "
                                <div class=\"cropped-image-overlay\"></div>
							    <img id=\"cropped_suc4\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                            ";
                            ?>
						</label>
					</div>
					<textarea rows="2" class="registration-input mt-2" name="suc4_text" placeholder="Popis" maxlength="50"><? echo $successes[3]->text; ?></textarea>
					<input type="text" class="registration-input mb-4 mt-0" name="suc4_link" placeholder="Link" value="<? echo $successes[3]->link; ?>"/>

				</div>
				<div class="col-md col-6 order-2 order-md-3 pt-md-0 pt-3 px-1 pb-2 pb-md-0">

					<div class="cropped-image mb-2">
						<label class="mb-0 w-100">
							<input type="file" name="suc5" id="suc5" data-section="main" data-edit="true" data-unlock="p015" data-cropimageid="suc5" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                            <?
                            if (file_exists("Profiles/".$ID."/images/suc5.jpg")) {
                                echo "
                                <div class=\"cropped-image-overlay delete\"></div>
							    <img id=\"cropped_suc5\" src=\"Profiles/".$ID."/images/suc5.jpg\" alt=\"\" class=\"w-100\">
                                ";
                            } else echo "
                                <div class=\"cropped-image-overlay\"></div>
							    <img id=\"cropped_suc5\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                            ";
                            ?>
						</label>
					</div>
					<textarea rows="2" class="registration-input mt-0" name="suc5_text" placeholder="Popis" maxlength="50"><? echo $successes[4]->text; ?></textarea>
					<input type="text" class="registration-input mb-4 mt-0" name="suc5_link" placeholder="Link" value="<? echo $successes[4]->link; ?>"/>

					<div class="cropped-image">
						<label class="mb-0 w-100">
							<input type="file" name="suc6" id="suc6" data-section="main" data-edit="true" data-unlock="suc8" data-cropimageid="suc6" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                            <?
                            if (file_exists("Profiles/".$ID."/images/suc6.jpg")) {
                                echo "
                                <div class=\"cropped-image-overlay delete\"></div>
							    <img id=\"cropped_suc6\" src=\"Profiles/".$ID."/images/suc6.jpg\" alt=\"\" class=\"w-100\">
                                ";
                            } else echo "
                                <div class=\"cropped-image-overlay\"></div>
							    <img id=\"cropped_suc6\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                            ";
                            ?>
						</label>
					</div>
					<textarea rows="2" class="registration-input mt-2" name="suc6_text" placeholder="Popis" maxlength="50"><? echo $successes[5]->text; ?></textarea>
					<input type="text" class="registration-input mb-4 mt-0" name="suc6_link" placeholder="Link" value="<? echo $successes[5]->link; ?>"/>

				</div>
				<div class="col-md col-6 order-2 order-md-3 pt-md-0 pt-3 px-1 pb-2 pb-md-0">
					<div class="cropped-image mb-2">
						<label class="mb-0 w-100">
							<input type="file" name="suc7" id="suc7" data-section="main" data-edit="true" data-unlock="suc7" data-cropimageid="suc7" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                            <?
                            if (file_exists("Profiles/".$ID."/images/suc7.jpg")) {
                                echo "
                                <div class=\"cropped-image-overlay delete\"></div>
							    <img id=\"cropped_suc7\" src=\"Profiles/".$ID."/images/suc7.jpg\" alt=\"\" class=\"w-100\">
                                ";
                            } else echo "
                                <div class=\"cropped-image-overlay\"></div>
							    <img id=\"cropped_suc7\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                            ";
                            ?>
						</label>
					</div>
					<textarea rows="2" class="registration-input mt-0" name="suc7_text" placeholder="Popis" maxlength="50"><? echo $successes[6]->text; ?></textarea>
					<input type="text" class="registration-input mb-4 mt-0" name="suc7_link" placeholder="Link" value="<? echo $successes[6]->link; ?>"/>

					<div class="cropped-image">
						<label class="mb-0 w-100">
							<input type="file" name="suc8" id="suc8" data-section="main" data-edit="true" data-unlock="suc8" data-cropimageid="suc8" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                            <?
                            if (file_exists("Profiles/".$ID."/images/suc8.jpg")) {
                                echo "
                                <div class=\"cropped-image-overlay delete\"></div>
							    <img id=\"cropped_suc8\" src=\"Profiles/".$ID."/images/suc8.jpg\" alt=\"\" class=\"w-100\">
                                ";
                            } else echo "
                                <div class=\"cropped-image-overlay\"></div>
							    <img id=\"cropped_suc8\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                            ";
                            ?>
						</label>
					</div>
					<textarea rows="2" class="registration-input mt-2" name="suc8_text" placeholder="Popis" maxlength="50"><? echo $successes[7]->text; ?></textarea>
					<input type="text" class="registration-input mb-4 mt-0" name="suc8_link" placeholder="Link" value="<? echo $successes[7]->link; ?>"/>

				</div>
				<div class="col-md col-6 order-4 order-md-4 px-1">

					<div class="cropped-image mb-2">
						<label class="mb-0 w-100">
							<input type="file" name="suc9" id="suc9" data-section="main" data-edit="true" data-unlock="suc9" data-cropimageid="suc9" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                            <?
                            if (file_exists("Profiles/".$ID."/images/suc9.jpg")) {
                                echo "
                                <div class=\"cropped-image-overlay delete\"></div>
							    <img id=\"cropped_suc9\" src=\"Profiles/".$ID."/images/suc9.jpg\" alt=\"\" class=\"w-100\">
                                ";
                            } else echo "
                                <div class=\"cropped-image-overlay\"></div>
							    <img id=\"cropped_suc9\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                            ";
                            ?>
						</label>
					</div>
					<textarea rows="2" class="registration-input mt-0" name="suc9_text" placeholder="Popis" maxlength="50"><? echo $successes[8]->text; ?></textarea>
					<input type="text" class="registration-input mb-4 mt-0" name="suc9_link" placeholder="Link" value="<? echo $successes[8]->link; ?>"/>

					<div class="cropped-image">
						<label class="mb-0 w-100">
							<input type="file" name="suc10" id="suc10" data-section="main" data-edit="true" data-unlock="p021" data-cropimageid="suc10" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
                            <?
                            if (file_exists("Profiles/".$ID."/images/suc10.jpg")) {
                                echo "
                                <div class=\"cropped-image-overlay delete\"></div>
							    <img id=\"cropped_suc10\" src=\"Profiles/".$ID."/images/suc10.jpg\" alt=\"\" class=\"w-100\">
                                ";
                            } else echo "
                                <div class=\"cropped-image-overlay\"></div>
							    <img id=\"cropped_suc10\" src=\"images/540x540.jpg\" alt=\"\" class=\"w-100\">
                            ";
                            ?>
						</label>
					</div>
					<textarea rows="2" class="registration-input mt-2" name="suc10_text" placeholder="Popis" maxlength="50"><? echo $successes[9]->text; ?></textarea>
					<input type="text" class="registration-input mb-4 mt-0" name="suc10_link" placeholder="Link" value="<? echo $successes[9]->link; ?>"/>
				</div>
			</div>
			<div class="row pb-5">
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
