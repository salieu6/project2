<?php
 $serverName = 'localhost';
 $userName = 'root';
 $password = '';
 $dbName = 'hotel';

 $conn = new mysqli($serverName, $userName, $password, $dbName);

 if($conn->connect_error) {
     die('the connection has failed');
 }

 $userName = $_POST["userName"];
 $email = $_POST["email"];
 $password = $_POST["password"];
 $confirmPassword = $_POST["confirmPassword"];

 $sql = "INSERT INTO rooms (userName, email, password,confirmPassword)
 VALUES('$userName', '$email', '$password', '$confirmPassword' )";

 if($conn->query($sql) === TRUE){

    echo 'the values have been inserted';
    
 }

 else {
   
    echo 'the values are not inserted';
}
?>