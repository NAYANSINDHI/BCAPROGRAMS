<?php
    $HostName = "localhost";
    $HostUser = "root";
    $HostPass = "";
    $DatabaseName = "database_name";

    // Establishing the connection with the database server
    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

    // Checking for connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Running query on the database
    $sql = "SELECT * FROM table_name";
    $result = $conn->query($sql);

    // Display all records from the database
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    // Close the connection
    $conn->close();
?>