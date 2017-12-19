<?php
include("headerloggedin.php");
if(!isset($_SESSION["loggetind"])){
    header("Location: logind.php");
    exit();
}
if(isset($_GET["slet"])){
    mysqli_query($link, "DELETE FROM nyhed WHERE id = '{$_GET["slet"]}'");
}
?>
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
		<div class="col-9-12 tabelmednyh">
			<div class="content">
				<h1>Liste over nyheder</h1>
                <h5 class="broedtekst">Brødtekst: <a href="index.php">Hjem</a>-&gt; <a href="loginpage.php">Min side</a>-&gt; <a href="nyhed.php">Rediger/slet nyheder</a></h5>
                <table class="nyhedstable" width="100%" border="0">
                    <thead>
                        <tr>
                            <th>Overskrift</th>
                            <th>Dato</th>
                            <th>Rediger</th>
                            <th>Slet</th>
                        </tr>
                    </thead>
                    <?php
                    $hentnyheder = mysqli_query($link, "SELECT * FROM nyhed ORDER BY id DESC");
                    while($nyhed = mysqli_fetch_array($hentnyheder)){
                        ?>
                    <tr>
                        <td><?=$nyhed["overskrift"]?></td>
                        <td><?=$nyhed["dato"]?></td>
                        <td><a href="redigernyhed.php?id=<?=$nyhed["id"]?>"><i class="fa fa-pencil"></i></a></td>
                        <td><a href="?slet=<?=$nyhed["id"]?>"><i class="fa fa-times"></i></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
			</div>
		</div>
	</div><?php
	include("footer.php");
	?>