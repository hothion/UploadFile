<?php
session_start();
$_SESSION["Username"];
$_SESSION["Password"];

echo $_SESSION["Username"];
echo "<br>";
echo $_SESSION["Password"];
?>
