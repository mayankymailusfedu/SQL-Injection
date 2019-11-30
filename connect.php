<?php

$user = 'root';
$pass = '';
$db = 'hardware_store';

$link = mysql_connect('localhost', $user, $pass);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
$dbstatus = mysql_select_db($db);

//$db = new mysqli('localhost', $user, $pass, $db) or die("Unbale to connect");

?>