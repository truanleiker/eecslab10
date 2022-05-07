<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "t494l181", "kahH7eeg", "t494l181");

if ($mysqli->connect_error) {
    exit();
}

$query = "SELECT user_id FROM Users";

if ($result = $mysqli->query($query)) {
    
    echo "<table>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["user_id"] . "</td></tr>";
    }

    echo "</table>";
}

$mysqli->close();

echo "<a href=\"AdminHome.html\">Go Back</a>";
?>