
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
	</head>
	<body>	
		<div>
			<a href="index.php"><img style="float:left;height:100px;width:100px;" src="logo.png"></a>
			<center><h1 class="heading">NIG Germany Forum</h1></center>
		</div>
		<div class="navigationbar">
			<ul>
				<li class="active"><a href="index.php">Startseite</a></li>
				<li><a href="thread.php">Beitrag erstellen</a></li>
				<li><a href="latestThreads.php">Neue Beiträge</a></li>
				<li style="float:right"><a href="aboutus.php">Über uns</a></li>
			</ul>
		</div>
		<div>
			<?PHP
			session_start();
			try {
					$dbh = new PDO('mysql:host=localhost;dbname=if-gn-fae', "if-gn-fae", "if-gn-fae");
					
					$sql = "SELECT username, password FROM NIG_GERMANY_account WHERE username = \"".$_POST['username']."\"";
					$checkName = $dbh->query($sql)->fetch();
					if ($checkName['username'] == $_POST['username']) {
						if (($checkName['password'] == md5($_POST['password']))){
							$name = $_POST['username'];
							$_SESSION['username'] = $name;
							echo "<h2 class='meldung'>Erfolgreich eingeloggt, $name!</h2>";
							echo "<meta http-equiv='refresh' content='2; URL=index.php'>";
						}
					}
					else{
						echo "<h2 class='meldung'>Die Kombination von Username und Passwort stimmt nicht überein!</h2>";
					}
					
			}
			catch (PDOException $e) {
				print "Error!: " . $e->getMessage() . "<br/>";
				die();
			}
			?>
		</div>
		<div class="topright">
			<ul class="navTopRight">
				<?PHP
				
				try{
					if(!isset($_SESSION['username'])){
						echo "<li class='rightborder'><a href='anmeldung.php'>Anmelden</a></li>";
						echo "<li><a href='registration.php'>Registrieren</a></li>";
					}
					else{
						$name = $_SESSION['username'];
						echo "<li class='rightborder'><p class='name'>Guten Tag, $name!</p></li>";
						echo "<li><a href='logout.php'>Logout</a></li>";
					}
				}
				catch(PDOException $e){
					print "Error!: " . $e->getMessage() . "<br/>";
					die();
				}
					
				
				?>
			</ul>
		</div>
		<div class="footer">
			<footer>
				<p>NIG Germany &copy 2016</p>
			</footer>
		</div>
	</body>
</html>