<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bug_bounty";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/* database connection for all pages
Here a connection is made to the MYSQLdatabase.Your database username, password, and database name are set as follows.
If there is connection error, a "Connection failed" message will be displayed. */
?>
