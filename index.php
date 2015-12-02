<!DOCTYPE html>
<html>

  <head>
    <title>NHL Database</title>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
  </head>

  <body>
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
          <li>
            <a href="recent.php">Recent</a></li>
        </ul>
      </div>

      <h1>THE NHL DATABASE</h1>

      <div class="content">
        <div class="search">
          <p> SEARCH </p>
          <ul>
            <li><input type="checkbox" name="arenaCheck" value="yes"> Arena</li>
            <li><input type="checkbox" name="coachCheck" value="yes"> Coach</li>
            <li><input type="checkbox" name="conferenceCheck" value="yes"> Conference</li>
            <li><input type="checkbox" name="divisionCheck" value="yes"> Division</li>
            <li><input type="checkbox" name="locationCheck" value="yes"> Location</li>
	    <li><input type="checkbox" name="playersCheck" value="yes"> Players</li>
	    <li><input type="checkbox" name="teamCheck" value="yes"> Team</li>
          </ul>

          <input type="search" placeholder="Search">
          <input type="submit">

        </div>
      </div>
   </body>
</html>
