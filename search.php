<?php
require 'index.php';

if (isset($_POST['submit'])) { //user text is submitted
    echo "submitted";
    echo "<br>";
    	// Checkbox which checkbox is selected

	//if arena is selected
	if(isset($_POST['arenaCheck'])){ 
		echo "arenacheck";
		echo "<br>";
		//if(preg_match("^/[A-Za-z]+/", $_POST['input'])){ 
	  	 $name = $_POST['input']; 
		 echo $name;
		 echo "<br>";
		 echo "<br>";
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
		echo  "<ul>\n";
		echo  "<li>" . "<a  href=\"$Name".".php\">".$Name."</a></li>\n";
		echo "<br>";
		echo "Capacity = " . $Capacity;
		echo "<br>";
		echo "Location = "   .$Location;
		echo  "</ul>";
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
		$division="SELECT Name FROM team WHERE Division = '" . $name ."'";
		
		//-run  the query against the mysql query function
		$result=mysqli_query($db, $division);
		while($row=mysqli_fetch_array($result)){
			    $Name  =$row['Name'];
		//-display  the result of the array
		echo  "<ul>\n";
		echo  "<li>" . "<a  href=\"$Name".".php\">"   .$Name .  "</a></li>\n";
		echo  "</ul>";
		
		}
		//}
	
	
	}

else{
 
	}

	
}
?>
