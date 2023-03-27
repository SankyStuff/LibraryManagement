<?php
    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"librarymanagement");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
    else{
        echo "Connection Successful";
    }
?>