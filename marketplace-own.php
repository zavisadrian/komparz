<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>
<?php include 'Libary/Weblibary.php';?>

<section id="member-banner" style="background-image: url(../images/komparz-banner.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h1 class="pt-5">TRHOVISKO</h1>
			</div>
			<div class="col-md-8 text-md-right pt-md-3">
                <a href='marketplace.php' id=\"cancelEdit\" class="btn btn-white my-5">ZOBRAZIŤ VŠETKO</a>
                <a href='marketplace-create.php' id=\"cancelEdit\" class="btn btn-white my-5">VYTVORIŤ NOVÚ</a>
                <a href="PHP/marketLogout.php" class="btn btn-outline-white my-5">ODHLÁSIŤ SA ZO SPRÁVY</a>
			</div>
		</div>
	</div>
</section>
<section id="add_casting">
	<div class="container pb-5">
		<div class="row">
			<div class="col-md-12">
				<div class="row mt-5">
					<a href="marketplace.php?cat=cat1" class="btn btn-quaternary ml-2">Foto sekcia</a>
					<a href="marketplace.php?cat=cat2" class="btn btn-quaternary ml-2">Kurzy a ponuky</a>
					<a href="marketplace.php?cat=cat3" class="btn btn-quaternary ml-2">Dopyty</a>
				</div>

                <?php
                $conn = dbConnect();
                $sql = "SELECT * FROM `market` WHERE `mail` = '".$_SESSION['marketMail']."' ORDER BY `auto` DESC";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <div class=\"row no-gutters pt-5\">
					        <div class=\"col-lg-4\">
						        <div class=\"w-100 h-100 membership d-lg-block d-none\" style=\"background-image: url(Market/".$row['ID'].".jpg);\"></div>
					        </div>
					        <div class=\"col-lg-7 col-10 bg-orange\">
						        <h4>".$row['name']."</h4>
						        <p class=\"pt-2\">".$row['personality']."</p>
						        <p><strong>".$row['place']."</strong></p>
						        <p>Casting sa uzatvára: <strong>".$row['dateTo']."</strong></p>
						        <br>
						    <p class=\"orange\">Honorár <span class=\"price\">".$row['honorar']."</span></p>
					        </div>
					        <div class=\"col-md-1 col-2 text-center bg-under-link py-7\">
						    <a class=\"show-link\" href=\"market-edit.php?ID=".$row['ID']."\">Upraviť <br> info <br><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a>
					        </div>
				        </div>
                        ";
                    }
                }
                ?>
                <!--
			<div class="col-12 text-center pt-5 pagination-numbers">
				<a href="" class="orange">1</a>
				<a href="">2</a>
				<a href="">3</a>
				<a href="">4</a>
			</div>
			-->
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

<section id="modal-template">
    <div id="myModal" class="map-modal" style="display: none">
        <!-- Modal content -->
        <div class="modal-content text-center p-5">
            <h2 class="mb-2">Prihlásiť sa na správu ponúk</h2>
            <form id="findCastingForm" action="PHP/marketLogin.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="mail" placeholder="E-mail" />
                    </div>
                    <div class="col-md-6">
                        <input type="password" name="password" placeholder="Heslo">
                    </div>
                    <div class="col-md-12 text-left py-2">
                        <a href="./forgotten-password-market.php" class="forgotten-password">Zabudli ste heslo?</a>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" name="submit" value="Hľadať" class="btn btn-primary w-100 mt-1">
                    </div>
                    <div class="col-md-12 text-center py-2">
                        <a href="market-create-profile.php" class="forgotten-password">Vytvoriť nový profil na vytváranie ponúk</a>
                    </div>
                </div>
            </form>
            <a class="close-me"><i class="fa fa-times" aria-hidden="true"></i></a>
        </div>
    </div>
</section>

<?php include 'components/popup-casting-join.php';?>
<?php include 'components/footer.php';?>
<?php include 'components/bottom.php';?>
