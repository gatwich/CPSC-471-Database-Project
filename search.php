<?php
require 'index.php';

if (isset($_POST['submit'])) { //user text is submitted
    /*echo "submitted";
    echo "<br>";*/
    	// Checkbox which checkbox is selected

	//if arena is selected
	if(isset($_POST['arenaCheck'])){
		/*echo "arenacheck";
		echo "<br>";*/
		//if(preg_match("^/[A-Za-z]+/", $_POST['input'])){
	  	 $name = $_POST['input'];
		 /*echo $name;
		 echo "<br>";
		 echo "<br>";*/
		 //connect  to the database
		$db=mysqli_connect  ("localhost", "root",  "admin", "nhl") or die ('I cannot connect to the database  because: ' . mysql_error());
		//-query  the database table
		$arena="SELECT  Name, Capacity, Location FROM arena WHERE Name='" . $name ."'";
		//-run  the query against the mysql query function
		$result=mysqli_query($db, $arena);
		while($row=mysqli_fetch_array($result)){
			    $Name  =$row['Name'];
			    $Capacity=$row['Capacity'];
			    $Location=$row['Location'];
		//-display  the result of the array
		echo"<table cellspacing='0'>
           <thead>
             <th>Name</th>
             <th>Capacity</th>
             <th>Location</th>
           </thead>

          <tbody>
            <tr>
              <td>$name</td>
              <td>$Capacity</td>
              <td>$Location</td>
            </tr>
          </tbody>
        </table>
        ";

		/*echo  "<li>" . "<a  href=\"$Name".".php\">".$Name."</a></li>\n";*/
		}
		//}
	}

    	// if *************conference*********** is selected
	if(isset($_POST['conferenceCheck'])){
		//echo "conferencecheck";
		//echo "<br>";
		//if(preg_match("^/[A-Za-z]+/", $_POST['input'])){
	  	 $name = $_POST['input'];
		// echo $name;
		// echo "<br>";
		// echo "<br>";
		 //connect  to the database
		$db=mysqli_connect  ("localhost", "root",  "admin", "nhl") or die ('I cannot connect to the database  because: ' . mysql_error());
		//-query  the database table
		$conference="SELECT Name, Location, Arena, `Games Played`, Wins, Losses, points FROM team WHERE Division IN (SELECT Name FROM division WHERE Conference ='".$name."'".")";
		//-run  the query against the mysql query function
		$result=mysqli_query($db, $conference);
		echo $name . " Conference";
		while($row=mysqli_fetch_array($result)){
			    $Name  =$row['Name'];
			    $Location=$row['Location'];
			    $Arena=$row['Arena'];
			    $GP=$row['Games Played'];
			    $Wins=$row['Wins'];
			    $Losses=$row['Losses'];
			    $points=$row['points'];
		//-display  the result of the array
		echo  "<ul>\n";
		echo "Name = " . $Name . " Location = " . $Location . " Arena = "   .$Arena . " Games Played = "   .$GP . " Wins = "   .$Wins . " Losses = "   .$Losses . " Points = "   .$points;
		echo  "</ul>";

		}
	}


	//if **************division************** is selected
	else if(isset($_POST['divisionCheck'])) {
		//echo "divisioncheck";
		//echo "<br>";
		//if(preg_match("^/[A-Za-z]+/", $_POST['input'])){
	  	 $name = $_POST['input'];
		// echo $name;
		// echo "<br>";
		// echo "<br>";
		 //connect  to the database
		$db=mysqli_connect  ("localhost", "root",  "admin", "nhl") or die ('I cannot connect to the database  because: ' . mysql_error());
		//-query  the database table
		$division="SELECT Name, Location, Arena, `Games Played`, Wins, Losses, points FROM team WHERE Division = '" . $name ."'";

		//-run  the query against the mysql query function
		$result=mysqli_query($db, $division);
  	
		 echo "<table><tr><th>Name</th><th>Location</th><th>Arena</th><th>Games Played</th><th>Wins</th><th>Losses</th><th>Points</th></tr>";

		while($row=mysqli_fetch_array($result)){
		echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Location"]."</td><td>" . $row["Arena"]. "</td><td>" . $row["Games Played"]. "</td><td>" . $row["Wins"]. "</td><td>" . $row["Losses"]. "</td><td>" . $row["points"]. "</td></tr>";
		}
		echo "</table>";
  
		//}

	}

	//if players is selected
	else if(isset($_POST['playersCheck'])){ 
		//echo "<strong>acheck</strong>";
		//echo "<br>";
		//if(preg_match("^/[A-Za-z]+/", $_POST['input'])){ 
	 	$name = $_POST['input']; 
		//echo "<strong>$name</strong>";
		//echo "<br>";
		//echo "<br>";
		//connect  to the database
		$db=mysqli_connect  ("localhost", "root",  "admin", "nhl") or die ('I cannot connect to the database  because: ' . mysql_error());
		//-query  the database table
		$players="SELECT `First Name`, `Last Name`, Team, Goals, Points FROM players  WHERE `First Name` = '" . $name ."'";
		//-run  the query against the mysql query function
		$result=mysqli_query($db, $players);
		while($row=mysqli_fetch_array($result)){
			   $FirstName =$row['First Name'];
			   $LastName=$row['Last Name'];
			   $Team=$row['Team'];
				$Goals=$row['Goals'];
				$Points=$row['Points'];
				//$Location=$row[''];
		//-display  the result of the array
		echo"<table cellspacing='0'>
           <thead>
             <th>First Name</th>
             <th>Last Name</th>
             <th>Team</th>
	     <th>Goals</th>
	     <th>Points</th>
           </thead>

          <tbody>
            <tr>
              <td>$FirstName</td>
              <td>$LastName</td>
              <td>$Team</td>
	      <td>$Goals</td>
	      <td>$Points</td>
            </tr>
          </tbody>
        </table>
        ";
		
		
		
		}
		//}
	}

		//if Location is selected
	else if(isset($_POST['locationCheck'])){
		//echo "<strong>locationcheck</strong>";
		//echo "<br>";
		//if(preg_match("^/[A-Za-z]+/", $_POST['input'])){
		  $name = $_POST['input'];
		//echo "<strong>$name</strong>";
		//echo "<br>";
		//echo "<br>";
		//connect  to the database
		$db=mysqli_connect  ("localhost", "root",  "admin", "nhl") or die ('I cannot connect to the database  because: ' . mysql_error());
		//-query  the database table
		$location="SELECT * FROM location WHERE City='" . $name ."'";
		//-run  the query against the mysql query function
		$result=mysqli_query($db, $location);
		while($row=mysqli_fetch_array($result)){
		   $City=$row['City'];
		   $StateProvince=$row['State/Province'];
		   $Country=$row['Country'];
		//-display  the result of the array
		echo"<table cellspacing='0'>
           <thead>
             <th>City</th>
             <th>StateProvince</th>
             <th>Country</th>
           </thead>

          <tbody>
            <tr>
              <td>$City</td>
              <td>$StateProvince</td>
              <td>$Country</td>
            </tr>
          </tbody>
        </table>
        ";
		}
		//}
	}

	// if the teams is selected

	else if(isset($_POST['teamCheck'])){
		//echo "arenacheck";
		//echo "<br>";
		$name = $_POST['input'];
		//echo "<strong>Team</strong>";
		//we connect to the database
		$db=mysqli_connect  ("localhost", "root",  "admin", "nhl") or die ('I cannot connect to the database  because: ' . mysql_error());
		$teams_query="SELECT  Name, Wins, Losses, points, `Games Played`, Location, Division FROM team WHERE `Name`='" . $name ."'";
		$Coach="SELECT  Name FROM coach WHERE Team='" . $name ."'";
		$teamplayers="SELECT `First Name`, `Last Name`, Points, Goals FROM players  WHERE Team = '" . $name ."'";
		$result=mysqli_query($db, $teams_query);
		$result2=mysqli_query($db, $Coach);
		$result3=mysqli_query($db, $teamplayers);
		echo "<table><tr><th>Name</th><th>Wins</th><th>Losses</th><th>Points</th><th>Games Played</th><th>Location</th><th>Division</th></tr>";

		while($row=mysqli_fetch_array($result)){
		echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Wins"]."</td><td>" . $row["Losses"]. "</td><td>" . $row["points"]. "</td><td>" . $row["Games Played"]. "</td><td>" . $row["Location"]. "</td><td>" . $row["Division"]. "</td></tr>";
		}
		echo "</table>";
		echo "<br>";


		//display Coach
		echo "<strong>Coach</strong>";
		echo "<table><tr><th>Coach Name</th></tr>";

		while($row=mysqli_fetch_array($result2)){
		echo "<tr><td>" . $row["Name"]. "</td></tr>";
		}
		echo "</table>";
		echo "<br>";

		//display players
		echo "<strong>Players</strong>";
		echo "<table><tr><th>First Name</th><th>Last Name</th><th>Points</th><th>Goals</th></tr>";

		while($row=mysqli_fetch_array($result3)){
		echo "<tr><td>" . $row["First Name"]. "</td><td>" . $row["Last Name"]."</td><td>" . $row["Points"]. "</td><td>" . $row["Goals"]. "</td></tr>";
		}
		echo "</table>";
		}
	else{

		}

	echo"
	  <input type='submit' name='submit' value='Favorite'>
	  <input type='submit' name='submit' value='Favorite'>
	  <input type='submit' name='submit' value='Favorite'>
	  ";
 
}
?>
