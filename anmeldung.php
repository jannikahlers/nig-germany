<!DOCTYPE html>
<html>
	<head>
		<title>Anmeldung</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
	</head>
	<body background="bg_sun.jpg">	
		<div>
			<a href="index.php"><img style="float:left;height:100px;width:100px;" src="logo.png"></a>
			<center><h1 class="heading">NIG Germany Forum</hi></center>
		</div>
		<div class="topright">
			<ul class="navTopRight">
				<?PHP
				session_start();
				if(!isset($_SESSION['username'])){
					echo "<li class='rightborder'><a href='anmeldung.php'>Anmelden</a></li>";
					echo "<li><a href='registration.php'>Registrieren</a></li>";
				}
				else{
					$name = $_SESSION['username'];
					echo "<li class='rightborder'><p class='name'>Guten Tag, $name!</p></li>";
					echo "<li><a href='logout.php'>Logout</a></li>";
				}
				?>
			</ul>
		</div>
		<div class="navigationbar">
			<ul>
				<li><a href="index.php">Startseite</a></li>
				<li><a href="thread.php">Beitrag erstellen</a></li>
				<li><a href="latestThreads.php">Neue Beiträge</a></li>
				<li style="float:right"><a href="aboutus.php">Über uns</a></li>
			</ul>
		</div>
		<div class="register">
			<form action="login.php" method="post" onSubmit="return checkInput()">
				</br></br>
				<span>Username:</span>
				<input style="margin-left:5px;" type="text" name="username"></br>
				<span class="">Passwort:</span>
				<input style="margin-left:12px;" type="password" name="password"><br>
				<button style="margin-top: 20px; margin-left: 183px;" class="button" id="anmelden" name="BTN_anmelden" type="submit">Anmelden</button>
			</form>
		</div>
		<div class="footer">
			<p>NIG Germany &copy 2016</p>
		</div>
	</body>
</html>