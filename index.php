
<!DOCTYPE html>
<html id="winter">
	<head>
		<title>Startseite</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="stylesheet.css?v2" type="text/css">
		<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
		<script src="js/snowstorm.js"></script>
		<script src="lights/christmaslights.js"></script>
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
				<li class="active"><a href="index.php">Startseite</a></li>
				<li><a href="thread.php">Beitrag erstellen</a></li>
				<li><a href="latestThreads.php">Neue Beiträge</a></li>
				<li style="float:right"><a href="aboutus.php">Über uns</a></li>
			</ul>
		</div>
		
		<div class="newIndex">
			<table class="tableIndex">
				<tbody>
					<tr>
						<th class="titel">Neuester Beitrag</th><th>User</th><th class="date">Datum</th>
					</tr>
					<?PHP
					try{
						$dbh = new PDO('mysql:host=localhost;dbname=if-gn-fae', "if-gn-fae", "if-gn-fae");
						$sql = "SELECT content, username, date, id, thread_id FROM NIG_GERMANY_post ORDER BY date DESC limit 1";
						$tbl = "";
						foreach($dbh->query($sql) as $row){
							$tbl .= "<tr>";
								$tbl .= "<td style='border-right: 1px solid white; text-align: left;'>";
									$tbl .= "<a href='thisThread.php?threadid=".$row['thread_id']."'><p style='word-break: break-all;'>".$row['content']."</p></a>";
								$tbl .= "</td>";
								$tbl .= "<td style='border-right: 1px solid white; text-align: center;'>";
									$tbl .= $row['username'];
								$tbl .= "</td>";
								$tbl .= "<td>";
									$tbl .= $row['date'];
								$tbl .= "</td>";
								
							$tbl .= "</tr>";
						
						}
						echo $tbl;
					}
					catch (PDOException $e) {
						print "Error!: " . $e->getMessage() . "<br/>";
						die();
					}
					?>
				</tbody>
			</table>
		</div>
		<div class="marqueeIndex" style='max-width: 1000px; bottom: 0;'>
			<?PHP
			try{
				$dbh = new PDO('mysql:host=localhost;dbname=if-gn-fae', "if-gn-fae", "if-gn-fae");
				$sql = "SELECT content, date, id FROM NIG_GERMANY_news ORDER BY date DESC limit 3";
				echo "<marquee valign='100' style='width: 1000px;'>";
				foreach($dbh->query($sql) as $row){
					echo $row['content'], " . . . . . . . . . . . . . . . ";
				}
				echo "</marquee>";
			}
			catch (PDOException $e) {
				print "Error!: " . $e->getMessage() . "<br/>";
				die();
			}
			?>
		</div>
		
		<div class="navigationMiddle">
			<ul class="navMiddleRight">
				<a href="datenschutz.php"><li>Datenschutz</li></a>
				<a href="richtlinien.php"><li>Richtlinien</li></a>
				<a href=""><li>Impressum</li></a>
			</ul>
		</div>
		<div class="footer">
			<footer>
				<p>NIG Germany &copy 2016</p>
			</footer>
		</div>
	</body>
</html>