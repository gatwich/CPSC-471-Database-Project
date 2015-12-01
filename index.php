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
            <li><input type="checkbox" name="search" value="arenaCheck"> Arena</li>
            <li><input type="checkbox" name="search" value="coachCheck"> Coach</li>
            <li><input type="checkbox" name="search" value="conferenceCheck"> Conference</li>
            <li><input type="checkbox" name="search" value="divisionCheck"> Division</li>
            <li><input type="checkbox" name="search" value="locationCheck"> Location</li>
	    <li><input type="checkbox" name="search" value="playersCheck"> Players</li>
	    <li><input type="checkbox" name="search" value="teamCheck"> Team</li>
          </ul>

          <input type="search" placeholder="Search">
          <input type="submit">

        </div>
      </div>
   </body>
</html>
