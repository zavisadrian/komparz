<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>

<section id="member-banner" style="background-image: url(../images/komparz-banner.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="pt-6">TRHOVISKO</h1>
			</div>
			<div class="col-md-6 text-md-right pt-md-3">
				<a href="./membership.php" class="btn btn-outline-white">VYTVOR SI ÚČET</a>
				<a href="./marketplace-create.php" class="btn btn-white my-5">PRIDAJ PONUKU</a>
			</div>
		</div>
	</div>
</section>

<section id="add_casting">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-6">
				<h3 class="orange">AKO SA BUDE VÁŠ INZERÁT ZOBRAZOVAŤ</h3>
				<div class="row no-gutters pt-5">
					<div class="col-lg-4">
						<div class="w-100 h-100 membership" style="background-image: url(images/membership.jpg);"></div>
					</div>
					<div class="col-lg-8 border-orange">
						<h4>NÁZOV INZERÁTU</h4>
						<p class="pt-2">Ženy/Muži/Deti</p>
						<p><strong>Miesto castingu</strong></p>
						<p>Casting sa uzatvára: <strong>01.08.2019</strong></p>
						<br>
						<p class="orange">Honorár <span class="price">100€</span></p>
					</div>
				</div>
				<div class="row pt-4">
					<div class="col-md-7">
						<img src="images/casting.jpg" alt="" class="w-100">
						<iframe class="pt-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.6862909127285!2d2.120631115726849!3d41.38090000435974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498f576297baf%3A0x44f65330fe1b04b9!2sCamp+Nou!5e0!3m2!1sen!2ssk!4v1564139792695!5m2!1sen!2ssk" width="100%" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-5 px-md-1 desc">
						<h3>Photoshooting in barcelona</h3>
						<p class="pt-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
						<p class="orange pt-3">Dátum: <strong>01.04.2020</strong></p>
						<p class="orange">Trvanie: <strong>7 dní</strong></p>
						<p class="orange">Miesto: <strong>Barcelona</strong></p>
						<p class="orange">Honorár: <strong>100€</strong></p>
						<h5>Doplňujúce informácie</h5>
						<p class="pt-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="" class="btn btn-secondary mt-3 w-100">Zúčastniť sa</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 right mt-md-0 mt-3">
				<h3>Údaje pre záujemcu</h3>
				<input type="text" placeholder="Názov">
				<input type="text" placeholder="Miesto">
				<div class="custom-file ">
						<input type="file" name="file" class="custom-file-input" id="customFile">
						<label class="custom-file-label" for="customFile">Foto</label>
				</div>
				<textarea name="desc" id="description" class="mt-3" rows="5" placeholder="Popis"></textarea>
				<div class="type">
					<select name="" id="" class="filter mt-3" data-placeholder="Kategória">
						<option></option>
						<option value="Herci">Herci</option>
						<option value="Modelky">Modelky</option>
					</select>
				</div>
				<div class="inline">
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="men" name="men">
						<label class="custom-control-label " for="men">Muži</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="women" name="women">
						<label class="custom-control-label " for="women">Ženy</label>
					</div>
					<div class="custom-control square-checkbox py-md-3 pt-3">
						<input type="checkbox" class="custom-control-input" id="kids" name="kids">
						<label class="custom-control-label " for="kids">Deti</label>
					</div>
				</div>
				<input type="text" placeholder="Pôvodná cena">
				<input type="text" placeholder="Cena po zľave">
				<input type="text" placeholder="Heslo">
				<input type="text" placeholder="Poukážka">
			</div>
			<div class="col-md-3">
				<h3>Vaše údaje</h3>
				<input type="text" placeholder="Meno/názov spoločnosti">
				<input type="text" placeholder="Telefónne číslo">
				<input type="text" placeholder="Platnosť">
				<input type="text" placeholder="IBAN">
				<input type="text" placeholder="Email">
				<div class="custom-control square-checkbox py-md-3 pt-3">
					<input type="checkbox" class="custom-control-input" id="agree" name="agree">
					<label class="custom-control-label " for="agree">Súhlasím s podmienkou používania</label>
				</div>
				<div class="custom-control square-checkbox py-md-3 pt-3">
					<input type="checkbox" class="custom-control-input" id="start" name="start">
					<label class="custom-control-label " for="start">Spustiť online predaj</label>
				</div>
				
				<a href="" class="btn btn-primary w-100 mt-3">Uložiť a odoslať ponuku</a>
			</div>
		</div>
	</div>
</section>

<section id="account" class="mt-4" style="background-image: url(../images/account.jpg);">
	<div class="container py-8">
		<div class="row">
			<div class="col-md-6">
				<h2 class="mb-3">vytvor si účet a staň sa členom kompraz.tv</h2>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
				<a href="./membership.php" class="btn btn-dark mt-4">Vytvor si účet</a>
				<a href="./membership.php" class="btn btn-outline-dark mt-4">Hľadám prácu</a>
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
