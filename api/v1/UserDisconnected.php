<?php
require("../../inc/db.php");
$username = $_GET['username'];

$result = $conn->query("DELETE FROM `LauncherSessions` WHERE `username` = '$username'");
?>