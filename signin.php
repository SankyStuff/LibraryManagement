<?php

    $boolean = false;
    
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'database.php';
            // $name       = $_POST["name"];
            $userid      = $_POST["userid"];
            $pswd   = $_POST["pswd"];

            $sql = "Select * from userbase where userid = '$userid' AND pswd = '$pswd'";
            $result = mysqli_query($conn, $sql);
            $n = mysqli_num_rows($result);
            $sql = "Select * from admin where userid = '$userid' AND pswd = '$pswd'";
            $result = mysqli_query($conn, $sql);
            $c = mysqli_num_rows($result);
 
            if($n == 1) {
                $boolean = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['userid'] = $userid;
                $_SESSION['display'] = true;
                header("location: mainpage.html");

            

            } 
            elseif($c == 1) {
            
                $boolean = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['name'] = $name;
                $_SESSION['display'] = true;
                header("location: books.html");

            

            } 
            else {
                echo "         Invalid User-ID or password";
                $_SESSION['display'] = false;
            }
        }
    
?>