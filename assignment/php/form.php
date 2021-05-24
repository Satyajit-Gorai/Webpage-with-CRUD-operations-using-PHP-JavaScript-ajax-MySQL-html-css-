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
        echo "Working";
    }
    // form value
    $uname =  $_POST["name"];
    $ph_num=  $_POST["ph_num"];
    $order =  $_POST["orders"];
    $date = $_POST["date"];

    $sql = "INSERT INTO User_data (name, ph_no, d_odr, odr_date)
    VALUES ('$uname', '$ph_num', '$order','$date')";

    //$sql1 = "SELECT id FROM User_data ORDER BY id DESC LIMIT 1";
    //$result = $conn->query($sql1);

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully...<br>";
      //echo $result;
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>