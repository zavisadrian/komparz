<?php
include 'Libary/Weblibary.php';
include 'components/top.php';
include 'navbar/menu.php';

$_POST['ID'] = $_REQUEST['ID'];
include 'PHP/initializeProfile.php';

if (substr($_REQUEST['ID'], 0, 2) == "06") {
    header("Location: profile-agency.php?ID=".$_REQUEST['ID']);
}
?>

<section id="profile" style="background-image: url(../images/komparz-banner.jpg);">
	<div class="container pb-7 pt-2">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<a class="profile-photo-show" data-lightbox="profile-photo-show" href="Profiles/<?php echo $ID; ?>/images/p001.jpg"><img src="Profiles/<?php echo $ID; ?>/images/min/p001.jpg" alt="" class="w-100 mt-3 border-image"></a>
			</div>
			<div class="col-lg-9 pt-md-6 col-md-6">
				<div class="row">
					<div class="col-lg-4 ">
						<h1><?php echo $name." ".$surname; ?></h1>
						<p><strong><?php echo $kind; ?></strong></p>
						<p class="white"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $city.", ".$region.", Slovensko";?></p>
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-xl-6 col-lg-7  pt-lg-0 pt-md-3 pl-xl-2 pl-lg-0 pl-2">
								<?php
								if ($_SESSION["userID"] == "")
									echo "
										<a class=\"btn btn-secondary join\">Online rezervácia</a>
										<div class=\"mt-2\">
										<div class=\"icon-links my-md-0 my-3\">
											<a href=\"\" class=\"btn btn-white send-message\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Poslať správu\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></a>
											<div class=\"btn btn-white fb-share-button\" data-href=\"http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."\" data-layout=\"button\"></div>
											</div>
										</div>
										";
								else if ($_SESSION['userID'] == $_REQUEST['ID'])
									echo "<a href='edit-profile-acter.php?ID=".$_SESSION["userID"]."' class=\"btn btn-secondary\">Editovať profil</a>";
								else if (strpos($logFollowing, $_REQUEST['ID']) !== false)
                                    echo "
										<a class=\"btn btn-secondary join\">Online rezervácia</a>
										<div class=\"mt-2\">
										<div class=\"icon-links my-md-0 my-3\">
											<a href=\"PHP/unfollow.php?ID=".$_REQUEST['ID']."\" class=\"btn btn-white\">&#10003 Sledované</a>
											<a href=\"\" class=\"btn btn-white send-message\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Poslať správu\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></a>
											<div class=\"btn btn-white fb-share-button\" data-href=\"http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."\" data-layout=\"button\"></div>
											</div>
										</div>
										";
                                else
                                    echo "
										<a class=\"btn btn-secondary join\">Online rezervácia</a>
										<div class=\"mt-2\">
										<div class=\"icon-links my-md-0 my-3\">
											<a href=\"PHP/follow.php?ID=".$_REQUEST['ID']."\" class=\"btn btn-white\">+ Sledovať</a>
											<a href=\"\" class=\"btn btn-white send-message\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Poslať správu\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></a>
											<div class=\"btn btn-white fb-share-button\" data-href=\"http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."\" data-layout=\"button\"></div>
											</div>
										</div>
										";
								?>
							</div>
							<div class="col-xl-6 col-lg-5 px-lg-0 pt-lg-0 pt-md-3">
								<div class="row">
									<div class="col-5">
										<p><strong><? echo $views; ?></strong></p>
										<p><strong><? echo $profileTotals; ?>%</strong></p>
										<p><strong><? echo $lastLog; ?></strong></p>
									</div>
									<div class="col-7 pl-0 stats">
										<p>Zobrazenie profilu</p>
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
			<div class="col-md-6 pr-md-5">
				<div class="owl-carousel owl-theme profile-photo mt-lg-5 mt-md-10 mt-5">
					<div class="img-container">
						<a class="photo" data-lightbox="slider-photo" href="Profiles/<?php echo $ID; ?>/images/p011.jpg"><img src="Profiles/<?php echo $ID; ?>/images/min/p011.jpg" alt="" class="w-90"></a>
					</div>
					<div class="img-container">
						<a class="photo" data-lightbox="slider-photo" href="Profiles/<?php echo $ID; ?>/images/p021.jpg"><img src="Profiles/<?php echo $ID; ?>/images/min/p021.jpg" alt="" class="w-90"></a>
					</div>
					<div class="img-container">
						<a class="photo" data-lightbox="slider-photo" href="Profiles/<?php echo $ID; ?>/images/p031.jpg"><img src="Profiles/<?php echo $ID; ?>/images/min/p031.jpg" alt="" class="w-90"></a>
					</div>
				</div>
				<div class="row profile-btns">
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

				<div class="photos tabs row no-gutters">
					<div class="col-md-3 col-6 order-1 order-md-1 pt-md-0 pt-3 px-1 pb-2 pb-md-0 mt-1">
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p012.jpg" data-lightbox="photos-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p012.jpg" alt="" class="w-100 pb-1"></a>
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p016.jpg" data-lightbox="photos-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p016.jpg" alt="" class="w-100 pb-1"></a>
					</div>
					<div class="col-md-3 col-6 order-3 order-md-2 px-1 mt-1">
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p013.jpg" data-lightbox="photos-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p013.jpg" alt="" class="w-100 pb-1"></a>
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p017.jpg" data-lightbox="photos-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p017.jpg" alt="" class="w-100 pb-1"></a>
					</div>
					<div class="col-md-3 col-6 order-2 order-md-3 pt-md-0 pt-3 px-1 pb-2 pb-md-0 mt-1">
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p014.jpg" data-lightbox="photos-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p014.jpg" alt="" class="w-100 pb-1"></a>
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p018.jpg" data-lightbox="photos-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p018.jpg" alt="" class="w-100 pb-1"></a>
					</div>
					<div class="col-md-3 col-6 order-4 order-md-4 px-1 mt-1">
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p015.jpg" data-lightbox="photos-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p015.jpg" alt="" class="w-100 pb-1"></a>
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p019.jpg" data-lightbox="photos-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p019.jpg" alt="" class="w-100 pb-1"></a>
					</div>

					<div class="col-md-3 col-6 order-last order-md-last px-1 mt-1" data-section="photos" data-deleteid="extra_1">
						<div class="cropped-image more mb-2" style="background-image: url(Profiles/<?php echo $ID; ?>/images/photos/<?php echo $photos[0]; ?>)">
							<?php
							$count = count($photos);
							echo ' 
							<a class="example-image-link" href="Profiles/'.$ID.'/images/photos/'.$photos[0].'" data-lightbox="photos-set" >
								<span class="more-photos-overlay d-flex align-items-center justify-content-center text-center">
									+'.$count.'<br>
								</span>
							</a>';
							for ($i = 1; $i < count($photos); $i++) {
								echo '<a class="example-image-link" href="Profiles/'.$ID.'/images/photos/'.$photos[$i].'" data-lightbox="photos-set" ></a>';
							}
							?>
						</div>
					</div>
				</div>

				<div class="photobooks tabs row no-gutters" style="display: none">
					<!--<div class="col-md-3 col-6 pr-1 order-1 order-md-1 pt-md-0 pt-3">
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p022.jpg" data-lightbox="example-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p022.jpg" alt="" class="w-100"></a>
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p026.jpg" data-lightbox="example-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p026.jpg" alt="" class="w-100"></a>
					</div>
					<div class="col-md-3 col-6 px-md-1 pr-md-2 pr-1  order-3 order-md-2">
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p023.jpg" data-lightbox="example-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p023.jpg" alt="" class="w-100"></a>
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p027.jpg" data-lightbox="example-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p027.jpg" alt="" class="w-100"></a>
					</div>
					<div class="col-md-3 col-6 px-md-1 pl-md-2 pl-1 order-2 order-md-3 pt-md-0 pt-3">
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p024.jpg" data-lightbox="example-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p024.jpg" alt="" class="w-100"></a>
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p028.jpg" data-lightbox="example-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p028.jpg" alt="" class="w-100"></a>
					</div>
					<div class="col-md-3 col-6 pl-1 order-4 order-md-4">
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p025.jpg" data-lightbox="example-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p025.jpg" alt="" class="w-100"></a>
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p029.jpg" data-lightbox="example-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p029.jpg" alt="" class="w-100"></a>
					</div>-->
					<div class="col-md-3 col-6 order-last order-md-last px-1 mt-1" data-section="photobooks" data-deleteid="extra_2">
						<div class="cropped-image more mb-2" style="background-image: url(Profiles/<?php echo $ID; ?>/images/photobooks/<?php echo $photobooks[0]; ?>)">
							<?php
							$count = count($photobooks);
							echo ' 
							<a class="example-image-link" href="Profiles/'.$ID.'/images/photobooks/'.$photobooks[0].'" data-lightbox="photobooks-set" >
								<span class="more-photos-overlay d-flex align-items-center justify-content-center text-center">
									+'.$count.'<br>
								</span>
							</a>';
							for ($i = 1; $i < count($photobooks); $i++) {
								echo '<a class="example-image-link" href="Profiles/'.$ID.'/images/photobooks/'.$photobooks[$i].'" data-lightbox="photobooks-set" ></a>';
							}
							 ?>
						</div>
					</div>
				</div>

				<div class="polaroids tabs row no-gutters" style="display: none">
					<!--<div class="col-md-3 col-6 pr-1 order-1 order-md-1 pt-md-0 pt-3">
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p032.jpg" data-lightbox="example-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p032.jpg" alt="" class="w-100"></a>
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p036.jpg" data-lightbox="example-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p036.jpg" alt="" class="w-100"></a>
					</div>
					<div class="col-md-3 col-6 px-md-1 pr-md-2 pr-1  order-3 order-md-2">
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p033.jpg" data-lightbox="example-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p033.jpg" alt="" class="w-100"></a>
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p037.jpg" data-lightbox="example-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p037.jpg" alt="" class="w-100"></a>
					</div>
					<div class="col-md-3 col-6 px-md-1 pl-md-2 pl-1 order-2 order-md-3 pt-md-0 pt-3">
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p034.jpg" data-lightbox="example-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p034.jpg" alt="" class="w-100"></a>
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p038.jpg" data-lightbox="example-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p038.jpg" alt="" class="w-100"></a>
					</div>
					<div class="col-md-3 col-6 pl-1 order-4 order-md-4">
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p035.jpg" data-lightbox="example-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p035.jpg" alt="" class="w-100"></a>
						<a class="example-image-link" href="Profiles/<?php echo $ID; ?>/images/p039.jpg" data-lightbox="example-set" ><img src="Profiles/<?php echo $ID; ?>/images/min/p039.jpg" alt="" class="w-100"></a>
					</div>-->
					<div class="col-md-3 col-6 order-last order-md-last px-1 mt-1" data-section="polaroids" data-deleteid="extra_3">
						<div class="cropped-image more mb-2" style="background-image: url(Profiles/<?php echo $ID; ?>/images/polaroids/<?php echo $polaroids[0]; ?>)">
							<?php
							$count = count($polaroids);
							echo ' 
							<a class="example-image-link" href="Profiles/'.$ID.'/images/polaroids/'.$polaroids[0].'" data-lightbox="polaroids-set" >
								<span class="more-photos-overlay d-flex align-items-center justify-content-center text-center">
									+'.$count.'<br>
								</span>
							</a>';
							for ($i = 1; $i < count($polaroids); $i++) {
								echo '<a class="example-image-link" href="Profiles/'.$ID.'/images/polaroids/'.$polaroids[$i].'" data-lightbox="polaroids-set" ></a>';
							}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="info pt-md-0 pt-lg-4 pt-md-5 pt-4">
					<h3>Informácie o <?php echo $kind1; ?></h3>
					<div class="row pt-5">
						<div class="col-4">
							<p><strong>Národnosť</strong></p>
						</div>
						<div class="col-8 text-right">
							<p><?php echo $nationality; ?></p>
						</div>
						<div class="col-4">
							<p><strong>Pohlavie</strong></p>
						</div>
						<div class="col-8 text-right">
							<p><?php echo $gender; ?></p>
						</div>
						<div class="col-4">
							<p><strong>Výška</strong></p>
						</div>
						<div class="col-8 text-right">
							<p><?php echo $height ?>cm</p>
						</div>
						<div class="col-4 py-5">
							<p><strong>Kategórie</strong></p>
						</div>
						<div class="col-8 text-right py-5">
							<p class="orange"><?php echo $interests; ?></p>
						</div>
							<div class="col-4">
							<p><strong>Farba vlasov</strong></p>
						</div>
						<div class="col-8 text-right">
							<p><?php echo $hair; ?></p>
						</div>
						<div class="col-4">
							<p><strong>Farba očí</strong></p>
						</div>
						<div class="col-8 text-right">
							<p><?php echo $eyes; ?></p>
						</div>
						<div class="col-4">
							<p><strong>Jazykové znalosti</strong></p>
						</div>
						<div class="col-8 text-right">
							<p><?php echo $talent_languages; ?></p>
						</div>
						<div class="col-4">
							<p><strong>Umelecké schopnosti</strong></p>
						</div>
						<div class="col-8 text-right">
							<p><?php echo $talent_creative; ?></p>
						</div>
						<div class="col-4 pb-3">
							<p><strong>Pohybové schopnosti</strong></p>
						</div>
						<div class="col-8 text-right">
							<p><?php echo $talent_movement; ?></p>
						</div>
						<div class="col-12 about-me">
							<p><strong>Informácie o mne</strong></p>
							<p class="text-justify"><?php echo $bio; ?></p>
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
            <?php
            $dbh = dbConnectSafely();
            $sql = "SELECT * FROM `blog` WHERE 1 ORDER BY `ID` DESC";
            $sql = $dbh->prepare($sql);
            $sql->execute();

            $result = $sql->fetch();
            ?>

            <div class="col-md-6">
                <div class="blog-box">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="blog-image h-100" style="background-image: url('Blog/<?php echo $result['htmlContent']; ?>/blog.jpg')"></div>

                        </div>
                        <div class="col-md-6">
                            <div class="text">
                                <h5><?php echo $result['createDate']; ?></h5>
                                <h2><?php echo $result['headline']; ?></h2>
                                <p class="text-justify">
                                    <?php echo substr($result['mainText'], 0, 160)."..."; ?>
                                </p>
                                <a href="./blog.php?ID=<?php echo $result['htmlContent']; ?>">čítať viac</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php $result = $sql->fetch(); ?>
            <div class="col-md-6">
                <div class="blog-box">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="blog-image h-100" style="background-image: url('Blog/<?php echo $result['htmlContent']; ?>/blog.jpg')"></div>

                        </div>
                        <div class="col-md-6">
                            <div class="text mt-md-0 mt-3">
                                <h5><?php echo $result['createDate']; ?></h5>
                                <h2><?php echo $result['headline']; ?></h2>
                                <p class="text-justify">
                                    <?php echo substr($result['mainText'], 0, 160)."..."; ?>
                                </p>
                                <a href="./blog.php?ID=<?php echo $result['htmlContent']; ?>">čítať viac</a>
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
