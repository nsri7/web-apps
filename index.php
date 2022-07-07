<?php
   ob_start();
   session_start();
?>

<html lang = "en">
   
   <head>
      <title>ZDResearch - Login</title>
   </head>
	
   <body>
      
      <h2>Enter Username and Password</h2> 
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == 'password') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'admin';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>

      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" 
               name = "username" required autofocus></br>
            <input type = "password" 
               name = "password" required>
            <button type = "submit" 
               name = "login">Login</button>
         </form>
			
         Logout <a href = "logout.php" tite = "Logout">.
         
      </div> 
      
   </body>
</html>
