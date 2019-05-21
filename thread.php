<!DOCTYPE html>
<html>
	<head>
		<title>Beitrag erstellen</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="stylesheet.css">
		<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
	</head>
	<body background="bg_sun.jpg">	
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
				<li class="active"><a href="thread.php">Beitrag erstellen</a></li>
				<li><a href="latestThreads.php">Neue Beiträge</a></li>
				<li style="float:right"><a href="aboutus.php">Über uns</a></li>
			</ul>
		</div>
		
		
		<div class="newThread">
			<form action="newThread.php" method="post" onSubmit="return checkInput()">
				<span class="tab3">Titel:</span>
				<input type="text" name="title" pattern=".{8,32}" required title="Titel zu kurz oder zu lang. [8-32 Zeichen]"/></br>
				
				<textarea name="textarea" rows="10" cols="80" minlength="8" maxlength="512" required title="Post zu kurz oder zu lang. [8-512 Zeichen]"></textarea>
				</br>
				<button style="margin-left: 86px;" id="newThread" name="BTN_newThread" type="submit">Neuen Thread Erstellen</button>
			</form>
		</div>
		
		<div class="footer">
			<p>NIG Germany &copy 2016</p>
		</div>	
	</body>
</html>