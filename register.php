<?php
include 'rb_config.php';

if ($_SERVER["REQUEST_ METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    if ($conn->query($sql) === TRUE) {
        header("Location: login.html");
    } else {
        echo "Error: " . $sql. "<br>" . $conn->error;
    }

    $conn->close();
}

/* back end php when clicking register button
Here, the user's username, password, and email are obtained from the request  form using the Post method and 
added to the table named users in the MYSQL database. The password is hashed, which means protecting it.
If successful, redirects to the login page.
then it redirect to the login psge */

?>