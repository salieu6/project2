
<?php
     $serverName = 'localhost';
     $userName = 'root';
     $password = '';
     $dbName = 'hotel';
    
     $conn = new mysqli($serverName, $userName, $password, $dbName);
    
     if($conn->connect_error) {
         die('the connection has failed');
     }

     $email = $_POST["email"];
     $password = $_POST["password"];

     $sql = mysqli_query($conn, "SELECT count(*) as total from rooms WHERE email='".$email."' and
     password='".$password."' ");

     $row = mysqli_fetch_array($sql);

     if($row["total"] > 0) {
        ?>
        <h2>WELCOME TO THE MOST LUXURIOUS HOTEL </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit distinctio rem adipisci.
             Quae voluptas obcaecati maiores in ad iure, sed eligendi magni at quisquam harum facere 
            aliquam earum dolore aliquid.</p>
        <?php
     }

     else{
         ?>
         <script>
             alert("you dont have an account. Please creat an account to have access.")
         </script>
         <?php
     }
     
?>