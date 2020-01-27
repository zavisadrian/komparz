<nav class="header navbar navbar-expand-lg navbar-light bg-white fixed-top px-0">
	<div class="container-fluid pr-md-0">
		<a class="navbar-brand font-weight-black" href="./index.php">
			<img class="pl-2" src="images/logo.png" alt="logo komparz tv">
		</a>
		<button class="navbar-toggler m-2" type="button" data-toggle="collapse" data-target="#navbarDefault">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse text-lg-left text-center" id="navbarDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="./index.php">Domov</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./database.php">Databáza</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./castings.php">Castingy</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./marketplace.php">Trhovisko</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./blogs.php">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./kontakt.php">Spolupráca</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<a href="https://sk-sk.facebook.com/komparzTV/" class="menu"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
				<a href="https://www.instagram.com/komparztv/?hl=sk" class="menu mr-xl-3"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <?php
                session_start();
                if ($_SESSION["userID"] == "")
                    echo '
                        <a href="#" class="btn btn-navbar login">Prihlásiť sa</a>
                        <a href="./membership.php" class="btn btn-navbar reg">Registrovať sa</a>';
                else
                    echo '
                        <a href="profile-acter.php?ID='.$_SESSION["userID"].'" class="btn btn-navbar">Môj profil</a>
                        <a href="/PHP/logout.php" class="btn btn-navbar reg">Odhlásiť sa</a>';
                ?>
			</ul>
		</div>
	</div>
</nav>