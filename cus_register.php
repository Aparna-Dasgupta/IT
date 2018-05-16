<!DOCTYPE html>
<html lang="en">

<head>

  <title>SignUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    
     .active
     {
      background-color: red;
     }
     body
     {
        background-color: #99ff99;/*#D6EBC2;*/
     }    
    
  </style>
<script>
function validateform()
{ 
  var x =document.forms["myform"]["username"].value;
  var em=/.+@.+\...*/;
if(x=="") // username should not be empty
{
alert("username must be filled out");
return false;
}

 if (/^\d{10}$/.test(myform.phno.value)) //phone number validation
  {
    
	if (em.test(myform.EMail.value)) //email validation
  	{
   	 
   	 return (true);
 	 }
    
    	else
	{
	alert("You have entered an invalid email address");
   	 return (false);
	}
    

  }
 else
 {
    alert("You have entered an invalid phone number!");
    return false;
   }
       
}
</script>
</head>

<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#.php">Search for restaurant</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
 
      <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>     
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="restaurant_register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>    
     
      <li><a href="contact.html"><span class="glyphicon glyphicon-earphone"></span> ContactUs</a></li>       
    </ul>
    </div>
  </div>
</nav>

 

<div class="container" style="margin-top:70px">
    <h1 class="well">Registration</h1>
  
  <div class="row">
        <form name ="myform" onsubmit="return validateform()" action="cus_register_db.php" method="post" role="form">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label for="username">Username</label>
                <input type="text" placeholder="Enter username..."  name="username" id="username" class="form-control" required>
              </div>
              <div class="col-sm-6 form-group">
                <label for="name">Full Name</label>
                <input type="text" placeholder="Enter Name Here..." name="NAme" id="name" class="form-control" required>
              </div>
            </div>          
            
            <div class="row">
              <div class="col-sm-6 form-group">
                <label for="user_city">Place</label>
                <input type="text" id="place" name="place" placeholder="Enter Place Here.." class="form-control" required>
              </div>  
              <div class="col-sm-6 form-group">
                <label for="user_state">Country</label>
                <input type="text" id="country" name="country" placeholder="Enter Country Name Here.." class="form-control" required>
              </div>  
                
            </div>
                        
          <div class="form-group">
            <label for="mobile">Contact Number</label>
            <input type="text" name="phno" id="phno" placeholder="Enter Mobile Number Here.." class="form-control" required>
          </div>    
          <div class="form-group">
            <label for="e_id">Email Address</label>
            <input type="text" name="EMail" id="email" placeholder="Enter Email Address Here.." class="form-control" required>
          </div>  

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Decide your password...." class="form-control" required>
          </div>  
          
	  

          <!--<button type="button" class="btn btn-lg btn-info">Submit</button> -->

          <div class="col-xs-6 col-sm-6 col-md-6">
              <input type="submit" name="submit" value="SUBMIT" class="btn btn-lg btn-success btn-block">
	      
          </div>  

          </div>
        </form> 
        </div>
  </div>
</div>
</body>
</html>
