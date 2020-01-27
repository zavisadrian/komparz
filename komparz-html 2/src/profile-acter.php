<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>

<section id="profile" style="background-image: url(../images/komparz-banner.jpg);">
	<div class="container pb-7 pt-2">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<a class="profile-photo-show" data-lightbox="profile-photo-show" href="images/profile.jpg"><img src="images/profile.jpg" alt="" class="w-100 mt-3 border-image"></a>
			</div>
			<div class="col-lg-9 pt-md-6 col-md-6">
				<div class="row">
					<div class="col-lg-4 ">
						<h1>Mariana H.</h1>
						<p><strong>Komparzisti a herci</strong></p>
						<p class="white"><i class="fa fa-map-marker" aria-hidden="true"></i> Bratislava, Bratislavský kraj, Slovakia</p>
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-xl-6 col-lg-7 offset-xl-2  pt-lg-0 pt-md-3 pl-xl-2 pl-lg-0 pl-2">
								<a class="btn btn-secondary join">Online rezervácia</a>
								<div class="mt-2">
									<div class="icon-links my-md-0 my-3">
										<a href="#" class="btn btn-white">+ Sledovať</a>
										<a href="" class="btn btn-white send-message" data-toggle="tooltip" data-placement="bottom" title="Poslať správu"><i class="fa fa-envelope" aria-hidden="true"></i></a>
										<a href="" class="btn btn-white" data-toggle="tooltip" data-placement="bottom" title="Pridať k obľúbeným"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="" class="btn btn-white" data-toggle="tooltip" data-placement="bottom" title="Zdieľať"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-5 px-lg-0 pt-lg-0 pt-md-3">
								<div class="row">
									<div class="col-3">
										<p><strong>1234</strong></p>
										<p><strong>1234</strong></p>
										<p><strong>97%</strong></p>
										<p><strong>12.02.</strong></p>
									</div>
									<div class="col-9 pl-0 stats">
										<p>Zobrazenie profilu</p>
										<p>Sledovatelia</p>
										<p>Kompletný profil</p>
										<p>Posledné prihlásenie</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<input type="text" id="ttt">
			<div class="col-md-6 my-5">
				<label class="image-upload-label">
					<input type="file" name="p011" id="p011" data-cropimageid="p011" data-aspectratio="<?= 16/9 ?>" class="image-upload-input"/>
					Custom Upload
				</label>
				<label class="image-upload-label">
					<input type="file" name="p012" id="p012" data-cropimageid="p012" data-aspectratio="<?= 10/9 ?>" class="image-upload-input"/>
					Custom Upload 2
				</label>
				<div class="overlay-crop js">
					<div class="modal-crop" id="modal-crop">
						<div class="close">
							<span>X</span>
						</div>
						<div class="modal-content">
							<button id="crop_button">Crop</button>
							<div class="image_container">
								<img id="crop" src="#" alt="your image" />
							</div>
						</div>
					</div>
				</div>
				<img id="cropped_p011" src="#" alt="cropped" />
				<img id="cropped_p012" src="#" alt="cropped" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 pr-md-5">
				<div class="owl-carousel owl-theme profile-photo mt-lg-5 mt-md-10 mt-5">
					<div class="img-container">
						<a class="photo" data-lightbox="slider-photo" href="images/profile.jpg"><img src="images/profile.jpg" alt="" class="w-90"></a>
					</div>
					<div class="img-container">
						<a class="photo" data-lightbox="slider-photo" href="images/profile.jpg"><img src="images/profile.jpg" alt="" class="w-90"></a>
					</div>
					<div class="img-container">
						<a class="photo" data-lightbox="slider-photo" href="images/profile.jpg"><img src="images/profile.jpg" alt="" class="w-90"></a>
					</div>
				</div>
				<div class="row profile-btns">
					<div class="col-4 pr-0">
						<a href="" class="btn w-100 btn-secondary btn-active" data-changetype="#photos">fotografie</a>
					</div>
					<div class="col-4 px-0">
						<a href="" class="btn w-100 btn-secondary" data-changetype="#photobooks">fotobooky</a>
					</div>
					<div class="col-4 pl-0">
						<a href="" class="btn w-100 btn-quaternary" data-changetype="#polaroids">polaroidy</a>
					</div>
					<span id="photos" class="tabs row px-3">
						<div class="col-md-3 col-6 pr-1 order-1 order-md-1 pt-md-0 pt-3">
							<a class="example-image-link" href="images/profile1.jpg" data-lightbox="example-set" ><img src="images/profile1.jpg" alt="" class="w-100"></a>
							<a class="example-image-link" href="images/profile2.jpg" data-lightbox="example-set" ><img src="images/profile2.jpg" alt="" class="w-100"></a>
						</div>
						<div class="col-md-3 col-6 px-md-1 pr-md-2 pr-1  order-3 order-md-2">
							<a class="example-image-link" href="images/profile3.jpg" data-lightbox="example-set" ><img src="images/profile3.jpg" alt="" class="w-100"></a>
							<a class="example-image-link" href="images/profile4.jpg" data-lightbox="example-set" ><img src="images/profile4.jpg" alt="" class="w-100"></a>
						</div>
						<div class="col-md-3 col-6 px-md-1 pl-md-2 pl-1 order-2 order-md-3 pt-md-0 pt-3">
							<a class="example-image-link" href="images/profile5.jpg" data-lightbox="example-set" ><img src="images/profile5.jpg" alt="" class="w-100"></a>
							<a class="example-image-link" href="images/profile6.jpg" data-lightbox="example-set" ><img src="images/profile6.jpg" alt="" class="w-100"></a>
						</div>
						<div class="col-md-3 col-6 pl-1 order-4 order-md-4">
							<a class="example-image-link" href="images/profile7.jpg" data-lightbox="example-set" ><img src="images/profile7.jpg" alt="" class="w-100"></a>
							<a class="example-image-link" href="images/profile8.jpg" data-lightbox="example-set" ><img src="images/profile8.jpg" alt="" class="w-100"></a>
						</div>
					</span>
					<div id="photobooks" class="tabs row px-3" style="display: none">
						<div class="col-md-3 col-6 px-md-1 pl-md-2 pl-1 order-3 order-md-2 pt-md-0 pt-3">
							<a class="example-image-link" href="images/profile5.jpg" data-lightbox="example-set" ><img src="images/profile5.jpg" alt="" class="w-100"></a>
							<a class="example-image-link" href="images/profile6.jpg" data-lightbox="example-set" ><img src="images/profile6.jpg" alt="" class="w-100"></a>
						</div>
						<div class="col-md-3 col-6 pl-1 order-4 order-md-4">
							<a class="example-image-link" href="images/profile7.jpg" data-lightbox="example-set" ><img src="images/profile7.jpg" alt="" class="w-100"></a>
							<a class="example-image-link" href="images/profile8.jpg" data-lightbox="example-set" ><img src="images/profile8.jpg" alt="" class="w-100"></a>
						</div>
						<div class="col-md-3 col-6 pr-1 order-1 order-md-1 pt-md-0 pt-3">
							<a class="example-image-link" href="images/profile1.jpg" data-lightbox="example-set" ><img src="images/profile1.jpg" alt="" class="w-100"></a>
							<a class="example-image-link" href="images/profile2.jpg" data-lightbox="example-set" ><img src="images/profile2.jpg" alt="" class="w-100"></a>
						</div>
						<div class="col-md-3 col-6 px-md-1 pr-md-2 pr-1  order-2 order-md-3">
							<a class="example-image-link" href="images/profile3.jpg" data-lightbox="example-set" ><img src="images/profile3.jpg" alt="" class="w-100"></a>
							<a class="example-image-link" href="images/profile4.jpg" data-lightbox="example-set" ><img src="images/profile4.jpg" alt="" class="w-100"></a>
						</div>
					</div>
					<div id="polaroids" class="tabs row px-3" style="display: none">
						<div class="col-md-3 col-6 px-md-1 pr-md-2 pr-1  order-4 order-md-1">
							<a class="example-image-link" href="images/profile3.jpg" data-lightbox="example-set" ><img src="images/profile3.jpg" alt="" class="w-100"></a>
							<a class="example-image-link" href="images/profile4.jpg" data-lightbox="example-set" ><img src="images/profile4.jpg" alt="" class="w-100"></a>
						</div>
						<div class="col-md-3 col-6 pl-1 order-3 order-md-4">
							<a class="example-image-link" href="images/profile7.jpg" data-lightbox="example-set" ><img src="images/profile7.jpg" alt="" class="w-100"></a>
							<a class="example-image-link" href="images/profile8.jpg" data-lightbox="example-set" ><img src="images/profile8.jpg" alt="" class="w-100"></a>
						</div>
						<div class="col-md-3 col-6 pr-1 order-1 order-md-1 pt-md-0 pt-3">
							<a class="example-image-link" href="images/profile1.jpg" data-lightbox="example-set" ><img src="images/profile1.jpg" alt="" class="w-100"></a>
							<a class="example-image-link" href="images/profile2.jpg" data-lightbox="example-set" ><img src="images/profile2.jpg" alt="" class="w-100"></a>
						</div>
						<div class="col-md-3 col-6 px-md-1 pl-md-2 pl-1 order-2 order-md-3 pt-md-0 pt-3">
							<a class="example-image-link" href="images/profile5.jpg" data-lightbox="example-set" ><img src="images/profile5.jpg" alt="" class="w-100"></a>
							<a class="example-image-link" href="images/profile6.jpg" data-lightbox="example-set" ><img src="images/profile6.jpg" alt="" class="w-100"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="info pt-md-0 pt-lg-4 pt-md-5 pt-4">
					<h3>Informácie o Komparzistovi / hercovi</h3>
					<div class="row pt-5">
						<div class="col-4">
							<p><strong>Národnosť</strong></p>
						</div>
						<div class="col-8 text-right">
							<p>Slovenská</p>
						</div>
						<div class="col-4">
							<p><strong>Pohlavie</strong></p>
						</div>
						<div class="col-8 text-right">
							<p>žena</p>
						</div>
						<div class="col-4">
							<p><strong>Výška</strong></p>
						</div>
						<div class="col-8 text-right">
							<p>186cm</p>
						</div>
						<div class="col-4 py-5">
							<p><strong>Kategórie</strong></p>
						</div>
						<div class="col-8 text-right py-5">
							<p class="orange">Herci, body, plus size</p>
						</div>
							<div class="col-4">
							<p><strong>Farba vlasov</strong></p>
						</div>
						<div class="col-8 text-right">
							<p>hnedá</p>
						</div>
						<div class="col-4">
							<p><strong>Farba očí</strong></p>
						</div>
						<div class="col-8 text-right">
							<p>hnedá</p>
						</div>
						<div class="col-4">
							<p><strong>Jazykové znalosti</strong></p>
						</div>
						<div class="col-8 text-right">
							<p>angličtina, nemčina,ruština</p>
						</div>
						<div class="col-4">
							<p><strong>Umelecké schopnosti</strong></p>
						</div>
						<div class="col-8 text-right">
							<p>dobré</p>
						</div>
						<div class="col-4 pb-3">
							<p><strong>Pohybové schopnosti</strong></p>
						</div>
						<div class="col-8 text-right">
							<p>kvalitné</p>
						</div>
						<div class="col-12 about-me">
							<p><strong>Informácie o mne</strong></p>
							<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
							<p class="text-justify">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
							<p class="text-justify">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							<a class="btn btn-primary w-100 mt-4 join">online rezervácia</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="account" style="background-image: url(../images/account.jpg);">
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
<?php include 'components/popup-online-reservation.php';?>
<?php include 'components/popup-message.php';?>
<?php include 'components/footer.php';?>
<?php include 'components/bottom.php';?>
