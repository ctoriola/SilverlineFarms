<?php

    // Create connection
    $conn = new mysqli("sql11.freesqldatabase.com", "sql11472573", "wI8nlwGnst");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM invoice"; //You don't need a ; like you do in SQL
    $result = mysql_query($query);

    echo "<table>"; // start a table tag in the HTML

    while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
    echo "<tr><td>" . htmlspecialchars($row['name']) . "</td><td>" . htmlspecialchars($row['age']) . "</td></tr>";  //$row['index'] the index here is a field name
    }

    echo "</table>"; //Close the table in HTML

    mysql_close(); //Make sure to close out the database connection
?>