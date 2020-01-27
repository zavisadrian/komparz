<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>
<?php include 'Libary/Weblibary.php'; ?>

<section id="member-banner" style="background-image: url(../images/komparz-banner.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="pt-5">INZERÁT</h1>
				<h3 class="pb-md-5 cas">Photoshooting in barcelona</h3>
			</div>
			<div class="col-md-6 text-md-right pt-md-3">
				<a href="./marketplace-create.php" class="btn btn-white my-5">ZVEREJNIŤ PONUKU</a>
			</div>
		</div>
	</div>
</section>

<section id="add_casting">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-5">
				<div class="w-100 h-100 casting-info d-lg-block d-none" style="background-image: url(Market/<? echo $_REQUEST['ID']; ?>.jpg);"></div>
			</div>
            <?php
            $conn = dbConnect();
            $sql = "SELECT * FROM `market` WHERE `ID` = '".$_REQUEST['ID']."' ORDER BY `auto` DESC";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <div class=\"col-md-7 px-md-1 desc pl-md-3\">
				        <h3>".$row['name']."</h3>
				        <p class=\"pt-3 text-justify\">".$row['description']."</p>
				        <p class=\"orange pt-3\">Dátum do: <strong>".$row['dateTo']."</strong></p>
				        <p class=\"orange\">Miesto: <strong>".$row['place']."</strong></p>
				        <p class=\"orange\">Honorár: <strong>".$row['honorar']."</strong></p>
				        <a class=\"btn join btn-secondary mt-3 w-50\">Kontaktovať</a>
			        </div>
                    ";
                    $mail = $row['mail'];
                }
            }
            ?>
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

<section id="modal-template">
    <div id="myModal" class="modal" style="display: none">
        <!-- Modal content -->
        <div class="modal-content text-center">
            <div class="row text-center">
                <div class="col-12">
                    <form action="PHP/marketJoinMail.php" method="post">
                        <h2 class="mb-4">Prihláška</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <input name="recipient" type="hidden" placeholder="" value="<?php echo $mail; ?>">
                                <input name="name" type="text" placeholder="Meno a Priezvisko">
                                <input name="mail" type="text" placeholder="Emailová adresa">
                                <input name="phone" type="text" placeholder="Telefón">
                                <input name="address" type="text" placeholder="Mesto Bydliska">
                                <input name="birth" type="text" placeholder="Rok narodenia">
                                <input id="marketid" name="marketid" type="hidden" value="<? echo $_REQUEST['ID']; ?>">
                            </div>
                            <div class="col-md-6 pb-2">
                                <textarea name="info" id="" rows="10" class="h-100" placeholder="Zaujímavé informácie o Vás"></textarea>
                            </div>
                        </div>
                        <button type="submit" value="Odoslať" class="btn btn-dark mt-md-5 mt-3 w-50">Odoslať</button>
                    </form>
                </div>
            </div>
            <a class="close-me"><i class="fa fa-times" aria-hidden="true"></i></a>
        </div>
    </div>
</section>
<?php include 'components/footer.php';?>
<?php include 'components/bottom.php';?>
