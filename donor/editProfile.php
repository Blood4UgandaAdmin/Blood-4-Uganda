<?php  
 session_start();  

include('../include/dbconfig.php');
include('../include/profilepic.php');
$id=$_SESSION['id'];
$sql = "SELECT * FROM `admin` WHERE `adminID` = '".$id."'";
$results = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($results)){
$uname = $row['fname']." ".$row['sname'];	
$admin_id = $row['adminID'];
$fname = $row['fname'];		
$email = $row['email'];	
 	
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<link rel="icon" href="../img/logo-2.png" type="image/icon type">
<link rel="stylesheet" href="../css/style.css">
<script>
  $(document).ready(function() {
  setTimeout(function() {
    $('#container').addClass('loaded');
    // Once the container has finished, the scroll appears
    if ($('#container').hasClass('loaded')) {
      // It is so that once the container is gone, the entire preloader section is deleted
      $('#preloader').delay(500).queue(function() {
        $(this).remove();
      });}
  }, 3000);});

</script>
<style>

  .error{padding: 5px;width: 100%;text-align: center;color:#800}
  .side-col{width: 100%;height: 100%;display: flex;}
.side-one{width: 40%;height: fit-content;}
.account-col{width: 90%;height: fit-content;}.account-content{padding: 20px;}
.account-header{width: 100%;height: 50px;}.account-profile{width: 200px;height: 200px;border-radius: 50px;}
.account-body .account-icon{width: 100%;height: 40px;} .account-btn{width: 60%;text-align: center;height: 100%;margin: 0 20% 0 20%;border-radius: 5px;margin-top: -30px;}
.account-btn input{color: #fff;background-color: #800;cursor: pointer;}
.account-profile img{width: 190px;height:190px;border-radius: 50px;}
.profile-pic {
  color: transparent;
  transition: all 0.3s ease;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  transition: all 0.3s ease;
}
.profile-pic input {
  display: none;
}
.profile-pic img {
  position: absolute;
  object-fit: cover;
  width: 165px;
  height: 165px;
  box-shadow: 0 0 10px 0 rgba(255, 255, 255, 0.35);
  border-radius: 100px;
  z-index: 0;
}
.profile-pic .-label {
  cursor: pointer;
  height: 165px;
  width: 165px;
}
.profile-pic:hover .-label {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgba(0, 0, 0, 0.8);
  z-index: 10000;
  color: #fafafa;
  transition: background-color 0.2s ease-in-out;
  border-radius: 100px;
  margin-bottom: 0;
}
.profile-pic span {
  display: inline-flex;
  padding: 0.2em;
  height: 2em;
}
.side-two{width: 60%;height: fit-content;padding: 15px;}
    .column-password{
  width: 90%;
  height: fit-content;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.233);
}
@media only screen and (max-width:500px) {
    .column-password{
  width: 100%;
  height: fit-content;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.233);
}
.account-body{
    margin-left: -10%;
} 
.account-col{
    margin-left: 5%;
}

}
@media only screen and (max-width: 991px) and (min-width: 551px) {
    .column-password{
  width: 100%;
  height: fit-content;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.233);
}
.account-body{
    margin-left: -10%;
} 
.account-col{
    margin-left: 5%;
}  
}
</style>
</head>
<body>
  	<!-- Preloader -->
		<div id="preloader">
			<div id="container" class="container-preloader">
				<div class="animation-preloader">
					<div class="spinner"></div>
					<div class="txt-loading">
						<span preloader-text="L" class="characters">L</span>
						
						<span preloader-text="O" class="characters">O</span>
						
						<span preloader-text="A" class="characters">A</span>
						
						<span preloader-text="D" class="characters">D</span>
						
						<span preloader-text="I" class="characters">I</span>
						
						<span preloader-text="N" class="characters">N</span>
						
						<span preloader-text="G" class="characters">G</span>
						
					</div>
				</div>	
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>
			</div>
		</div>	
<div class="home">
  <div class="col-topbar nav-mobile hide-desktop">
    <div class="topnav">
      <a href="#news" class="topAction-mobile">
        <span class="back-btn"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#fff" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#fff" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg></span> 
      </a>
      <a href="#news" class="topAction-mobile">
     <span class="topDetails">Edit Profile</span> 
      </a>
    </div>

  </div>
  <div class="sidebar" id="mySidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="sidebar-col-top">
    <img src="../img/logo.png">
  </div>
  <?php
  include('sidebar.php')
  ?>
</div>

