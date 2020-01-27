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
		<div class="second-step">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>VAŠE FOTKY</h3>
					<div class="custom-file text-center">
						<input type="file" name="file" class="custom-file-input" id="customFile">
						<label class="custom-file-label text-left" for="customFile">Foto tváre</label>
					</div>
					<div class="custom-file text-center">
						<input type="file" name="file" class="custom-file-input" id="customFile">
						<label class="custom-file-label text-left" for="customFile">Foto tváre s úsmevom</label>
					</div>
					<div class="custom-file text-center">
						<input type="file" name="file" class="custom-file-input" id="customFile">
						<label class="custom-file-label text-left" for="customFile">Ľubovoľná foto</label>
					</div>
					<div class="custom-file text-center">
						<input type="file" name="file" class="custom-file-input" id="customFile">
						<label class="custom-file-label text-left" for="customFile">Foto z profilu</label>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>ZAUJÍMAM SA O:</h3>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="koparz" name="koparz">
						<label class="custom-control-label " for="koparz">Prácu ako komparzista</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="act" name="act">
						<label class="custom-control-label " for="act">Herecké príležitosti</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="dabing" name="dabing">
						<label class="custom-control-label " for="dabing">Dabing seriálov a filmov</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="other" name="other">
						<label class="custom-control-label " for="other">Iné odvetvie tejto stránky</label>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>&nbsp;</h3>
					<p class="text-justify pr-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<div class="row">
						<div class="col-4">
							<div class="custom-control square-checkbox py-md-2 pt-3">
								<input type="checkbox" class="custom-control-input" id="SMS" name="SMS">
								<label class="custom-control-label " for="SMS">SMS</label>
							</div>
						</div>
						<div class="col-6">
							<div class="custom-control square-checkbox py-md-2 pt-3">
								<input type="checkbox" class="custom-control-input" id="paypall" name="paypall">
								<label class="custom-control-label " for="paypall">PAYPALL</label>
							</div>
						</div>
					</div>
					<a href="./faq.php" class="small mt-md-3 mt-4 d-block">Prečo musím posielať SMS?</a>
					<a href="./support.php" class="small">Potrebujete pomôcť?</a>
				</div>
				<div class="col-lg-3 col-md-6 pl-md-0 pr-md-1">
					<h3>DOKONČENIE REGISTRÁCIE</h3>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="agre" name="agre">
						<label class="custom-control-label " for="agre">Súhlasím so <a href="./privacy.php" target="_blank">spracovaním údajov</a></label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="agr" name="agr">
						<label class="custom-control-label " for="agr">Súhlasím s podmienkami používania</label>
					</div>
					<p class="mt-md-3 mt-6">Odošli <strong>SMS</strong> s textom <strong>KOMPARZTVMODEL</strong> na telefónne číslo 0900 000 000. Odoslanie SMS je bezpečné....</p>
					<input type="text" placeholder="Mobil">
					<a href="" class="mt-3 btn btn-primary w-100">Odoslať</a>
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
