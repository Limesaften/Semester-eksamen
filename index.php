<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="grid grid-pad nyheder">
		<div class="col-7-12">
			<div class="content nyhedtekst">
				<h3>Nyheder</h3>
                <?php
                    $hentnyheder = mysqli_query($link, "SELECT * FROM nyhed ORDER BY id DESC LIMIT 3");
                    while($nyhed=mysqli_fetch_array($hentnyheder)){
                        ?>
                <div class="grid grid-pad">
					<div class="col-4-12">
						<div class="content"><img class="nyhedsbillede" src="<?=$nyhed["billede"]?>"></div>
					</div>
					<div class="col-6-12">
						<div class="content">
							<h4><?=$nyhed["overskrift"]?></h4>
                            <p class="nyhedstekst"><?=$nyhed["tekst"]?></p>
                            <h6 class="dato"><?=$nyhed["dato"]?></h6>
						</div>
					</div>
				</div>
                <?php
                    }
                ?>
				
				
			</div>
		</div>
		<div class="col-5-12 hygge">
			<div class="content">
				<h3></h3>
				<div class="hyggebillede">
                    <?php
                    $henthygge = mysqli_query($link, "SELECT * FROM hygge ORDER BY id DESC LIMIT 1");
                    while($hygge=mysqli_fetch_array($henthygge)){
                        ?>
                    <h4><?=$hygge["overskrift"]?></h4>
					<h5 class="hyggemellemrum"><?=nl2br($hygge["hyggetekst"])?></h5>
                    <?php
                    }
                ?>
				</div>
				<div class="tilmelding">
					<h1>Meld dit barn ind i klubben</h1><br>
					<h3><a href="ind-ogumelding.php"><i aria-hidden="true" class="fa fa-sign-in"></i> Klik her</a></h3>
				</div>
			</div>
		</div>
	</div><?php
	include("footer.php");
	?>
</body>
</html>