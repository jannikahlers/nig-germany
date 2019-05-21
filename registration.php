<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
	</head>
	<body>	
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
		</br>
		<div class="register">
			<form action="register.php" method="post" onSubmit="return checkInput()">
				<span class="tab1">Username:</span>
				<input type="text" name="username" pattern=".{5,16}" required title="Benutzername zu kurz oder zu lang. [5-16 Zeichen]"/></br>
				
				<span class="tab5">E-Mail:</span>
				<input type="email" name="email" required/></br>
				
				<span class="tab2">Passwort:</span>
				<input type="password" name="password1" pattern=".{8,32}" required title="Passwort zu kurz oder zu lang. [8-32 Zeichen]"/></br>
				
				<span class="tab3">Passwort wiederholen:</span>
				<input type="password" name="password2" required/></br>
				<button style="margin-top: 20px; margin-left: 265px;" id="registrieren" name="BTN_registrieren" type="submit">Registrieren</button>
			</form>
		</div>


		
		<script type="text/javascript">
			function checkInput(){
			}
		</script>
	</body>
	<div class="footer">
			<p>NIG Germany &copy 2016</p>
		</div>
</html>