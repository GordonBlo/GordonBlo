<?php

	$uname = $_POST['uname'];
	$psw = $_POST['psw'];
		
	if (!empty($uname) && !empty($psw)){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "root";
		$dbName = "naptaraplikacio";
		
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
		
		if (mysqli_connect_error()){
			die('Connect Error('. mysqli_connect_errno(). ')'. mysqli_connect_error());
		}
		else {
			$SELECT = "SELECT felhasznaloNev FROM felhasznalok WHERE felhasznaloNev = ? Limit 1;";
			$INSERT = "INSERT INTO felhasznalok(felhasznaloNev, kod) VALUES (?,?);";
			
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $uname);
			$stmt->execute();
			$stmt->bind_result($uname);
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			
			if ($rnum == 0) {
				$stmt->close();
				
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ss", $uname, $psw);
				$stmt->execute();
				#var_dump($stmt->error);
				echo "A regisztracio sikerult!". "<br>";
			}
			else if ($rnum != 0) {
				echo "Valaki mar hasznalja ezt a Felhasznalo nevet". "<br>";
			}
			$stmt->close();
			$conn->close();
		}
	}
	else {
		echo "Minden kell!";
		die();
	}
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device=width, initial-scale=1.0">
<title>Naptar</title>
<link rel="stylesheet" href="cssform.css">
</head>
<body>

<div>
	<button type="back">Vissza az oldalra</button>
</div>
<div>
	<script>
		let btnBack = document.querySelector('button');

		btnBack.addEventListener('click', ()=>
		{
			window.history.back();
		});
	</script>
</div>

</body>
</html>