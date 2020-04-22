<?php
// The key function (sends the email and adds the record to the MySQL Database)
if($_POST["submit"]) {

// Variables for the Delivery Page
    $name=$_POST["name"];
    $tel=$_POST["tel"];
    
// Thank you message to ensure the end user knows the informtion has been sent.
    $thankYou="<p>Thank you!</p>";

//The MySQL login details
    $servername = " *Server* ";
    $username = " *username* ";
    $password = " *server password* !";
    $dbname = " *database name* ";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 // The key line of code that populates the MySQL database
    $sql = "INSERT INTO *Table Name* (name, tel )
    VALUES ('" . $name . "', '" . $tel . "' )";

    if ($conn->query($sql) === TRUE) {
        echo " ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    }
?>
