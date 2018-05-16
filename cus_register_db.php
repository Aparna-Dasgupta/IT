<?php
//session_start();
include ('connect.php');
$username = mysqli_real_escape_string($db, $_POST['username']);
$full_name = mysqli_real_escape_string($db, $_POST['NAme']);
$place = mysqli_real_escape_string($db, $_POST['place']);
$country = mysqli_real_escape_string($db, $_POST['country']);
$contact = mysqli_real_escape_string($db, $_POST['phno']);
$email = mysqli_real_escape_string($db, $_POST['EMail']);
$password = mysqli_real_escape_string($db, $_POST['password']);





$query="insert into cus_register(cusername, name, place, country, contact, email, password) values('$username', '$full_name', '$place', '$country', $contact, '$email', '$password')";
$result = mysqli_query($db, $query) or die("Error querying database".mysqli_error($db));

$login_query = "insert into cus_login(username, password) values('$username', '$password')";
$res_login = mysqli_query($db, $login_query) or die("Error querying database".mysqli_error($db));


header('location:login.php');
?>