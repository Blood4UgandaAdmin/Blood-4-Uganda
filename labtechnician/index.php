<?php  
  session_start();  
  if(!isset($_SESSION["id"]))  
  {  
   header("Location:../index.php");  
  } 
 include('../include/dbconfig.php');
 include('../include/profilepic.php');
 $id=$_SESSION['id'];
 $sql = "SELECT * FROM `labtechnician` WHERE `LTID` = '".$id."'";
 $results = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($results)){
 $uname = $row['fname']." ".$row['sname'];	
   $LTID = $row['LTID'];
   $fname = $row['fname'];		
   $email = $row['email'];		
 }	
	?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
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
        <?php  
    include('../include/profilepic.php');
?>
          <div class="topbar-image">
          <img src="<?php echo $imageUrl;?>">
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
  <a href="index.php">
    <div class="icon-details">
    <svg viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="icomoon-ignore"> </g> <path d="M16 2.672l-5.331 5.331v-2.133h-4.265v6.398l-3.755 3.755 0.754 0.754 12.597-12.597 12.597 12.597 0.754-0.754-13.351-13.351zM7.47 6.937h2.132v2.132l-2.133 2.133v-4.265z" fill="#800000"> </path> <path d="M6.404 16.533v12.795h7.464v-7.464h4.265v7.464h7.464v-12.795l-9.596-9.596-9.596 9.596zM24.53 28.262h-5.331v-7.464h-6.398v7.464h-5.331v-11.287l8.53-8.53 8.53 8.53v11.287z" fill="#800000"> </path> </g></svg>
    <div class="nav-name-col">Dashboard</div>    
    </div>
    </a>  
    <a href="notification.php">
      <div class="icon-details">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C7.71983 1.25 4.25004 4.71979 4.25004 9V9.7041C4.25004 10.401 4.04375 11.0824 3.65717 11.6622L2.50856 13.3851C1.17547 15.3848 2.19318 18.1028 4.51177 18.7351C5.26738 18.9412 6.02937 19.1155 6.79578 19.2581L6.79768 19.2632C7.56667 21.3151 9.62198 22.75 12 22.75C14.378 22.75 16.4333 21.3151 17.2023 19.2632L17.2042 19.2581C17.9706 19.1155 18.7327 18.9412 19.4883 18.7351C21.8069 18.1028 22.8246 15.3848 21.4915 13.3851L20.3429 11.6622C19.9563 11.0824 19.75 10.401 19.75 9.7041V9C19.75 4.71979 16.2802 1.25 12 1.25ZM15.3764 19.537C13.1335 19.805 10.8664 19.8049 8.62349 19.5369C9.33444 20.5585 10.571 21.25 12 21.25C13.4289 21.25 14.6655 20.5585 15.3764 19.537ZM5.75004 9C5.75004 5.54822 8.54826 2.75 12 2.75C15.4518 2.75 18.25 5.54822 18.25 9V9.7041C18.25 10.6972 18.544 11.668 19.0948 12.4943L20.2434 14.2172C21.0086 15.3649 20.4245 16.925 19.0936 17.288C14.4494 18.5546 9.5507 18.5546 4.90644 17.288C3.57561 16.925 2.99147 15.3649 3.75664 14.2172L4.90524 12.4943C5.45609 11.668 5.75004 10.6972 5.75004 9.7041V9Z" fill="#800"></path> </g></svg>
      <div class="nav-name-col">Notifications</div>    
      </div>
      </a> 
      <a href="help.php">
    <div class="icon-details">
     <svg fill="#900000"  height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 442 442" xml:space="preserve" stroke="#900000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M431.706,232.827h-1.108c-3.863-17.348-17.544-31.03-34.892-34.892v-23.229C395.706,78.373,317.333,0,221,0 S46.294,78.373,46.294,174.706v23.229c-17.348,3.863-31.03,17.544-34.892,34.892h-1.108c-5.523,0-10,4.478-10,10s4.477,10,10,10 h1.108c3.962,17.796,18.257,31.735,36.242,35.173c4.159,17.647,20.027,30.827,38.926,30.827c22.056,0,40-17.944,40-40v-72 c0-22.056-17.944-39.999-40-39.999c-7.384,0-14.303,2.019-20.246,5.523C67.589,88.128,136.482,20,221,20 c84.464,0,153.325,68.042,154.674,152.191c-5.881-3.404-12.698-5.363-19.968-5.363c-22.056,0-40,17.943-40,39.999v72 c0,22.056,17.944,40,40,40c18.918,0,34.799-13.205,38.938-30.879c6.229-1.232,12.007-3.724,17.062-7.201v44.167 c0,18.786-9.134,36.63-25.72,50.244C368.827,389.243,345.999,397,321.706,397h-64.907c-2.082-15.648-9.245-25-19.726-25h-37.5 c-19.299,0-35,15.701-35,35s15.701,35,35,35h37.5c10.482,0,17.645-9.352,19.726-25h64.907c60.654,0,110-41.31,110-92.086v-72.087 c5.523,0,10-4.478,10-10S437.229,232.827,431.706,232.827z M66.57,206.827c0-11.027,8.972-19.999,20-19.999 c11.028,0,20,8.972,20,19.999v72c0,11.028-8.972,20-20,20c-11.028,0-20-8.972-20-20c0-5.522-4.477-10-10-10 c-0.047,0-0.092,0.006-0.138,0.007c-0.047,0-0.092-0.007-0.138-0.007c-14.336,0-26-11.663-26-26c0-10.9,6.744-20.248,16.276-24.106 v25.996c0,5.522,4.477,10,10,10s10-4.478,10-10V206.827z M234.938,422h-35.366c-8.271,0-15-6.729-15-15s6.729-15,15-15h35.366 c1.049,2.163,2.489,7.271,2.489,15S235.987,419.837,234.938,422z M385.706,268.827c-5.523,0-10,4.478-10,10c0,11.028-8.972,20-20,20 s-20-8.972-20-20v-72c0-11.027,8.972-19.999,20-19.999s20,8.972,20,19.999v37.89c0,5.522,4.477,10,10,10s10-4.478,10-10V218.83 c9.387,3.926,16,13.203,16,23.997C411.706,257.164,400.042,268.827,385.706,268.827z"></path> </g></svg>
    <div class="nav-name-col">Help and Support</div>    
    </div>
    </a> 
   <a href="#" id="shareButton">
    <div class="icon-details">
      <svg fill="#900000" viewBox="-2.88 -2.88 37.76 37.76" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#900000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M27 22c-1.646 0-3.103 0.8-4.013 2.028l-13.168-6.71c0.114-0.421 0.181-0.86 0.181-1.317 0-0.572-0.101-1.119-0.277-1.63l13.242-6.426c0.909 1.244 2.375 2.056 4.035 2.056 2.762 0 5-2.239 5-5s-2.238-5-5-5-5 2.239-5 5c0 0.388 0.049 0.764 0.133 1.127l-13.432 6.518c-0.915-1.009-2.231-1.646-3.7-1.646-2.761 0-5 2.239-5 5s2.239 5 5 5c1.59 0 3.004-0.744 3.92-1.902l13.222 6.739c-0.090 0.374-0.142 0.762-0.142 1.163 0 2.761 2.238 5 5 5s5-2.239 5-5-2.238-5-5-5zM27 2c1.657 0 3 1.343 3 3s-1.343 3-3 3-3-1.343-3-3 1.343-3 3-3zM5 19c-1.657 0-3-1.343-3-3s1.343-3 3-3c1.657 0 3 1.344 3 3s-1.343 3-3 3zM27 30c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"></path> </g></svg>
    <div class="nav-name-col">Invite a Friend</div>    
    </div>
    </a> 
   <a href="editProfile.php">
    <div class="icon-details">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#900000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    <div class="nav-name-col">Account</div>    
    </div>
    </a> 
   <a href="../include/logout.php">
    <div class="icon-details">
      <svg width="212px" height="212px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 20C7.58172 20 4 16.4183 4 12C4 7.58172 7.58172 4 12 4" stroke="#900" stroke-width="1.5" stroke-linecap="round"></path> <path d="M10 12H20M20 12L17 9M20 12L17 15" stroke="#900" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    <div class="nav-name-col">Logout</div>    
    </div>
    </a>
 
