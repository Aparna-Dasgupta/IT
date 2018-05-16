<?php
$db_host="localhost";
$db_user="root";
$db_password="1234";
$db_name="it";
$db = mysqli_connect($db_host, $db_user, $db_password, $db_name) or die("Error connecting database: ".mysqli_error());
?>