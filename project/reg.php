
<!DOCTYPE html>


<html lang="en">
 <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="reg.css" >
<head>
<title> Registration </title>
</head>
<body>
<form  method="POST" action="home.php">
  <div id="content">
   <h1>Registration</h1>
  
   <p>
            <label for="Name" class="icon-user"> <b>Full Name</b>
                <span  class="required">*</span>
            </label>
            <input type="text" placeholder="Enter name: " name="name" id="username" required="required" />
        </p>
		
		<p>
            <label for="mail" class="icon-envelope"> <b> Mail </b>
                <span class="required">*</span>
            </label>
            <input type="mail" placeholder="Enter email: " name="mail" id="Name" required="required" />
        </p>
		
		<p>
            <label for="city" class="icon-envelope"> <b> City </b>
                <span class="required">*</span>
            </label>
            <input type="text" name="city" id="Name" required="required" />
        </p>
		
		<p>
            <label for="Address" class="icon-envelope"> <b> Address </b>
                <span class="required">*</span>
            </label>
            <input type="text" placeholder="Enter address: " name="address" id="Name" required="required" />
        </p>
		
		<p>
            <label for="password" class="icon-envelope"> <b> Password </b>
                <span class="required">*</span>
            </label>
            <input type="password" placeholder="Enter password: " name="password" id="Name" required="required" />
        </p>
		
		
		<p>
            <label for="Birthday" class="icon-envelope"> <b> Birthday </b>
                <span class="required">*</span>
            </label>
             <input type="date" name="date">
             <!--<input type="submit" id="Name" required="required" >-->
        </p>
            
    <div id="create" ><p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> </div> <br> <br>
		
		<!--<div id="cancel">
		 <p class="indication"> </p>

        <input type="submit" value=" Signup" />
		 <input type="submit" value=" Cancel" /> </div> -->
		 
		<div id="sign">
		<input type="submit" name = "signupbtn" value=" Signup" />
		       <input type="submit" name = "cancelbtn" value=" Cancel" />


		</div>
 


  </div>
  
  
  </div>


</form>


</body>
</html>