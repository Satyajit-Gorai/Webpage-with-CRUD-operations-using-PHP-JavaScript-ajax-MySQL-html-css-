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
    //reading values
    $odrid = $_POST["odr_id"];
    $upname =  $_POST["uname"];
    $ph_num=  $_POST["ph_num"];
    $order =  $_POST["orders"];
    $date = $_POST["date"];

    // database query
    $sql = "UPDATE User_data SET name='$upname', ph_no= '$ph_num',d_odr= '$order', 
            odr_date= '$date' WHERE id= '$odrid' ";
    
    //updating data in database
    $result = $conn->query($sql);

    if($result === TRUE)
    {
      echo "Record updated successfully...";
    }
    else
    {
        echo "Error updating record: " . $conn->error;
    }


    $conn->close();

?>