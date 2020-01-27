<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>
<?php include "Libary/Weblibary.php"; ?>
<?php session_start(); ?>

<section id="member-banner" style="background-image: url(../images/komparz-banner.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="pt-5">CASTINGY</h1>
				<h3 class="pb-md-5">AKTUÁLNA PONUKA CASTINGOV</h3>
			</div>
			<div class="col-md-6 text-md-right pt-md-3">
                <?PHP
                if (isset($_SESSION['castingMail'])) {
                    echo "<a href='casting-own.php' class=\"btn btn-white my-5\">MOJE CASTINGY</a>";
                    echo "<a href=\"PHP/castingLogout.php\" class=\"btn btn-outline-white ml-2 my-5\">ODHLÁSIŤ SA ZO SPRÁVY</a>";
                } else {
                    echo "<a id=\"findCasting\" class=\"btn btn-white my-5\">SPRAVOVAŤ CASTINGY</a>";
                }
                ?>
			</div>
		</div>
	</div>
</section>

<section id="add_casting">
	<div class="container py-5">
		<div class="row">
			<div class="col-12">
                <?php
                $conn = dbConnect();
                $sql = "SELECT * FROM `casting` ORDER BY `auto` DESC";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){

                        $datetime1 = new DateTime($row['date']);
                        $datetime2 = new DateTime($row['length']);

                        $interval = $datetime1->diff($datetime2);

                        $diff = $interval->format('%a');

                        if ($diff != 0)
                        echo "
                        <div class=\"row mt-5\" id='".$row['ID']."''>
					        <div class=\"col-md-5\">
					    	    <div class=\"w-100 h-100 casting-info d-lg-block d-none\" style=\"background-image: url(Casting/".$row['ID'].".jpg);\"></div>
					        </div>
					        <div class=\"col-md-7 px-md-1 desc pl-md-3 position-relative\">
                            <a target='_blank' class=\"map\" href=\"".$row['googleMaps']."\">MIESTO KONANIA</a>
					    	    <h3><span class=\"orange\">".$row['date']."</span> - ".$row['name']."</h3>
					    	    <p class=\"pt-3 text-justify\">".$row['description']."</p>
					    	    <p class=\"orange\">Trvanie: <strong>".$diff." dní</strong></p>
					    	    <p class=\"orange\">Miesto: <strong>".$row['place']."</strong></p>
					    	    <p class=\"orange\">Honorár: <strong>".$row['honorar']."€</strong></p>
					    	    <h5>Doplňujúce informácie</h5>
					    	    <p class=\"pt-3 text-justify\">".$row['addition']."</p>
					    	    <a data-id='".$row['ID']."' class=\"set-casting btn join btn-secondary mt-3 w-50\">Zúčastniť sa</a>
					        </div>
				        </div>
                        ";
                    }
                }
                ?>
			</div>
			<div class="col-12 text-center pt-5 pagination-numbers"><!--
				<a href="" class="orange">1</a>
				<a href="">2</a>
				<a href="">3</a>
				<a href="">4</a>-->
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

    <section id="modal-template">
        <div id="myModal" class="map-modal" style="display: none">
            <!-- Modal content -->
            <div class="modal-content text-center p-5">
                <h2 class="mb-2">Prihlásiť sa na správu castingov</h2>
                <form id="findCastingForm" action="PHP/castingLogin.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="mail" placeholder="E-mail" />
                        </div>
                        <div class="col-md-6">
                            <input type="password" name="password" placeholder="Heslo">
                        </div>
                        <div class="col-md-12 text-left py-2">
                            <a href="./forgotten-password-casting.php" class="forgotten-password">Zabudli ste heslo?</a>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" name="submit" value="Hľadať" class="btn btn-primary w-100 mt-1">
                        </div>
                        <div class="col-md-12 text-center py-2">
                            <a href="casting-create-profile.php" class="forgotten-password">Vytvoriť nový profil na vytváranie castingov</a>
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