
<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$username = $_SESSION['username'];
echo $username;
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
			$header = "<div class='header'>
							
							<ul>
								<li><p>Hello, $username </p></li>
							</ul>
						</div>";
	}
	echo $header
?>
      <!-- <div class="header">
        <ul>
          <li><a href="login.php">Login</a></li>
          <li><a href="signup.php">Sign up</a></li>
        </ul>
      </div> -->

      <div class="navigation">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="favorites.php">Favorites</a></li>
          <li><a href="recent.php">Recent</a></li>
        </ul>
      </div>
		<?php
		$form = "<form action='./login.php' method='post'>
    <div class='content'>
      <div class='login'>
        <p>Database login</p>
        <div class='fields'>
          <input type='text' placeholder='username' name = 'username'>
          <input type='password' placeholder='password' name = 'password'>
          <div class='subcontainer'>
            <input type='submit' name='loginbtn' value='Login'>
          </div>
        </div>
      </div>
    </div>
		</form>"; /* */

		if($_POST['loginbtn']){

			$username = $_POST['username'];
			$password = $_POST['password'];
			if($username){
				if($password){
					require("db_connect.php");

					//query database
					$query = mysqli_query($mysqli, "SELECT * FROM users WHERE Username='$username'");
					$numrows = mysqli_num_rows($query);
					if($numrows == 1){
						$row = mysqli_fetch_assoc($query);
						$dbuser = $row['Username'];
						$dbpass = $row['Password'];

						if($password == $dbpass){
							//set session variables
							$_SESSION['username'] = $dbuser;
							echo "You have been logged in as <b>$dbuser</b>. $form";

						}
						else
								echo "You did not enter the correct password.";
					}
					else
						echo "username not found";

					mysqli_close($mysqli);
				}
				else
					echo "You must enter password. $form";

			}
			else
				echo "You must enter username. $form";

		}
		else{
				echo $form;
		}
		?>

  </body>
</html>
