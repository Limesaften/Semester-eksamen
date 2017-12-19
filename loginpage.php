<?php
include("headerloggedin.php");
if(!isset($_SESSION["loggetind"])){
    header("Location: logind.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="grid grid-pad">
		<div class="col-3-12 adminbar">
		<div class="content">
			<ul>
                <a href="loginpage.php"><li>
					<i class="fa fa-user" aria-hidden="true"></i> Min side
				</li></a>
				<a href="nyhed.php"><li>
					<i class="fa fa-pencil" aria-hidden="true"></i> Rediger/slet nyheder
				</li></a>
				<a href="opretnyhed.php"><li>
					<i class="fa fa-plus" aria-hidden="true"></i> Opret nyhed
				</li></a>
				<a href="opdaterhyggeplan.php"><li>
					<i class="fa fa-wrench" aria-hidden="true"></i> Opdater hyggeplan
				</li></a>
				<a href="tilfoejbruger.php"><li>
					<i class="fa fa-user-plus" aria-hidden="true"></i> Tilføj bruger
				</li></a>
			</ul>
		</div>
	</div>
		<div class="col-9-12">
			<div class="content">
				<h1>Min side</h1>
                <h5 class="broedtekst">Brødtekst: <a href="index.php">Hjem</a>-&gt; <a href="loginpage.php">Min side</a></h5>
			</div>
		</div>
	</div><?php
	    include("footer.php");
	    ?>
</body>
</html>