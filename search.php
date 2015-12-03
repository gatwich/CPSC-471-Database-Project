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

    	// if conference is selected
	if(isset($_POST['conferenceCheck'])){
		echo "conferencecheck";
		echo "<br>";
		//if(preg_match("^/[A-Za-z]+/", $_POST['input'])){
	  	 $name = $_POST['input'];
		 echo $name;
		 echo "<br>";
		 echo "<br>";
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


	//if division is selected
	else if(isset($_POST['divisionCheck'])) {
		echo "divisioncheck";
		echo "<br>";
		//if(preg_match("^/[A-Za-z]+/", $_POST['input'])){
	  	 $name = $_POST['input'];
		 echo $name;
		 echo "<br>";
		 echo "<br>";
		 //connect  to the database
		$db=mysqli_connect  ("localhost", "root",  "admin", "nhl") or die ('I cannot connect to the database  because: ' . mysql_error());
		//-query  the database table
		$division="SELECT Name, Location, Arena, `Games Played`, Wins, Losses, points FROM team WHERE Division = '" . $name ."'";

		//-run  the query against the mysql query function
		$result=mysqli_query($db, $division);
		echo $name . " Division";
		while($row=mysqli_fetch_array($result)){
			    $Name  =$row['Name'];
			    $Location=$row['Location'];
			    $Arena=$row['Arena'];
			    $GP=$row['Games Played'];
			    $Wins=$row['Wins'];
			    $Losses=$row['Losses'];
			    $points=$row['points'];
		//-display  the result of the array
    echo"<table cellspacing='0'>
           <thead>
             <th>Name</th>
             <th>Location</th>
             <th>Arena</th>
	     <th>Games Played</th>
           </thead>

          <tbody>
            <tr>
              <td>$Name</td>
              <td>$Location</td>
              <td>$Arena</td>
	      <td>$GP</td>
            </tr>
          </tbody>
        </table>
        ";
		}
		//}


	}

	//if players is selected
	else if(isset($_POST['playersCheck'])){ 
		//echo "<strong>acheck</strong>";
		echo "<br>";
		//if(preg_match("^/[A-Za-z]+/", $_POST['input'])){ 
	 	$name = $_POST['input']; 
		echo "<strong>$name</strong>";
		echo "<br>";
		echo "<br>";
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
		echo "<strong>locationcheck</strong>";
		echo "<br>";
		//if(preg_match("^/[A-Za-z]+/", $_POST['input'])){
		  $name = $_POST['input'];
		echo "<strong>$name</strong>";
		echo "<br>";
		echo "<br>";
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

else{

	}

	echo"
	  <input type='submit' name='submit' value='Favorite'>
	  <input type='submit' name='submit' value='Favorite'>
	  <input type='submit' name='submit' value='Favorite'>
	  ";
 
}
?>
