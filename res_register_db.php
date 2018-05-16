<?php
session_start();
include ('connect.php');
$email = mysqli_real_escape_string($db, $_POST['resmail']);
$password = mysqli_real_escape_string($db, $_POST['rpassword']);
$resname = mysqli_real_escape_string($db, $_POST['resName']);
$city = mysqli_real_escape_string($db, $_POST['city']);

//$_SESSION['username'] = $resname;
//$_SESSION['roletable'] = 'res_login';

$owner = mysqli_real_escape_string($db, $_POST['resOwn']);
$phone = mysqli_real_escape_string($db, $_POST['mobile']);
$status = mysqli_real_escape_string($db, $_POST['resOpen']);

$address = mysqli_real_escape_string($db, $_POST['address']);
$zip = mysqli_real_escape_string($db, $_POST['Zip']);
$country = mysqli_real_escape_string($db, $_POST['Country']);

$alcohol = mysqli_real_escape_string($db, $_POST['alcohol']);
$seating = mysqli_real_escape_string($db, $_POST['seating']);
$payments = mysqli_real_escape_string($db, $_POST['payment']);
$cuisines = mysqli_real_escape_string($db, $_POST['cuisines']);
$tags = mysqli_real_escape_string($db, $_POST['tags']);

$basic_query="insert into res_register(email, password, resname, city, owner, phone, status, cuisines) values('$email', '$password', '$resname', '$city', '$owner', $phone, '$status', '$cuisines')";
$res_basic=mysqli_query($db, $basic_query) or die("Error querying basic info table in database".mysqli_error($db));

$loc_query = "insert into res_location(resname, address, zip, country) values('$resname', '$address', $zip, '$country')";
$res_loc = mysqli_query($db, $loc_query) or die("Error querying location table in database".mysqli_error($db));

$char_query = "insert into res_characteristics(resname, alcohol, seating, payments, cuisines, tags) values('$resname','$alcohol', '$seating', '$payments', '$cuisines', '$tags')";
$res_char = mysqli_query($db, $char_query) or die("Error querying characteristics table in database".mysqli_error($db));

$login_query = "insert into res_login(username, password) values('$resname', '$password')";
$res_login = mysqli_query($db, $login_query) or die("Error querying login table in database".mysqli_error($db));

header('location:login.php');
?>