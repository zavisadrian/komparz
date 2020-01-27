<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>

<form id="support" class="mt-8" action="PHP/technicMail.php" method="post">
	<div class="container py-5">
		<div class="row text-center">
			<div class="col-12">
				<h1>Technická podpora</h1>
				<p class="mt-5">V prípade akýchkoľvek otázok či pripomienok týkajúcich sa registrácie do našej databázy a technických problémov, kontaktujte prosím náš hotline na nižšie uvedených telefónnych číslach v pracovných dňoch, v čase od 9:00 hod. do 15:00 hod.</p>
				<p class="mt-5"><strong>tel.: +421-948-088-474 <br>Castingové odd. / Nové tváre: casting@komparz.tv <br>Vedenie spoločnosti: info@komparz.tv</strong> <br><br><br>Pre najrýchlejšiu odpoveď na tvoju otázku ti odporúčame použiť náš on-line kontaktný formulár.</p>
			</div>
		</div>
		<div class="row my-8">
			<div class="col-md-6">
				<input name="name" type="text" placeholder="MENO A PRIEZVISKO">
				<input name="mail" type="text" placeholder="EMAIL" class="mt-4">
				<input name="phone" type="text" placeholder="TELEFÓN" class="mt-4">
			</div>
			<div class="col-md-6">
				<textarea name="message" id="" rows="8" placeholder="Tu rozpíš svoj problém..."></textarea>
			</div>
			<div class="col-12">
				<a href="./faq.php">FAQ - často kladené otázky</a>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-12"><button type="submit" class="btn btn-primary">Odoslať</button></div>
		</div>
	</div>
</form>

<?php include 'components/footer.php';?>
<?php include 'components/bottom.php';?>

