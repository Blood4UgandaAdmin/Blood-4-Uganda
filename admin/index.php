<?php  
 session_start();  

 if(!isset($_SESSION["id"]))  
 {  
  header("Location:../index.php");  
 } 
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
  .hide-app{display:none}
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
      <a href="#news" class="hide-app">Dashboard</a>
      <a href="#contact" class="hide-desktop blood-logo" onclick="openNav()">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Menu / Menu_Alt_03"> <path id="Vector" d="M5 17H13M5 12H19M5 7H13" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
      </a>
      <div class="topnav-right">
        <a href="#" id="myBtn3">
          <div class="topbar-image">
          <img src="<?php echo $imageUrl;?>" alt="" style="border-radius:50%">
          </div>
        </a>
      </div>
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
    <div class="col-topbar show-tab-topbar">
      <div class="topnav">
        <a href="#news" >Dashboard</a>
        <a href="#contact" class="hide-desktop blood-logo" onclick="openNav()">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Menu / Menu_Alt_03"> <path id="Vector" d="M5 17H13M5 12H19M5 7H13" stroke="#900000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
        </a>
        <div class="topnav-right">
          <a href="#"  id="myBtn2">
            <div class="messages">
              
              <div class="badge">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18.7491 9.70957V9.00497C18.7491 5.13623 15.7274 2 12 2C8.27256 2 5.25087 5.13623 5.25087 9.00497V9.70957C5.25087 10.5552 5.00972 11.3818 4.5578 12.0854L3.45036 13.8095C2.43882 15.3843 3.21105 17.5249 4.97036 18.0229C9.57274 19.3257 14.4273 19.3257 19.0296 18.0229C20.789 17.5249 21.5612 15.3843 20.5496 13.8095L19.4422 12.0854C18.9903 11.3818 18.7491 10.5552 18.7491 9.70957Z" stroke="#900" stroke-width="1.5"></path> <path d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19" stroke="#900" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
              </div>
              <div class="message-count">0</div>
              </div>
          </a>
          <a href="#" id="myBtn">
            <div class="topbar-image">
            <img src="<?php echo $imageUrl;?>" alt="" style="border-radius:50%">
            </div>
          </a>
        </div>
      </div>

    </div>
    <!--pop-up-->
    <!-- The Modal 1 Account-->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
    </div>

    <center>
      <div class="model-profile">
      <img src="<?php echo $imageUrl;?>" alt="">
      </div>
    </center>
    
    <div class="modal-body">
      <h3><?php echo $uname;?></h3>
      <p><?php echo $email;?></p>
      <div class="modal-icon" style="margin-top: 10px;height:40px">
        <div class="col-model-btn" style="height:40px">
          <div class="model-btn">
            <a href="">Log Out</a>
          </div>
          <div class="model-btn model-btn-2">
            <a href="">Edit Profile</a>
          </div>
        </div>  
      </div>
    </div>

  </div>

</div>
    <!-- The Modal 2 Notification -->
<div id="myModal2" class="modal model-notification">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header modal-header-notification">
      <span class="close2">&times;</span>
      <h4 style="color:#fff">Notifications</h4>
    </div>
    
    <div class="modal-body">
    <?php
$sel=mysqli_query($conn,"SELECT * FROM notifications WHERE `currentUserID` = '".$id."'");
// Check for query success and handle errors
if (!$sel) {
    die("Query failed: " . mysqli_error($conn));
}

// Check if there are rows returned by the query
if (mysqli_num_rows($sel) > 0) {
    while ($row = mysqli_fetch_assoc($sel)) {
        ?>
            <div class="modal-icon">
              <a href="#">
                <div class="icon-details">
                 <div class="icon">
                  <img src="../img/menu-icon/camp.png" alt="">
                 </div>
                <div class="message-body-notification camp-title" >
                  <div class="head-divide">
                    <div class="dive-one" style="width:70%">
                      <h3 class="ellipsis">Notification</h3>
                    </div>
                    <div class="dive-two" >
                      <p><small><?= $row['notificationTime'];?></small></p>
                    </div>
                  </div>
                  
                  <p style="width:90%"><?= $row['messages'];?></p>
                </div>    
                </div>
                </a> 
            </div>
            <?php
    }
} else {
    echo "<div class=\"modal-icon\" style=\"width:60%;margin-left:40%;height: fit-content;\">";
    echo "<center>";
    echo "<div class=\"icon-details\" style=\"display: block;\">";
    echo "<center>";
    echo "<div class=\"icon\">";
    echo "<img src=\"../img/menu-icon/sad.png\" alt=\"\">";
    echo "</div>";
    echo "</center>";
    echo "<div class=\"message-body-notification camp-title\" > ";
        echo "<p style=\"width:100%;\">No Record Found.</p>";
    echo "</div> ";
    echo "</div> ";
    echo "</center> ";
    echo "</div>";
}
?>
    </div>

  </div>

