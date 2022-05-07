<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "t494l181", "kahH7eeg", "t494l181");

if ($mysqli->connect_error) {
    exit();
}

$username = $_POST['userName'];
$content = $_POST['content'];
$user_exists = false;

$query = "SELECT user_id FROM Users";

if ($result = $mysqli->query($query)) {
    
    while ($row = $result->fetch_assoc()) {
        if ($row["user_id"] == $username) {
            $user_exists = true;
        }
    }
}

$query = "INSERT INTO Posts (content, author_id) VALUES (\"" . $content . "\", \"" . $username . "\");";

if ($user_exists) {
    if ($result = $mysqli->query($query)) {    
        echo "<p>Successfully submitted post.</p>";
    }
    else {
        echo "<p>Unsuccessful.</p>";
    }
}
else {
    echo "<p>User does not exist.</p>";
}

$mysqli->close();

echo "<a href=\"index.html\">Go Back</a>";
?>