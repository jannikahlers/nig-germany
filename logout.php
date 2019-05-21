
<!DOCTYPE html>
<html>
	<head>
		<title>Startseite</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
	</head>
	<body>	
		<div>
			<a href="index.php"><img style="float:left;height:100px;width:100px;" src="logo.png"></a>
			<center><h1 class="heading">NIG Germany Forum</h1></center>
		</div>
		<div class="topright">
			<ul class="navTopRight">
				<li class='rightborder'><a href='anmeldung.php'>Anmelden</a></li>
				<li><a href='registration.php'>Registrieren</a></li>
			</ul>
		</div>
		<div class="navigationbar">
			<ul>
				<li><a href="index.php">Startseite</a></li>
				<li><a href="thread.php">Beitrag erstellen</a></li>
				<li><a href="latestThreads.php">Neue Beitr&auml;ge</a></li>
				<li style="float:right"><a href="aboutus.php">&Uuml;ber uns</a></li>
			</ul>
		</div>
		<div>
			<?PHP
			session_start();
			session_destroy();
			echo "<h2 class='meldung'>Ausgeloggt!</h2>";
			?>
		</div>
		<div class="footer">
			<footer>
				<p>NIG Germany &copy 2016</p>
			</footer>
		</div>
	</body>
</html>