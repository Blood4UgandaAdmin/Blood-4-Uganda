<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  </head>
  <body>
    <div class="wrapper">
      <div class="row-profile-pic">
        <div class="small-12 medium-2 large-2 columns">
          <div class="circle">
            <img class="profile-picture" src="../img/menu-icon/sad.png">
          </div>
       </div>
     </div> 
      <div class="title-text">
        <div class="title">SOMETHING WENT WRONG</div>
      </div>
      
      <div class="form-container">
        <div class="form-inner">
          <form action="include/verify.php" method="POST" class="login">
           
            <div class="signup-link">Go Back To <a href="index.php">Dashboard</a></div>
          
          </form>
          
        </div>
      </div>
    </div>

   
    <?php
  // Close the database connection
mysqli_close($conn);
  ?>
  </body>
</html>
