
<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html>

  <head>
    <title>NHL Database</title>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
  </head>

  <body>
    <div id="container">

	<?php

	if(empty($_SESSION['username'])){
		$header = "<div class='header'>
							<ul>
								<li><a href='login.php'>Login</a></li>
								<li><a href='signup.php'>Sign up</a></li>
							</ul>
						</div>";
	}
	else{
    $header = "<div class='newHeader'>
            <ul>
              <li>
                <p>You are logged in as</p>
                <p class='username'> $username</p>
              </li>
            </ul>
          </div>";
	}
	echo $header
?>
      <!--<div class="header">
        <ul>
          <li><a href="login.php">Login</a></li>
          <li><a href="signup.php">Sign up</a></li>
        </ul>
      </div>-->

      <div class="navigation">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="favorites.php">Favorites</a></li>
          <li><a href="recent.php">Recent</a></li>
        </ul>
      </div>
  </div>
<?php
  echo "<div class=tableTitle>Favorite Teams</div>";
	//require("db_connect.php");
	$db=mysqli_connect  ("localhost", "root",  "admin", "nhl") or die ('I cannot connect to the database  because: ' . mysql_error());
		//-query  the database table
		$arena="SELECT User, Team FROM favorite_teams WHERE User= '$username'";
		//-run  the query against the mysql query function
		$result=mysqli_query($db, $arena);
		/*echo "<strong>$arena. Arena</strong>";*/
		echo "<table><tr><th>User</th><th>Team</th>";

		while($row=mysqli_fetch_array($result)){
		echo "<tr><td>" . $row["User"]. "</td><td>" . $row["Team"]."</td>";
		}
		echo "</table>";
  ?>

<?php
  echo "<div class=tableTitle>Favorite Players</div>";
	//require("db_connect.php");
	$db=mysqli_connect  ("localhost", "root",  "admin", "nhl") or die ('I cannot connect to the database  because: ' . mysql_error());
		//-query  the database table
		$arena="SELECT `First Name`, `Last Name`, Team, Goals, Points, ID FROM players WHERE ID IN (SELECT pid FROM favorite_players WHERE User ='".$username."'".")";
		//-run  the query against the mysql query function
		$result=mysqli_query($db, $arena);
		/*echo "<strong>$arena. Arena</strong>";*/
		echo "<table><tr><th>First Name</th><th>Last Name</th><th>Team</th><th>Goals</th><th>Points</tr>";

		while($row=mysqli_fetch_array($result)){
		$ID= $row["ID"];
		echo "<tr><td>" . $row["First Name"]. "</td><td>" . $row["Last Name"]."</td><td>" . $row["Team"]. "</td><td>" . $row["Goals"]. "</td><td>" . $row["Points"]. "</td>";
		}
		echo "</table>";
  ?>
  
  </body>
</html>
