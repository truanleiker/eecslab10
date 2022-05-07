<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "t494l181", "kahH7eeg", "t494l181");

if ($mysqli->connect_error) {
    exit();
}

$posts_to_delete = $_POST['userName'];

$query = "SELECT * FROM Posts";

if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {

        $query = "DELETE FROM Posts WHERE post_id=\"" . $row["post_id"] . "\";";

        if ($_POST[$row["post_id"]] == true) {
            if ($mysqli->query($query)) {
                echo "<p>Deleted post " . $row["post_id"] . ".</p>";
            }
        }
    }
}

echo "<a href=\"AdminHome.html\">Go Back</a>";

$mysqli->close();
?>