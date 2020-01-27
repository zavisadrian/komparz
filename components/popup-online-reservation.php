<section id="modal-template" class="online-reservation">
	<div id="myModal" class="modal" style="display: none">
	<!-- Modal content -->
		<form action="PHP/reservationMail.php" method="post">
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
                                <input type="hidden" name="recipient" value="<?php echo $_REQUEST['ID']; ?>">
								<div class="col-md-6">
									<input name="date" type="text" placeholder="Termín (dátum)" data-provide="datepicker" data-date-language="sk">
								</div>
								<div class="col-md-6">
									<input name="days" type="text" placeholder="Počet dní">
								</div>
								<div class="col-md-6">
									<select class="filter" name="from" id="from" data-placeholder="08:00">
										<option value="07:00">05:00</option>
										<option value="07:00">05:30</option>
										<option value="07:00">06:00</option>
										<option value="07:00">06:30</option>
										<option value="07:00">07:00</option>
										<option value="07:30">07:30</option>
										<option value="08:00">08:00</option>
										<option value="08:30">08:30</option>
										<option value="09:00">09:00</option>
										<option value="09:30">09:30</option>
										<option value="10:00">10:00</option>
										<option value="10:30">10:30</option>
										<option value="11:00">11:00</option>
										<option value="11:30">11:30</option>
										<option value="12:00">12:00</option>
										<option value="12:30">12:30</option>
										<option value="13:00">13:00</option>
										<option value="13:30">13:30</option>
										<option value="14:00">14:00</option>
										<option value="14:30">14:30</option>
										<option value="15:00">15:00</option>
										<option value="15:30">15:30</option>
										<option value="16:00">16:00</option>
										<option value="16:30">16:30</option>
										<option value="17:00">17:00</option>
										<option value="17:30">17:30</option>
										<option value="18:00">18:00</option>
										<option value="18:30">18:30</option>
										<option value="19:00">19:00</option>
										<option value="19:30">19:30</option>
										<option value="20:00">20:00</option>
										<option value="20:30">20:30</option>
										<option value="21:00">21:00</option>
										<option value="21:30">21:30</option>
										<option value="22:00">22:00</option>
										<option value="22:30">22:30</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="filter" name="to" id="to" data-placeholder="18:00">
                                        <option value="07:00">05:00</option>
                                        <option value="07:00">05:30</option>
                                        <option value="07:00">06:00</option>
                                        <option value="07:00">06:30</option>
                                        <option value="07:00">07:00</option>
                                        <option value="07:30">07:30</option>
                                        <option value="08:00">08:00</option>
                                        <option value="08:30">08:30</option>
                                        <option value="09:00">09:00</option>
                                        <option value="09:30">09:30</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:30">13:30</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:30">15:30</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:30">16:30</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:30">17:30</option>
                                        <option value="18:00">18:00</option>
                                        <option value="18:30">18:30</option>
                                        <option value="19:00">19:00</option>
                                        <option value="19:30">19:30</option>
                                        <option value="20:00">20:00</option>
                                        <option value="20:30">20:30</option>
                                        <option value="21:00">21:00</option>
                                        <option value="21:30">21:30</option>
                                        <option value="22:00">22:00</option>
                                        <option value="22:30">22:30</option>
									</select>
								</div>
								<div class="col-12 pt-3">
									<h3>KONTAKT</h3>
									<input name="email" type="text" placeholder="Emailová adresa">
									<input name="phone" type="text" placeholder="Telefónne číslo">
								</div>
							</div>
						</div>
						<div class="col-md-6 pb-2">
							<h3>Spoločnosť</h3>
							<input name="companyname" type="text" placeholder="Obchodné meno">
							<input name="address" type="text" placeholder="Adresa sídla">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="IČO">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="DIČ">
								</div>
								<div class="col-12 text-center">
									<button type="submit" class="btn btn-dark mt-md-5 mt-3 w-50 send">Odoslať</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class="close-me"><i class="fa fa-times" aria-hidden="true"></i></a>
		</div>
        </form>
	</div>
</section>