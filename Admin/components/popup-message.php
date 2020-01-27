<section id="modal-template">
	<div id="myModal" class="message" style="display: none">
	<!-- Modal content -->
		<div class="modal-content text-center">
			<div class="row text-center">
                <form action="PHP/login.php" method="POST">
                    <div class="col-12">
                        <h2 class="mb-4">Kontatujte osobu</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" placeholder="E-mail">
                                <input type="text" placeholder="Predmet">
                                <input type="text" placeholder="Osoba">
                                <textarea name="" id="" rows="5" placeholder="Správa"></textarea>
                                <div class="custom-control square-checkbox py-md-3 pt-3">
                                    <input type="checkbox" class="custom-control-input" id="1" name="1">
                                    <label class="custom-control-label " for="1">Zapamätať</label>
                                </div>
                            </div>
                        </div>
                        <button style="all: unset" type="submit"><a class="btn btn-dark mt-md-2 mt-3 w-50 send">Prihlásiť</a></button>
                    </div>
                </form>
			</div>
			<a class="close-me"><i class="fa fa-times" aria-hidden="true"></i></a>
		</div>
	</div>
</section>