</div>
  </section>
  <!--section Greeting -->
  <section>
    <div class="greeting-box">
      <h3><span class="greeting-text" id="greetings">Hello,</span><span class="greeting-name"><?php echo $uname;?>..!</span></h3>
      <?php
// Get the current date
$currentDate = date("Y-m-d");
$currentDate = mysqli_real_escape_string($conn, $currentDate);

// Make sure $id is defined and sanitized
$id = mysqli_real_escape_string($conn, $id);

// Execute the query
$sel = mysqli_query($conn, "SELECT * FROM admin WHERE dob = '$currentDate' AND adminID = '$id'");

// Check for query success and handle errors
if (!$sel) {
    die("Query failed: " . mysqli_error($conn));
}

// Check if there are rows returned by the query
if (mysqli_num_rows($sel) > 0) {
    while ($row = mysqli_fetch_assoc($sel)) {
        ?>
        <p class="welcome-note" style="color:green">Happy birthday! Wishing you a day filled with joy, laughter, and saving more lives</p>
        <?php
    }
} else {
    echo "<p class=\"text-grey welcome-note\">Welcome to our life-saving blood donation community...!</p>";
}

?>
    </div>
  </section>
  <!--section search section -->
  <section>
    <div class="container-search">
    <form class="nosubmit">
      <input class="nosubmit" type="search" placeholder="Search From Here...">
    </form>
    </div>
  </section>
  <!--section body -->
  <section>
    <div class="col-body">

      <div class="col-side-one" >
      <div class="col-side-one-item bg-maroon hide-app">
      <div class="head-title">
          <h5 class="color-white">
            Quick Actions
          </h5>
          </div>
          <div class="col-quick-action">
            <div class="col-quick-action-details">
              <a href="admin.php">
                <div class="col-quick-icon">
                  <center>
                    <img src="../img/icon/admin.png" alt="">
                  </center>
  
                </div>
                <div class="col-quick-description">
                  Admins
                </div>
              </a>
              
            </div>
            <div class="col-quick-action-details">
              <a href="lab.php">
                <div class="col-quick-icon">
                  <center>
                    <img src="../img/icon/lab.png" alt="">
                  </center>
  
                </div>
                <div class="col-quick-description">
                  Lab Technicians
                </div>
              </a>
              
            </div>
            <div class="col-quick-action-details">
            <a href="volunteer.php">
                <div class="col-quick-icon">
                  <center>
                    <img src="../img/icon/volunteer.png" alt="">
                  </center>
  
                </div>
                <div class="col-quick-description">
                  Volunteers
                </div>
              </a>
              
            </div>
            <div class="col-quick-action-details">
              <a href="bloodGroup.php">
                <div class="col-quick-icon">
                  <center>
                    <img src="../img/icon/donor.png" alt="">
                  </center>
  
                </div>
                <div class="col-quick-description">
                  Donors
                </div>
              </a>
              
          </div>
        </div>
          <div class="col-quick-action">
            <div class="col-quick-action-details">
              <a href="urcs.php">
                <div class="col-quick-icon">
                  <center>
                    <img src="../img/icon/redcross.png" alt="">
                  </center>
  
                </div>
                <div class="col-quick-description">
                  URCS
                </div>
              </a>
              
            </div>
            <div class="col-quick-action-details">
            <a href="facility.php">
                <div class="col-quick-icon">
                  <center>
                    <img src="../img/icon/clinic.png" alt="">
                  </center>
  
                </div>
                <div class="col-quick-description">
                  Facilities
                </div>
              </a>
              
            </div>
            <div class="col-quick-action-details">
            <a href="bloodBank.php">
                <div class="col-quick-icon">
                  <center>
                    <img src="../img/icon/bank.png" alt="">
                  </center>
  
                </div>
                <div class="col-quick-description">
                  Blood Banks
                </div>
              </a>
              
            </div>
            <div class="col-quick-action-details">
            <a href="camp.php">
                <div class="col-quick-icon">
                  <center>
                    <img src="../img/icon/tent.png" alt="">
                  </center>
  
                </div>
                <div class="col-quick-description">
                  Campaigns
                </div>
              </a>
              
          </div>
        </div>

      </div>
      <div class="col-side-one-item item-two">
        <div class="slideshow">
          <img class="fade" src="../img/advert-1.jpg" alt="Slide 1">
          <img class="fade" src="../img/advert-3.jpg" alt="Slide 2">
          <!-- Add more images as needed -->
        </div>
      </div>
      <div class="col-side-one-item item-quick-action" style="box-shadow: none;overflow-y: hidden;">
        <div class="head-title" style="border-bottom: none;">
          <h5 class="color-maroon">
            Quick Actions
          </h5>
          </div>
          <div class="item-quick-action-mobile">
        <div class="col-quick-action">
          <div class="col-quick-action-details">
          <a href="admin.php">
              <div class="col-quick-icon">
                <center>
                  <img src="../img/menu-icon/admin.png" alt="">
                </center>

              </div>
              <div class="col-quick-description">
                Admins
              </div>
            </a>
            
          </div>
          <div class="col-quick-action-details">
          <a href="lab.php">
              <div class="col-quick-icon">
                <center>
                  <img src="../img/menu-icon/doctor.png" alt="">
                </center>

              </div>
              <div class="col-quick-description">
                LabTechnicians
              </div>
            </a>
            
          </div>
          <div class="col-quick-action-details">
          <a href="volunteer.php">
              <div class="col-quick-icon">
                <center>
                  <img src="../img/menu-icon/volunteer.png" alt="">
                </center>

              </div>
              <div class="col-quick-description">
                Volunteers
              </div>
            </a>
            
          </div>
          <div class="col-quick-action-details">
          <a href="bloodGroup.php">
              <div class="col-quick-icon">
                <center>
                  <img src="../img/menu-icon/donor.png" alt="">
                </center>

              </div>
              <div class="col-quick-description">
                Donors
              </div>
            </a>
            
        </div>
        
      </div>
      <div class="col-quick-action">
        <div class="col-quick-action-details">
        <a href="urcs.php">
            <div class="col-quick-icon">
              <center>
                <img src="../img/menu-icon/redcross.png" alt="">
              </center>

            </div>
            <div class="col-quick-description">
              URCS
            </div>
          </a>
          
        </div>
        <div class="col-quick-action-details">
        <a href="facility.php">
            <div class="col-quick-icon">
              <center>
                <img src="../img/menu-icon/facility.png" alt="">
              </center>

            </div>
            <div class="col-quick-description">
              Facilities
            </div>
          </a>
          
        </div>
        <div class="col-quick-action-details">
        <a href="bloodBank.php">
            <div class="col-quick-icon">
              <center>
                <img src="../img/menu-icon/hospital.png" alt="">
              </center>

            </div>
            <div class="col-quick-description">
              Blood Banks
            </div>
          </a>
          
        </div>
        <div class="col-quick-action-details">
        <a href="camp.php">
            <div class="col-quick-icon">
              <center>
                <img src="../img/menu-icon/requestCamp.png" alt="">
              </center>

            </div>
            <div class="col-quick-description">
              Campaigns
            </div>
          </a>
          
      </div>
    </div>
  </div>
      </div>
      </div>
      <div class="col-side-two">
      <div class="col-side-one-item item-three">
        <div class="head-title" style="border-bottom: 1px #000 solid;display: flex;">
          <h5 class="color-black title-table">
            Recently Added Campaigns
          </h5>
          <p class="color-maroon right seeAll"> <a href="#">See All</a> </p>
          </div>
          <div class="modal-body col-32">
          <?php
