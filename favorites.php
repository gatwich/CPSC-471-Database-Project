
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

    echo "
    <table cellspacing='0'>
    <thead>
      <th>Name</th>
      <th>Location</th>
      <th>Arena</th>
      <th>Games Played</th>
      <th>Wins</th>
      <th>Losses</th>
      <th>Points</th>
    </thead>
    </table>
    ";
	//require("db_connect.php");
	$db=mysqli_connect  ("localhost", "root",  "admin", "nhl") or die ('I cannot connect to the database  because: ' . mysql_error());
	
	$favteams = "SELECT Team FROM favorite_teams WHERE User = '$username'";
		//-run  the query against the mysql query function
		$result=mysqli_query($db, $favteams);
			while($row=mysqli_fetch_array($result)){
				$Team = $row['Team'];
				$teams="SELECT Name, Location, Arena, 'Games Played', Wins, Losses, points FROM team  WHERE Name = '$Team' ";
				$result2=mysqli_query($db, $teams);
				while($row2=mysqli_fetch_array($result2)){
				//$row=mysqli_fetch_array($result);
			    $Name  =$row2['Name'];
			    $Location=$row2['Location'];
			    $Arena=$row2['Arena'];
			    $GP=$row2['Games Played'];
			    $Wins=$row2['Wins'];
			   $Losses=$row2['Losses'];
			   $points=$row2['points'];
		//-display  the result of the array
    echo"<table cellspacing='0'>
          <tbody>
            <tr>
              <td>$Name</td>
              <td>$Location</td>
              <td>$Arena</td>
              <td>$GP</td>
              <td>$Wins</td>
              <td>$Losses</td>
              <td>$points</td>
            </tr>
          </tbody>
        </table>
        ";
		}
			}
  ?>
  
  </body>
</html>
