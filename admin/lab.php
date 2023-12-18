<?php  
include('../include/dbconfig.php');
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
<!-- Data Table CSS -->
<link rel='stylesheet' href='https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
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
      <a href="#news" class="topAction-mobile">
        <span class="back-btn"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#fff" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#fff" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg></span> 
      </a>
      <a href="#news" class="topAction-mobile">
     <span class="topDetails">Lab Technicians Information</span> 
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
    <div class="col-topbar show-tab">
      <div class="topnav">
        <a href="#news" class="show-tab topAction" style="margin-top: -5px;">
          <span class="back-btn"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg></span> 
        </a>
        <a href="#news" class="show-tab topAction" style="margin-top: -10px;">
       <span class="topDetails">Lab Technicians Information</span> 
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
                  <th>Enrollment ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone No.</th>
                  <th>Address</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
          <?php
	$sel=mysqli_query($conn,"select * FROM labtechnician INNER JOIN users ON users.userID = labtechnician.LTID");
	while($row=mysqli_fetch_assoc($sel))
  
	{
    $LTID = $row['LTID'];
    $profileImage = $row["profilePic"];

   // Check if the user has a custom profile image
   if (!empty($profileImage)) {
    // User has a custom profile image
    $imageUrl = "../img/uploads/$profileImage";
} else {
    // User does not have a custom profile image, use default
    $imageUrl = "../img/uploads/user2.png";
} 

		?> 
            
              <tr>
                  <td><?= $row['LTID'];?> </td>
                  <td><?= $row['fname'];?> <?= $row['sname'];?></td>
                  <td><?= $row['email'];?></td>
                  <td><?= $row['phoneCode'];?> <?= $row['tel'];?></td>
                  <td><?= $row['country'];?>, <?= $row['region'];?>, <?= $row['district'];?> <?= $row['plotNo'];?></td>
                  <td>
                    <div class="actionCol">
                    <a href="#" class="actionIcon">
                      <svg viewBox="-7.68 -7.68 39.36 39.36" width="30px" height="30px" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-7.68" y="-7.68" width="39.36" height="39.36" rx="19.68" fill="#888" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="1" stroke="#ff0" stroke-width="2"></circle> <path d="M18.2265 11.3805C18.3552 11.634 18.4195 11.7607 18.4195 12C18.4195 12.2393 18.3552 12.366 18.2265 12.6195C17.6001 13.8533 15.812 16.5 12 16.5C8.18799 16.5 6.39992 13.8533 5.77348 12.6195C5.64481 12.366 5.58048 12.2393 5.58048 12C5.58048 11.7607 5.64481 11.634 5.77348 11.3805C6.39992 10.1467 8.18799 7.5 12 7.5C15.812 7.5 17.6001 10.1467 18.2265 11.3805Z" stroke="#ff0" stroke-width="2"></path> <path d="M17 4H17.2C18.9913 4 19.887 4 20.4435 4.5565C21 5.11299 21 6.00866 21 7.8V8M17 20H17.2C18.9913 20 19.887 20 20.4435 19.4435C21 18.887 21 17.9913 21 16.2V16M7 4H6.8C5.00866 4 4.11299 4 3.5565 4.5565C3 5.11299 3 6.00866 3 7.8V8M7 20H6.8C5.00866 20 4.11299 20 3.5565 19.4435C3 18.887 3 17.9913 3 16.2V16" stroke="#ff0" stroke-width="2" stroke-linecap="round"></path> </g></svg>
                    </a>
                    <a href="#" class="actionIcon" id="myBtn">
                      <svg viewBox="-7.68 -7.68 39.36 39.36" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-7.68" y="-7.68" width="39.36" height="39.36" rx="19.68" fill="#0fa320" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="#ff0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="#ff0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </a>
                    <a href="#" class="actionIcon" id="myBtn">
                      <svg viewBox="-5.28 -5.28 34.56 34.56" width="30px" height="30px" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-5.28" y="-5.28" width="34.56" height="34.56" rx="17.28" fill="#f00" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#fff000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 11V17" stroke="#fff000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4 7H20" stroke="#fff000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#fff000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#fff000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
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
            Admin Records
          </h5>
          </div>
    <div class="modal-body col-32">
    <?php
	$sel=mysqli_query($conn,"select * FROM labtechnician INNER JOIN users ON users.userID = labtechnician.LTID");
	while($row=mysqli_fetch_assoc($sel))
  
	{
    $LTID = $row['LTID'];
    $profileImage = $row["profilePic"];

   // Check if the user has a custom profile image
   if (!empty($profileImage)) {
    // User has a custom profile image
    $imageUrl = "../img/uploads/$profileImage";
} else {
    // User does not have a custom profile image, use default
    $imageUrl = "../img/uploads/user2.png";
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
              <div class="dive-one">
                <h5 class="ellipsis"><?= $row['fname'];?> <?= $row['sname'];?></h5>
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
<script src="../js/shareApp.js"></script>
<?php
  // Close the database connection
mysqli_close($conn);
  ?>
</body>
</html>