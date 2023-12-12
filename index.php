<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
     .error{padding: 5px;width: 100%;text-align: center;color:#800}
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="row-profile-pic">
        <div class="small-12 medium-2 large-2 columns">
          <div class="circle">
            <img class="profile-picture" src="img/uploads/user2.png">
          </div>
       </div>
     </div> 
      <div class="title-text">
        <div class="title">HELLO, WELCOME BACK!!</div>
      </div>
      <?php if (isset($_GET['error'])) { ?>
        <div class="error"><?php echo $_GET['error']; ?></div>
		<?php } ?>
      <div class="form-container">
        <div class="form-inner">
          <form action="include/verify.php" method="POST" class="login">
              <div class="field">
                <input type="text" name="username" placeholder="Username" required>
              </div>
              <div class="field">
                <input type="password" name="password" placeholder="Password" required>
              </div>
              
              <div class="pass-link"> <a href="forgot.php">Forget Password?</a></div>
            
            <div class="field btn">
              <input type="submit" value="Continue Securely">
            </div>
            <div class="signup-link">Not yet a member? <a href="register.php">Register now</a></div>
          
          </form>
          
        </div>
      </div>
    </div>

   

  </body>
</html>
