<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>

<section id="database" style="background-image: url(../images/komparz-banner.jpg);">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-3 ">
				<div class="filter-container px-0">
					<div class="filter pb-4 pt-4 filt">
						<h4>Vyhľadávanie</h4>
						<p>Pohlavie</p>
						<select name="gender" id="gender" class="filter" data-placeholder="Pohlavie">
							<option value=""></option>
							<option value="Muž">Muž</option>
							<option value="Žena">Žena</option>
							<option value="Iné">Iné</option>
						</select>
						<p>Krajina</p>
						<select name="country" id="country" class="filter" data-placeholder="Krajina">
							<option value=""></option>
							<option value="Slovensko">Slovensko</option>
							<option value="Rakúsko">Rakúsko</option>
							<option value="Maďarsko">Maďarsko</option>
						</select>
						<p>Mesto</p>
						<select name="town" id="town" class="filter" data-placeholder="Mesto">
							<option value=""></option>
							<option value="Senica">Senica</option>
							<option value="Bratislava">Bratislava</option>
							<option value="Košice">Košice</option>
						</select>
						<p>Kategória</p>
						<select name="category" id="category" class="filter" data-placeholder="Kategória">
							<option value=""></option>
							<option value="Stylisti">Stylisti</option>
							<option value="Herci">Herci</option>
							<option value="Fotografi">Fotografi</option>
						</select>
						<p>Výška</p>
						<div class="row">
							<div class="col-5 pr-md-1">
								<select name="height-from" id="height-from" class="filter " data-placeholder="od">
									<option value=""></option>
									<option value="140cm">140cm</option>
									<option value="120cm">120cm</option>
									<option value="190cm">190cm</option>
								</select>
							</div>
							<div class="col-2 text-center px-1"><p class="pt-2">do</p></div>
							<div class="col-5 pl-md-1">
								<select name="height-to" id="height-to" class="filter " data-placeholder="do">
									<option value=""></option>
									<option value="140cm">140cm</option>
									<option value="150cm">150cm</option>
									<option value="190cm">190cm</option>
								</select>
							</div>
						</div>
						<p>Vek</p>
						<div class="row">
							<div class="col-5 pr-md-1">
								<select name="age-from" id="age-from" class="filter " data-placeholder="od">
									<option value=""></option>
									<option value="20">20</option>
									<option value="25">25</option>
									<option value="50">50</option>
								</select>
							</div>
							<div class="col-2 text-center px-1"><p class="pt-2">do</p></div>
							<div class="col-5 pl-md-1">
								<select name="age-to" id="age-to" class="filter " data-placeholder="do">
									<option value=""></option>
									<option value="80">30</option>
									<option value="40">40</option>
									<option value="80">80</option>
								</select>
							</div>
						</div>
						<p>Hľadaná výraz</p>
						<input type="text" placeholder="Zadajte kľúčové slová">
						<hr class="black">
						<div class="custom-control square-checkbox pb-md-3 pt-md-0 pt-3">
								<input type="checkbox" class="custom-control-input" id="komp" name="komp">
								<label class="custom-control-label " for="komp">Komparzisti</label>
						</div>
						<div class="custom-control square-checkbox py-md-3 pt-3">
								<input type="checkbox" class="custom-control-input" id="acters" name="acters">
								<label class="custom-control-label " for="acters">Herci</label>
						</div>
						<div class="custom-control square-checkbox py-md-3 pt-3">
								<input type="checkbox" class="custom-control-input" id="hostes" name="hostes">
								<label class="custom-control-label " for="hostes">Hostesky a promotéri</label>
						</div>
						<div class="custom-control square-checkbox pb-5 pt-3">
								<input type="checkbox" class="custom-control-input" id="photo" name="photo">
								<label class="custom-control-label " for="photo">Agentúri, Fotografi, Kreatívny profesionály</label>
						</div>
						<hr class="black">
						<div class="custom-control square-checkbox py-md-3 pt-3">
								<input type="checkbox" class="custom-control-input" id="models" name="models">
								<label class="custom-control-label " for="models">Všetky modelky a modeli</label>
						</div>
						<div class="custom-control square-checkbox py-md-3 pt-3">
								<input type="checkbox" class="custom-control-input" id="profesional" name="all">
								<label class="custom-control-label " for="profesional">Profesionálny modeli</label>
						</div>
						<div class="custom-control square-checkbox py-md-3 pt-3">
								<input type="checkbox" class="custom-control-input" id="photomodels" name="photomodels">
								<label class="custom-control-label " for="photomodels">Fotomodeli</label>
						</div>
						<div class="custom-control square-checkbox py-md-3 pt-3">
								<input type="checkbox" class="custom-control-input" id="hair" name="hair">
								<label class="custom-control-label " for="hair">Vlasový modeli</label>
						</div>
					</div>
					<a id="find" class="btn btn-dark w-100 mt-3">vyhladať</a>
					<a id="show" class="btn btn-primary w-100">Rozšírené vyhladávanie <i class="fa fa-angle-double-right ml-3" aria-hidden="true"></i> </a>
				</div>
				<div id="filter2" class="filter2" style="display: none">
					<div class="filt">
						<h4>Rozšírené vyhľadávanie</h4>
						<p>Hrudník / Prsia</p>
						<div class="row">
							<div class="col-5 pr-md-1">
								<select name="tits-from" id="tits-from" class="filter " data-placeholder="od">
									<option value=""></option>
									<option value="140cm">140cm</option>
									<option value="120cm">120cm</option>
									<option value="190cm">190cm</option>
								</select>
							</div>
							<div class="col-2 text-center px-1"><p class="pt-2">do</p></div>
							<div class="col-5 pl-md-1">
								<select name="tits-to" id="tits-to" class="filter " data-placeholder="do">
									<option value=""></option>
									<option value="140cm">140cm</option>
									<option value="150cm">150cm</option>
									<option value="190cm">190cm</option>
								</select>
							</div>
						</div>
						<p>Konfekcia</p>
						<div class="row">
							<div class="col-5 pr-md-1">
								<select name="size-from" id="size-from" class="filter " data-placeholder="od">
									<option value=""></option>
									<option value="23">23</option>
									<option value="40">40</option>
									<option value="32">32</option>
								</select>
							</div>
							<div class="col-2 text-center px-1"><p class="pt-2">do</p></div>
							<div class="col-5 pl-md-1">
								<select name="size-to" id="size-to" class="filter " data-placeholder="do">
									<option value=""></option>
									<option value="28">26</option>
									<option value="28">27</option>
									<option value="28">28</option>
								</select>
							</div>
						</div>
						<p>Obuv</p>
						<div class="row">
							<div class="col-5 pr-md-1">
								<select name="size-fromm" id="size-fromm" class="filter " data-placeholder="od">
									<option value=""></option>
									<option value="23">23</option>
									<option value="40">40</option>
									<option value="32">32</option>
								</select>
							</div>
							<div class="col-2 text-center px-1"><p class="pt-2">do</p></div>
							<div class="col-5 pl-md-1">
								<select name="size-too" id="size-too" class="filter " data-placeholder="do">
									<option value=""></option>
									<option value="28">26</option>
									<option value="28">27</option>
									<option value="28">28</option>
								</select>
							</div>
						</div>
						<p>Farba očí</p>
						<select name="eyes" id="eyes" class="filter" data-placeholder="Farba očí">
							<option value=""></option>
							<option value="modrá">modrá</option>
							<option value="zelená">zelená</option>
							<option value="hnedá">hnedá</option>
						</select>
						<p>Farba vlasov</p>
						<select name="hair" id="hair" class="filter " data-placeholder="Farba vlasov">
							<option value=""></option>
							<option value="modrá">modrá</option>
							<option value="zelená">zelená</option>
							<option value="hnedá">hnedá</option>
						</select>
						<p>Jazyky</p>
						<select name="language" id="language" class="filter " data-placeholder="Jazyky">
							<option value=""></option>
							<option value="anglický">anglický</option>
							<option value="nemecký">nemecký</option>
							<option value="slovenský">slovenský</option>
						</select>
						<p></p>
						<hr class="white mt-6">
						<div class="custom-control square-checkbox pb-md-4 pt-3">
								<input type="checkbox" class="custom-control-input" id="mother" name="mother">
								<label class="custom-control-label " for="mother">Model s materskou agentúrou</label>
						</div>
						<div class="custom-control square-checkbox py-md-3 pt-3">
								<input type="checkbox" class="custom-control-input" id="no-agency" name="no-agency">
								<label class="custom-control-label " for="no-agency">Model bez agentúry</label>
						</div>
						<div class="custom-control square-checkbox py-md-3 pt-3">
								<input type="checkbox" class="custom-control-input" id="premium" name="premium">
								<label class="custom-control-label " for="premium">Premium models</label>
						</div>
					</div>
					<a id="find-second" class="btn btn-primary w-100 mt-4">Vyhladať</a>
					<a id="hide" class="btn btn-dark w-100"><i class="fa fa-angle-double-left mr-3" aria-hidden="true"></i>skryť rozšírené hladanie</a>
				</div>
			</div>
			<div class="col-lg-9 pt-md-5">
				<div class="unfiltered">
					<div class="row">
						<div class="col-md-5">
							<h1>DATABÁZA</h1>
						</div>
						<div class="col-md-7 text-md-right text-center px-md-2 px-0 mt-md-0 mt-5 mob-links">
							<a href="./membership.php" class="btn btn-outline-white">Vytvor si účet</a>
							<a href="" class="btn btn-white top ml-2">Získaj status TOP model</a>
						</div>
					</div>
					<a class="mt-6 d-md-none w-100 btn btn-dark show-mob-filter">FILTER</a>
					<h3 class="pt-md-9 pt-3">Komparzisti a herci</h3>
					<div class="col-md-10 px-0">
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat dolore.</p>
					</div>
					<div class="row mt-4">
						<div class="col-md-10 pr-md-0">
							<div class="row">
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto1.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto2.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto3.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto4.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto5.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto6.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto7.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
							</div>
						</div>
						<div class="col-md-2 pr-md-0 px-1">
							<div class="show-all py-4 px-3">
								<p class=" mb-4"><span class="number">1212</span> profilov v&nbsp;kategórii</p>
								<a class="show-all-link pt-4">Zobraziť všetky <br><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<h3 class="pt-md-4">Hostessing</h3>
					<div class="col-md-10 px-0">
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat dolore.</p>
					</div>
					<div class="row mt-4">
						<div class="col-md-10 pr-md-0">
							<div class="row">
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto1.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto2.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto3.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto4.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto5.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto6.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto7.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
							</div>
						</div>
						<div class="col-md-2 pr-md-0 px-1">
							<div class="show-all py-4 px-3">
								<p class=" mb-4"><span class="number">1212</span> profilov v&nbsp;kategórii</p>
								<a class="show-all-link pt-4">Zobraziť všetky <br><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<h3 class="pt-md-4">Modeling</h3>
					<div class="col-md-10 px-0">
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat dolore.</p>
					</div>
					<div class="row mt-4">
						<div class="col-md-10 pr-md-0">
							<div class="row">
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto1.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto2.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto3.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto4.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto5.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto6.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto7.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
							</div>
						</div>
						<div class="col-md-2 pr-md-0 px-1">
							<div class="show-all py-4 px-3">
								<p class=" mb-4"><span class="number">1212</span> profilov v&nbsp;kategórii</p>
								<a class="show-all-link pt-4">Zobraziť všetky <br><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<hr class="mt-5">
					<h3 class="pt-md-4">Agentury, Fotografi, Kreatívni profesionáli</h3>
					<div class="col-md-10 px-0">
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat dolore.</p>
					</div>
					<div class="row mt-4">
						<div class="col-md-10 pr-md-0">
							<div class="row">
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto1.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto2.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto3.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto4.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto5.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto6.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto7.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="images/dat/foto8.jpg" alt="" class="w-100">
								</div>
							</div>
						</div>
						<div class="col-md-2 pr-md-0 px-1">
							<div class="show-all py-4 px-3">
								<p class=" mb-4"><span class="number">1212</span> profilov v&nbsp;kategórii</p>
								<a class="show-all-link pt-4">Zobraziť všetky <br><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="filtered pt-md-9 pt-3" style="display: none;">
					<div class="row">
						<div class="col-md-5 pt-md-2 pt-5">
							<h2><strong>Výsledky vyhľadávania (190)</strong></h2>
						</div>
						<div class="col-md-7 text-md-right">
							<input type="text" class="date" placeholder="DOSTUPNOSŤ">
						</div>
					</div>
					<div class="row pt-4">
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto1.jpg);">
								<div class="text-onhover favourite">
									<a href="./profile-agency.php">
										<div class="content text-center">
											<p class="uppercase"><strong>Agentúra</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto2.jpg);">
								<div class="text-onhover favourite">
									<a href="./profile-agency.php">
										<div class="content text-center">
											<p class="uppercase"><strong>Agentúra</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto3.jpg);">
								<div class="text-onhover">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto4.jpg);">
								<div class="text-onhover">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto5.jpg);">
								<div class="text-onhover">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto6.jpg);">
								<div class="text-onhover">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row pt-4">
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto1.jpg);">
								<div class="text-onhover favourite">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto2.jpg);">
								<div class="text-onhover favourite">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto3.jpg);">
								<div class="text-onhover">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto4.jpg);">
								<div class="text-onhover">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto5.jpg);">
								<div class="text-onhover">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto6.jpg);">
								<div class="text-onhover">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row pt-4">
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto1.jpg);">
								<div class="text-onhover favourite">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto2.jpg);">
								<div class="text-onhover favourite">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto3.jpg);">
								<div class="text-onhover">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto4.jpg);">
								<div class="text-onhover">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto5.jpg);">
								<div class="text-onhover">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto6.jpg);">
								<div class="text-onhover">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row pt-4">
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto1.jpg);">
								<div class="text-onhover favourite">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto2.jpg);">
								<div class="text-onhover favourite">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto3.jpg);">
								<div class="text-onhover">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto4.jpg);">
								<div class="text-onhover">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto5.jpg);">
								<div class="text-onhover">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-6 px-md-1">
							<div class="image" style="background-image: url(../images/dat-filtered/foto6.jpg);">
								<div class="text-onhover">
									<a href="./profile-acter.php">
										<div class="content text-center">
											<p class="uppercase"><strong>JANA DOEBOVÁ</strong></p>
											<p class="small">Bratislava - Slovensko</p>
											<p>21 rokov</p>
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 text-center pt-5 pagination-numbers">
						<a href="" class="orange">1</a>
						<a href="">2</a>
						<a href="">3</a>
						<a href="">4</a>
					</div>
				</div>
			</div>
		</div>
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