</div>

<div class="content">
  <section >
    <div class="col-topbar show-tab-topbar">
      <div class="topnav">
        <a href="#news" class="hide-app">Dashboard</a>
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
          <?php  
    include('../include/profilepic.php');
?>
            <div class="topbar-image">
            <img src="<?php echo $imageUrl;?>">
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
        <div class="col-model-btn" style="height:40px;font-size:13px">
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
      <h3>Notifications</h3>
    </div>
    
    <div class="modal-body">
      <div class="modal-icon">
        <a href="#">
          <div class="icon-details">
           <div class="icon">
            <img src="../img/uploads/user-2.png" alt="">
           </div>
          <div class="message-body-notification" >
            <h3>Where does it come from?</h3>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            <p><small>12-12-2023</small></p>
          </div>    
          </div>
          </a> 
      </div>
      <div class="modal-icon">
        <a href="#">
          <div class="icon-details">
           <div class="icon">
            <img src="../img/uploads/user-2.png" alt="">
           </div>
          <div class="message-body-notification" >
            <h3>Where does it come from?</h3>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            <p><small>12-12-2023</small></p>
          </div>    
          </div>
          </a> 
      </div>

    </div>

  </div>

</div>
  </section>
  <!--section Greeting -->
  <section>
    <div class="greeting-box">
      <h3><span class="greeting-text" id="greetings">Hello,</span><span class="greeting-name"><?php echo $fname;?>...!</span></h3>
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
      <div class="col-side-one-item item-two" style="margin-top: 0;margin-bottom: 20px;">
        <div class="slideshow">
          <img class="fade" src="../img/advert-1.jpg" alt="Slide 1">
          <img class="fade" src="../img/advert-3.jpg" alt="Slide 2">
          <!-- Add more images as needed -->
        </div>
      </div>
      <div class="col-side-one-item bg-maroon hide-app">
        <div class="head-title">
            <h5 class="color-white">
              Quick Actions
            </h5>
            </div>
            <div class="col-quick-action">
              <div class="col-quick-action-details">
              <a href="appointment.php">
                  <div class="col-quick-icon">
                    <center>
                    <img src="../img/icon/calender.png">
                    </center>
    
                  </div>
                  <div class="col-quick-description">
                    Appointment
                  </div>
                </a>
                
              </div>
              <div class="col-quick-action-details">
              <a href="alert.php">
                  <div class="col-quick-icon">
                    <center>
                      <img src="../img/icon/alert.png" alt="">
                    </center>
    
                  </div>
                  <div class="col-quick-description">
                    Alerts
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
                      <img src="../img/icon/camp_2.png" alt="">
                    </center>
    
                  </div>
                  <div class="col-quick-description">
                    Campaigns
                  </div>
                </a>
                
            </div>
          </div>
            <div class="col-quick-action">
             
              
              <div class="col-quick-action-details">
                <a href="addCampRequest.php">
                  <div class="col-quick-icon">
                    <center>
                      <img src="../img/icon/tent.png" alt="">
                    </center>
    
                  </div>
                  <div class="col-quick-description">
                    Camp Request
                  </div>
                </a>
                
              </div>
              <div class="col-quick-action-details">
                <a href="#">
                  <div class="col-quick-icon">
                    <center>
                      <img src="../img/icon/chat.png" alt="">
                    </center>
    
                  </div>
                  <div class="col-quick-description">
                    Chat Room
                  </div>
                </a>
                
            </div>
          </div>
  
        </div>
      <div class="col-side-one-item item-quick-action" style="box-shadow: none;">
        <div class="head-title" style="border-bottom: none;">
          <h5 class="color-maroon">
            Quick Actions
          </h5>
          </div>
          <div class="item-quick-action-mobile">
       
      <div class="col-quick-action">
        <div class="col-quick-action-details">
        <a href="appointment.php>">
            <div class="col-quick-icon">
              <center>
                <img src="../img/menu-icon/appointment.png" alt="">
              </center>

            </div>
            <div class="col-quick-description">
              Appointment
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
    <div class="col-quick-action">
      <div class="col-quick-action-details">
        <a href="#">
          <div class="col-quick-icon">
            <center>
              <img src="../img/menu-icon/chatroom.png" alt="">
            </center>

          </div>
          <div class="col-quick-description">
            Chat Room
          </div>
        </a>
        
      </div>
      <div class="col-quick-action-details">
      <a href="addCampRequest.php">
          <div class="col-quick-icon">
            <center>
              <img src="../img/menu-icon/requestCamp.png" alt="">
            </center>

          </div>
          <div class="col-quick-description">
            CampRequest
          </div>
        </a>
        
      </div>
      <div class="col-quick-action-details">
        <a href="alert.php">
          <div class="col-quick-icon">
            <center>
              <img src="../img/menu-icon/alert.png" alt="">
            </center>

          </div>
          <div class="col-quick-description">
            Alert
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
            Previous Requests
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
          <div class="icon-details">
           <div class="icon">
            <img src="../img/menu-icon/camp.png" alt="">
           </div>
          <div class="message-body-notification camp-title" >
            <div class="head-divide">
              <div class="dive-one">
                <h3 class="ellipsis">Where does it come from?Contrary to popular belief, Lorem Ipsum is not simply random text.</h3>
              </div>
              <div class="dive-two">
                <p><small>12-12-2023</small></p>
              </div>
            </div>
            
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
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
    </div>      </div>
    
      </div>
      </div>
    </div>
  </section>
</div>
</div>

 <!--FABS-->
 <div class="fabs">
  <a href="index.php">
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