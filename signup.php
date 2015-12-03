<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html>

  <head>
    <title>NHL Database</title>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
  </head>

  <body>
    <div id="container">

      <div class="header">
        <ul>
          <li><a href="login.php">Login</a></li>
          <li><a href="signup.php">Sign up</a></li>
        </ul>
      </div>

      <div class="navigation">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="favorites.php">Favorites</a></li>
          <li><a href="recent.php">Recent</a></li>
        </ul>
      </div>
<?php
		$form = "<form action='./signup.php' method='post'>
   <div class='content'>
        <div class='login'>
          <p>Sign up!</p>
          <div class='fields'>
            <input type='text' placeholder='username' name = 'username'>
            <input type='password' placeholder='password' name = 'password'>
            <input type='cpassword' placeholder='Confirm Password' name = 'cpassword'>
            <div class='subcontainer'>
              <input type='submit' name='signinbtn' value='submit'>
            </div>
          </div>
        </div>
      </div>
		</form>"; 
		if($_POST['signinbtn']){

			$username = $_POST['username'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
			if($username){
				if($password){
					if($password == $cpassword){
					require("db_connect.php");

					//query database
					if($query = mysqli_query($mysqli,"INSERT INTO users (Username, Password, Usertype) VALUES ('$username', '$password', 'regular')")){
						echo "account created";
					}						
					else{
						echo "error creating account $form";
					}
					
					mysqli_close($mysqli);
					}
					else{
						echo "passwords do not match. $form";
					}
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
     <!-- <div class='content'>
        <div class='login'>
          <p>Sign up!</p>
          <div class='fields'>
            <input type='text' placeholder='username' name = 'username'>
            <input type='password' placeholder='password' name = 'password'>
            <input type='cpassword' placeholder='Confirm Password' name = 'cpassword'>
            <div class='subcontainer'>
              <input type='submit' name='signinbtn' value='submit'>
            </div>
          </div>
        </div>
      </div>-->

  </body>
</html>
