<?php  
 //entry.php  
 session_start(); 
 include('../include/dbconfig.php'); 
 $id = $_GET['id'];
			$_SESSION["id"] = $id;
 if(!isset($_SESSION["id"]))  
 {  
  header("Location:../index.php");  
 } 
 ?>
<?php  
$sql = "SELECT * FROM users ";
$results = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($results)){
}
?>
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
           
            <div class="signup-link">Go Back To <a href="index.php<?php echo"?id=".$id."";?>">Dashboard</a></div>
          
          </form>
          
        </div>
      </div>
    </div>

   

  </body>
</html>
