<?php
include 'Libary/Weblibary.php';
include 'components/top.php';
include 'navbar/menu.php';

$_POST['ID'] = $_REQUEST['ID'];
include 'PHP/initializeProfile.php';
?>
<section id="profil" style="background-image: url(../images/komparz-banner.jpg);">
	<div class="container py-5">
		<h1><? echo $name; ?></h1>
		<div class="row">
			<div class="col-md-3">
				<img src="Profiles/<? echo $ID; ?>/images/p001.jpg" alt="" class="w-100 mt-4">
				<div class="row pt-4">
					<div class="col-3">
						<p class="light">Adresa</p><br>
						<p class="light">Telefón</p>
						<p class="light">Email</p>
						<p class="light">Web</p>
					</div>
					<div class="col-9">
						<p><? echo $street; ?><br><? echo $postcode." ".$city; ?></p>
						<p><? echo $phone; ?></p>
						<p><? echo $conemail; ?></p>
						<p><? echo $web; ?></p>
						<br>
					</div>
                    <div class="col-12">
                        <? if (count($openhours) > 0) echo "<p class=\"font-weight-bolder\">Otváracie hodiny</p>"; ?>
                    </div>
                    <div class="col-4">
                        <? for($i = 0; $i < 7; $i++) { echo "<p>".$openhours[$i]->day."</p>"; } ?>
                    </div>
                    <div class="col-8">
                        <? for($i = 0; $i < 7; $i++) { echo "<p>".$openhours[$i]->hours."</p>"; } ?>
                    </div>
                    <? if (strlen($fb) > 0) echo "<a href=\"".$fb."\" class=\"light px-3 pt-2\"><i class=\"fa fa-facebook-official\" aria-hidden=\"true\"></i></a>"; ?>
                    <? if (strlen($ig) > 0) echo "<a href=\"".$ig."\" class=\"light pt-2\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>"; ?>
					<div class="col-12 pt-3">
                        <? if ($_SESSION["userID"] == "") {
                            echo "
                            <a href=\"\" class=\"btn btn-primary w-100\" id=\"agency-send\">Poslať správu</a>
                            <a href=\"./castings.php\" class=\"btn btn-primary w-100 mt-3\">Vytvoriť casting</a>
						    <a href=\"./marketplace.php\" class=\"btn btn-primary w-100 mt-3\">Vytvoriť inzerát</a>
                            ";

                        } else {
                            echo "
                            <a href='edit-profile-agency.php?ID=".$_SESSION["userID"]."' class=\"btn btn-primary w-100\">Editovať profil</a>
						    <a href=\"./casting-create.php\" class=\"btn btn-primary w-100 mt-3\">Vytvoriť casting</a>
						    <a href=\"./marketplace-create.php\" class=\"btn btn-primary w-100 mt-3\">Vytvoriť inzerát</a>
                            ";
                        }
                        ?>
					</div>
				</div>
			</div>
			<div class="col-md-9 pt-md-7 pt-4">
				<div class="row ">
					<div class="col-12 pt-4">
						<h3>PORTÓLIO</h3>
					</div>
					<div class="col-12">
                        <?php
                        if (count($successes[$i]) > 0) {
                            echo "<div class=\"row pt-4 pb-1 pl-md-2\">";
                            for ($i = 0; $i < 5; $i++) {
                                if (strlen($successes[$i]->text) > 0) {
                                    echo "
                                    <div class=\"col px-1\" style='max-width: 20%; !important;'>
								        <a class=\"example-image-link\" href=\"Profiles/" . $ID . "/images/" . $successes[$i]->img . ".jpg\" data-lightbox=\"example-set\" >
                                            <img src=\"Profiles/" . $ID . "/images/min/" . $successes[$i]->img . ".jpg\" alt=\"\" class=\"w-100\">
                                        </a>
                                        <a href='" . $successes[$i]->link . "' style='all: unset;'><h5 class=\"p-2 text-left font-weight-normal\">" . $successes[$i]->text . "</h5></a>
							        </div>
                                    ";
                                }
                            }
                            echo "</div>";
                        }
                        ?>
                        <?php
                        if (count($successes[$i]) > 0) {
                            echo "<div class=\"row pt-4 pb-1 pl-md-2\">";
                            for ($i = 5; $i < 10; $i++) {
                                if (strlen($successes[$i]->text) > 0) {
                                    echo "
                                    <div class=\"col px-1\" style='max-width: 20%; !important;'>
								        <a class=\"example-image-link\" href=\"Profiles/".$ID."/images/".$successes[$i]->img.".jpg\" data-lightbox=\"example-set\" >
                                            <img src=\"Profiles/".$ID."/images/min/".$successes[$i]->img.".jpg\" alt=\"\" class=\"w-100\">
                                        </a>
                                        <a href='".$successes[$i]->link."' style='all: unset;'><h5 class=\"p-2 text-left font-weight-normal\">".$successes[$i]->text."</h5></a>
							        </div>
                                    ";
                                }
                            }
                            echo "</div>";
                        }
                        ?>
						<div class="row pt-4">
							<div class="col-12">
								<h3>Biography</h3>
								<p class="pt-4 text-justify"><? echo $bio; ?></p>
							</div>
						</div>
					</div>
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
<?php include 'components/popup-agency-send-message.php';?>
<?php include 'components/footer.php';?>
<?php include 'components/bottom.php';?>
