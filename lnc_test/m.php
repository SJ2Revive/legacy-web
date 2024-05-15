<?php
if(!isset($_GET['ver']))
{
    http_response_code(403);
    die();
}
$ver = $_GET['ver'];
$latest = "1.1";
if($ver != $latest)
{
    echo "YES";
    die();
} else {
    echo "NO";
    die();
}
?>