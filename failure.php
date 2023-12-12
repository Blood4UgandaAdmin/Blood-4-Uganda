
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      html,body{display: grid;height: 100%;width: 100%;place-items: center;background-image:linear-gradient(0deg, rgba(255, 254, 254, 0.664), rgba(255, 254, 254, 0.664)), url("img/bg.jpg");background-color: rgb(190, 55, 55);background-repeat: no-repeat;background-size: cover;}
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="row-profile-pic">
        <div class="small-12 medium-2 large-2 columns">
          <div class="circle">
            <img class="profile-picture" src="img/menu-icon/sad.png">
          </div>
       </div>
     </div> 
      <div class="title-text">
        <div class="title">SOMETHING WENT WRONG</div>
      </div>
      
      <div class="form-container">
        <div class="form-inner">
          <form action="include/verify.php" method="POST" class="login">
           
            <div class="signup-link">Please Try <a href="register.php">Again</a></div>
          
          </form>
          
        </div>
      </div>
    </div>

   

  </body>
</html>
