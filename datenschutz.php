<!DOCTYPE html>
<html>
	<head>
		<title>Datenschutz</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="stylesheet.css?v2" type="text/css">
		<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
	</head>
	<body>	
		<div>
			<a href="index.php"><img style="float:left;height:100px;width:100px;" src="logo.png"></a>
			<center><h1 class="heading">NIG Germany Forum</h1></center>
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
		<div class="navigationMiddle">
			<ul class="navMiddleRight">
				<a href="datenschutz.php"><li class="active">Datenschutz</li></a>
				<a href="richtlinien.php"><li>Richtlinien</li></a>
				<a href=""><li>Impressum</li></a>
			</ul>
		</div>
		<div class="richtlinien">
			<h2>Datenschutzerklärung für Websitenbesucher</h2>
			<p>Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung. Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder E-Mail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben. Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich.</p>
		</div>
		<div class="footer">
			<footer>
				<p>NIG Germany &copy 2016</p>
			</footer>
		</div>
	</body>
</html>