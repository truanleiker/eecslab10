<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "t494l181", "kahH7eeg", "t494l181");

if ($mysqli->connect_error) {
    exit();
}

$username = $_POST['userName'];
$is_taken = false;
$query = "INSERT INTO Users (user_id) VALUES (\"" . $username . "\");";

if ($result = $mysqli->query($query)) {

    echo "<p>Successfully stored username.</p>";

}
else {
    echo "<p>Username is already in use</p>";
}
$mysqli->close();

echo "<a href=\"index.html\">Go Back</a>";
?>