<?php
    if (isset($_POST["fname"])) {

        include 'database.php';
        $fname       = $_POST["fname"];
        $regno      = $_POST["regno"];
        $userid    = $_POST["userid"];
        $mail    = $_POST["mail"];
        $pswd   = $_POST["pswd"];
        $repswd  = $_POST["repswd"];
        
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
        
            
                $sql = "INSERT INTO userbase(`fname`, `regno`, `userid`, `mail`, `pswd`, `reg_date`) 
                VALUES ('$fname', '$regno', '$userid', '$mail', '$pswd', current_timestamp())";
                $result = mysqli_query($conn, $sql);

                if ($result === TRUE) {
                    echo "New User created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            
            
                $conn->close();
            }
        


    }
    if ($result === TRUE) {
        header('Location:da2login.html');
    }
?>
