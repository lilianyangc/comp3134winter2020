<?php
error_reporting(E_ALL);
$path=isset($_GET['q']) ? $_GET['q'] : '.';
print "<pre>";
print_r(scandir($path));
print "</pre>";
?>

