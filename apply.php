<?php
// category
$c = $_GET['category'];

if($c == "theme")
{
    $theme = $_GET['theme'];
    setcookie("theme", $theme);
    Header("Location: settings.php");
    die();
}