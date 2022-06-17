<?php

    include('connecting.php');

    if (isset($_COOKIE['cookieID'])) {
        $adatok = $_COOKIE['cookieID'];
        $tasks = $_POST['napiTask'];
        //echo "A cookie sikerult! : $adatok " . "<br>";

        $sql = "INSERT INTO saved_datas(logedinName, tasks) VALUES('$adatok','$tasks')";

        if (mysqli_query($conn, $sql)){
            // success
            header("Location: NaptarForm.html");
        }
        else {
            // error
            echo 'query error: ' . mysqli_error($conn);
        }
    }
    else {

        $adatok = 0;
        echo "Sajnos nem sikerult a cookie !" . "<br>";
    }

    mysqli_close($conn);
?>