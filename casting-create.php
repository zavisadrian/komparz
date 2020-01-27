<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>
<?php
if (!isset($_SESSION['castingMail'])) {
    header("Location: 404.php");
    die();
}
?>

<section id="member-banner" style="background-image: url(../images/komparz-banner.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="pt-5">CASTINGY</h1>
				<h3 class="pb-md-5">PRIDANIE NOVÉHO CASTINGU</h3>
			</div>
			<div class="col-md-6 text-md-right pt-md-3">
				<a href="./membership.php" class="btn btn-white my-5">Vytvoriť si účet</a>
			</div>
		</div>
	</div>
</section>

<section id="add_casting">
    <form action="PHP/addCasting.php" method="post" enctype="multipart/form-data">
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
				<input type="text" placeholder="Názov castingu" name="name" data-necessary="text">
				<div class="custom-file text-center cropped-image">
					<label class="custom-file-label text-left" for="file">
						<span>Fotografia</span>
						<input type="file" data-section="main" name="castingImage" id="file" data-unlock="p011" data-cropimageid="file" data-aspectratio="<?= 2/1 ?>" class="image-upload-input custom-file-input"/>
					</label>
                    <input type="hidden" id="croppedImages" name="croppedImages">
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
				<input type="text" placeholder="Dátum začiatku" data-provide="datepicker" data-date-language="sk" name="date" data-necessary="text">
                <input type="text" placeholder="Dátum ukončenia" data-provide="datepicker" data-date-language="sk" name="dateEnd" data-necessary="text">
				<input type="text" placeholder="Miesto castingu" name="place" data-necessary="text">
				<input type="text" placeholder="Odkaz na google maps" name="googleMaps" data-necessary="text">
				<input type="text" placeholder="Honorár (nepovinné)" name="honorar" data-necessary="text">
				<textarea maxlength="200" name="description" id="description" rows="5" placeholder="Popis"></textarea>
				<textarea maxlength="80" name="addition" id="more_info" rows="5" placeholder="Doplňujúce údaje"></textarea>
			</div>
			<div class="col-md-3">
				<h3>Vaše údaje</h3>

				<input name="ownername" type="text" placeholder="Meno/názov spoločnosti" data-necessary="text">
				<input name="ownerphone" type="text" placeholder="Telefónne číslo" data-necessary="text">

				<div class="custom-control square-checkbox py-md-3 pt-3" style="min-height: 10rem !important;">
					<input type="checkbox" class="custom-control-input" id="acceptation" name="agree">
					<label class="custom-control-label " for="acceptation" style="font-size: 14px;">
                        Súhlasím so spracovaním a so zverejnením osobných údajov na webovej stránke www.komparz.tv a oboznámil
                        som sa s podmienkami spracúvania osobných údajov. Podmienky nájdete <a href="privacy.php" target="_blank">tu</a>.
                    </label>
				</div>
				<button type="submit" class="btn btn-primary w-100 mt-3">Uložiť a odoslať casting</button>
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

<section id="account" class="mt-4" style="background-image: url(../images/account.jpg);">
	<div class="container py-8">
		<div class="row">
			<div class="col-md-6">
				<h2 class="mb-3">vytvor si účet a staň sa členom kompraz.tv</h2>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
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
