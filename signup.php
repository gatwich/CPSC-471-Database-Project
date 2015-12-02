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

  </body>
</html>
