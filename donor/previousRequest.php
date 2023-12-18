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
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<link rel="icon" href="../img/logo-2.png" type="image/icon type">
<link rel="stylesheet" href="../css/style.css">
<!-- Bootstrap 5 CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
<style>
   /* For mobile phones: */
   @media only screen and (max-width:500px) {
    .hide-navi{
        display: none;
      }
   }
  </style>
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
      <a href="index.php<?php echo "?id=".$id."";?>" class="topAction-mobile">
        <span class="back-btn"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#fff" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#fff" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg></span> 
      </a>
      <a href="#news" class="topAction-mobile">
     <span class="topDetails">Previous Camp Request </span> 
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
    <div class="col-topbar show-tab hide-navi">
      <div class="topnav">
        <a href="index.php<?php echo "?id=".$id."";?>" class="show-tab topAction" style="margin-top: -5px;">
          <span class="back-btn"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg></span> 
        </a>
        <a href="#news" class="show-tab topAction" style="margin-top: -10px;">
       <span class="topDetails">Previous Requests</span> 
        </a>
      </div>

    </div>
    
  </section>

  <!--section body -->
  <section>
    <div class="col-body">
      <div class="col-table hide-app">
        <table id="example" class="table table-striped" style="width:100%">
          <thead>
              <tr>
                  <th>Camp Name</th>
                  <th>Starting On</th>
                  <th>Ending On</th>
                  <th>Expected TurnUp</th>
                  <th>Address</th>
                  <th>View</th>
              </tr>
          </thead>
          <tbody>
          <?php
	$sel=mysqli_query($conn,"select * FROM requestcamp");
	while($row=mysqli_fetch_assoc($sel))
  
	{
   

		?> 
            
              <tr>
                  <td><?= $row['campName'];?></td>
                  <td><?= $row['startDate'];?></td>
                  <td><?= $row['endDate'];?></td>
                  <td><?= $row['turnUp'];?></td>
                  <td><?= $row['country'];?>, <?= $row['regions'];?>, <?= $row['district'];?> <?= $row['plotNo'];?></td>
                  <td>
                    <div class="actionCol">
                    <a href="#" class="actionIcon" id="myBtn">
                      <svg viewBox="-7.68 -7.68 39.36 39.36" width="30px" height="30px" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-7.68" y="-7.68" width="39.36" height="39.36" rx="19.68" fill="#888" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="1" stroke="#ff0" stroke-width="2"></circle> <path d="M18.2265 11.3805C18.3552 11.634 18.4195 11.7607 18.4195 12C18.4195 12.2393 18.3552 12.366 18.2265 12.6195C17.6001 13.8533 15.812 16.5 12 16.5C8.18799 16.5 6.39992 13.8533 5.77348 12.6195C5.64481 12.366 5.58048 12.2393 5.58048 12C5.58048 11.7607 5.64481 11.634 5.77348 11.3805C6.39992 10.1467 8.18799 7.5 12 7.5C15.812 7.5 17.6001 10.1467 18.2265 11.3805Z" stroke="#ff0" stroke-width="2"></path> <path d="M17 4H17.2C18.9913 4 19.887 4 20.4435 4.5565C21 5.11299 21 6.00866 21 7.8V8M17 20H17.2C18.9913 20 19.887 20 20.4435 19.4435C21 18.887 21 17.9913 21 16.2V16M7 4H6.8C5.00866 4 4.11299 4 3.5565 4.5565C3 5.11299 3 6.00866 3 7.8V8M7 20H6.8C5.00866 20 4.11299 20 3.5565 19.4435C3 18.887 3 17.9913 3 16.2V16" stroke="#ff0" stroke-width="2" stroke-linecap="round"></path> </g></svg>
                    </a>
                  
                  </div>
                  </td>
              </tr>
              <?php
	}
		?>      
          </tbody>
         
      </table>

      </div>


      
      <div class="col-side-two hide-desktop show-tab" style="margin-left: 0;">
      <div class="col-side-one-item item-three" style="padding: 10px;">
        <div class="head-title" style="border-bottom: none;display: flex;">
          <h5 class="color-black title-table">
            Blood Banks Records
          </h5>
          </div>
    <div class="modal-body col-32">
    <?php
$sel=mysqli_query($conn,"select * FROM bloodbanks INNER JOIN users ON users.userID = bloodbanks.BID");
while($row=mysqli_fetch_assoc($sel))

{
  $VID = $row['BID'];
  $profileImage = $row["profilePic"];

   // Check if the user has a custom profile image
   if (!empty($profileImage)) {
    // User has a custom profile image
    $imageUrl = "../img/uploads/$profileImage";
} else {
    // User does not have a custom profile image, use default
    $imageUrl = "../img/uploads/hospital.png";
} 

		?> 
      <div class="modal-icon">
        <a href="#" id="myBtn">
          <div class="icon-details">
           <div class="icon">
            <img src="../img/menu-icon/camp.png" alt="">
           </div>
          <div class="message-body-notification camp-title" >
            <div class="head-divide">
              <div class="dive-one" style="width: 100%;">
                <h5><?= $row['fullname'];?></h5>
              </div>
            </div>
            
            <p style="margin-top: -5px;"><?= $row['phoneCode'];?> <?= $row['tel'];?></p>
          </div>    
          </div>
          </a> 
      </div>
      <?php
	}
		?> 
    </div>
      </div>
      </div>
    </div>
        <!--pop-up-->
    <!-- The Modal 1 Account-->
<div id="myModal" class="modal model-table">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
    </div>
    <center>
      <div class="model-profile">
        <img src="../img/menu-icon/question.png" alt="">
      </div>
    </center>
    
    <div class="modal-body">
      <h3>Are you sure you want to delete it?</h3>
      <p>This will be deleted permanently. You cannot undo this action</p>
      <div class="modal-icon" style="padding-top: 0px;">
        <div class="col-model-btn">
          <div class="model-btn">
            <a href="">Cancel</a>
          </div>
          <div class="model-btn model-btn-2">
            <a href="">Delete</a>
          </div>
        </div>
          
      </div>
    
    </div>

  </div>
  </section>
  <!--FABS-->
  <div class="fabs">
               <a href="addCampRequest.php<?php echo"?id=".$id."";?>">
               <div style="font-size: 30px;margin-top:-7px">+</div>
               </a>
            </div>
</div>
</div>

<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.7.0.js'></script>

<script src="../js/popUp-profile.js"></script>
<script src="../js/greeting.js"></script>

<script src="../js/popUp-notification.js"></script>
<script src="../js/popUp-profilePhone.js"></script>
<script src="../js/autoSlides.js"></script>
<script src="../js/sidebar.js"></script>
<script src="../js/sortingTable.js"></script>
<script src="../js/shareApp.js"></script>
<?php
  // Close the database connection
mysqli_close($conn);
  ?>
</body>
</html>