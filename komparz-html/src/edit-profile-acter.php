<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>

<section id="profile" style="background-image: url(../images/komparz-banner.jpg);">
	<div class="container py-7 pt-2 text-center">
		<div class="row no-gutters">
			<div class="col-lg-3 col-md-6 mt-3 cropped-image">
				<label class="mb-0 w-100">
					<input type="file" name="p001" id="p001" data-section="main" data-edit="true" data-unlock="img-container" data-cropimageid="p001" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
					<div class="cropped-image-overlay delete"></div>
					<img id="cropped_p001" src="images/profile.jpg" alt="" class="w-100 border-image">
				</label>
			</div>
			<div class="col-lg-6 col-md-6">
				<h1>Registrácia<br>Komparzisti a herci</h1>
			</div>
			<div class="col-lg-3 col-md-6"></div>
		</div>
	</div>
	<div class="container py-4">
		<div class="row pb-4">
			<div class="col-md-6 pr-md-4 registration-images">
				<div class="img-container">
					<div class="cropped-image main-image photos">
						<label class="mb-0 w-100">
							<input type="file" name="p011" id="p011" data-section="main" data-edit="true" data-unlock="photos" data-cropimageid="p011" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
							<div class="cropped-image-overlay delete"></div>
							<img id="cropped_p011" src="images/profile.jpg" alt="" class="w-100">
						</label>
					</div>
					<div class="cropped-image main-image photobooks" style="display: none;">
						<label class="mb-0 w-100">
							<input type="file" name="p021" id="p021" data-section="main" data-edit="true" data-unlock="photobooks" data-cropimageid="p021" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
							<div class="cropped-image-overlay delete"></div>
							<img id="cropped_p021" src="images/profile.jpg" alt="" class="w-100">
						</label>
					</div>
					<div class="cropped-image main-image polaroids" style="display: none;">
						<label class="mb-0 w-100">
							<input type="file" name="p031" id="p031" data-section="main" data-edit="true" data-unlock="polaroids" data-cropimageid="p031" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
							<div class="cropped-image-overlay delete"></div>
							<img id="cropped_p031" src="images/profile.jpg" alt="" class="w-100">
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
							<label class="mb-0 w-100">
								<input type="file" name="p012" id="p012" data-section="main" data-edit="true" data-unlock="p013" data-cropimageid="p012" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p012" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
						<div class="cropped-image">
							<label class="mb-0 w-100">
								<input type="file" name="p016" id="p016" data-section="main" data-edit="true" data-unlock="p017" data-cropimageid="p016" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p016" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
					</div>
					<div class="col-md-3 col-6 order-3 order-md-2 px-1">
						<div class="cropped-image mb-2">
							<label class="mb-0 w-100">
								<input type="file" name="p013" id="p013" data-section="main" data-edit="true" data-unlock="p014" data-cropimageid="p013" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p013" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
						<div class="cropped-image">
							<label class="mb-0 w-100">
								<input type="file" name="p017" id="p017" data-section="main" data-edit="true" data-unlock="p018" data-cropimageid="p017" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p017" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
					</div>
					<div class="col-md-3 col-6 order-2 order-md-3 pt-md-0 pt-3 px-1 pb-2 pb-md-0">
						<div class="cropped-image mb-2">
							<label class="mb-0 w-100">
								<input type="file" name="p014" id="p014" data-section="main" data-edit="true" data-unlock="p015" data-cropimageid="p014" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p014" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
						<div class="cropped-image">
							<label class="mb-0 w-100">
								<input type="file" name="p018" id="p018" data-section="main" data-edit="true" data-unlock="p019" data-cropimageid="p018" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p018" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
					</div>
					<div class="col-md-3 col-6 order-4 order-md-4 px-1">
						<div class="cropped-image mb-2">
							<label class="mb-0 w-100">
								<input type="file" name="p015" id="p015" data-section="main" data-edit="true" data-unlock="p016" data-cropimageid="p015" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p015" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
						<div class="cropped-image">
							<label class="mb-0 w-100">
								<input type="file" name="p019" id="p019" data-section="main" data-edit="true" data-unlock="p021" data-cropimageid="p019" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p019" src="images/profile.jpg" alt="" class="w-100">
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
					<div class="col-md-3 col-6 order-last order-md-last px-1">
						<div class="cropped-image mb-2">
							<div class="cropped-image-overlay delete"></div>
							<img data-section="photos" data-id="extra_1" src="images/profile.jpg" alt="" class="w-100">
						</div>
					</div>
					<div class="col-md-3 col-6 order-last order-md-last px-1">
						<div class="cropped-image mb-2">
							<div class="cropped-image-overlay delete"></div>
							<img data-section="photos" data-id="extra_2" src="images/profile.jpg" alt="" class="w-100">
						</div>
					</div>
				</div>
				<div class="row no-gutters tabs photobooks" style="display: none">
					<div class="col-md-3 col-6 order-1 order-md-1 pt-md-0 px-1 pb-2 pb-md-0">
						<div class="cropped-image mb-2">
							<label class="mb-0 w-100">
								<input type="file" name="p022" id="p022" data-section="main" data-edit="true" data-unlock="p023" data-cropimageid="p022" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p022" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
						<div class="cropped-image">
							<label class="mb-0 w-100">
								<input type="file" name="p026" id="p026" data-section="main" data-edit="true" data-unlock="p027" data-cropimageid="p026" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p026" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
					</div>
					<div class="col-md-3 col-6 order-3 order-md-2 px-1">
						<div class="cropped-image mb-2">
							<label class="mb-0 w-100">
								<input type="file" name="p023" id="p023" data-section="main" data-edit="true" data-unlock="p024" data-cropimageid="p023" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p023" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
						<div class="cropped-image">
							<label class="mb-0 w-100">
								<input type="file" name="p027" id="p027" data-section="main" data-edit="true" data-unlock="p028" data-cropimageid="p027" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p027" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
					</div>
					<div class="col-md-3 col-6 order-2 order-md-3 t-md-0 px-1 pb-2 pb-md-0">
						<div class="cropped-image mb-2">
							<label class="mb-0 w-100">
								<input type="file" name="p024" id="p024" data-section="main" data-edit="true" data-unlock="p025" data-cropimageid="p024" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p024" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
						<div class="cropped-image">
							<label class="mb-0 w-100">
								<input type="file" name="p028" id="p028" data-section="main" data-edit="true" data-unlock="p029" data-cropimageid="p028" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p028" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
					</div>
					<div class="col-md-3 col-6 order-4 order-md-4 px-1">
						<div class="cropped-image mb-2">
							<label class="mb-0 w-100">
								<input type="file" name="p025" id="p025" data-section="main" data-edit="true" data-unlock="p026" data-cropimageid="p025" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p025" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
						<div class="cropped-image">
							<label class="mb-0 w-100">
								<input type="file" name="p029" id="p029" data-section="main" data-edit="true" data-unlock="p031" data-cropimageid="p029" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p029" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
					</div>
					<div class="col-12 form-group order-5 mt-3 px-1">
						<h6 class="m-0 font-weight-bold text-primary cs-input-label">Pridať ďalšie fotofrafie do Fotobooky</h6>
						<div class="form-control form-control-user overflowHidden">
							<input name="photobooks[]" type="file" class="cs-input-type-mf" multiple="" placeholder="Pridať ďalšie fotografie">
							<div class="cs-input-type-f-erase" style="display: none;"></div>
						</div>
					</div>
				</div>
				<div class="row no-gutters tabs polaroids" style="display: none">
					<div class="col-md-3 col-6 order-1 order-md-1 pt-md-0 px-1 pb-2 pb-md-0">
						<div class="cropped-image mb-2">
							<label class="mb-0 w-100">
								<input type="file" name="p032" id="p032" data-section="main" data-edit="true" data-unlock="p033" data-cropimageid="p032" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p032" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
						<div class="cropped-image">
							<label class="mb-0 w-100">
								<input type="file" name="p036" id="p036" data-section="main" data-edit="true" data-unlock="p037" data-cropimageid="p036" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p036" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
					</div>
					<div class="col-md-3 col-6 order-3 order-md-2 px-1">
						<div class="cropped-image mb-2">
							<label class="mb-0 w-100">
								<input type="file" name="p033" id="p033" data-section="main" data-edit="true" data-unlock="p034" data-cropimageid="p033" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p033" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
						<div class="cropped-image">
							<label class="mb-0 w-100">
								<input type="file" name="p037" id="p037" data-section="main" data-edit="true" data-unlock="p038" data-cropimageid="p037" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p037" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
					</div>
					<div class="col-md-3 col-6 order-2 order-md-3 pt-md-0 px-1 pb-2 pb-md-0">
						<div class="cropped-image mb-2">
							<label class="mb-0 w-100">
								<input type="file" name="p034" id="p034" data-section="main" data-edit="true" data-unlock="p035" data-cropimageid="p034" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p034" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
						<div class="cropped-image">
							<label class="mb-0 w-100">
								<input type="file" name="p038" id="p038" data-section="main" data-edit="true" data-unlock="p039" data-cropimageid="p038" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p038" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
					</div>
					<div class="col-md-3 col-6 order-4 order-md-4 px-1">
						<div class="cropped-image mb-2">
							<label class="mb-0 w-100">
								<input type="file" name="p035" id="p035" data-section="main" data-edit="true" data-unlock="p036" data-cropimageid="p035" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p035" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
						<div class="cropped-image">
							<label class="mb-0 w-100">
								<input type="file" name="p039" id="p039" data-section="main" data-cropimageid="p039" data-aspectratio="<?= 1/1 ?>" class="image-upload-input"/>
								<div class="cropped-image-overlay delete"></div>
								<img id="cropped_p039" src="images/profile.jpg" alt="" class="w-100">
							</label>
						</div>
					</div>
					<div class="col-12 form-group order-5 mt-3 px-1">
						<h6 class="m-0 font-weight-bold text-primary cs-input-label">Pridať ďalšie fotofrafie do Polaroidy</h6>
						<div class="form-control form-control-user overflowHidden">
							<input name="polaroids[]" type="file" class="cs-input-type-mf" multiple="" placeholder="Pridať ďalšie fotografie">
							<div class="cs-input-type-f-erase" style="display: none;"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="">
					<h3>Informácie o Komparzistovi / hercovi</h3>
					<div class="row pt-4">
						<div class="col-6">
							<label for="name" class="mb-0 mt-3"><strong>Meno</strong></label>
							<input type="text" class="registration-input" name="name"/>
						</div>
						<div class="col-6">
							<label for="surname" class="mb-0 mt-3"><strong>Priezvisko</strong></label>
							<input type="text" class="registration-input" name="surname"/>
						</div>
						<div class="col-6">
							<label for="gender" class="mb-0 mt-3"><strong>Pohlavie</strong></label>
							<select name="gender" id="gender" class="filter" data-placeholder="Pohlavie">
								<option value=""></option>
								<option value="Muž">Muž</option>
								<option value="Žena">Žena</option>
								<option value="Iné">Iné</option>
							</select>
						</div>
						<div class="col-6">
							<label for="email" class="mb-0 mt-3"><strong>E-mail</strong></label>
							<input type="text" class="registration-input" name="email"/>
						</div>
						<div class="col-6">
							<label for="password" class="mb-0 mt-3"><strong>Heslo</strong></label>
							<input type="password" class="registration-input" name="password"/>
						</div>
						<div class="col-6">
							<label for="password_confirm" class="mb-0 mt-3"><strong>Potvrďte heslo</strong></label>
							<input type="password" class="registration-input" name="password_confirm"/>
						</div>
						<div class="col-6">
							<label for="phone" class="mb-0 mt-3"><strong>Telefón</strong></label>
							<input type="text" class="registration-input" name="phone"/>
						</div>
						<div class="col-6">
							<label for="street" class="mb-0 mt-3"><strong>Ulica</strong></label>
							<input type="text" class="registration-input" name="street"/>
						</div>
						<div class="col-6">
							<label for="city" class="mb-0 mt-3"><strong>Mesto</strong></label>
							<input type="text" class="registration-input" name="city"/>
						</div>
						<div class="col-6">
							<label for="region" class="mb-0 mt-3"><strong>Kraj</strong></label>
							<input type="text" class="registration-input" name="region"/>
						</div>
						<div class="col-6">
							<label for="zip_code" class="mb-0 mt-3"><strong>PSČ</strong></label>
							<input type="text" class="registration-input" name="zip_code"/>
						</div>
						<div class="col-6">
							<label for="nationality" class="mb-0 mt-3"><strong>Národnosť</strong></label>
							<input type="text" class="registration-input" name="nationality"/>
						</div>
						<div class="col-6">
							<label for="work_school" class="mb-0 mt-3"><strong>Zamestnanie / Škola</strong></label>
							<input type="text" class="registration-input" name="work_school"/>
						</div>
						<div class="col-6">
							<label for="date_of_birth" class="mb-0 mt-3"><strong>Dátum narodenia</strong></label>
							<input name="date_of_birth" type="text" placeholder="Dátum narodenia" data-provide="datepicker" data-date-language="sk">
						</div>
						<div class="col-6">
							<label for="height" class="mb-0 mt-3"><strong>Výška</strong></label>
							<select name="height" id="height" class="filter " data-placeholder="od">
								<option value=""></option>
								<option value="140cm">140cm</option>
								<option value="120cm">120cm</option>
								<option value="190cm">190cm</option>
							</select>
						</div>
						<div class="col-6">
							<label for="eye_color" class="mb-0 mt-3"><strong>Farba očí</strong></label>
							<select name="eye_color" id="eye_color" class="filter" data-placeholder="Farba očí">
								<option value=""></option>
								<option value="modrá">modrá</option>
								<option value="zelená">zelená</option>
								<option value="hnedá">hnedá</option>
							</select>
						</div>
						<div class="col-6">
							<label for="hair_color" class="mb-0 mt-3"><strong>Farba vlasov</strong></label>
							<select name="hair_color" id="hair_color" class="filter " data-placeholder="Farba vlasov">
								<option value=""></option>
								<option value="modrá">Albín</option>
								<option value="zelená">Blond</option>
								<option value="hnedá">Červená</option>
								<option value="hnedá">Čierna</option>
								<option value="hnedá">Hnedá</option>
								<option value="hnedá">Hrdzavá</option>
								<option value="hnedá">Prešedivelá</option>
								<option value="hnedá">Svetlo hnedá</option>
								<option value="hnedá">Špinavý blond</option>
								<option value="hnedá">Šedivá</option>
							</select>
						</div>
						<div class="col-12">
							<label class="d-block mb-0 mt-3"><strong>Zaujímam sa o</strong></label>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="acting" name="acting">
								<label class="custom-control-label " for="acting">Herectvo</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="comparz" name="comparz">
								<label class="custom-control-label " for="comparz">Komparz</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="comparz_text" name="comparz_text">
								<label class="custom-control-label " for="comparz_text">Komparz + text</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="dabing" name="dabing">
								<label class="custom-control-label " for="dabing">Dabing</label>
							</div>
						</div>
						<div class="col-12">
							<label class="d-block mb-0 mt-3"><strong>Zvláštne znamenia</strong></label>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="dabing" name="dabing">
								<label class="custom-control-label " for="dabing">Tetovanie</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="piercing" name="piercing">
								<label class="custom-control-label " for="piercing">Piercing</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="scar" name="scar">
								<label class="custom-control-label " for="scar">Jazva</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="braces" name="braces">
								<label class="custom-control-label " for="braces">Strojček na zuby</label>
							</div>
						</div>
						<div class="col-12">
							<label class="d-block mb-0 mt-3"><strong>Umelecké schopnosti</strong></label>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="ballet" name="ballet">
								<label class="custom-control-label " for="ballet">Balet</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="breakdance" name="breakdance">
								<label class="custom-control-label " for="breakdance">Breakdance</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="acting" name="acting">
								<label class="custom-control-label " for="acting">Herectvo</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="music_instrument" name="music_instrument">
								<label class="custom-control-label " for="music_instrument">Hra na hudobný nástroj</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="singing" name="singing">
								<label class="custom-control-label " for="singing">Spev</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="dancing_ballroom" name="dancing_ballroom">
								<label class="custom-control-label " for="dancing_ballroom">Spoločenský tanec</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="dancing_folk" name="dancing_folk">
								<label class="custom-control-label " for="dancing_folk">Ľudový tanec</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="dancing_modern" name="dancing_modern">
								<label class="custom-control-label " for="dancing_modern">Moderný tanec</label>
							</div>
						</div>
						<div class="col-12">
							<label class="d-block mb-0 mt-3"><strong>Pohybové schopnosti</strong></label>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="basketball" name="basketball">
								<label class="custom-control-label " for="basketball">Basketbal</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="bike" name="bike">
								<label class="custom-control-label " for="bike">Cyklistyka</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="fitness" name="fitness">
								<label class="custom-control-label " for="fitness">Fitness</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="footbal" name="footbal">
								<label class="custom-control-label " for="footbal">Futbal</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="gymnastics" name="gymnastics">
								<label class="custom-control-label " for="gymnastics">Gymnsatika</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="handball" name="handball">
								<label class="custom-control-label " for="handball">Hádzaná</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="horse_riding" name="horse_riding">
								<label class="custom-control-label " for="horse_riding">Jazda na koni</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="roller_skating" name="roller_skating">
								<label class="custom-control-label " for="roller_skating">Korčuľovanie</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="ski" name="ski">
								<label class="custom-control-label " for="ski">Lyžovanie</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="swimming" name="swimming">
								<label class="custom-control-label " for="swimming">Plávanie</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="skate" name="skate">
								<label class="custom-control-label " for="skate">Skateboard</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="snowboard" name="snowboard">
								<label class="custom-control-label " for="snowboard">Snowboard</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="tennis" name="tennis">
								<label class="custom-control-label " for="tennis">Tenis</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="water_sports" name="water_sports">
								<label class="custom-control-label " for="water_sports">Vodné športy</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="volleyball" name="volleyball">
								<label class="custom-control-label " for="volleyball">Volejbal</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="workout" name="workout">
								<label class="custom-control-label " for="workout">Workout</label>
							</div>
						</div>
						<div class="col-12">
							<label class="d-block mb-0 mt-3"><strong>Jazykové znalosti</strong></label>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="english" name="english">
								<label class="custom-control-label " for="english">Angličtina</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="czech" name="czech">
								<label class="custom-control-label " for="czech">Čeština</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="france" name="france">
								<label class="custom-control-label " for="france">Francúzština</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="hungarian" name="hungarian">
								<label class="custom-control-label " for="hungarian">Maďarčina</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="german" name="german">
								<label class="custom-control-label " for="german">Nemčina</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="russian" name="russian">
								<label class="custom-control-label " for="russian">Ruština</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="slovak" name="slovak">
								<label class="custom-control-label " for="slovak">Slovenčina</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="spain" name="spain">
								<label class="custom-control-label " for="spain">Španielčina</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="ital" name="ital">
								<label class="custom-control-label " for="ital">Taliančina</label>
							</div>
						</div>
						<div class="col-12 about-me">
							<label class="d-block mb-0 mt-3"><strong>Informácie o mne</strong></label>
							<textarea name="about" id="about" rows="15"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 text-center">
				<input type="submit" class="btn btn-primary w-50 mt-4" value="registovať sa" />
			</div>
		</div>
	</div>
</section>


<input type="hidden" id="croppedImages">

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
