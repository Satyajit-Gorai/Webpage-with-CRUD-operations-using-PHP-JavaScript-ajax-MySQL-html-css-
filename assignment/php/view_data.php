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
    // database query
    $sql = "SELECT id,name,ph_no,d_odr,odr_date FROM User_data";
    echo "<b> <center>Database Output</center> </b> <br>";
    //fetching data from database
    $result = $conn->query($sql);

    if(!$result->num_rows > 0)
    {
      echo "No Records!!!";
    }
    else
    {
      while($row = $result->fetch_assoc())
      {
        echo "<br> id: ". $row["id"]. " --Name: ". $row["name"]. " --Ph no.: ". $row["ph_no"]
        . " --Daily Orders: ". $row["d_odr"]. " --Date: ". $row["odr_date"]. "<br>";
      } 
    }
    echo "<br><br>";

    $conn->close();

?>