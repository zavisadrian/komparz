<?php include 'components/top.php';?>
<?php include 'Libary/Weblibary.php';?>
<?php include 'navbar/menu.php';?>

<section id="database" style="background-image: url(../images/komparz-banner.jpg);">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-3 ">
				<div class="filter-container px-0">
					<div class="filter pb-4 pt-4 filt">
						<h4>Vyhľadávanie</h4>
						<p>Pohlavie</p>
						<select name="gender" id="gender" class="filter" data-placeholder="Pohlavie" onchange="realTimeResultCount()">
							<option value=""></option>
							<option value="Muž">Muž</option>
							<option value="Žena">Žena</option>
						</select>
                        <p>Národnosť</p>
                        <select name="nationality" id="nationality" class="filter" data-placeholder="Národnosť" onchange="realTimeResultCount()">
                            <option value=""></option>
                            <option value="Slovenská">Slovenská</option>
                            <option value="Česká">Česká</option>
                            <option value="Polská">Polská</option>
                            <option value="Maďarská">Maďarská</option>
                            <option value="Iná">Iná</option>
                        </select>
						<p>Kraj</p>
						<select name="region" id="region" class="filter" data-placeholder="Región" onchange="realTimeResultCount()">
							<option value=""></option>
                            <option value="Bratislavský">Bratislavský</option>
                            <option value="Trnavský">Trnavský</option>
                            <option value="Trenčianský">Trenčianský</option>
                            <option value="Nitrianský">Nitrianský</option>
                            <option value="Žilinský">Žilinský</option>
                            <option value="Bánskobystrický">Bánskobystrický</option>
                            <option value="Prešovský">Prešovský</option>
                            <option value="Košický">Košický</option>
                            <option value="Iný">Iný</option>
						</select>
						<p>Výška</p>
						<div class="row">
							<div class="col-5 pr-md-1">
								<select name="heightf" id="heightf" class="filter " data-placeholder="od" onchange="realTimeResultCount()">
                                    <option value=""></option>
                                    <option value="140">140cm</option>
                                    <option value="145">145cm</option>
                                    <option value="150">150cm</option>
                                    <option value="155">155cm</option>
                                    <option value="160">160cm</option>
                                    <option value="165">165cm</option>
                                    <option value="170">170cm</option>
                                    <option value="175">175cm</option>
                                    <option value="180">180cm</option>
                                    <option value="185">185cm</option>
                                    <option value="190">190cm</option>
                                    <option value="195">195cm</option>
                                    <option value="200">200cm</option>
                                    <option value="205">205cm</option>
                                    <option value="210">210cm</option>
                                    <option value="215">215cm</option>
                                    <option value="220">220cm</option>
                                    <option value="225">225cm</option>
								</select>
							</div>
							<div class="col-2 text-center px-1"><p class="pt-2">do</p></div>
							<div class="col-5 pl-md-1">
								<select name="heightt" id="heightt" class="filter " data-placeholder="do" onchange="realTimeResultCount()">
                                    <option value=""></option>
                                    <option value="140">140cm</option>
                                    <option value="145">145cm</option>
                                    <option value="150">150cm</option>
                                    <option value="155">155cm</option>
                                    <option value="160">160cm</option>
                                    <option value="165">165cm</option>
                                    <option value="170">170cm</option>
                                    <option value="175">175cm</option>
                                    <option value="180">180cm</option>
                                    <option value="185">185cm</option>
                                    <option value="190">190cm</option>
                                    <option value="195">195cm</option>
                                    <option value="200">200cm</option>
                                    <option value="205">205cm</option>
                                    <option value="210">210cm</option>
                                    <option value="215">215cm</option>
                                    <option value="220">220cm</option>
                                    <option value="225">225cm</option>
								</select>
							</div>
						</div>
						<p>Vek</p>
						<div class="row">
							<div class="col-5 pr-md-1">
								<select name="agef" id="agef" class="filter " data-placeholder="od" onchange="realTimeResultCount()">
									<option value=""></option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="22">22</option>
									<option value="24">24</option>
									<option value="26">26</option>
									<option value="28">28</option>
									<option value="30">30</option>
									<option value="32">32</option>
									<option value="34">34</option>
									<option value="36">36</option>
									<option value="38">38</option>
									<option value="40">40</option>
									<option value="43">43</option>
									<option value="46">46</option>
									<option value="50">50</option>
								</select>
							</div>
							<div class="col-2 text-center px-1"><p class="pt-2">do</p></div>
							<div class="col-5 pl-md-1">
								<select name="aget" id="aget" class="filter " data-placeholder="do" onchange="realTimeResultCount()">
                                    <option value=""></option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="22">22</option>
                                    <option value="24">24</option>
                                    <option value="26">26</option>
                                    <option value="28">28</option>
                                    <option value="30">30</option>
                                    <option value="32">32</option>
                                    <option value="34">34</option>
                                    <option value="36">36</option>
                                    <option value="38">38</option>
                                    <option value="40">40</option>
                                    <option value="43">43</option>
                                    <option value="46">46</option>
                                    <option value="50">50</option>
								</select>
							</div>
						</div>
						<hr class="black">
						<div class="custom-control square-checkbox pb-md-3 pt-md-0 pt-3">
								<input type="checkbox" class="custom-control-input" id="komp" value="1" name="type" onclick="realTimeResultCount()">
								<label class="custom-control-label " for="komp">Komparzisti</label>
						</div>
						<div class="custom-control square-checkbox py-md-3 pt-3">
								<input type="checkbox" class="custom-control-input" id="acters" value="1" name="type" onclick="realTimeResultCount()">
								<label class="custom-control-label " for="acters">Herci</label>
						</div>
						<div class="custom-control square-checkbox py-md-3 pt-3">
								<input type="checkbox" class="custom-control-input" id="hostes" value="1" name="type" onclick="realTimeResultCount()">
								<label class="custom-control-label " for="hostes">Hostesky a promotéri</label>
						</div>
						<div class="custom-control square-checkbox py-md-3">
								<input type="checkbox" class="custom-control-input" id="model" value="1" name="type" onclick="realTimeResultCount()">
								<label class="custom-control-label " for="model">Modeli</label>
						</div>
						<div class="custom-control square-checkbox py-md-3 pt-3">
								<input type="checkbox" class="custom-control-input" id="agentures" value="1" name="type" onclick="realTimeResultCount()">
								<label class="custom-control-label " for="agentures">Agentúri</label>
						</div>
						<div class="custom-control square-checkbox py-md-3 pt-3">
								<input type="checkbox" class="custom-control-input" id="fotografs" value="1" name="type" onclick="realTimeResultCount()">
								<label class="custom-control-label " for="fotografs">Fotografi</label>
						</div>
						<div class="custom-control square-checkbox py-md-3 pt-3">
								<input type="checkbox" class="custom-control-input" id="profesional" value="1" name="type" onclick="realTimeResultCount()">
								<label class="custom-control-label " for="profesional">Kreatívny profesionáli</label>
						</div>
					</div>
					<a onclick="submitFilter()" id="find" class="btn btn-dark w-100 mt-3" id="searchButton">vyhladať</a>
					<a id="show" class="btn btn-primary w-100">Rozšírené vyhladávanie <i class="fa fa-angle-double-right ml-3" aria-hidden="true"></i> </a>
				</div>
				<div id="filter2" class="filter2" style="display: none">
					<div class="filt">
						<h4>Rozšírené vyhľadávanie</h4>
						<p>Hrudník / Prsia</p>
						<div class="row">
							<div class="col-5 pr-md-1">
								<select name="boobsf" id="boobsf" class="filter " data-placeholder="od" onchange="realTimeResultCount()">
									<option value=""></option>
									<option value="140">140cm</option>
									<option value="120">120cm</option>
									<option value="190">190cm</option>
								</select>
							</div>
							<div class="col-2 text-center px-1"><p class="pt-2">do</p></div>
							<div class="col-5 pl-md-1">
								<select name="boobst" id="boobst" class="filter " data-placeholder="do" onchange="realTimeResultCount()">
									<option value=""></option>
									<option value="140">140cm</option>
									<option value="150">150cm</option>
									<option value="190">190cm</option>
								</select>
							</div>
						</div>
						<p>Konfekcia</p>
						<div class="row">
							<div class="col-5 pr-md-1">
								<select name="confSizef" id="confSizef" class="filter " data-placeholder="od" onchange="realTimeResultCount()">
									<option value=""></option>
									<option value="23">23</option>
									<option value="40">40</option>
									<option value="32">32</option>
								</select>
							</div>
							<div class="col-2 text-center px-1"><p class="pt-2">do</p></div>
							<div class="col-5 pl-md-1">
								<select name="confSizet" id="confSizet" class="filter " data-placeholder="do" onchange="realTimeResultCount()">
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
								<select name="shoesSizef" id="shoesSizef" class="filter " data-placeholder="od" onchange="realTimeResultCount()">
									<option value=""></option>
									<option value="23">23</option>
									<option value="40">40</option>
									<option value="32">32</option>
								</select>
							</div>
							<div class="col-2 text-center px-1"><p class="pt-2">do</p></div>
							<div class="col-5 pl-md-1">
								<select name="shoesSizet" id="shoesSizet" class="filter " data-placeholder="do" onchange="realTimeResultCount()">
									<option value=""></option>
									<option value="28">26</option>
									<option value="28">27</option>
									<option value="28">28</option>
								</select>
							</div>
						</div>
						<p>Farba očí</p>
						<select name="eyes" id="eyes" class="filter" data-placeholder="Farba očí" onchange="realTimeResultCount()">
                            <option value=""></option>
                            <option value="modrá">Modrá</option>
                            <option value="zelená">Zelená</option>
                            <option value="hnedá">Hnedá</option>
                            <option value="šedá">Šedá</option>
						</select>
						<p>Farba vlasov</p>
						<select name="hair" id="hair" class="filter " data-placeholder="Farba vlasov" onchange="realTimeResultCount()">
                            <option value=""></option>
                            <option value="albín">Albín</option>
                            <option value="blond">Blond</option>
                            <option value="červená">Červená</option>
                            <option value="čierna">Čierna</option>
                            <option value="hnedá">Hnedá</option>
                            <option value="hrdzavá">Hrdzavá</option>
                            <option value="prešedivelá">Prešedivelá</option>
                            <option value="svetlo hnedá">Svetlo hnedá</option>
                            <option value="špinavý blond">Špinavý blond</option>
                            <option value="šedivá">Šedivá</option>
						</select>
						<p>Jazyky</p>
						<select name="language" id="language" class="filter " data-placeholder="Jazyky" onchange="realTimeResultCount()">
							<option value=""></option>
							<option value="angličtina">Agličtina</option>
							<option value="čeština">Čeština</option>
							<option value="francúzština">Francúzština</option>
							<option value="maďarčina">Maďarčina</option>
							<option value="nemčina">Nemčina</option>
							<option value="ruština">Ruština</option>
							<option value="slovenčina">Slovenčina</option>
							<option value="španielčina">Španielčina</option>
							<option value="taliančina">Taliančina</option>
						</select>
					</div>
					<a onclick="submitFilter()" id="find-second" class="btn btn-primary w-100 mt-4">Vyhladať</a>
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
                            <?php
                                $conn = dbConnect();
                                $sql = "SELECT * FROM `pr_actor` ORDER BY `auto` DESC";
                                $result = $conn->query($sql);

                                $IDs = [];

                                $index = 0;
                                if ($result->num_rows)
                                    while ($user = $result->fetch_assoc()) {
                                        $path = "Profiles/".$user['ID']."/profilePhoto";
                                        $image = scandir($path);
                                        array_push($IDs, "Profiles/".$user['ID']."/images/min/p001.jpg");
                                        $index++;
                                    }

                                for ($i = $index; $i < 20; $i++) {
                                    array_push($IDs, "images/empty.jpg");
                                }

                                array_reverse($IDs);
                            ?>
							<div class="row">
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[0]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[1]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[2]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[3]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[4]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[5]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[6]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[7]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[8]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[9]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[10]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[11]; ?>" alt="" class="w-100">
								</div>
							</div>
						</div>
						<div class="col-md-2 pr-md-0 px-1">
							<div class="show-all py-4 px-3">
								<p class=" mb-4"><span class="number"><?php echo $result->num_rows; ?></span> profilov v&nbsp;kategórii</p>
								<a onclick="document.location.href = 'database.php?Komparzisti a herci'" style="color: white">Zobraziť všetky <br><i style="font-size: 30px" class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
                                <?php
                                $conn = dbConnect();
                                $sql = "SELECT * FROM `pr_hostess` ORDER BY `auto` DESC";
                                $result = $conn->query($sql);

                                $IDs = [];

                                $index = 0;
                                if ($result->num_rows)
                                    while ($user = $result->fetch_assoc()) {
                                        $path = "Profiles/".$user['ID']."/profilePhoto";
                                        $image = scandir($path);
                                        array_push($IDs, "Profiles/".$user['ID']."/images/min/p001.jpg");
                                        $index++;
                                    }

                                for ($i = $index; $i < 20; $i++) {
                                    array_push($IDs, "images/empty.jpg");
                                }

                                array_reverse($IDs);
                                ?>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[0]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[1]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[2]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[3]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[4]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[5]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[6]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[7]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[8]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[9]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[10]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[11]; ?>" alt="" class="w-100">
								</div>
							</div>
						</div>
						<div class="col-md-2 pr-md-0 px-1">
							<div class="show-all py-4 px-3">
								<p class=" mb-4"><span class="number"><?php echo $result->num_rows; ?></span> profilov v&nbsp;kategórii</p>
                                <a onclick="showResultsClass('host')" style="color: white">Zobraziť všetky <br><i style="font-size: 30px" class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
                                <?php
                                $conn = dbConnect();
                                $sql = "SELECT * FROM `pr_model` ORDER BY `auto` DESC";
                                $result = $conn->query($sql);

                                $IDs = [];

                                $index = 0;
                                if ($result->num_rows)
                                    while ($user = $result->fetch_assoc()) {
                                        $path = "Profiles/".$user['ID']."/profilePhoto";
                                        $image = scandir($path);
                                        array_push($IDs, "Profiles/".$user['ID']."/images/min/p001.jpg");
                                        $index++;
                                    }

                                for ($i = $index; $i < 20; $i++) {
                                    array_push($IDs, "images/empty.jpg");
                                }

                                array_reverse($IDs);
                                ?>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[0]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[1]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[2]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[3]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[4]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[5]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[6]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[7]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[8]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[9]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[10]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[11]; ?>" alt="" class="w-100">
								</div>
							</div>
						</div>
						<div class="col-md-2 pr-md-0 px-1">
							<div class="show-all py-4 px-3">
								<p class=" mb-4"><span class="number"><?php echo $result->num_rows; ?></span> profilov v&nbsp;kategórii</p>
                                <a onclick="showResultsClass('model')" style="color: white">Zobraziť všetky <br><i style="font-size: 30px" class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<hr class="mt-5">
					<h3 class="pt-md-4">Fotografi, Kreatívni profesionáli</h3>
					<div class="col-md-10 px-0">
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat dolore.</p>
					</div>
					<div class="row mt-4">
						<div class="col-md-10 pr-md-0">
							<div class="row">
                                <?php
                                $conn = dbConnect();
                                $sql = "SELECT `ID`, `auto` FROM `pr_foto` UNION SELECT `ID`,`auto` FROM `pr_creative` ORDER BY `auto` DESC";
                                $result = $conn->query($sql);

                                $IDs = [];

                                $index = 0;
                                if ($result->num_rows)
                                    while ($user = $result->fetch_assoc()) {
                                        $path = "Profiles/".$user['ID']."/profilePhoto";
                                        $image = scandir($path);
                                        array_push($IDs, "Profiles/".$user['ID']."/images/min/p001.jpg");
                                        $index++;
                                    }

                                for ($i = $index; $i < 20; $i++) {
                                    array_push($IDs, "images/empty.jpg");
                                }

                                array_reverse($IDs);
                                ?>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[0]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[1]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[2]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[3]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[4]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[5]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[6]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[7]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[8]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[9]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[10]; ?>" alt="" class="w-100">
								</div>
								<div class="col-md-2 col-4 p-1">
									<img src="<?php echo $IDs[11]; ?>" alt="" class="w-100">
								</div>
							</div>
						</div>
						<div class="col-md-2 pr-md-0 px-1">
							<div class="show-all py-4 px-3">
								<p class=" mb-4"><span class="number"><?php echo $result->num_rows; ?></span> profilov v&nbsp;kategórii</p>
                                <a onclick="showResultsClass('foto')" style="color: white">Zobraziť všetky <br><i style="font-size: 30px" class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="filtered pt-md-9 pt-3" style="display: none;" id="resultContainer">
					<div class="row">
						<div class="col-md-12 pt-md-2 pt-5">
							<h2><strong>Výsledky vyhľadávania (190)</strong></h2>
						</div>
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

<?
if (isset($_REQUEST['Komparzisti'])) {
    echo "<script>showResultsClass('komp');</script>";
}

if (isset($_REQUEST['Herci'])) {
    echo "<script>showResultsClass('act');</script>";
}

if (isset($_REQUEST['KomparzistiHerci'])) {
    echo "<script>showResultsClass('kompact');</script>";
}
?>