<div class="content">
  <section >
    <div class="col-topbar hide-app">
      <div class="topnav">
        <a href="#news" class="topAction" style="margin-top: -5px;">
          <span class="back-btn"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg></span> 
        </a>
        <a href="#news" class="topAction" style="margin-top: -10px;">
       <span class="topDetails">Edit Profile</span> 
        </a>
      </div>

    </div>
    
  </section>

  <!--section body -->
  <section class="displayApp">
    <div class="col-body">
      <div class="col-table">
        <div class="side-col">
          <div class="side-one ">
            <form method="post" enctype="multipart/form-data" action="../include/uploadImage.php<?php echo"?id=".$id."";?> ">
            <div class="account-col">
              <!-- Modal content -->
              <div class="account-content">
                <div class="account-header">
                </div>
                <center>
                  <div class="account-profile">
                    <div class="profile-pic">
                      <label class="-label" for="file">
                        <span class="glyphicon glyphicon-camera"></span>
                        <span>Change</span>
                      </label>
                      <input id="file" type="file" name="profilePicture" accept="png,gif,jpeg,jpg" onchange="loadFile(event)"/>
                      <img src="<?php echo $imageUrl;?>" id="output" width="200"  />
                    </div>
                  </div>
                </center>
                <div class="account-body">
                  <div class="account-icon">
                      <div class="account-btn" >
                        <input type="submit" name="submit" value="Upload Image">
                      </div> 
                  </div>
                </div>
              </div>
            </div>
          </form>
          </div>
          <div class="side-two">
            <div class="container container-form">
              <form action="../include/changePassword.php<?php echo"?id=".$id."";?>" method="post" id="form">
                  <div class="column-password">
                      <div class="field username">
                          <label for="Password_">Old Password</label>
                          <input type="password" name="oldPassword" id="Username_"  required>
                      </div>
                      <?php if (isset($_GET['olderror'])) { ?>
                      <div class="error"><?php echo $_GET['olderror']; ?></div>
		                  <?php } ?>
                      <div class="field password">
                          <label for="Password_">New Password</label>
                          <input type="password" name="password" id="Password_" required>
                      </div>
                      <div class="field password">
                          <label for="Password_">Confirm Password</label>
                          <input type="password" name="cpassword" id="Password_" required>
                      </div>
                      <?php if (isset($_GET['error'])) { ?>
        <div class="error"><?php echo $_GET['error']; ?></div>
		<?php } ?>
                      <div class="form-btn-column">
                        <input type="reset" value="Reset" class="reset">
                        <input type="submit" value="Update" class="register">
                      </div>
                  </div>
                 
                 
                  
                  
                 
                  
              </form>
          </div>
          </div>
        </div>
        
        

      </div>


    </div>

  </section>
  
</div>
</div>
 <!--FABS-->
 <div class="fabs">
  <a href="index.php<?php echo"?id=".$id."";?>">
<div class="plus">
  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M22 22L2 22" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M2 11L6.06296 7.74968M22 11L13.8741 4.49931C12.7784 3.62279 11.2216 3.62279 10.1259 4.49931L9.34398 5.12486" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15.5 5.5V3.5C15.5 3.22386 15.7239 3 16 3H18.5C18.7761 3 19 3.22386 19 3.5V8.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M4 22V9.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M20 9.5V13.5M20 22V17.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15 22V17C15 15.5858 15 14.8787 14.5607 14.4393C14.1213 14 13.4142 14 12 14C10.5858 14 9.87868 14 9.43934 14.4393M9 22V17" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 9.5C14 10.6046 13.1046 11.5 12 11.5C10.8954 11.5 10 10.6046 10 9.5C10 8.39543 10.8954 7.5 12 7.5C13.1046 7.5 14 8.39543 14 9.5Z" stroke="#fff" stroke-width="1.5"></path> </g></svg>
</div>
</a>
</div>
<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.7.0.js'></script>
<!-- Data Table JS -->
<script src='https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
<script src='https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js'></script>
<script src="../js/popUp-profile.js"></script>
<script src="../js/greeting.js"></script>
<script src="../js/popUp-notification.js"></script>
<script src="../js/popUp-profilePhone.js"></script>
<script src="../js/autoSlides.js"></script>
<script src="../js/sidebar.js"></script>
<script src="../js/sortingTable.js"></script>
<script src="../js/uploadImage.js"></script>
<script src="../js/shareApp.js"></script>
<?php
  // Close the database connection
mysqli_close($conn);
  ?>
</body>
</html>