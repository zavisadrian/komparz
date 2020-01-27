<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>
<?php include 'Libary/Weblibary.php';?>
<?php
$dbh = dbConnectSafely();
$sql = "SELECT * FROM `blog` WHERE `htmlContent` = :id";
$sql = $dbh->prepare($sql);
$result = $sql->execute(array(
        ":id" => $_REQUEST['ID']
));

$blog = $sql->fetch();
?>

<section id="blog">
	<div class="blog-bg">
		<div class="container ">
			<h1 class="py-5">BLOG</h1>
		</div>
	</div>
	<div class="gray-bg pb-5">
		<div class="bg py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2><?php echo $blog['headline']; ?></h2>
						<p class="pt-5 text-justify"><?php echo $blog['mainText']; ?></p>
					</div>
					<div class="col-md-5 offset-md-1">
						<img src="Blog/<?php echo $_REQUEST['ID']; ?>/blog.jpg" alt="" class="w-100 pt-md-0 pt-5">
					</div>
				</div>
			</div>
		</div>
		<div class="container">
            <?php
            echo file_get_contents("Blog/".$_REQUEST['ID']."/blog.html");
            ?>
		</div>
	</div>
</section>

<?php include 'components/footer.php';?>
<?php include 'components/bottom.php';?>
