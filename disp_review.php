<?php
    session_start();
    if(!isset($_SESSION['username']) or $_SESSION['roletable']!='cus_login')
        header('location:login.php?err=2');
?>
<html>
<head><title>hello</title>
<style>
#txtbox{
height:42px;
width:300px;
}
</style>
</head>







<body>
	<form method="POST" action="db_review.php">
                 <div>

		   <br/><br/><fieldset><center>write your reviews:<br/><input type="text" name="write" id="txtbox"><br/>
			 submit:<input type="submit" name="submit"></center></fieldset>
                </div>
        </form>
</body>
</html>