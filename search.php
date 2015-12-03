<?php
require 'index.php';

if (isset($_POST['submit'])) { //user text is submitted
    /*echo "submitted";
    echo "<br>";*/
    	// Checkbox which checkbox is selected

	//if **********ARENA*********** is selected
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
		$conference="SELECT Name FROM team WHERE Division = SELECT Name FROM division WHERE Conference ='" . $name ."'";
		//-run  the query against the mysql query function
		$result=mysqli_query($db, $conference);
		while($row=mysqli_fetch_array($result)){
			    $Name  =$row['Name'];
		//-display  the result of the array
		echo  "<ul>\n";
		echo  "<li>" . "<a  href=\"$Name".".php\">"   .$Name .  "</a></li>\n";
		echo  "</ul>";

		}
		//}
	}


	//if **************division************** is selected
	else if(isset($_POST['divisionCheck'])) {
	/*	echo "divisioncheck";
		echo "<br>";*/
		//if(preg_match("^/[A-Za-z]+/", $_POST['input'])){
	  	 $name = $_POST['input'];
/*		 echo $name;
		 echo "<br>";
		 echo "<br>";*/
		 //connect  to the database
		$db=mysqli_connect  ("localhost", "root",  "admin", "nhl") or die ('I cannot connect to the database  because: ' . mysql_error());
		//-query  the database table
		$division="SELECT Name, Location, Arena, 'Games Played', Wins, Losses, points FROM team WHERE Division = '" . $name ."'";

		//-run  the query against the mysql query function
		$result=mysqli_query($db, $division);
  	echo "<div class=tableTitle>$name</div>";

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
