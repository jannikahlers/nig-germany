<!DOCTYPE html>
<html>
	<head>
		<title>Neue Beiträge</title>
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
				<li><a href="thread.php">Beitrag erstellen</a></li>
				<li class="active"><a href="latestThreads.php">Neue Beiträge</a></li>
				<li style="float:right"><a href="aboutus.php">Über uns</a></li>
			</ul>
		</div>
		<div class="table">
			<table>
				<tbody>
					<tr>
						<th class="titel">Titel</th><th>User</th><th class="date">Datum</th>
					</tr>
					<?PHP
					try{
						$dbh = new PDO('mysql:host=localhost;dbname=if-gn-fae', "if-gn-fae", "if-gn-fae");
						$sql = "SELECT topic, username, date, id FROM NIG_GERMANY_thread ORDER BY date DESC";
						$tbl = "";
						foreach($dbh->query($sql) as $row){
							$tbl .= "<tr>";
								$tbl .= "<td>";
									$tbl .= "<a href='thisThread.php?threadid=".$row['id']."'>".$row['topic']."</a>";
								$tbl .= "</td>";
								$tbl .= "<td>";
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
		<div class="footer">
			<p>NIG Germany &copy 2016</p>
		</div>	
	</body>
</html>