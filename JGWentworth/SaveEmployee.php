<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "taylor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
    {

     die("Connection failed: " . $conn->connect_error);
    } 

    $sql= "INSERT INTO course (firstName,lastName, number, email, address,dept, phone,tite)
        VALUES ('$_POST[courseTItle]','$_POST[size]','$_POST[meetingTime]',' $_POST[creditHours]','
            $_POST[instructor]','$_POST[location]')";
    if ($conn->query($sql)=== TRUE)
    {
    echo " New recorded added";
    echo "<br>";
    echo "<a href=\"index.php\"><input type ='button' value='Close'/></a>";
    }
    else
    {
        echo "Error:" . $sql . "<br>" . $conn->error;
     
    }
    
  $conn->close();
?>
