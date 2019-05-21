<!DOCTYPE html>
<html>
	<head>
		<title>Beitrag Erstellen</title>
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
				<li class="active"><a href="thread.php">Beitrag erstellen</a></li>
				<li><a href="latestThreads.php">Neue Beiträge</a></li>
				<li style="float:right"><a href="aboutus.php">Über uns</a></li>
			</ul>
		</div>
		
		<?PHP
			try {
				$dbh = new PDO('mysql:host=localhost;dbname=if-gn-fae', "if-gn-fae", "if-gn-fae");
				
				if(isset($_SESSION['username'])){
					$statement = $dbh->prepare("INSERT INTO NIG_GERMANY_thread(username, topic) VALUES(?, ?)");
					$statement->execute(array($_SESSION['username'], $_POST['title']));
					$getThreadID = "SELECT ID FROM NIG_GERMANY_thread ORDER BY date desc";
					$threadID = $dbh->query($getThreadID)->fetch();
							
					$statement = $dbh->prepare("INSERT INTO NIG_GERMANY_post(username, content, thread_id) VALUES(?, ?, ?)");
					$statement->execute(array($_SESSION['username'], $_POST['textarea'], $threadID["ID"]));
				
					echo "<h2 class='meldung'>Beitrag erstellt!</h2>";
					echo "<meta http-equiv='refresh' content='1; URL=latestThreads.php'>";
				} else {
					echo "<h2 class='meldung'>Du bist nicht eingeloggt!</h2>";
					echo "<meta http-equiv='refresh' content='1; URL=anmeldung.php'>";
				}
			}
			catch (PDOException $e) {
				print "Error!: " . $e->getMessage() . "<br/>";
				die();
			}
		?>
	</body>
</html>