<?php
include('connect.php');
    session_start();
    if(!isset($_SESSION['username']) or $_SESSION['roletable']!='cus_login')
       header('location:login.php?err=2');
    $username = $_SESSION['username'];
    $resname = $_SESSION['resname'];
    $cuisine = $_SESSION['cuisine'];
    $review = $_POST['write'];

$query = "insert into review (resname, cusername, rcuisine, res_review) values ('$resname', '$username', '$cuisine', '$review')";
$res=mysqli_query($db, $query) or die(mysqli_error($db));
header('Location: disp_allreviews.php');
?>