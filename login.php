<?php
	include_once('fix_mysql.inc.php');

	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "root";
	$dbName = "naptaraplikacio";
	
	mysql_connect($host, $dbUsername, $dbPassword);
	mysql_select_db($dbName);
	
	if (isset($_POST['uname'])){
		
		$uname=$_POST['uname'];
		$psw=$_POST['psw'];
		
		$sql="SELECT * FROM felhasznalok WHERE felhasznaloNev='".$uname."' AND kod='".$psw."' LIMIT 1";
		$result = mysql_query($sql);

		
		if (mysql_num_rows($result)==1) {
			#echo "Sikerult a bejelentkezes";
		}
		else {
			echo "Hibas felhasznalo/kod." . "<br>";
			exit();
		}
	}
?>