// Get the current date
$currentDate = date("Y-m-d");
$currentDate = mysqli_real_escape_string($conn, $currentDate);

// Execute the query
$sel = mysqli_query($conn, "SELECT * FROM camps WHERE startingDate = '$currentDate'");

// Check for query success and handle errors
if (!$sel) {
    die("Query failed: " . mysqli_error($conn));
}

// Check if there are rows returned by the query
if (mysqli_num_rows($sel) > 0) {
    while ($row = mysqli_fetch_assoc($sel)) {
        ?>
            <div class="modal-icon">
              <a href="#">
                <div class="col-icon">
                <div class="icon-details">
                 <div class="icon">
                  <img src="../img/menu-icon/camp.png" alt="">
                 </div>
                <div class="message-body-notification camp-title" >
                  <div class="head-divide">
                    <div class="dive-one">
                      <h3 class="ellipsis"><?= $row['campName'];?></h3>
                    </div>
                    
                  </div>
                  
                  <p><?= $row['country'];?>, <?= $row['region'];?>, <?= $row['district'];?> <?= $row['plotNo'];?></p>
                </div>    
                </div>
                <div class="icon-arrow">
                  <div class="arrow">></div>
                </div>
                </div>
                </a> 
            </div>
            <?php
    }
} else {
    echo "<div class=\"modal-icon\" style=\"width:60%;margin-left:40%;height: fit-content;\">";
    echo "<center>";
    echo "<div class=\"icon-details\" style=\"display: block;\">";
    echo "<center>";
    echo "<div class=\"icon\">";
    echo "<img src=\"../img/menu-icon/sad.png\" alt=\"\">";
    echo "</div>";
    echo "</center>";
    echo "<div class=\"message-body-notification camp-title\" > ";
        echo "<p style=\"width:100%;\">No Record Found.</p>";
    echo "</div> ";
    echo "</div> ";
    echo "</center> ";
    echo "</div>";
}


?>
            
            
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
<script src="../js/popUp-profile.js"></script>
<script src="../js/greeting.js"></script>
<script src="../js/popUp-notification.js"></script>
<script src="../js/popUp-profilePhone.js"></script>
<script src="../js/autoSlides.js"></script>
<script src="../js/sidebar.js"></script>
<script src="../js/shareApp.js"></script>
<?php
  // Close the database connection
mysqli_close($conn);
  ?>
</body>
</html>