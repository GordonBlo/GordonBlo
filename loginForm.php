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

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calendar</title>
    <link rel="stylesheet" href="cssform.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<style>
</style>
<body>

<div class="container">
      <div class="calendar">
        <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date">
            <h1></h1>
            <p></p>
          </div>
          <i class="fas fa-angle-right next"></i>
        </div>
        <div class="weekdays">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div class="days">
		<div class="prev-date">26</div>
			<div class="prev-date">27</div>
			<div class="prev-date">28</div>
			<div class="prev-date">29</div>
			<div class="prev-date">30</div>
			<div>1</div>
			<div>2</div>
			<div>3</div>
			<div>4</div>
			<div>5</div>
			<div>6</div>
			<div>7</div>
			<div>8</div>
			<div>9</div>
			<div>10</div>
			<div>11</div>
			<div>12</div>
			<div>13</div>
			<div>14</div>
			<div>15</div>
			<div>16</div>
			<div>17</div>
			<div>18</div>
			<div>19</div>
			<div>20</div>
			<div>21</div>
			<div>22</div>
			<div>23</div>
			<div>24</div>
			<div>25</div>
			<div>26</div>
			<div>27</div>
			<div class="today">28</div>
			<div>29</div>
			<div>30</div>
			<div>31</div>
			<div class="next-date">1</div>
			<div class="next-date">2</div>
			<div class="next-date">3</div>
			<div class="next-date">4</div>
			<div class="next-date">5</div>
			<div class="next-date">6</div>
		</div>
      </div>
    </div>

    <script src="javascrift.js"></script>

</body>
</html>