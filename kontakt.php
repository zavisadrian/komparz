<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>
<?php include 'Libary/Weblibary.php';?>

<section id="member-banner" style="background-image: url(../images/komparz-banner.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="py-5">KONTAKT</h1>
			</div>
			<div class="col-md-6 text-md-right pt-md-3">
				
			</div>
		</div>
	</div>
</section>

<section id="info">
	<div class="container pt-5">
		<div class="row">
			<div class="col-12">
				<h1 class="my-5">Spolupráca pre FILMOVÉ & TELEVÍZNE produkcie / REKLAMNÉ & MODELINGOVÉ agentúry</h1>
				<p>Naša spoločnosť obsadzuje filmy, televízne projekty aj reklamy. Disponujeme najväčšou databázou slovenských komparzistov, hercov, nehercov, rôzných zaujímavých typov, etník, talentovaných detí, modeliek, modelov, tanečníkov, spevákov, moderátorov a podobne. Organizujeme castingy vo vlastnom profesionálne vybavenom štúdiu. Robíme castingy na kľúč, vyhľadávame nové talenty, zvládame street casting, dodávame na natáčanie komparz. Zabezpečujeme zmluvné zastúpenie umelcov.</p>
				<p class="my-4">Zabezpečujeme kompletnú realizáciu castingu, rýchle dodanie výsledkov z castingu na dátových médiách podľa požiadavky klienta. Evidujeme bohatú databázu slovenských a českých hercov / amatérskych hercov, komparzistov – nové "neokukané" a zaujímavé tváre pre film a reklamu. Pre vaše podujatie zabezpečíme výber hostesiek tak, aby reprezentovali vašu spoločnosť svojím príjemným vystupovaním, vzhľadom, aj znalosťami cudzích jazykov.</p>
				<p>Napíšte nám. Naše služby sa vyznačujú vysokou mierou flexibility a prispôsobia sa Vašim požiadavkám. V prípade Vášho záujmu o naše služby je pre Vás najľahším variantom kontaktovať nás prostredníctvom kontaktného formulára. Tešíme sa na spoločnú spoluprácu.</p>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-6">
				<p><strong>Komparz.tv</strong></p>
				<p><strong>ADRESA:</strong> Šancová 48, Bratislava-Staré Mesto</p>
				<p><strong>PSČ:</strong> 81105</p>
			</div>
			<div class="col-md-6">
				<form action="PHP/cooperationMail.php" method="post" class="row">
					<div class="col-md-6">
						<input name="company" type="text" placeholder="Názov spoločnosti">
					</div>
					<div class="col-md-6">
						<input name="mail" type="text" placeholder="Email">
					</div>
					<div class="col-md-6">
						<input name="person" type="text" placeholder="Kontaktná osoba">
					</div>
					<div class="col-md-6">
						<input name="number" type="text" placeholder="Telefónny kontakt">
					</div>
					<div class="col-12">
						<input name="subject" type="text" placeholder="Predmet objednávanej služby">
					</div>
					<div class="col-12">
						<textarea name="message" id="" rows="6" placeholder="Správu jednoducho vyplňte a odošlite"></textarea>
					</div>
					<div class="col-md-6">
						<input type="submit" class="btn btn-primary w-100 px-2" value="ODOSLAŤ NEZÁVEZNÚ OBJEDNÁVKU"/>
					</div>
					<div class="col-md-6 text-right">
						<p>Viac o ochrane osobných údajov <a href="">tu.</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<section id="referencies">
	<div class="container py-3">
		<div class="row">
			<div class="referencies owl-carousel owl-theme">
				<div>
					<img src="images/higher-logo.png" alt="" class="w-100">
				</div>
				<div>
					<img src="images/ford-logo.png" alt="" class="w-100">
				</div>
				<div>
					<img src="images/higher-logo.png" alt="" class="w-100">
				</div>
				<div>
					<img src="images/ford-logo.png" alt="" class="w-100">
				</div>
				<div>
					<img src="images/higher-logo.png" alt="" class="w-100">
				</div>
				<div>
					<img src="images/ford-logo.png" alt="" class="w-100">
				</div>
			</div>
		</div>
	</div>
</section>

<section id="blog-home">
		<div class="container py-5">
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
                <?php
                $dbh = dbConnectSafely();
                $sql = "SELECT * FROM `blog` WHERE 1 ORDER BY `ID` DESC";
                $sql = $dbh->prepare($sql);
                $sql->execute();

                $result = $sql->fetch();
                ?>

                <div class="col-md-6">
                    <div class="blog-box">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="blog-image h-100" style="background-image: url('Blog/<?php echo $result['htmlContent']; ?>/blog.jpg')"></div>

                            </div>
                            <div class="col-md-6">
                                <div class="text">
                                    <h5><?php echo $result['createDate']; ?></h5>
                                    <h2><?php echo $result['headline']; ?></h2>
                                    <p class="text-justify">
                                        <?php echo substr($result['mainText'], 0, 160)."..."; ?>
                                    </p>
                                    <a href="./blog.php?ID=<?php echo $result['htmlContent']; ?>">čítať viac</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $result = $sql->fetch(); ?>
                <div class="col-md-6">
                    <div class="blog-box">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="blog-image h-100" style="background-image: url('Blog/<?php echo $result['htmlContent']; ?>/blog.jpg')"></div>

                            </div>
                            <div class="col-md-6">
                                <div class="text mt-md-0 mt-3">
                                    <h5><?php echo $result['createDate']; ?></h5>
                                    <h2><?php echo $result['headline']; ?></h2>
                                    <p class="text-justify">
                                        <?php echo substr($result['mainText'], 0, 160)."..."; ?>
                                    </p>
                                    <a href="./blog.php?ID=<?php echo $result['htmlContent']; ?>">čítať viac</a>
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
