<?php
include("headerloggedin.php");
if(!isset($_SESSION["loggetind"])){
    header("Location: logind.php");
    exit();
}
if(isset($_GET["opret"])){
    $brugernavn = $_POST["brugernavn"];
    $kodeord = $_POST["kodeord"];
    $email = $_POST["email"];
    
    mysqli_query($link, "INSERT INTO brugere (brugernavn, kodeord, email) VALUES ('$brugernavn', '$kodeord', '$email')");
    echo '<script>javascript:alert("Bruger er oprettet");</script>';
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
				<h1>Tilføj ny bruger</h1>
                <h5 class="broedtekst">Brødtekst: <a href="index.php">Hjem</a>-&gt; <a href="loginpage.php">Min side</a>-&gt; <a href="tilfoejbruger.php">Tilføj bruger</a></h5>
				<form action="?opret" method="post" enctype="multipart/form-data" class="nyhedform">
					<input name="brugernavn" placeholder="Brugernavn" type="text">
                    <input name="kodeord" placeholder="Adgangskode" type="text">
                    <input name="email" placeholder="E-mail" type="email"> 
                    <input type="submit" name="opret" value="Tilføj ny bruger">
				</form>
			</div>
		</div>
	</div><?php
	    include("footer.php");
	?>
</body>
</html>