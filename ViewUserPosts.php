<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "t494l181", "kahH7eeg", "t494l181");

if ($mysqli->connect_error) {
    exit();
}

$username = $_POST['userName'];

$query = "SELECT content FROM Posts WHERE author_id=\"" . $username . "\";";

if ($result = $mysqli->query($query)) {

    echo "<table>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["content"] . "</td></tr>";
    }

    echo "</table>";
}

$mysqli->close();

echo "<a href=\"ViewUserPosts.html\">Go Back</a>";
?>