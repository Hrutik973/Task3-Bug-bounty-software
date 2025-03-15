<?php
session_start();
include 'rb_config.php';

if($_Server["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username= '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            header("location: submit_bug.html");
        } else {
            echo "Invalid credentials";
        }
    } else {
        echo "Invalid credentials";
    }

    $conn->close();
}

/* when click login button this is backend for it 
Function: This allows user s to register.
The username, password, and email are added to the users table in the database
 Users will be able to submit bugsin the system....
 then it redirect to submit_bug */
?>