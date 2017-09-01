<?php include('check.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" media="all" />

</head>
<body>
<header>
				<h1> Sign Up</h1>
            </header>       
      <div  class="form">
    		<form  method="post" action="login.php" > 

          <?php include('errors.php'); ?>

    		<p class="contact"><label for="email">Email</label></p> 
    			<input name="Email" placeholder="example@domain.com" required="" type="text">
<br>
    			<p class="contact"><label for="password">Password </label></p> 
          <input type="password" name="Password" placeholder="･･･････" required="">  
 <br>
           <pre> <input class="button" type="submit"  name="login_user"> 	              <font size="2"> Already a member? <a href="form.php">Sign in</a></font>
            </pre>  
   </form> 
</div>      
</div>
</body>
</html>