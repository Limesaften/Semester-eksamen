<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/simplegrid.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js">
	</script>
	</script>
</head>
<body>
	<div class="topbar">
		<div class="grid grid-pad topbar-padding">
			<div class="col-1-1">
				<div class="content">
                    <?php
                    if(!isset($_SESSION["loggetind"])){
                        ?>
					<a href="logind.php"><button><i class="fa fa-lock"></i> LOG IND</button></a>
                    <?php
                    } else{
                        ?>
                    <a href="loginpage.php"><button><i class="fa fa-lock"></i> MIN SIDE</button></a>
                    <?php
                    }
                    ?>
				</div>
			</div>
		</div>
	</div>
	<div class="grid grid-pad header">
		<div class="col-1-12">
			<div class="content"><a href="index.php"><img alt="Klub hobbitten" src="img/logo.jpg"></a></div>
		</div>
		<div class="col-11-12 headertekst">
			<div class="content">
				<h1>Klub Hobbitten</h1>
				<h2>3540 Lynge</h2>
			</div>
		</div>
	</div>
	<div class="menucontainer">
		<div class="grid grid-pad menu">
			<div class="col-1-3">
				<div class="content">
					<h3 id="menu1"><a href="#"><i class="fa fa-question"></i> Om Hobbitten</a>
                        <div class="dropdown" id="menu1_dropdown">
                            <ul>
                                <a href="hvemervi.php"><li>Hvem er vi?</li></a>
                                <a href="personale.php"><li>Personale</li></a>
                                <a href="job.php"><li>Job</li></a>
                            </ul>
                        </div>
                    </h3>
				</div>
			</div>
			<div class="col-1-3">
				<div class="content">
					<h3 id="menu2"><a href="#"><i class="fa fa-info"></i> Praktisk information</a>
                        <div class="dropdown" id="menu2_dropdown">
                            <ul>
                                <a href="aabningstider.php"><li>Åbningstider/lukkedage</li></a>
                                <a href="ind-ogumelding.php"><li>Ind- og udmelding</li></a>
                                <a href="takster.php"><li>Takster</li></a>
                            </ul>
                        </div>
                    </h3>
				</div>
			</div>
			<div class="col-1-3">
				<div class="content">
					<h3><a href="kontaktos.php"><i class="fa fa-phone"></i> Kontakt os</a></h3>
				</div>
			</div>
		</div>
	</div>