<?php
    session_start();
    if(!isset($_SESSION['username']) or $_SESSION['roletable']!='res_login')
        header('location:login.php?err=2');
?>
<?php
	include('connect.php');
	$query = "select resname, email, city, owner, phone, status from res_register";
	$result = mysqli_query($db, $query);
  //while($row=mysqli_fetch_array($result))
   // echo $row['resname'];
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
  <li><a class="active" href="res_home.php">Home</a></li>
  <li><a href="restaurant_details.php">Restaurant details</a></li>
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
<article>
	<?php while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
	echo "<h6> ".$row['resname']." </h6><br>";
	echo "<p> Email: ".$row['email']."</p>"; 
	echo "<p>City: ".$row['city']."</p><br>";
	echo "<p>Owner: ".$row['owner']."</p><br>";
	echo "<p>Phone number: ".$row['phone']."</p>";
	echo "<p>Open status: ".$row['status']."</p><br>";
  }?>
  </article>
  </div>
</body>
</html>