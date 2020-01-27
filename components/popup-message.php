<section id="modal-template">
	<div id="myModal" class="message" style="display: none">
	<!-- Modal content -->
		<div class="modal-content text-center">
			<div class="row text-center">
				<form action="PHP/sendMessage.php" method="post" class="col-12">
					<h2 class="mb-4">Kontaktujte osobu</h2>
					<div class="row">
						<div class="col-md-12">
							<input name="ID" type="hidden" placeholder="E-mail" value="<?php echo $_REQUEST['ID']; ?>">
							<input name="mail" type="text" placeholder="E-mail">
							<input name="subject" type="text" placeholder="Predmet">
							<input name="person" type="text" placeholder="Titul, meno, priezvisko">
							<input name="contact" type="text" placeholder="email / tel.č">
							<textarea name="message" id="" rows="5" placeholder="Správa"></textarea>
							<div class="custom-control square-checkbox py-md-3 pt-3">
								<input type="checkbox" class="custom-control-input" id="1" name="1">
								<label class="custom-control-label " for="1">Zapamätať</label>
							</div>
						</div>
					</div>
					<input type="submit" class="btn btn-dark mt-md-2 mt-3 w-50" value="Odoslať"/>
				</form>
			</div>
			<a class="close-me"><i class="fa fa-times" aria-hidden="true"></i></a>
		</div>
	</div>
</section>
