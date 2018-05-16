<!DOCTYPE html>
<html lang="en">
<head>
	<title> Register to excalibur</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="wcss/bootstrap.min.css">
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
    nav
    {
      background-color: white;
    }
  </style>
  <script type="text/javascript">
         function validate()
         {
            var em = /.+@.+\...*/;
            var mob=/^\d{10}$/;
              if(document.restaurant_reg.resmail.value=="")
              {
                alert("Enter the email ID");
                document.restaurant_reg.resmail.focus();
                return false;
              }
             if(document.restaurant_reg.resmail.value.match(em))
            {
               return true;
            }
            else
            {
               alert("enter a valid email ID");
               document.restaurant_reg.resmail.focus();
               return false;
            }
            if(document.restaurant_reg.rpassword.value == "")
            {
               alert("Enter the password");
               document.restaurant_reg.rpassword.focus();
               return false;
            }
            if(document.restaurant_reg.resName.value == "")
            {
               alert("Please enter the restaurant name");
               document.restaurant_reg.resName.focus();
               return false;
            }
            if(document.restaurant_reg.resOwn.value == "")
            {
               alert("Please choose if you are the restuarant owner or not");
               document.restaurant_reg.resOwn.focus();
               return false;
            }
            if (document.restaurant_reg.mobile.value == "")
            {
              alert("Please enter a valid 10 digit number");
              document.restaurant_reg.mobile.focus();
               return false;
            }
            if (document.restaurant_reg.mobile.value.match(mob))
            {
               return true;
            }
            else
            {
               alert("Enter a valid 10 digit mobile number");
               document.restaurant_reg.mobile.focus();
               return false;
            }
            if( document.restaurant_reg.Zip.value == "" || isNaN( document.restaurant_reg.Zip.value ) || (document.restaurant_reg.Zip.value.length != 6 ))
              {
                alert( "Please provide a zip in the format ######." );
                document.restaurant_reg.Zip.focus() ;
                return false;
              }
            if( document.restaurant_reg.Country.value == "-1" )
              {
                alert( "Please provide your country!" );
                return false;
              }

           
            
            return(true);
         }
      </script>
</head>
<body bgcolor="#99ff99">
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
      <li><a href="cus_register.php"><span class="glyphicon glyphicon-user"></span>Customer Register</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>   
     
      <li><a href="contact.html"><span class="glyphicon glyphicon-earphone"></span> ContactUs</a></li>       
    </ul>
    </div>
  </div>
</nav>

 

<div class="container" style="margin-top:70px">
    <h1 class="well">Restaurant Registration</h1>
  
  <div class="row">
    <form name="restaurant_reg" method="POST" action="res_register_db.php" role="form" onsubmit="return(validate());"> 
      <fieldset>
         <legend><b>Basic Info</b></legend><br>
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label for="resmail">Enter restaurant email</label>
                <input type="text" name="resmail" placeholder="Enter restaurant email" class="form-control" /><br>
              </div>
              <div class="col-sm-6 form-group">
                <label for="rpassword">Enter the password for login</label>
                <input type="password" name="rpassword" class="form-control" /><br>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 form-group">
                <label for="resName">Restaurant name</label><br>
                <input type="text" name="resName" placeholder="Enter restaurant name" class="form-control" /><br>
                </div>  
              <div class="col-sm-6 form-group">
                <label for="city">City</label><br>
                <input type="text" name="city" id="city" class="form-control" /><br> 
              </div>  
                
            </div>
         <label for="resOwn">Are you the owner or manager of this place?</label><br>
         <input type="radio" name="resOwn" value="Yes I'm the Owner"/>I'm the owner/manager/><br>
         <input type="radio" name="resOwn" value="No I'm not the Owner"/>I'm NOT the owner/manager/><br>
         <div class="form-group">
         <label for="mobile">Phone number</label><br>
         <input type="text" name="mobile" maxlength="10" class="form-control" /><br>
         </div>
         <div class="form-group">
         <label for="resOpen">Opening status</label><br>
         <input type="radio" name="resOpen" value="Open" class="form-control"/>This place is already open<br>
         <input type="radio" name="resOpen" value="not Open" class="form-control"/>This place is opening soon<br>
         </div>
      </fieldset>
      <fieldset>
         <legend><b>Location</b></legend><br>
         <div class="row">
              <div class="col-sm-6 form-group">
         <label for="address">Address/Landmark</label><br>
         <input type="text" name="address" placeholder="Enter the address" size="60" class="form-control" /><br>
         </div>  
              <div class="col-sm-6 form-group">
         <label for="Zip">Zip code</label><br>
         <input type="text" name="Zip" class="form-control"/><br>
          </div>  
                
            </div>
         <label for="Country">Country</label><br> 
        
         <select name="Country"> 
            <option value="-1" selected>[choose yours]</option> 
            <option value="USA">USA</option> 
            <option value="UK">UK</option> 
            <option value="INDIA">INDIA</option> 
         </select> <br>
      </fieldset>
      <fieldset>
         <legend>Characteristics</legend><br>
         <label for="alcohol">Alcohol</label><br>
         <input type="radio" name="alcohol" value="serves" />Serves Alchohol
         <input type="radio" name="alcohol" value="doesntServe" />Doesn't serve alcohol<br>
         
         <label for="seating">Seating</label><br>
         <input type="radio" name="seating" value="available" />Seating available
         <input type="radio" name="seating" value="notAvailable" />No seating available<br>
         
         <label for="payment">Payments</label><br>
         <input type="radio" name="payment" value="cards">Cards and Cash
         <input type="radio" name="payment" value="cash">cash only><br>
         <label for="cuisines">Cuisines</label>
         <select name="cuisines"> 
            <option value="-1" selected>[choose yours]</option> 
            <option value="Italian">Italian</option> 
            <option value="Continental">Continental</option> 
            <option value="Indian">Indian</option> 
         </select> <br>
         <label for="tags">Tags</label>
         <select name="tags"> 
            <option value="DJ">DJ</option> 
            <option value="music">Live Music</option> 
            <option value="parking">Free parking</option> 
            <option value="veg">Pure veg</option>
         </select> <br>
         
      </fieldset>
      <input type="submit" value="Submit" /><br>
      <a href="cus_register.php">Register as a Customer</a>
      </form> 
  </div>
</div>
<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
</html>