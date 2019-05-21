<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
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
		
		<?PHP
			try {
					$dbh = new PDO('mysql:host=localhost;dbname=if-gn-fae', "if-gn-fae", "if-gn-fae");
					
					$sql = "SELECT username FROM NIG_GERMANY_account";
					$newName = true;
					foreach ($dbh->query($sql) as $checkName) {
						if ($checkName['username'] == $_POST['username']) {
							$newName = false;
						}
					}
					
					if ($_POST['password1'] == $_POST['password2']) {
						if ($newName){
							$statement = $dbh->prepare("INSERT INTO NIG_GERMANY_account(username, password, email) VALUES(?, ?, ?)");
							$statement->execute(array($_POST['username'], md5($_POST['password1']), $_POST['email']));
							
							echo "<h3 class='meldung'>Erfolgreich Registriert!</h3><br>";
							echo "<meta http-equiv='refresh' content='3; URL=index.php'>";							
						} else {
							echo "<h3 class='meldung'>Fehler! Benutzername existiert schon.</h3><br>";	
						}
					} else {
						echo "<h3 class='meldung'>Fehler! Passwörter stimmen nicht überein.</h3><br>";
					}
			}
			catch (PDOException $e) {
				print "Error!: " . $e->getMessage() . "<br/>";
				die();
			}
		?>
	</body>
</html>