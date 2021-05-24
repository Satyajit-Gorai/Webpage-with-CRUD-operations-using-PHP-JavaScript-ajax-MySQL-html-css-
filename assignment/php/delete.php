<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_details";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        
      die("Connection failed: " . $conn->connect_error);
    }
    else{
        echo "Connected to the DataBase...<br>";
    }
    //reading value
    $odrid = $_POST["odr_id"];

    // database query
    $sql = "DELETE FROM User_data WHERE id= '$odrid' ";
    
    //updating data in database
    $result = $conn->query($sql);

    if($result === TRUE)
    {
      echo "Record deleted successfully...";
    }
    else
    {
        echo "Error deleting record: " . $conn->error;
    }


    $conn->close();

?>