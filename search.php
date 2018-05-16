<?php
    include('connect.php');
    session_start();
    if(!isset($_SESSION['username']) or $_SESSION['roletable']!='cus_login')
        header('location:login.php?err=2');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
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

.btn {
  background: #8b0000;
  background-image: -webkit-linear-gradient(top, #8b0000, #8b0000);
  background-image: -moz-linear-gradient(top, #8b0000, #8b0000);
  background-image: -ms-linear-gradient(top, #8b0000, #8b0000);
  background-image: -o-linear-gradient(top, #8b0000, #8b0000);
  background-image: linear-gradient(to bottom, #8b0000, #8b0000);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  -webkit-box-shadow: 4px 4px 4px #666666;
  -moz-box-shadow: 4px 4px 4px #666666;
  box-shadow: 4px 4px 4px #666666;
  font-family: Courier New;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-align: center;
  text-decoration: none;
}

.btn:hover {
  background: #dc143c;
  background-image: -webkit-linear-gradient(top, #dc143c, #dc143c);
  background-image: -moz-linear-gradient(top, #dc143c, #dc143c);
  background-image: -ms-linear-gradient(top, #dc143c, #dc143c);
  background-image: -o-linear-gradient(top, #dc143c, #dc143c);
  background-image: linear-gradient(to bottom, #dc143c, #dc143c);
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
  <li><a href="cus_details.php">Customer details</a></li>
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
<?php
    $query = $_POST['query']; 
    // gets value sent over search form
     
    $min_length = 5;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        // makes sure nobody uses SQL injection
         
        $result = mysqli_query($db,"SELECT * FROM res_characteristics
            WHERE (`resname` LIKE '%".$query."%') OR (`cuisines` LIKE '%".$query."%')") or die(mysqli_error($db));
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($result) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($result)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3><a href='display_search.php?selresname=".$results['resname']."&selcuisine=".$results['cuisines']."'>".$results['resname']."</a></h3>".$results['cuisines']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>
</div>
</body>
</html>