<?php
session_start();
include 'rb_config.php';

if (!isset($_SESSSION['user_id'])) {
    header("Location: login.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $severity = $_POST['severity'];
    $user_id = $_SESSION['user_id']; // Get the logged-in user's ID

    $sql = "INSERT INTO bugs (title, description, severity, status, user_id) VALUES ('$title', '$description', '$severity','$user_id')";
    if ($conn->query($sql) === TRUE) {
        header("Location: view_bugs.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


/*backend for submit bug button
Function: This allows users to submit bugs.
 After the user logs in with theior username and password, they will be able to submit bugs.
The title, description, severity and user ID of the bugs are added to the bugs table in the database.
after click submit bug button redirect to view bug */
?>