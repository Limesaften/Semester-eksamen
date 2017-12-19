<?php
include("headerlogin.php");
if(isset($_SESSION["loggetind"])){
    header("Location: loginpage.php");
    exit();
}
if(isset($_GET["login"])){
    $brugernavn = $_POST["brugernavn"];
    $password = $_POST["password"];
    
    $tjeklogin = mysqli_query($link, "SELECT * FROM brugere WHERE brugernavn='$brugernavn' AND kodeord='$password'");
    $info = mysqli_fetch_assoc($tjeklogin);
    if(mysqli_num_rows($tjeklogin) == 1){
        $_SESSION["loggetind"] = 1;
        $_SESSION["brugerid"] = $info["id"];
        header("Location: loginpage.php");
        exit();
    } else{
        $fejl = "forkert";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="login-page">
		<div class="form">
			<?php if(isset($fejl)){echo "Forkert brugernavn eller kodeord<br><br>";} ?>
			<form action="?login" class="login-form" method="post">
				<input name="brugernavn" placeholder="Brugernavn" type="text"> <input name="password" placeholder="Adgangskode" type="password"> <button>Log ind</button>
			</form>
		</div>
	</div><?php
	include("footer.php");
	?>
</body>
</html>