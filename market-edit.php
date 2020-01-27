<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>
<?php require ("Libary/Weblibary.php"); ?>

<?php
session_start();

if (!isset($_SESSION['marketMail'])) {
    header("Location: 404.php");
    die();
}

$ID = $_REQUEST['ID'];
if (strlen($ID) != 10) {
    header("Location: 404.php?ID=".$ID);
    die();
}

$conn = dbConnect();
$sql = "SELECT * FROM `market` WHERE `ID` = '".$ID."' ORDER BY `auto` DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $date = $row['date'];
        $dateTo = $row['dateTo'];
        $place = $row['place'];
        $price = $row['price'];
        $priceSale = $row['priceale'];
        $category = $row['category'];
        $company = $row['company'];
        $honorar = $row['honorar'];
        $description = $row['description'];
        $personality = $row['personality'];
        $mail = $row['mail'];
        $IBAN = $row['IBAN'];
        $phone = $row['phone'];
        $onlineSales = $row['onlineSales'];
    }
}

if ($_SESSION['marketMail'] != $mail) {
    header("Location: 404.php");
    die();
}
?>

<section id="member-banner" style="background-image: url(../images/komparz-banner.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="pt-5">TRHOVISKO</h1>
				<h3 class="pb-md-5">ÚPRAVA PONUKY</h3>
			</div>
			<div class="col-md-6 text-md-right pt-md-3">
				<a href="./membership.php" class="btn btn-white my-5" style="opacity: 0; "></a>
			</div>
		</div>
	</div>
</section>

    <section id="add_casting">
        <form action="PHP/editMarket.php" method="post" enctype="multipart/form-data">
            <input type="hidden" placeholder="ID ponuky" value="<?php echo $ID ?>" name="ID">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-4 right mt-md-0 mt-3">
                        <h3>Údaje pre záujemcu</h3>
                        <input name="name" type="text" placeholder="Názov" data-necessary="text" value="<? echo $name; ?>">
                        <input name="place" type="text" placeholder="Miesto" data-necessary="text" value="<? echo $place; ?>">
                        <div class="custom-file text-center cropped-image">
                            <label class="custom-file-label text-left" for="file">
                                <span>Fotografia</span>
                                <input type="file" data-section="main" name="castingImage" id="file" data-unlock="p011" data-cropimageid="file" data-aspectratio="<?= 2/1 ?>" class="image-upload-input custom-file-input"/>
                            </label>
                            <input type="hidden" id="croppedImages" name="croppedImages">
                        </div>
                        <textarea name="description" id="description" class="mt-3" rows="5" placeholder="Popis" maxlength="255"><? echo $description; ?></textarea>
                    </div>
                    <div class="col-md-4">
                        <div class="type pt-4">
                            <select name="category" id="category" class="filter mt-3" data-placeholder="Kategória" data-necessary="text">
                                <option></option>
                                <option <? if ($category == "cat1") echo "selected"; ?> value="cat1">Foto sekcia</option>
                                <option <? if ($category == "cat2") echo "selected"; ?> value="cat2">Kurzy a služby</option>
                                <option <? if ($category == "cat3") echo "selected"; ?> value="cat3">Dopyty</option>
                            </select>
                        </div>
                        <input name="price" type="text" placeholder="Pôvodná cena" data-necessary="text" value="<? echo $price; ?>">
                        <input name="pricesale" type="text" placeholder="Cena po zľave" value="<? echo $priceSale; ?>">
                        <input name="honorar" type="text" placeholder="Honorár (povinné)" data-necessary="text" value="<? echo $honorar; ?>">
                    </div>
                    <div class="col-md-4">
                        <h3>Vaše údaje</h3>
                        <input name="company" type="text" placeholder="Meno/názov spoločnosti" data-necessary="text" value="<? echo $company; ?>">
                        <input name="phone" type="text" placeholder="Telefónne číslo" data-necessary="text" value="<? echo $phone; ?>">
                        <input name="dateTo" type="text" placeholder="Platnosť" data-necessary="text" value="<? echo $dateTo; ?>">
                        <input name="IBAN" type="text" placeholder="IBAN" data-necessary="text" value="<? echo $IBAN; ?>">
                        <button type="submit" class="btn btn-primary w-100 mt-3">Uložiť a odoslať ponuku</button>
                        <a href="PHP/deleteMarket.php?ID=<?php echo $ID; ?>"  class="btn btn-primary w-100 mt-3">Vymazať ponuku</a>
                    </div>
                </div>
            </div>
        </form>
    </section>


<div class="overlay-crop js">
	<div class="modal-crop" id="modal-crop">
		<div class="content">
			<div class="image_container">
				<img id="crop" src="#" alt="your image"/>
			</div>
			<button id="crop_button" class="btn btn-primary w-100">Crop</button>
		</div>
	</div>
</div>

<section id="account" class="mt-4" style="background-image: url(../images/account.jpg);">
	<div class="container py-8">
		<div class="row">
			<div class="col-md-6">
				<h2 class="mb-3">vytvor si účet a staň sa členom kompraz.tv</h2>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
				<a href="./reg-acters" class="btn btn-dark mt-4">Vytvor si účet</a>
				<a href="./membership.php" class="btn btn-outline-dark mt-4">Hľadám prácu</a>
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