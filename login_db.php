<?php 
    session_start();
		$db=mysqli_connect('localhost','root','1234','it') or die('Unable to connect to MySQL server');
        $form_username=$_POST['username'];

        $_SESSION['username']=$form_username;

		$form_password=$_POST['password'];
        $table_name=$_POST['roletable'];

        $_SESSION['roletable']=$table_name;
        
if(!empty($_POST['username']))
{
$query = "SELECT * FROM $table_name where username ='$form_username' and password='$form_password'";

$result = mysqli_query($db, $query) or die("Failed to query from database. You have entered invalid details");

$row = mysqli_fetch_array($result) or die(header('location:login.php?err=1'));

if(!empty($row['username']) AND !empty($row['password']))
{
if($_SESSION['username']==$row['username'] AND $form_password == $row['password'])
{
    if(isset($table_name)&& $table_name=='res_login')
        header('location:res_home.php');
    elseif(isset($table_name)&& $table_name=='cus_login')
        header('location:cus_home.php');
}
}
}
?>