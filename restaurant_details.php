<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION['username']) or $_SESSION['roletable']!='res_login')
        header('location:login.php?err=2');
    $user = $_SESSION['username'];
include('connect.php');
$basic_query="select * from res_register where  resname = '$user'";
$res_basic = mysqli_query($db, $basic_query) or die("Failed to query the basic details table of database");

$loc_query = "select * from res_location where  resname='$user'";
$res_loc = mysqli_query($db, $loc_query) or die("Failed to query the location details table of database");

$char_query = "select * from res_characteristics where  resname='$user'";
$res_char = mysqli_query($db, $char_query) or die("Failed to query the charactistics details table of database");
?>
<html>
<head>
    <title></title>
</head>
<style type="text/css">
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #52ff33;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;x
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #ceff33;
}
</style>
<body>
<ul>
  <li><a class="active" href="res_home.php">Home</a></li>
  <li><a href="restaurant_details.php">Restaurant details</a></li>
  <li><a href="contact.html">Contact</a></li>
</ul>
<div style="float:right; color:black;padding:10px">
    <a style="float:right; color:black;padding:5px" href="logout.php">Log out</a>
</div>
<table class="table">
    <thead>
        <tr>
            <center><th><?php echo 'Restaurant basic details'; ?></th></center>
        </tr>
     </thead>
     <tbody>
                            
        <tr>
        <?php while($row=mysqli_fetch_array($res_basic)){ ?>
            <td>Email </td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <tr>
            <td>Password </td>
            <td><?php echo $row['password']; ?></td>
        </tr>
        <tr>
            <td>Restaurant name </td>
            <td><?php echo $row['resname']; ?></td>
        </tr>
        <tr>
            <td>City </td>
            <td><?php echo $row['city']; ?></td>
        </tr>
        <tr>
            <td>Restaurant owner </td>
            <td><?php echo $row['owner']; ?></td>
        </tr>
        <tr>
            <td>Phone </td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
        <tr>
            <td>Restaurant status </td>
            <td><?php echo $row['status']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<table class="table">
    <thead>
        <tr>
            <center><th><?php echo 'Restaurant location details'; ?></th></center>
        </tr>
     </thead>
     <tbody>
                            
        <tr>
        <?php while($row=mysqli_fetch_array($res_loc)){ ?>
            <td>Address </td>
            <td><?php echo $row['address']; ?></td>
        </tr>
        <tr>
            <td>ZIP Code </td>
            <td><?php echo $row['zip']; ?></td>
        </tr>
        <tr>
            <td>Country </td>
            <td><?php echo $row['country']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<table class="table">
    <thead>
        <tr>
            <center><th><?php echo 'Restaurant characteristics details'; ?></th></center>
        </tr>
     </thead>
     <tbody>
                            
        <tr>
        <?php while($row=mysqli_fetch_array($res_char)){ ?>
            <td>Alcohol </td>
            <td><?php echo $row['alcohol']; ?></td>
        </tr>
        <tr>
            <td>Seating </td>
            <td><?php echo $row['seating']; ?></td>
        </tr>
        <tr>
            <td>Payment </td>
            <td><?php echo $row['payments']; ?></td>
        </tr>
        <tr>
            <td>Cuisines </td>
            <td><?php echo $row['cuisines']; ?></td>
        </tr>
        <tr>
            <td>Tags </td>
            <td><?php echo $row['tags']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>