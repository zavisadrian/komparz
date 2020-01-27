<?php include 'components/top.php';?>
<?php include 'navbar/menu.php';?>
<?php include 'Libary/Weblibary.php';?>

<section id="blog">
	<div class="blog-bg">
		<div class="container ">
			<h1 class="py-5">BLOG</h1>
		</div>
	</div>
</section>
<section id="blog" class="gray-bg">
    <?php
    $dbh = dbConnectSafely();
    $sql = "SELECT * FROM `blog` WHERE 1 ORDER BY `ID` DESC";
    $sql = $dbh->prepare($sql);
    $result = $sql->execute();

    $ind = 0;
    while ($blog = $sql->fetch()) {
        $ind++;

        if ($ind % 2 == 0)
        echo "
        <div class=\"bg py-5\">
		    <div class=\"container\">
		    	<div class=\"row\">
		    		<div class=\"col-md-6\">
		    			<h2>".$blog['headline']."</h2>
		    			<p class=\"pt-5 text-justify\">".$blog['mainText']."</p>
		    			<a href=\"./blog.php?ID=".$blog['htmlContent']."\" class=\"btn btn-primary mt-3\">Čítať viac</a>
		    		</div>
		    		<div class=\"col-md-5 offset-md-1\">
		    			<img src=\"Blog/".$blog['htmlContent']."/blog.jpg\" alt=\"\" class=\"w-100 pt-md-0 pt-5\">
		    		</div>
		    	</div>
		    </div>
	    </div>
        ";
        else
        echo "
        <div class=\"bg py-5\">
		    <div class=\"container\">
		    	<div class=\"row\">
		    		<div class=\"col-md-5\">
		    			<img src=\"Blog/".$blog['htmlContent']."/blog.jpg\" alt=\"\" class=\"w-100 pt-md-0 pt-5\">
		    		</div>
		    		<div class=\"col-md-6 offset-md-1\">
		    			<h2>".$blog['headline']."</h2>
		    			<p class=\"pt-5 text-justify\">".$blog['mainText']."</p>
		    			<a href=\"./blog.php?ID=".$blog['htmlContent']."\" class=\"btn btn-primary mt-3\">Čítať viac</a>
		    		</div>
		    	</div>
		    </div>
	    </div>
        ";
    }
    ?>
</section>

<?php include 'components/footer.php';?>
<?php include 'components/bottom.php';?>
