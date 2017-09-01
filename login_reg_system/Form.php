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
    		<form  method="post" action="form.php" > 
    			
          <p class="contact"><label > First Name</label></p> 
    			<input name="FirstName" type="text" required=""> 

          <p class="contact"><label for="name"> Last Name</label></p> 
          <input name="LastName" type="text" required=""> 
    			 
    			<p class="contact"><label for="email">Email</label></p> 
    			<input name="Email" placeholder="example@domain.com" required="" type="email"> 	 
               
          <p class="contact"><label for="password">Create a password</label></p> 
    			<input type="password"  placeholder="･･･････"  name="Password_1" required=""> 
               
          <p class="contact"><label for="password">Confirm password </label></p> 
          <input type="password"  placeholder="･･･････"  name="Password_2" required="">      
               

               <fieldset>
                 <label>Birthday</label>
                  <label class="month"> 
                  <select class="select-style" name="BirthMonth">
                  <option value="">Month</option>
                  <option value="01">January</option>
                  <option value="02">February</option>
                  <option value="03" >March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12" >December</option>
                  </label>
                 </select>    
                <label><input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" required=""></label>
                <label> <input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" required=""></label>
              </fieldset>
  
            <select class="select-style gender" name="gender">
            <option value="select">i am..</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            </select><br><br>
            
            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input name="MobileNo" placeholder="phone number" required="" type="text"> 
            <br>
            <pre> <input class="button" type="submit"  name="reg_user">                <font size="2"> Already a member? <a href="login.php">Sign in</a></font>
            </pre>
   </form> 
</div>      
</div>
</body>
</html>
