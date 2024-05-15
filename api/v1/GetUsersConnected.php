<?php
require("../../inc/db.php");

$result = $conn->query("SELECT * FROM LauncherSessions");
echo $result->num_rows;
?>