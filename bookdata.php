<?php
   
        if($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'database.php';
    // $name       = $_POST["name"];
    $bname      = $_POST["bname"];
    $aname   = $_POST["aname"];
    $bookid   = $_POST["bookid"];
    $genre   = $_POST["genre"];
    $number   = $_POST["number"];
    $function = $_POST["function"];

            // $sql = "Select * from bookbase where bookid = '$bookid' AND bname = '$bname'";
            // $result = mysqli_query($conn, $sql);
            // $n = mysqli_num_rows($result);
            
 
            if($function === "update") {
                $sql="UPDATE `bookbase` SET `number`= number+$number WHERE `bookid`='$bookid';";
                $result = mysqli_query($conn, $sql);
                // session_start();
                // $_SESSION['loggedin'] = true;
                // $_SESSION['name'] = $name;
                // $_SESSION['display'] = true;
                

                if ($result === TRUE) {
                    // header("location: books.html");
                    echo "Book Updated Succesfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }


            

            } 
            elseif($function==="add"){
            
                $sql = "INSERT INTO bookbase(`bname`, `aname`, `bookid`, `genre`, `number`) 
                VALUES ('$bname', '$aname', '$bookid', '$genre', '$number')";
                $result = mysqli_query($conn, $sql);

                if ($result === TRUE) {
                    // header("location: books.html");
                    echo "New Book Added Succesfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            

            } 
            elseif($function==="delete"){
                $sql="DELETE FROM `bookbase` WHERE `bookid`='$bookid';";
                $result = mysqli_query($conn, $sql);

                if ($result === TRUE) {
                    // header("location: books.html");
                    echo "Book Deleted Succesfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }

            
        }
    
?>




