
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
		$user_query="SELECT  Name FROM team WHERE Name IN(SELECT Team FROM favorite_teams WHERE User='".$username."'".")";
		$uresult=mysqli_query($db, $user_query);
		while($urow=mysqli_fetch_array($uresult)){
		$name = $urow["Name"];
		$teams_query="SELECT  Name, Wins, Losses, points, `Games Played`, Location, Division FROM team WHERE `Name`='" . $name ."'";
		$Coach="SELECT  Name FROM coach WHERE Team='" . $name ."'";
		$teamplayers="SELECT `First Name`, `Last Name`, Points, Goals FROM players  WHERE Team = '" . $name ."'";
		$result=mysqli_query($db, $teams_query);
		$result2=mysqli_query($db, $Coach);
		$result3=mysqli_query($db, $teamplayers);
		echo "<table><tr><th>Name</th><th>Wins</th><th>Losses</th><th>Points</th><th>Games Played</th><th>Location</th><th>Division</th></tr>";

		while($row=mysqli_fetch_array($result)){
		$tname = $row["Name"];
		echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Wins"]."</td><td>" . $row["Losses"]. "</td><td>" . $row["points"]. "</td><td>" . $row["Games Played"]. "</td><td>" . $row["Location"]. "</td><td>" . $row["Division"]. "</td></tr>";
		}
		echo "</table>";
		echo "<br>";


		//display Coach
		
		echo "<table><tr><th>Coach Name</th></tr>";

		while($row=mysqli_fetch_array($result2)){
		echo "<tr><td>" . $row["Name"]. "</td></tr>";
		}
		echo "</table>";
		echo "<br>";

		//display players
		
		echo "<table><tr><th>First Name</th><th>Last Name</th><th>Points</th><th>Goals</th></tr>";

		while($row=mysqli_fetch_array($result3)){
		echo "<tr><td>" . $row["First Name"]. "</td><td>" . $row["Last Name"]."</td><td>" . $row["Points"]. "</td><td>" . $row["Goals"]. "</td></tr>";
		}
		echo "</table>";
		echo "<br>";
		echo "<br>";
		}
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
