<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>
<?php include 'Libary/Weblibary.php';?>

<?php
$conn = dbConnect();
$sql = "SELECT * FROM `casting` ORDER BY `auto` DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$date = [];
	$place = [];
	$description = [];
	$name = [];
	$mail = [];
	$id = [];
	while ($row = $result->fetch_assoc()) {
		array_push($name, $row['name']);
		array_push($date, $row['date']);
		array_push($place, $row['place']);
		array_push($description, $row['addition']);
		array_push($mail, $row['owneremail']);
		array_push($id, $row['ID']);
	}
}
?>

	<section id="banner">
		<div class="owl-carousel owl-theme topslider">
			<div class="item" style="background-image:url('images/homepage1.jpg')">
				<div class="slider-content aniview " data-av-animation="fadeInRight">
					<h2><strong>Prihlás sa na casting</strong></h2>
					<hr class="white mb-5">
					<h1><?php echo $name[0]; ?></h1>
					<a href="" class="join"><i class="fa fa-long-arrow-right"></i></a>
					<hr class="white mt-4 w-50 mb-4">
					<a href="castings.php?ID=<?php echo $id[0]; ?>&open=true" class="join btn btn-outline-white d-xl-inline">Prihláška na casting</a>
					<a href="castings.php?ID=<?php echo $id[0]; ?>" class="btn btn-outline-white d-xl-inline mt-xl-0 mt-3">Viac informácií</a>
				</div>
			</div>
            <div class="item" style="background-image:url('images/homepage2.jpg')">
                <div class="slider-content aniview " data-av-animation="fadeInRight">
                    <h2><strong>Prihlás sa na casting</strong></h2>
                    <hr class="white mb-5">
                    <h1><?php echo $name[1]; ?></h1>
                    <a href="" class="join"><i class="fa fa-long-arrow-right"></i></a>
                    <hr class="white mt-4 w-50 mb-4">
                    <a href="castings.php?ID=<?php echo $id[1]; ?>&open=true" class="join btn btn-outline-white d-xl-inline">Prihláška na casting</a>
                    <a href="castings.php?ID=<?php echo $id[1]; ?>" class="btn btn-outline-white d-xl-inline mt-xl-0 mt-3">Viac informácií</a>
                </div>
            </div>
            <div class="item" style="background-image:url('images/homepage3.jpg')">
                <div class="slider-content aniview " data-av-animation="fadeInRight">
                    <h2><strong>Prihlás sa na casting</strong></h2>
                    <hr class="white mb-5">
                    <h1><?php echo $name[2]; ?></h1>
                    <a href="" class="join"><i class="fa fa-long-arrow-right"></i></a>
                    <hr class="white mt-4 w-50 mb-4">
                    <a href="castings.php?ID=<?php echo $id[2]; ?>&open=true" class="join btn btn-outline-white d-xl-inline">Prihláška na casting</a>
                    <a href="castings.php?ID=<?php echo $id[2]; ?>" class="btn btn-outline-white d-xl-inline mt-xl-0 mt-3">Viac informácií</a>
                </div>
            </div>
            <div class="item" style="background-image:url('images/homepage4.jpg')">
                <div class="slider-content aniview " data-av-animation="fadeInRight">
                    <h2><strong>Prihlás sa na casting</strong></h2>
                    <hr class="white mb-5">
                    <h1><?php echo $name[3]; ?></h1>
                    <a href="" class="join"><i class="fa fa-long-arrow-right"></i></a>
                    <hr class="white mt-4 w-50 mb-4">
                    <a href="castings.php?ID=<?php echo $id[3]; ?>&open=true" class="join btn btn-outline-white d-xl-inline">Prihláška na casting</a>
                    <a href="castings.php?ID=<?php echo $id[3]; ?>" class="btn btn-outline-white d-xl-inline mt-xl-0 mt-3">Viac informácií</a>
                </div>
            </div>
            <div class="item" style="background-image:url('images/homepage5.jpg')">
                <div class="slider-content aniview " data-av-animation="fadeInRight">
                    <h2><strong>Prihlás sa na casting</strong></h2>
                    <hr class="white mb-5">
                    <h1><?php echo $name[4]; ?></h1>
                    <a href="" class="join"><i class="fa fa-long-arrow-right"></i></a>
                    <hr class="white mt-4 w-50 mb-4">
                    <a href="castings.php?ID=<?php echo $id[4]; ?>&open=true" class="join btn btn-outline-white d-xl-inline">Prihláška na casting</a>
                    <a href="castings.php?ID=<?php echo $id[4]; ?>" class="btn btn-outline-white d-xl-inline mt-xl-0 mt-3">Viac informácií</a>
                </div>
            </div>
            <div class="item" style="background-image:url('images/homepage6.jpg')">
                <div class="slider-content aniview " data-av-animation="fadeInRight">
                    <h2><strong>Prihlás sa na casting</strong></h2>
                    <hr class="white mb-5">
                    <h1><?php echo $name[5]; ?></h1>
                    <a href="" class="join"><i class="fa fa-long-arrow-right"></i></a>
                    <hr class="white mt-4 w-50 mb-4">
                    <a href="castings.php?ID=<?php echo $id[5]; ?>&open=true" class="join btn btn-outline-white d-xl-inline">Prihláška na casting</a>
                    <a href="castings.php?ID=<?php echo $id[5]; ?>" class="btn btn-outline-white d-xl-inline mt-xl-0 mt-3">Viac informácií</a>
                </div>
            </div>
		</div>
	</section>
	<section id="offer-find-banner">
		<div class="container py-5">
			<div class="row">
				<div class="col-md-5 text-md-right">
					<div class="aniview " data-av-animation="fadeInLeft">
						<h2>hľadám si príležitosť</h2>
						<p>Vytvor si účet a staň sa členom komparz.tv</p>
						<a href="./membership.php" class="btn btn-outline-white mt-3">Vytvoriť si účet</a>
					</div>
				</div>
				<div class="col-md-5 offset-md-2 pt-md-0 pt-4">
					<div class="aniview " data-av-animation="fadeInRight">
						<h2>ponúkam príležitosť</h2>
						<p>Vytvor si účet ako partner a zverejňuj castingy na komparz.tv</p>
						<a href="./membership.php" class="btn btn-outline-white mt-3">Vytvoriť si účet</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="about">
		<div class="container py-5">
			<div class="row align-items-center">
				<div class="col-md-7">
					<img src="images/o-nas.jpg" class="w-100 aniview" alt="komparz tv o nas" data-av-animation="fadeInLeft">
				</div>
				<div class="col-md-5 pl-md-4 pt-md-0 pt-4">
					<div class="aniview " data-av-animation="fadeInRight">
					<h3>
						CASTINGOVÁ SPOLOČNOSŤ
						</h3>
						<h2>
							NAJVÄČŠIA SLOVENSKÁ <span class="d-md-block">CASTINGOVÁ SPOLOČNOSŤ</span>
						</h2>
						<h5 class="pt-md-0 pt-4">
							Najväčšia databáza slovenských komparzistov, modelov a hercov.
						</h5>
						<p class="text-justify">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vestibulum non lectus auctor venenatis. Duis in congue nisl. Aenean at ipsum scelerisque orci aliquet tincidunt et dapibus nunc. In in nisi tincidunt, fringilla turpis finibus, tristique diam. Nulla bibendum eros sed metus pulvinar malesuada et porttitor nibh. Quisque non lobortis justo. Vivamus nec interdum ipsum, eu iaculis purus. Etiam porta turpis ut lacus facilisis molestie.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="last-registered" class="aniview" data-av-animation="fadeIn">
		<div class="container py-5">
			<div class="row pb-5">
				<div class="col-md-1 col-2 d-md-block d-none">
					<div class="square">
						<i class="fa fa-plus"></i>
					</div>
				</div>
				<div class="col-md-6">
					<h3>ksdmgsdf</h3>
					<p>usandae eveniet quidem voluptatem, commodi beatae, molestiae quis quos incidunt quibusdam delectus facere eos adipisci provident.</p>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-md-9">
					<div class="absolute-images">
						<div class="categories owl-carousel owl-theme">
							<div class="">
								<div class="model-photo">
									<a href="database.php">
										<img src="images/member-1.jpg" class="w-100" alt="komparz tv user">
									</a>
								</div>
							</div>
							<div class="">
								<div class="model-photo">
									<a href="database.php">
										<img src="images/member-2.jpg" class="w-100" alt="komparz tv user">
									</a>
								</div>
							</div>
							<div class="">
								<div class="model-photo">
									<a href="database.php">
										<img src="images/member-3.jpg" class="w-100" alt="komparz tv user">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 offset-md-1">
					<div class="filter">
						<h2>Kategórie</h2>
						<a href="database.php">Komparzisti & herci</a>
						<a href="database.php">Hostessing</a>
						<a href="database.php">Modeling</a>
						<a href="database.php">Agentury, Fotografi & kreatívni profesionáli</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="events" class="aniview mt-4" data-av-animation="slideInUp">
		<div class="container">
			<div class="eventSlider owl-carousel owl-theme">
				<?php
				for ($i = 0; $i < count($name); $i++) {
					echo "
					<a href='castings.php'>
				<div class=\"card event text-center\" >
					<i class=\"fa fa-user mt-3\" aria-hidden=\"true\"></i>
					<h2 class=\"mt-3\">CASTING</h2>
					<h3>".$date[$i]."</h3>
					<p class=\"mb-3 mt-4\">".$mail[$i]."</p>
					<div class=\"card-body text-left\" style='height: 200px;'>
						<p class=\"pt-3\"><strong>".$name[$i]."</strong></p>
						<p class=\"light pb-4\">".$description[$i]."</p>
					</div>
				</div>
				</a>
				";
				}
				?>
			</div>
		</div>
	</section>
	<section id="blog-home" class="aniview" data-av-animation="slideInUp">
		<div class="container pb-6">
			<div class="row">
				<div class="col-lg-11 col-10 pt-md-0 pt-4">
					<h2><a href="./blogs.php">Blog</a></h2>
					<p class="text-justify">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum 
						<span class="d-inline d-md-block">vestibulum non lectus auctor venenatis.</span>
					</p>
				</div>
				<div class="col-lg-1 col-2 text-right d-lg-block d-none">
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

<?php include 'components/popup-casting-join.php';?>
<?php include 'components/footer.php';?>
<?php include 'components/bottom.php';?>
