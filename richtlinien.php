<!DOCTYPE html>
<html>
	<head>
		<title>Richtlinien</title>
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
				<a href="datenschutz.php"><li>Datenschutz</li></a>
				<a href="richtlinien.php"><li class="active">Richtlinien</li></a>
				<a href=""><li>Impressum</li></a>
			</ul>
		</div>
		<div class="richtlinien">
			<h2>Wie soll ich mich im NIG Germany Forum verhalten?</h2>
			<p>Das NIG Germany Forum ist ein Ort für Diskussionen.</br>Wir bitten Sie, in den Diskussionen stets rücksichtsvoll und respektvoll mit allen Teilnehmern umzugehen. 				Respektieren Sie die Meinung und Ansichten der Anderen. Es sind nun einmal nicht alle Menschen gleich ;-)</br>Bitte verzichten Sie auf folgende Einträge: </br>				Schimpfwörter,Beleidigungen, gehässige oder verleumderische Kommentare, Beiträge, in denen Personen beschimpft, beleidigt, erniedrigt oder bedroht werden. 				Rassistische, sexistische, diskriminierende oder andere rechtsverletzende Äußerungen.
			<p>
		</div>
		<div class="footer">
			<footer>
				<p>NIG Germany &copy 2016</p>
			</footer>
		</div>
	</body>
</html>