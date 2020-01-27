<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>

<section id="member-banner" style="background-image: url(../images/komparz-banner.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="pt-5">CASTING</h1>
				<h3 class="pb-md-5 cas">Photoshooting in barcelona</h3>
			</div>
			<div class="col-md-6 text-md-right pt-md-3">
				<a href="./casting-create.php" class="btn btn-white my-5">ZVEREJNIŤ CASTING</a>
			</div>
		</div>
	</div>
</section>

<section id="add_casting">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-5">
				<div class="w-100 h-100 casting-info d-lg-block d-none" style="background-image: url(images/casting.jpg);"></div>
			</div>
			<div class="col-md-7 px-md-1 desc pl-md-3">
				<h3>Photoshooting in barcelona</h3>
				<p class="pt-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
				<p class="orange pt-3">Dátum: <strong>01.04.2020</strong></p>
				<p class="orange">Trvanie: <strong>7 dní</strong></p>
				<p class="orange">Miesto: <strong>Barcelona</strong></p>
				<p class="orange">Honorár: <strong>100€</strong></p>
				<h5>Doplňujúce informácie</h5>
				<p class="pt-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<a class="btn join btn-secondary mt-3 w-50">Zúčastniť sa</a>
			</div>
		</div>
		<div class="row pt-4">
			<div class="col-md-12">
				<iframe class="pt-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.6862909127285!2d2.120631115726849!3d41.38090000435974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498f576297baf%3A0x44f65330fe1b04b9!2sCamp+Nou!5e0!3m2!1sen!2ssk!4v1564139792695!5m2!1sen!2ssk" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
<?php include 'components/popup-casting-join.php';?>
<?php include 'components/footer.php';?>
<?php include 'components/bottom.php';?>
