<?php
include("headerloggedin.php");
if(!isset($_SESSION["loggetind"])){
    header("Location: logind.php");
    exit();
}
if(isset($_GET["opret"])){
    $overskrift = $_POST["overskrift"];
    $text = $_POST["text"];
    
    $mappenavn = "uploads/";
    $tidspunkt = round(microtime(true) * 1000);
    $billede = $mappenavn . $tidspunkt . "-" . basename($_FILES["billede"]["name"]);
    $billedetype = strtolower(pathinfo($billede, PATHINFO_EXTENSION));
    $billedefil = $_FILES["billede"];
    
    if($billedetype != "jpeg" && $billedetype != "jpg" && $billedetype != "png" && $billedetype != "gif"){
        echo '<script>javascript:alert("Billedetype ikke godkendt");</script>';
    } else {
        if(move_uploaded_file($billedefil["tmp_name"], $billede)){
            mysqli_query($link, "INSERT INTO nyhed (overskrift, tekst, billede) VALUES ('$overskrift', '$text', '$billede')");
             echo '<script>javascript:alert("Nyheden er tilføjet");</script>';
        }
    }
    
    
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
				<h1>Opret nyhed</h1>
                <h5 class="broedtekst">Brødtekst: <a href="index.php">Hjem</a>-&gt; <a href="loginpage.php">Min side</a>-&gt; <a href="opretnyhed.php">Opret nyhed</a></h5>
				<form action="?opret" method="post" enctype="multipart/form-data" class="nyhedform">
					<input name="overskrift" placeholder="Overskrift" type="text"> 
					<textarea name="text" placeholder="Indsæt tekst"></textarea>
                    <input type="file" name="billede">
                    <input type="submit" name="opret" value="Opret nyhed">
				</form>
			</div>
		</div>
	</div><?php
	            include("footer.php");
	        ?>
</body>
</html>