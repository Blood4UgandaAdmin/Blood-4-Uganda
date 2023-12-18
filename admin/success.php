<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
.form-inner form .pass-link{margin-top: 5px;margin-left: 10px;}
.form-inner form .signup-link{text-align: center;margin-top: 20px;}
.form-inner form .pass-link a,
.form-inner form .signup-link a{color: #ff0000;text-decoration: none;text-decoration: none;outline: none;}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{text-decoration: none;}
form .btn{height: 50px;width: 100%;border-radius: 5px;position: relative;overflow: hidden;background-color: #ff0000;}
form .btn input[type="submit"]{ z-index: 1;position: relative;background: none;border: none;color: #fff;padding-left: 0;border-radius: 5px;font-size: 14px;font-weight: 500;cursor: pointer;}
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="row-profile-pic">
        <div class="small-12 medium-2 large-2 columns">
          <div class="circle">
            <img class="profile-picture" src="../img/menu-icon/tick.png">
          </div>
       </div>
     </div> 
      <div class="title-text">
        <div class="title">SUBMITTED SUCCESSFULLY</div>
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
