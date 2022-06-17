<?php

	include('connecting.php');

	if (isset($_POST['uname'])) {
		
		$uname=$_POST['uname'];
		$psw=$_POST['psw'];
		
		$sql= mysqli_query($conn, "SELECT * FROM felhasznalok WHERE felhasznaloNev = '".$uname."' AND kod = '".$psw."' LIMIT 1"); // '".$uname."'

		// csekkolni a sikeres bejelentkezest
		if (!$sql || mysqli_num_rows($sql) == 0) {

			echo "Hibas felhasznalo/kod." . "<br>";
			exit();

		}
		else {

			//echo "Sikerult a bejelentkezes";
			// cookiek megadasa

			//$uname = serialize($uname);
			setcookie("cookieID", $uname, time() + 600);
			//$uname = unserialize($_COOKIE['cookieID']);
			header('Location: saveDatas.php');

		}
		mysqli_close($conn);
	}
?>