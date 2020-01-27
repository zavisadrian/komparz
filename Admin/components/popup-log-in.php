<section id="modal-template">
	<div id="myModal" class="log-in" style="display: none">
	<!-- Modal content -->
		<div class="modal-content text-center">
			<div class="row text-center">
                <form action="PHP/login.php" method="POST" id="login">
                    <div class="col-12">
                        <h2 class="mb-4">Prihlásenie do účtu</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <input name="mail" type="text" placeholder="E-mail">
                                <input name="password" type="text" placeholder="Heslo">
                                <div class="custom-control square-checkbox py-md-3 pt-3">
                                    <input type="checkbox" class="custom-control-input" id="1" name="1">
                                    <label class="custom-control-label " for="1">Zapamätať</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark mt-md-2 mt-3 w-50 send" onclick="document.getElementById('login').submit()">Prihlásiť</button>
                    </div>
                </form>
			</div>
			<a class="close-me"><i class="fa fa-times" aria-hidden="true"></i></a>
		</div>
	</div>
</section>
