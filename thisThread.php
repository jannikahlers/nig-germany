
<!DOCTYPE html>
<html>
	<head>
		<title>Thread</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="stylesheet.css">
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
				<li class="active"><a href="latestThreads.php">Neue Beiträge</a></li>
				<li style="float:right"><a href="aboutus.php">Über uns</a></li>
			</ul>
		</div>
		
		<div class="table">
			<table>
				<tbody>
					<tr>
						<th class="titel">Beitrag</th><th>User</th><th class="date">Datum</th>
					</tr>
					<?PHP
					try{
						$dbh = new PDO('mysql:host=localhost;dbname=if-gn-fae', "if-gn-fae", "if-gn-fae");
						$sql = "SELECT content, username, date, id FROM NIG_GERMANY_post WHERE thread_id=".$_GET['threadid']." ORDER BY date ASC";
						$tbl = "";
						foreach($dbh->query($sql) as $row){
							$tbl .= "<tr>";
								$tbl .= "<td>";
									$tbl .= "<p style='word-break: break-all;'>".$row['content']."</p>";
								$tbl .= "</td>";
								$tbl .= "<td valign=top>";
									$tbl .= $row['username'];
								$tbl .= "</td>";
								$tbl .= "<td valign=top>";
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
					
					$_SESSION['threadid']=$_GET['threadid'];
					?>
				</tbody>
			</table>
		</div>
		
		<form action="newPost.php" method="post">
			<div class="comment">
				<textarea class="commentfield" name="textarea" rows="10" cols="80" minlength="8" maxlength="512" required title="Post zu kurz oder zu lang. [8-512 Zeichen]"></textarea></br>
			</div>
			<div class="commentButton">
				<button style="margin-left: 86px;" id="newPost" name="BTN_newPost" type="submit">Posten</button>
			</div>
		</form>
		<div class="footer">
			<footer>
				<p>NIG Germany &copy 2016</p>
			</footer>
		</div>
	</body>
</html>