<?php
    
    // Create connection
    $conn = new mysqli("sql11.freesqldatabase.com", "sql11472573", "wI8nlwGnst");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if (isset($_POST["addInvoice"]))
    {
        
        mysqli_query($conn, $sql);
        $invoiceId = mysqli_insert_id($conn);
 
        for ($a = 0; $a < count($_POST["itemName"]); $a++)
        {
            $sql = "INSERT INTO items (itemName, itemQuantity, itemPrice) VALUES ('" . $_POST["itemName"][$a] . "', '" . $_POST["itemQuantity"][$a] . $_POST["itemPrice"][$a] ."')";
            mysqli_query($conn, $sql);
        }
 
        echo "<p>Invoice has been added.</p>";
    }
 
?>