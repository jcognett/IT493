<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>ToPromote Login</title>
	  <link rel = "stylesheet" type="text/css"  href= "ToPromoteFormStyleSheet.css">
   </head>
	
   <body>
      
      <h2>Enter Username and Password</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				//Here is where you change the password
               if ($_POST['username'] == 'Admin' && $_POST['password'] == '1234') {
					header("Location: gdform.php");
					die();
               }
			   if ($_POST['username'] == 'GloryDays' && $_POST['password'] == '1234') {
					header("Location: gdform.php");
					die();
			   }					
			   else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div>
      
      <div class = "container">
      
         <form
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4><?php echo $msg; ?></h4>
            <input type = "text"  
               name = "username" placeholder = "Username" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "Password" required><br/>
            <button type = "submit" 
               name = "login" class="button loginbutton">Login</button>
			<button type = "reset" class="button resetbutton">Cancel</button>
         </form>
      </div> 
      
   </body>
</html>