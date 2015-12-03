
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
      </div>
-->
      <div class="navigation">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="favorites.php">Favorites</a></li>
          <li><a href="recent.php">Recent</a></li>
        </ul>
      </div>
  </div>
		 <?php
		 echo "<div class=tableTitle>Recent Searches:</div>";
		 $db=mysqli_connect  ("localhost", "root",  "admin", "nhl") or die ('I cannot connect to the database  because: ' . mysql_error());
	
	$recent = "SELECT Search FROM history WHERE User = '$username'";
	$result=mysqli_query($db, $recent);
			while($row=mysqli_fetch_array($result)){
			$search = $row['Search'];
			echo"<table cellspacing='0'>
          <tbody>
            <tr>
              <td>$search</td>
            
            </tr>
          </tbody>
        </table>
        ";
		
			
			}
		?>
  </body>
</html>
