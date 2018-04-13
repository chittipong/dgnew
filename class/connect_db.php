<?php
function connectDb(){
			//==========for localhost host================
			  $host = "localhost";
			   $dbname = "dbdg";
			   $user= "root";
			   $pw= "webdev";
			   
		//==========for SERVER host================
			 /* $host = "localhost";
			   $dbname = "dgchemi1_07092017";
			   $user= "dgchemi1_admin";
			   $pw= "dgadmin2017";*/
		  
			// Create connection
				$conn = new mysqli($host,$user,$pw,$dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				
				//change character set to utf8 -----
				if (!$conn->set_charset("utf8")) {
					printf("Error loading character set utf8: %s\n", $conn->error);
					exit();
				} else {
					//printf("Current character set: %s\n", $conn->character_set_name());
				}
				//echo "Coonnect success";
				return $conn;
}
?>