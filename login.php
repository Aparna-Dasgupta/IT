<html>
<head>
    <title>Login page</title>
    <style type="text/css">
        html {
            height: 100%;
        }
        body {
            font-family: 'Lucida Grande', sans-serif, arial;
            font-size: 14px;
            font-weight: 400;
            color: #4233ff;
            background-image: url('dining.jpg');
            background-repeat: no-repeat;
            height: 100%;
        }
        .login {
            position: relative;
            margin: 0 auto;
            padding: 20px 20px 20px;
            width: 310px;
            background-color: white;
            border-radius: 3px;
        }
        .container {
            margin: 80px auto;
            width: 640px;
        }
        p { margin: 20px 0 0; }
        h1 {
            margin: -20px -20px 21px;
            line-height: 40px;
            font-size: 15px;
            font-weight: bold;
            color: #298d03;
            text-align: center;
            text-shadow: 0 1px white;
            background: #f3f3f3;
            border-bottom: 1px solid #cfcfcf;
            border-radius: 3px 3px 0 0;
        }
        input[type=text], input[type=password] { width: 278px; }
        input {
            position: relative;
            bottom: 1px;
            margin-right: 4px;
            font-family: 'Lucida Grande', sans-serif, arial, verdana;
            font-size: 14px;
            vertical-align: middle;
    }
    input[type=text], input[type=password] {
        margin: 5px;
        padding: 0 10px;
        width: 200px;
        height: 34px;
        color: #4b6b3f;
        background: white;
        border: 1px solid;
        border-color: #c4c4c4 #d1d1d1 #d4d4d4;
        border-radius: 2px;
        outline: 5px solid #eff4f7;
    }
        input[type=submit] {
            padding: 0 18px;
            height: 29px;
            font-size: 12px;
            font-weight: bold;
            color: #43a71d;
            text-shadow: 0 1px #43dc09;
            background: yellow;
            border: 1px solid;
            border-color: #b4ccce #b3c0c8 #9eb9c2;
            border-radius: 16px;
            outline: 0;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: transparent;
        }
        li { 
            float: left;
        }
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

li a:hover {
    background-color: #a3b09e;
    </style>
    <script type="text/javascript">
            function validate()
            {
                var em=/.+@.+\...*/;
                if(document.login_form.username.value=="")
                {
                    alert("Please enter the username");
                    document.login_form.username.focus();
                    return false;
                }
                
                if(document.login_form.password.value=="")
                {
                    alert("Enter the password");
                    document.login_form.password.focus();
                    return false;
                }
                return(true);
            }
        </script>
</head>
<body>
    <ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="#about.html">About</a></li>
</ul>
    <section class="container">
    <div class="login">
      <h1>Login to Web App</h1>
      <form method="post" action="login_db.php" name="login_form" onsubmit="return(validate());">
        <select name='roletable'>
        <optgroup label="Login as:">
        <option value='res_login'>Restaurant</option>
        <option value='cus_login'>Customer</option>
        </optgroup>
        </select><br>
        <p><input type="text" name="username" value="" placeholder="Enter the username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
        <?php   
        $errors=array(1=>"Invalid username and password, try again.",2=>"Please login to access this area");
        $error_id=isset($_GET['err'])?(int)$_GET['err']:0;
        if($error_id==1){
        echo "<p>";
        echo "$errors[$error_id]";
        echo "</p>";
        }
        elseif($error_id==2){
        echo "<p>$errors[$error_id]</p>";
        }
        ?>
      </form>
    </div>
    </section>
        
                        
            </body>
</html>