<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>

<?php
if ($_SESSION['userID'] != $_REQUEST['ID']) {
    header("Location: 404.php");
}
?>
<section id="thank-you">
	<div class="container py-7 text-center mt-6">
		<h1>Zmeniť heslo</h1>
			<form action="PHP/changePass-1.php" class="row pt-4">
				<div class="col-md-6">
					<label for="name" class="mb-0 mt-3"><strong>Zadajte nové heslo</strong></label>
					<input id="pass1" type="password" class="registration-input" name="password" onkeyup="passwordCompare()"/>
				</div>
				<div class="col-md-6">
					<label for="name" class="mb-0 mt-3"><strong>Potvrďte nové heslo</strong></label>
					<input id="pass2" type="password" class="registration-input" name="confirm_password" onkeyup="passwordCompare()"/>
				</div>
				<div class="col-md-6 offset-md-3">
					<input id="passSubmit" value="Odoslať" type="submit" class="btn btn-primary w-100 my-5" disabled>
				</div>
			</form>
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

<?php include 'components/footer.php';?>
<?php include 'components/bottom.php';?>
