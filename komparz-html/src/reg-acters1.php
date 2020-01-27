<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>

<section id="registration" style="background-image: url(../images/komparz-banner.jpg);">
	<div class="container py-5">
		<h1>Registrácia</h1>
		<h2 id="step">Krok 1</h2>
	</div>
</section>
<section id="form">
	<div class="container py-5">
		<div class="first-step">
			<div class="row">
				<div class="col-md-3">
					<h3>Základné údaje</h3>
					<input type="text" placeholder="Meno">
					<input type="text" placeholder="Priezvisko">
					<input type="text" placeholder="Heslo">
					<input type="text" placeholder="Heslo znovu">
					<h3>Adresa</h3>
					<input type="text" placeholder="Ulica a číslo domu">
					<input type="text" placeholder="PSČ">
					<input type="text" placeholder="Mesto">
					<select class="country" name="region" id="region" data-placeholder="Kraj">
						<option></option>
						<option value="TT">Trnavský</option>
						<option value="BA">Bratislavský</option>
					</select>
				</div>
				<div class="col-md-3">
					<h3>Kontakt</h3>
					<input type="text" placeholder="Mobil">
					<input type="text" placeholder="Email">
					<input type="text" placeholder="Zamestnanie / škola">
					<h3>Osobné dáta</h3>
					<select class="country" name="country" id="country" data-placeholder="Národnosť">
						<option value=""></option>
						<option value="SK">Slovenská</option>
						<option value="CZ">Česká</option>
					</select>
					<input type="text" placeholder="Dátum narodenia" data-provide="datepicker" data-date-language="sk">
					<input type="text" placeholder="Výška">
					<select class="country" name="eyes" id="eyes" data-placeholder="Farba očí">
						<option value=""></option>
						<option value="blue">Modrá</option>
						<option value="green">Zelená</option>
					</select>
					<select class="country" name="hair" id="hair" data-placeholder="Farba vlasov">
						<option value=""></option>
						<option value="blue">Modrá</option>
						<option value="green">Zelená</option>
					</select>
				</div>
				<div class="col-md-3">
					<h3>Jazyky</h3>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="1" name="1">
						<label class="custom-control-label " for="1">Jazyk č.1</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="2" name="2">
						<label class="custom-control-label " for="2">Jazyk č.1</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="3" name="3">
						<label class="custom-control-label " for="3">Jazyk č.1</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="4" name="4">
						<label class="custom-control-label " for="4">Jazyk č.1</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="5" name="5">
						<label class="custom-control-label " for="5">Jazyk č.1</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="6" name="6">
						<label class="custom-control-label " for="6">Jazyk č.1</label>
					</div>
					<h3 class="pt-md-0 pt-4">Pohybové schopnosti</h3>
					<div class="custom-control square-checkbox pb-md-3 pt-md-0 pt-3">
						<input type="checkbox" class="custom-control-input" id="f" name="f">
						<label class="custom-control-label " for="f">futbal</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="fu" name="fu">
						<label class="custom-control-label " for="fu">futbal</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="fut" name="fut">
						<label class="custom-control-label " for="fut">futbal</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="futb" name="futb">
						<label class="custom-control-label " for="futb">futbal</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="futba" name="futba">
						<label class="custom-control-label " for="futba">futbal</label>
					</div>
				</div>
				<div class="col-md-3">
					<h3 class="pt-md-0 pt-4">Umelecké schopnosti</h3>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="s" name="s">
						<label class="custom-control-label " for="s">Schopnosť</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="sc" name="sc">
						<label class="custom-control-label " for="sc">Schopnosť</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="sch" name="sch">
						<label class="custom-control-label " for="sch">Schopnosť</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="scho" name="scho">
						<label class="custom-control-label " for="scho">Schopnosť</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="schop" name="schop">
						<label class="custom-control-label " for="schop">Schopnosť</label>
					</div>
					<a href="./reg-acters2.php" class="btn btn-primary mt-5">Uložiť a&nbsp;odoslať</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="referencies">
	<div class="container py-3">
		<div class="row">
			<div class="referencies owl-carousel owl-theme">
				<div>
					<img src="images/higher-logo.png" alt="" class="w-100">
				</div>
				<div>
					<img src="images/ford-logo.png" alt="" class="w-100">
				</div>
				<div>
					<img src="images/higher-logo.png" alt="" class="w-100">
				</div>
				<div>
					<img src="images/ford-logo.png" alt="" class="w-100">
				</div>
				<div>
					<img src="images/higher-logo.png" alt="" class="w-100">
				</div>
				<div>
					<img src="images/ford-logo.png" alt="" class="w-100">
				</div>
			</div>
		</div>
	</div>
</section>
<section id="photo">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-3 col-6 d-lg-flex d-none">
				<img src="images/photo.png" alt="" class="w-100">
			</div>
			<div class="col-lg-3 col-md-6 col-12 pt-3">
				<h2>potrebuješ profesionálne fotografie?</h2>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
				<a href="./marketplace.php" class="btn btn-outline-dark mt-4">Chcem vedieť viac</a>
			</div>
			<div class="col-md-6 pl-md-4 pt-md-0 pt-3">
				<img src="images/add.png" alt="" class="w-100">
			</div>
		</div>
	</div>
</section>
<section id="blog-home">
		<div class="container py-6">
			<div class="row">
				<div class="col-11">
					<h2><a href="./blogs.php">Blog</a></h2>
					<p class="text-justify">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum 
						<span class="d-inline d-md-block">vestibulum non lectus auctor venenatis.</span>
					</p>
				</div>
				<div class="col-1 text-right px-lg-2 px-0 d-md-block d-none">
					<div class="square">
						<i class="fa fa-plus"></i>
					</div>
				</div>
			</div>
			<div class="row pt-5">
				<div class="col-md-6">
					<div class="blog-box">
						<div class="row no-gutters">
							<div class="col-md-6">
								<div class="blog-image h-100" style="background-image: url('images/blog-image.jpg')"></div>
								
							</div>
							<div class="col-md-6">
								<div class="text">
									<h5>21.01.2019</h5>
									<h2>Ako uspieť na konkurze?</h2>
									<p class="text-justify">
										Lorem ipsum dolor sit amet, consect etur adipiscing elit. Vestibulum vestibulum non lectus auctor venenatis. Duis in congue nisl. Aenean at ipsum scelerisque orci...
									</p>
									<a href="./blog.php">čítať viac</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 pt-md-0 pt-3">
					<div class="blog-box">
						<div class="row no-gutters">
							<div class="col-md-6">
								<div class="blog-image h-100" style="background-image: url('images/blog-image.jpg')"></div>
								
							</div>
							<div class="col-md-6">
								<div class="text">
									<h5>21.01.2019</h5>
									<h2>Ako uspieť na konkurze?</h2>
									<p class="text-justify">
										Lorem ipsum dolor sit amet, consect etur adipiscing elit. Vestibulum vestibulum non lectus auctor venenatis. Duis in congue nisl. Aenean at ipsum scelerisque orci...
									</p>
									<a href="./blog.php">čítať viac</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include 'components/footer.php';?>
<?php include 'components/bottom.php';?>
