<?php
include("headerloggedin.php");
if(!isset($_SESSION["loggetind"])){
    header("Location: logind.php");
    exit();
}
if(isset($_GET["opret"])){
    $overskrift = $_POST["overskrift"];
    $tekst = $_POST["text"];
    
    mysqli_query($link, "UPDATE hygge SET overskrift='$overskrift', hyggetekst='$tekst' WHERE id='1'");
    echo '<script>javascript:alert("Hyggeplanen er opdateret");</script>';
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
				<h1>Opdater hyggeplan</h1>
                <h5 class="broedtekst">Brødtekst: <a href="index.php">Hjem</a>-&gt; <a href="loginpage.php">Min side</a>-&gt; <a href="opdaterhyggeplan.php">Opdater hyggeplan</a></h5>
				<form action="?opret" method="post" enctype="multipart/form-data" class="nyhedform">
					<input name="overskrift" placeholder="f.eks.: Hyggeplan uge 50" type="text"> 
					<textarea name="text" placeholder="Indsæt hyggeplan"></textarea>   
                    <input type="submit" name="opret" value="Opdater hyggeplan">
				</form>
			</div>
		</div>
	</div><?php
	    include("footer.php");
	?>
</body>
</html>