<section id="modal-template" class="online-reservation">
	<div id="myModal" class="modal" style="display: none">
	<!-- Modal content -->
		<div class="modal-content">
			<div class="row">
				<div class="col-12">
					<div class="col-12 text-center">
						<h2 class="mb-4">Online rezervácia</h2>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h3>Termín</h3>
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Termín (dátum)" data-provide="datepicker" data-date-language="sk">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Počet dní">
								</div>
								<div class="col-md-6">
									<select class="filter" name="from" id="from" data-placeholder="08:00">
										<option value="08:00">08:00</option>
										<option value="09:00">09:00</option>
										<option value="10:00">10:00</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="filter" name="to" id="to" data-placeholder="08:00">
										<option value="08:00">08:00</option>
										<option value="09:00">09:00</option>
										<option value="10:00">10:00</option>
									</select>
								</div>
								<div class="col-12 pt-3">
									<h3>KONTAKT</h3>
									<input type="text" placeholder="Emailová adresa">
									<input type="text" placeholder="Telefónne číslo">
								</div>
							</div>
						</div>
						<div class="col-md-6 pb-2">
							<h3>Spoločnosť</h3>
							<input type="text" placeholder="Obchodné meno">
							<input type="text" placeholder="Adresa sídla">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="IČO">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="DIČ">
								</div>
								<div class="col-12 text-center">
									<a class="btn btn-dark mt-md-5 mt-3 w-50 send">Odoslať</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class="close-me"><i class="fa fa-times" aria-hidden="true"></i></a>
		</div>
	</div>
</section>