<section id="modal-template">
	<div id="myModal" class="modal" style="display: none">
	<!-- Modal content -->
		<div class="modal-content text-center">
			<div class="row text-center">
				<div class="col-12">
                    <form action="PHP/castingJoinMail.php" method="post">
                    <h2 class="mb-4">Bezplatná online prihláška na CASTING</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <input name="recipient" type="hidden" placeholder="" value="<?php echo $_REQUEST['mail']; ?>">
                            <input name="name" type="text" placeholder="Meno a Priezvisko">
                            <input name="mail" type="text" placeholder="Emailová adresa">
                            <input name="phone" type="text" placeholder="Telefón">
                            <input name="address" type="text" placeholder="Mesto Bydliska">
                            <input name="birth" type="text" placeholder="Rok narodenia">
                            <input id="castingid" name="castingid" type="hidden">
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