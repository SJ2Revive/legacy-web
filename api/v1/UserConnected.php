<?php
require("../../inc/db.php");
$username = $_GET['username'];

$result = $conn->query("INSERT INTO `LauncherSessions`(`username`) VALUES ('$username')");
?>