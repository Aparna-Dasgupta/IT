<?php
include('connect.php');
    session_start();
    if(!isset($_SESSION['username']) or $_SESSION['roletable']!='cus_login')
        header('location:login.php?err=2');
    $resname = $_SESSION['resname'];
    $cuisine = $_SESSION['cuisine'];
    $query1 = "select cusername,res_review from review where resname = '$resname'";
    $res1 = mysqli_query($db, $query1) or die(mysqli_error($db));

    ?>
    <!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
  h6 { 
    color: #478530; 
    font-family: "Great Vibes", cursive; 
    font-size: 100px; 
    line-height: 100px; 
    font-weight: normal; 
    margin-bottom: 0px; 
    margin-top: 40px; 
    text-align: center; 
    text-shadow: 0 1px 1px #fff; 
  }
  p { 
    color: #7a7c7f; 
    font-size: 29px; 
    font-family: "Libre Baskerville", serif; line-height: 45px; 
    text-align: center; 
    text-shadow: 0 1px 1px #fff; 
    padding-top: 20px; 
  }
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
.tinted-image {
  background: 
    /* top, transparent red, faked with gradient */ 
    linear-gradient(
      rgba(125, 254, 76, 0.45), 
      rgba(125, 254, 76, 0.45)
    ),
    /* bottom, image */
    url(image.jpg);
    background-repeat: no-repeat;
}
</style>
</head>
<body>
<div class="tinted-image">
<ul>
  <li><a class="active" href="cus_home.php">Home</a></li>
  <li><a href="cus_details.php">Restaurant details</a></li>
  <li><a href="contact.html">Contact</a></li>
</ul>
<div style="float:right; color:black;padding:10px">
         <strong>
    <?php
        echo "Welcome, ";echo $_SESSION['username'];
         ?></strong>
    <a style="float:right; color:black;padding:5px" href="logout.php">Log out</a>
</div>
<div class="wrapper">
        <ul id="results"><!-- results appear here as list --></ul>
</div>
<form action="search.php" method="POST">
    <input type="text" name="query" />
    <input type="submit" value="Search" />
</form>
<form action="recommendation.php" method="POST">
<center><input type="submit" name="recommendations" value="Recommendations" class="btn"></center>
</form>
<h5>Review for <?php echo "$resname"; ?></h5><br />
<?php while($row=mysqli_fetch_array($res1, MYSQLI_ASSOC))
{
echo "<p>".$row['cusername']."</p><br />";
echo "<p>".$row['res_review']."</p><br />";
}
?>
</div>
</body>
</html>