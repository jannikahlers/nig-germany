<!DOCTYPE html>
<html>
	<head>
		<title>Über Uns</title>
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
				<li class="active" style="float:right"><a href="aboutus.php">Über uns</a></li>
			</ul>
		</div>
		<div>
			<figure>
				<img style="height:330px; width:240px; float:right;" src="jannik.jpg" alt="Jannik">
				<img style="height:330px; width:240px; float:left;" src="p******.jpg" alt="P******">
			<figure>
				<p style="color:white; text-align: center;">Wir sind P****** und Jannik vom NIG Bad Bederkesa.<br>
				Diese Website haben wir 2016 im Rahmen des Informatikunterrichts bei Herrn Doktor F***** erstellt.</p>
		</div>
		<div class="footer">
			<p>NIG Germany &copy 2016</p>
		</div>
	</body>
</html>
